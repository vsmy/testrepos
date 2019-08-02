<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
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

