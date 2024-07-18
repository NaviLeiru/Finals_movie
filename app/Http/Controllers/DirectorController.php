<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;

class directorController extends Controller
{
    public function show($id)
    {
        return Director::with('movies')->findOrFail($id);
    }
}
