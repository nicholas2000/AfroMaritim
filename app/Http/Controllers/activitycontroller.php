<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class activitycontroller extends Controller
{
    public function formact()
    {
        return view("form.formactivity");
    }
}
