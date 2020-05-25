<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $is_image = Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg');
        return view('users.index', ['users' => $users, 'is_image' => $is_image]);
    }

    public function show(User $user)
    {

        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->profile = $request->profile;
        $user->profile_image = $request->profile_image->getClientOriginalName();
        $user->created_remote_ip = $request->created_remote_ip;
        $user->admin_flag = $request->admin_flag;
        $user->save();
        $request->profile_image->storeAs('public/profile_images', $user->id . '.jpg');
        return redirect('users/' . $user->id);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->save();
        return redirect('users/' . $user->id);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users');
    }
}
