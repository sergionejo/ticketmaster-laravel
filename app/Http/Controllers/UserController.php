<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

use App\Service\UserService;
use App\User;

class UserController extends Controller
{
	public function getUpdateForm($id) {

		$u = User::findOrFail($id);

		return view('edit_user', ['user' => $u]);
	}

	public function updateForm(Request $request, $id) {
		User::editUser($request->name, $request->surname, $request->bdate, 
			$request->country, $request->poblation, $request->password, 
			$request->email, $request->role, $id);

		return redirect()->action('UserController@getProfile');
	}

	public function getProfile() {
		$user = Auth::user();
		return view('user.profile', [
			'user' => $user,
			'nextTickets' => UserService::nextTickets($user->id)
		]);
	}

	public function createUserView() {
		return view('create_user');
	}

	public function createUser(Request $request) {
		User::createUserAdmin($request->name, $request->surname, $request->bdate, 
			$request->country, $request->poblation, $request->password, 
			$request->email, $request->role);

		return redirect()->action('HomeController@adminZone');
	}

	public function deleteUser($id) {
		User::deleteUser($id);

		return redirect()->action('HomeController@adminZone');
	}
}