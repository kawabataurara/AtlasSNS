<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
        }

    public function search(){
        return view('users.search');
    }

    public function searchGet(Request $request){
        $keyword = $request->input('keyword');

        $query = User::query();

        if(!empty($keyword)) {
            $query->
            where('username', 'LIKE', "%{$keyword}%");
                // ->orWhere('author', 'LIKE', "%{$keyword}%");
        }

        $users = $query->get();

        return view('search', compact('users', 'keyword'));
}
}
