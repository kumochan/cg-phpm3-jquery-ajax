<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function __construct()
    {

    }

    public function test()
    {
        return 6;
    }

    public function index()
    {
        $customers = DB::table('customers')->get();
        $result = DB::table('customers')->get()->count();
        return $result;
    }

    public function show($id){
        $result = DB::table('customers')->where('id','=',$id)->get();
        return $result;
    }


}
