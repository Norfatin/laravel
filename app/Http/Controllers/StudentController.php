<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('create');
    }

    public function read(){
        return view('read');
    }

    public function update(){
        return view('update');
    }

    public function delete(){
        return view('delete');
    }
}
