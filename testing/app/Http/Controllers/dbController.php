<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;

class dbController extends Controller
{
    function index(){
        return DB::select("select * from employees");
    }

    function getCustomer(){
        // return DB::select("select * from customers");
        return customer::all();
    }
}
