<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   function store(UserRequest $request)  {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->route('index')->with('success', 'User created successfully');
   }
   function update(UserRequest $request ,User $user){
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->route('index')->with('success', 'User created successfully');
   }

   function delete(User $user)  {
            $user->delete();
            return redirect()->route('/')->with('success', 'User deleted successfully');
   }

   
}
