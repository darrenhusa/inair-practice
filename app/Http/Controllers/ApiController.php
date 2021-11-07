<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getStooges()
    {
        return ['Moe', 'Larry', 'Curly', 'Shemp'];
    }
}
