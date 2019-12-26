<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function store(){
        //if( )
        $role_id = User::create($this->validatedData());
        $user_id = User::create($this->validatedData());
        return redirect('admin/users/' . $user->id);
    }

    protected function validatedData() {
        return request()->validate([
            'id' => 'required',
        ]);
    }
}
