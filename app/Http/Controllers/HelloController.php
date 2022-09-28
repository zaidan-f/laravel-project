<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HelloController extends Controller
{
    public function showHelloWorld():View {
        $data = [
            'header' => 'Contoller Header',
            'description' => 'Controller Description'
            ];
        return view ('hello-world', ['controller_data'=>$data]);
    }
}
