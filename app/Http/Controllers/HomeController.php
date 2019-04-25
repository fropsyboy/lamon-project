<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'title' => 'La Mon Yoghurt'
        ];
        return view('home', $data);
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        $data = [
            'title' => 'About us'
        ];
        return view('about', $data);
    }

    /**
     * Show the application blog.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('blog', $data);
    }

    /**
     * Show the application cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cart()
    {
        $data = [
            'title' => 'Cart'
        ];
        return view('cart', $data);
    }

    /**
     * Show the application contact.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        $data = [
            'title' => 'Find/Contact Us'
        ];
        return view('contact', $data);
    }

    /**
     * Show the application menu.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function menu()
    {
        $data = [
            'title' => 'Recipes'
        ];
        return view('menu', $data);
    }

    /**
     * Show the application single blog.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleBlog()
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('single_blog', $data);
    }
}
