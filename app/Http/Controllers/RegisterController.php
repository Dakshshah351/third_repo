<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $data = Register::all();
        return view('register1', compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        Register::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/register1');
    }
    public function destroy($id)
    {
        Register::where('id',$id)->delete();
        return redirect('/register1');
    }
    public function edit($id)
    {
        $user = Register::where('id',$id)->first();
        return view('update',compact('user'));
    }
    public function update(Request $request, $id)
    {
        Register::where('id',$id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
        ]);
        // Register::where('id',$id)->ugeeggeEEEpdate($request->all());
        return redirect('/register1');
    }
}
