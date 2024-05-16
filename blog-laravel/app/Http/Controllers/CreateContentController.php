<?php

namespace App\Http\Controllers;

use App\Models\createContent;
use Illuminate\Http\Request;

class CreateContentController extends Controller
{
    public function create()
    {
        request()->validate([
            'title' => 'required',
            'message' =>'required'
        ]);
        $title = request()->title;
        $message = request()->message;

        createContent::create([
            'title' => $title ,
            'message' => $message
        ]);

        return redirect('/');
    }
}
