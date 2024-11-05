<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'regex:/^.{5}$/'],
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Save image to the public directory
    $imagePath = $request->file('image')->store('uploads', 'public');

    // Redirect to contact page
    return redirect('/contact')->with('success', 'تم إنشاء المستخدم بنجاح!');
    }

    
}
