<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $to_name = 'Admin Name';
        $to_email = "sergey.hural.test@gmail.com";
        $data = [
            "name" => "Data that should be",
            "body" => "In a mail"
        ];

        // emails.mail - view in resources/views. Should be smthg like "email/contact_us"
        Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject("Laravel Test Mail");
        });
        dd(123);
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function borough($region)
    {
            return view('borough',compact ('region' ));
    }
    public function policy() {
        return view('policy');
    }
    public function projects($project_num) {
        return view('projects', compact('project_num'));
    }
}

