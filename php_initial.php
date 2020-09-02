<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class PHP_initial extends Controller
{

    public function getJson(){
        return Response::json([
            'greeting' => 'Welcome  to the  PHP Back-End',
            'team' => 'of Team 258']);
    }
}
