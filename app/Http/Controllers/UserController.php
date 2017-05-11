<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Yajra\Datatables\Datatables;
use App\User;

class UserController extends Controller
{
    //

      public function index()
    {
        return view('datatables');
    }
     public function data()
    {
        return Datatables::of(User::query())->make(true);
    }


}
