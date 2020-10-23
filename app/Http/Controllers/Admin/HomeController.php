<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // Adicionando a middleware de autenticação de usuário na minha controller
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.home');
    }
}
