<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // index page
    public function index() {
        return view('site.index');
    }

    // about page
    public function about() {
        return view('site.about');
    }

    // services page
    public function services() {
        return view('site.services');
    }

    // blogs page
    public function blogs() {
        return view('site.blogs');
    }

    // contact us page
    public function contactUs() {
        return view('site.contact');
    }
}
