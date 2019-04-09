<?php
namespace App\Http\Controllers;

class LoginController extends Controller {
    public function index() {
        return view('login.index'); // resources/views/login/index.blade.php
    }
}