<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PublicController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getInstagram($quantity){
        $access_token = env('INSTAGRAM_ACCESS_TOKEN');
        $user_id = env('INSTAGRAM_USER_ID');
        $result = [];
        if ($access_token) {
            $count = (int)$quantity > 0 ? (int)$quantity : 6;

            $client = new \GuzzleHttp\Client();
            $res = $client->get("https://api.instagram.com/v1/users/$user_id/media/recent?access_token=$access_token&count=$count");
            $instagram_response = json_decode($res->getBody())->data;

            foreach ($instagram_response as $key => $post) {
                $result_post = (object)[
                    'image_url' => $post->images->standard_resolution->url,
                    'link' => $post->link,
                ];

                array_push($result, $result_post);
            }
        }
        return response()->json(['data' => $result],200);
    }
}

