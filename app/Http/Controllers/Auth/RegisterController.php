<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    // バリデーションルールの記述7/3

    public function post(Request $request)
    {
        $rules = [
            'username' => 'required | string | min:2 | max:12',
            'mail' => 'required | string | email | min:5 | max:40 | unique:users,mail',
            'password' => 'required | string | min:8 |  max:20 | confirmed | alpha_num',
            'password_confirmation' => 'required | same:password',
        ];

        //7/5メールアドレスがもうすでにあるやつでも登録できてしまう→確認したらデータベースに保存されなくなっていた...

        $validator = Validator::make($request->all(), $rules);

        // バリデーションが失敗したら7/3

        if ($validator->fails()) {
        return redirect('/register')
            ->withErrors($validator)
           -> withInput();
        } else {
            return view('auth.added',['msg' =>'登録完了いたしました']);
        }

    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();

            $this->create($data);
            return redirect('added');
        }
        return view('auth.register');
    }

    public function added(){
        return view('auth.added');
    }
}
