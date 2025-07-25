<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // menambah baris ini

class UserController extends Controller
{
    public function index() {
        return User::all();
    }
}
