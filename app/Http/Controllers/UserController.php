<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required | string | max:255',
            'email' => 'required | string | email | max:255 | unique:users',
            'password' => 'required | string | min:8 | confirmed',
            'image' => 'nullable | file | mimes:jpeg,png,pdf,docx | max:2000 | dimensions:min_width=100,min_height=100,max_width=300,max_height=300',
            'introduction' => 'nullable | string | max:255',
        ]);

        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        //以下に登録処理を記述（Eloquentモデル）
        $user = new User();
        $user->name = $request->input('name');
        if ($request->hasFile('image')) {
            $user->image = $request->file('image')->store('users', 'public');
        }
        $user->email = $request->input('email');
        $user->password = Hash::make($user->password); // 'draft' もしくは 'publish'
        $user->save();

        return redirect()->route('login')->with('success', 'ユーザが保存されました');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
