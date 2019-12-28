<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{

    protected $role = 2 ;

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $users = DB::table('users')
        ->join('role_user','users.id','=','role_user.user_id')
        ->select('users.*', 'role_user.role_id')
        ->get();
        return view('admins.panel', compact('users'));
    }
}
