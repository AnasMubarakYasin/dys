<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Youth;

class Administrator extends Controller
{
  public function dashboard()
  {
    $youth = Youth::all()->count();
    return view('pages.administrator.dashboard', ['yount' => $youth]);
  }
}
