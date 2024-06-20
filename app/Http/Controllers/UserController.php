<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
     public function store(Request $request)
     {
          $formFields = $request->validate([
               'name' => ['required', 'min:3'],
               'email' => ['required', 'email', Rule::unique('users', 'email')],
               'password' => 'required|confirmed|min:6'
          ]);
          //hash password
          $formFields['password'] = bcrypt(($formFields['password']));

          $user = User::create($formFields);
          return redirect('/')->with('message', "Your account has been created");
     }
     function register()
     {
          dd(auth()->user()->role == 's'); {
               return View('register');
          }
          return abort(403);
     }
     function update(UserRequest $request, User $user)
     {
          $user->name = $request->input('name');
          $user->email = $request->input('email');
          $user->password = bcrypt($request->input('password'));
          $user->save();
          return redirect('/')->with('success', 'User created successfully');
     }

     function delete(User $user)
     {
          $user->delete();
          return redirect('/')->with('success', 'User deleted successfully');
     }
}
