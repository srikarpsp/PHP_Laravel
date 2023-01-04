<?php

namespace App\Http\Controllers;

use App\Models\homepage;
class HomepageController extends Controller
{
    public function index(){

        $description = homepage::all();
        return view('HomePage.Homepage', [ 'description' => $description]);

    }
}
