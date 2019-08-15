<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class WPController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getPostBlog($type) {
        $client = new \GuzzleHttp\Client();
        $res = $client->get("http://13.48.98.79/wp-json/wp/v2/posts");
        $data = json_decode($res->getBody());
        return $data;
    }
}

