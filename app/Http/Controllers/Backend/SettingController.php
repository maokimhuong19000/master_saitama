<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting(){
        return view('backend.pages.Settings');
    }

    public function gsetting(){
        return view('backend.pages.SettingsGeneral');
    }
}
