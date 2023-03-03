<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Arr;

class UserController extends Controller
{
  public function login(StoreUserRequest $request)
  {
    // dd($request->all());
    $data = $request->validated();
    if (auth()->attempt(Arr::only($data, ['name', 'password']), isset($data['remember']))) {
      session()->regenerate();
      return to_route('web.administrator');
    } else {
      return back()->withErrors(['name' => ['username mismatch'], 'password' => ['password mismatch']]);
    }
  }

  public function logout()
  {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();

    return to_route('/');
  }
}
