<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        foreach($users as $user){
            $user->permission_trans = config('permissionRole')[$user->permission];
        }
        //print_r($users);exit;
        return view('template.user.permission.index', ['users' => $users]);
    }

    public function update(Request $request, $user_id) {
        User::where('id', '=', $user_id)
            ->update(['permission' => $request->permission]);
        return redirect('permission');
    }
}
