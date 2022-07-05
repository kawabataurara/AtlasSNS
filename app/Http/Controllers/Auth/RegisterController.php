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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'username' => ['required', 'string', 'min:2', 'max:12'],
    //         'mail' => ['required', 'string', 'email', 'min:5', 'max:40', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8',  'max:20', 'confirmed', 'alpha_num'],
    //     ]);
    // }

    // バリデーションルールの記述7/3

    public function post(Request $request)
    {
        $rules = [
            'username' => 'required | string | min:2 | max:12',
            'mail' => 'required | string | email | min:5 | max:40 | unique:users',
            'password' => 'required | string | min:8 |  max:20 | confirmed | alpha_num',
        ];

        // $massage = [
        //     'username' => [
        //     'required' => '名前を入力してください',
        //     'min:2' => '名前を2文字以上で入力してください',
        //     'max:12' => '名前を40文字以下で入力してください',
        //     ],
        //     'mail' => [
        //     'required' => 'メールアドレスを入力してください',
        //     'email' => '正式なメールアドレスを入力してください',
        //     ],

        //     'password' => [
        //     'required' => 'パスワードを入力してください',
        //     'alpha_num' => '8〜20文字の半角英数字で入力してください',
        //     ],
        // ];

        // $validator = Validator::make($request->all(), $rules, $massage);
        $validator = Validator::make($request->all(), $rules);

        // バリデーションが失敗したら7/3

        if ($validator->fails()) {
        return redirect('/register')
            ->withErrors($validator)
           -> withInput();
        } else {
            return view('auth.added',['msg' =>'登録いたしました']);
        }

    }

    // 7/3ここまで記入。
    // 実行したけどエラーメッセージとかなんもでねえ！！
    // バリデーション機能は働いている...?多分



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


    // public function registerForm(){
    //     return view("auth.register");
    // }

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
