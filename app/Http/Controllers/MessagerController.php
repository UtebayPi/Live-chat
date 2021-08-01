<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MyEvent;

class MessagerController extends Controller
{
    public function index(){
        return view('index');
    }
    public function site(){
        return view('site');
    }
    public function about(){
        return view('about');
    }
    public function sender(){
        $data = request()->validate(['author'=>'','text'=>'']);
    event(new MyEvent($data['text'], $data['author']));
    }
}
