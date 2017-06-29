<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class LoginController extends Controller
{
    
    // login
    public function getLogin()
    {
        return view('home.login');
    }

    public function postDologin(Request $request)
    {
        // dd($request->only('username','password','_token'));
        $data = $request -> only('username','password');
        $res = DB::table('user') -> where('username',$data['username'])->first();
        // dd($res);
        if($res){
            if(Hash::check($data['password'],$res['password'])){
                session('id',$res['uid']);
                
                return redirect('/home/index/index');
            }
        }else{
            exit;
            return back()->with('error','帐号或密码不正确');
        }

    }

    public function getReg()
    {

        return view('home.reg');
    }

    public function postInsert(Request $request)
    {
        if($request->get('code')!=session('code')){
            // echo 1;
            return back()->with('error','验证友错误');
        }

        // dd($request->only('name','password','password2'));
        $this -> validate($request,[
            
            'username' => 'required|digits:11|unique:user,username',
            'name' => 'required',
            'password' => 'required|alpha_dash|',
            'password2' => 'required|same:password'
        ],[
            'username.required'=>'手机号错误',
            'username.digits'=>'手机号必须是11位数字',
            'username.unique'=>'手机号唯一',
            'name.required'=>'呢称必填',
            'password.alpha_dash'=>'密码格式不正确',
            'password.required'=>'密码必填',
            'password2.same'=>'两次密码不一致'
        ]);

        $data = $request -> only('username','name','password');
        $data['password'] = Hash::make($data['password']);
        $data['regtime'] = time();
        $res = DB::table('user')->insert($data);

        if($res){

            return redirect('/home/login/login','注册成功');
        }else{
            return back() -> with('error','注册失败');
        }
    }


}
