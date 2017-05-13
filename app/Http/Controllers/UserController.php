<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Yajra\Datatables\Datatables;
use App\User;

class UserController extends Controller
{
    //

      public function getIndex()
    {
        return view('datatables');
    }
     public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }


}
