<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request) {
        $request->photo->storeAs('/public', 'file.jpg');
    }
}
