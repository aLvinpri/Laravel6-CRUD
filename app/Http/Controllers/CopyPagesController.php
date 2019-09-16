<?php

namespace App\Http\Controllers;

// Connect to Controller Laravel
use App\Http\Controllers\Controller;
// Connect to Model User
use App\User;

class CopyPagesController extends Controller
{
  /**
   * Show the profile for the given user.
   *
   * @param  int  $id
   * @return View
   */

  public function home()
  {
    return view('index');
  }

  public function about()
  {
    return view('about', ['nama' => 'ALFIN PRIANDI']);
  }
}
