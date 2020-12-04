<?php

namespace Tests\Unit;

use App\Http\Controllers\EmployeeController;

//use Illuminate\Support\Facades\DB;
use DB;
use Illuminate\Contracts\Console\Kernel;

use PHPUnit\Framework\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $employee = new EmployeeController();
        $result = $employee->index();
        $expected = 6;
        $this->assertEquals(6,$result);
    }

//    public function testShow()
//    {
//        $employee = new EmployeeController();
//        $result = DB::table('customers')->where('id','=',5)->get();
//        $expected = $employee->show(5);
//        $this->assertEquals($expected,$result);
//    }
}
