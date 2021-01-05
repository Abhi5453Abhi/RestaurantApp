<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Restaurant;

class RestoController extends Controller
{
    //
    function test()
    {
        return view('home');
    }
    function list()
    {
        $data = Restaurant::all();
        return view('list',["data"=>$data]);
    }
    function add(Request $req)
    {
        $resto = new Restaurant;
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->review = $req->input('review');
        $resto->save();
        $req->session()->flash('status','Restaurant Submitted');
        return redirect('list');
    }
    function delete($id)
    {
        Restaurant::find($id)->delete();
        Session()->flash('status','Restaurant Deleted');
        return redirect('list');
    }
    function edit($id)
    {
        $data = Restaurant::find($id);
        return view('edit',['data' => $data]);
    }
    function update(Request $req)
    {
        $resto = Restaurant::find($req->input('i'));
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->review = $req->input('review');
        $resto->save();
        $req->session()->flash('status','Restaurant Submitted');
        return redirect('list');
    }
}
