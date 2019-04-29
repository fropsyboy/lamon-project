<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __contruct(){
        $this->middleware('auth');
        $this->middleware(['role:super-admin']);
    }

    public function index(){
        $data = [
            'title' => 'Admin Dashboard'
        ];
        return view('back.index',$data);
    }
}
