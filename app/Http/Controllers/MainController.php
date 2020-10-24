<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function test($value='')
    {
    	$students = array(
    		array('name' => 'Mg Mg', 'age' => 18),
    		array('name' => 'Su Su', 'age' => 20),

    	);
    	return view('test', ['students' => $students]);
    }
}
