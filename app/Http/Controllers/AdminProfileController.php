<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function adminProfile()
    {
        return view('admin.user.adminProfile');

}
}