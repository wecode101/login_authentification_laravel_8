<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {

        return view("home");

    }
}
