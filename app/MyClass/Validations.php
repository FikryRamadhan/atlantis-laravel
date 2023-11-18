<?php

namespace App\MyClass;

use App\Models\User;
use App\Rules\MatchOldPassword;

class Validations
{

	public static function loginValidate($request){
		$request->validate([
			'username' => 'required|exists:users,username',
		],[
			'username.required' => 'Username wajib diisi',
			'username.exists' => 'Username tidak ditemukan',
		]);
	}

	public static function validateImport($request){
		$request->validate([
			'file_excel' => 'required|file|mimes:xlsx,xls',
		], [
			'file_excel.required' => 'File excel wajib diisi',
			'file_excel.file' => 'Wajib bernilai file',
			'file_excel.mimes' => 'Hanya mendukung ekstensi .xlsx atau .xls',
		]);
	}

	public static function validateUser($request) {
		$request->validate([
			'name' => 'required',
			'role' => 'required',
			'email' => '|required|email|unique:users,email',
			'username' => 'required|unique:users,username',
			'password' => 'required|min:6',
			'confirmation' => 'required|same:password',
		],[
			'name.required' => 'Nama Wajib Di Isi',
			'role.required' => 'Role Wajib Diisi',
			'email.required' => 'Email Wajib Di Isi',
			'email.email' => 'Email Tidak valid',
			'email.unique' => 'Email Sudah Terdaftar',
			'username.required' => 'Username Wajib Di Isi',
			'username.unique' => 'Username Sudah Terdaftar',
			'password.required' => 'Password Wajib Di Isi',
			'confirmation.required' => 'Silahkan Konfirmasi Password',
			'confirmation.same' => 'Password Tidak Valid',
		]);
	}

	public static function updateUser($request, $user) {
		$request->validate([
			'name' => 'required',
			'role' => 'required',
			'email' => 'required|email|unique:users,email,'.$user->id,
			'username' => 'required|unique:users,username,'.$user->id,
		],[
			'name.required' => 'Nama Wajib Di Isi',
			'role.required' => 'Role Wajib Diisi',
			'email.required' => 'Email Wajib Di Isi',
			'email.unique' => 'Email Sudah Terdaftar',
			'email.email' => 'Email Tidak valid',
			'username.required' => 'Username Wajib Di Isi',
			'username.unique' => 'Username Sudah Terdaftar',
		]);
	}

	public static function validateProfile($request, $user){
		$request->validate([
			'name' => 'required',
			'username' => 'required|unique:users,username,'.$user->id,
			'email' => 'required|email|unique:users,email,'.$user->id,
		],[
			'name.required' => 'Nama Wajib Di Isi',
			'username.required' => 'Username Wajib Di Isi',
			'username.unique' => 'Username Sudah Terdaftar',
			'email.required' => 'Email Wajib Di Isi',
			'email.unique' => 'Email Sudah Terdaftar',
		]);
	}

	public static function validateChangePassword($request){
		$request->validate([
			'password' => ['required', new MatchOldPassword],
			'new_password' => 'required|min:6',
			'confirmation' => 'required|same:new_password',
		],[
			'password.required' => 'Password lama wajib diisi',
			'new_password.required' => 'Password baru wajib diisi',
			'new_password.min' => 'Password minimal 6 karakter',
			'confirmation.required' => 'Konfirmasi password wajib diisi',
			'confirmation.same' => 'Konfirmasi password tidak sama',
		]);
	}

}
