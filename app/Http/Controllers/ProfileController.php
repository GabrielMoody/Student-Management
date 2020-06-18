<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}

	public function index()
	{
		return view('profile.index');
	}

	// Update User Profile
	public function update(Request $request)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'image|mimes:jpg,jpeg,png,svg|max:2048',
		]);

		// Check if user add an image
		if (isset($request->image)) {
			$file = $request->file('image');
			$filename = time() . '_' . $file->getClientOriginalName();
			$file->move('img', $filename);
			$request->user()->update(['image' => $filename]);
		}

		$request->user()->update(['name' => $request->name]);

		return redirect('/profile')->with('status', 'Profile berhasil di ubah!');
	}

	public function changePasswordView()
	{
		return view('profile.change-password');
	}

	public function changePassword(Request $request)
	{
		$request->validate([
			'old_password' => ['required', new MatchOldPassword],
			'password' => 'required|min:8|confirmed'
		]);

		User::find(auth()->user()->id)->update(['password' => Hash::make($request->password)]);

		return redirect('/change-password')->with('status', 'Password berhasil di ubah!');
	}
}
