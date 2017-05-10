<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
    
        $menu = Menu::orderBy('id','desc')->paginate(8);
        $jenis=null;

        return view('customer.partial._home',compact('menu','jenis'));
    }

    public function menu($jenis){
        $menu=Menu::where('jenis',$jenis)->paginate(8);

        return view('customer.partial._home',compact('menu','jenis'));
    }

    public function show($id){
        $menu=Menu::findOrFail($id);
        return view('customer.partial._detil',compact('menu'));
    }
}
