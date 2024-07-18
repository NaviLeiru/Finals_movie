<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class actorController extends Controller
{
    public function show($id)
    {
        return Actor::with('movies')->findOrFail($id);
    }
}
