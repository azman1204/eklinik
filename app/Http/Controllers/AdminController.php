<?php
namespace App\Http\Controllers;

class AdminController extends Controller {
    // list senarai parameter yg. ada
    public function index() {
        return view('admin.index'); 
    }

    // list senarai zone
    public function zone() {
        return view('admin.zone'); 
    }

    // show zone form
    public function zoneform() {
        return view('admin.zoneform'); 
    }

    // list senarai had tuntutan
    public function claim() {
        return view('admin.claim'); 
    }
}