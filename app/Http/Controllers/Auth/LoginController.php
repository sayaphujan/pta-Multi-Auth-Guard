<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Owner;
use App\Models\Officer;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('main.login');
    }

    /*public function login(Request $request){

            $uname = $request->name;
            $password = $request->password;
        
        
        $check = User::where('name',$uname)->first();

        if ( !$check ) {
            return redirect('/masuk/')->withError(__('Username tidak terdaftar.'));
        }

        if ($password != $check->plain_password)  {
            return redirect('/masuk/')->withError(__('Password tidak sesuai'));
        }

        if(auth()->attempt(array('name' => $request->name, 'password' => $request->password)))
        {
            if (auth()->user()->level >0) {
               $request->session()->put('level',auth()->user()->level);
                    return redirect()->route('home');
            }else{
                $this->guard()->logout();
 
                    $request->session()->flush();
             
                    $request->session()->regenerate();
                    
                    return redirect($url)->withError(__('Maaf, Anda tidak dikenal'));
    		}
        }else{
            return redirect('/masuk/')->withError(__('Maaf, Anda tidak terdaftar.'));
        }
        
    }*/

    public function login(Request $request){
        
        $username = $request->name;
        $password = $request->password;
        $data = array();

        $checkU = User::select('*')->where('name',$username)->where('plain_password',$password)->count();
        if($checkU == 0){
            $checkD = Officer::select('*')->where('name',$username)->where('plain_password',$password)->count();
            if($checkD == 0){
                $checkO = Owner::select('*')->where('name',$username)->where('plain_password',$password)->count();
                if($checkO == 0){
                    $checkA = Admin::select('*')->where('name',$username)->where('plain_password',$password)->count();
                    if($checkA == 0){

                            if (Auth::check()) {
                                $this->guard()->logout();            
                            } elseif (Auth::guard('admin')->check()) {
                                Auth::guard('admin')->logout();
                            } elseif (Auth::guard('user')->check()) {
                                Auth::guard('user')->logout();
                            } elseif (Auth::guard('owner')->check()) {
                                Auth::guard('owner')->logout();
                            } elseif (Auth::guard('officer')->check()) {
                                Auth::guard('officer')->logout();
                            } else {
                                $this->middleware('guest')->except('logout');
                            }
                     
                            $request->session()->flush();
                     
                            $request->session()->regenerate();
                        
                            return redirect('/masuk')->withError(__('Maaf, Username atau Password salah'));

                    }else{
                        if (Auth::guard('admin')->attempt(array('name' => $request->name, 'password' => $request->password))) {
                                // Authentication passed
                                $request->session()->put('level',auth('admin')->user()->level);
                                return redirect()->route('home');
                        }
                    }
                }else{
                     if (Auth::guard('owner')->attempt(array('name' => $request->name, 'password' => $request->password))) {
                                // Authentication passed
                                $request->session()->put('level',auth('owner')->user()->level);
                                return redirect()->route('home');
                        }
                }
            }else{
                 if (Auth::guard('officer')->attempt(array('name' => $request->name, 'password' => $request->password))) {
                                // Authentication passed
                                $request->session()->put('level',auth('officer')->user()->level);
                                return redirect()->route('home');
                        }
            }
        }else{
            if (Auth::guard('user')->attempt(array('name' => $request->name, 'password' => $request->password))) {
                                // Authentication passed
                                $request->session()->put('level',auth('user')->user()->level);
                                return redirect()->route('portal');
                        }
        }

    }
    
    /**
     * Log the user out of the application.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        if (Auth::check()) {
            $this->guard()->logout();            
        } elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        } elseif (Auth::guard('owner')->check()) {
            Auth::guard('owner')->logout();
        } elseif (Auth::guard('officer')->check()) {
            Auth::guard('officer')->logout();
        } else {
            $this->middleware('guest')->except('logout');
        }
 
        $request->session()->flush();
 
        $request->session()->regenerate();
 
        return redirect('/masuk/')
            ->withSuccess('Terimakasih.');
    }
}
