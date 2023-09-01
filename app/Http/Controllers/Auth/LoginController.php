<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Socialite;
// use App\User;
// use Auth;

class LoginController extends Controller
{
    //
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function credentials(Request $request){
    //     return ['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'admin'];
    // }
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


    
  public function googleRedirect(){
      return Socialite::driver('google')->redirect();
  }

  public function loginWithGoogle()
  {
      try {
          $user = Socialite::driver('google')->user();
          $isUser = User::where('provider_id', $user->id)->first();

          if($isUser){
            Auth::login($isUser);
            return redirect('/home');
          }else{
            $createUser = User::create([
              'name' => $user->name,
              'email' => $user->email,
              'provider_id' => $user->id,
              'password' => encrypt('admin@122')
            ]);
            
            Auth::login($createUser);
            return redirect()->route('home');
          }

      }catch(Exception $exception) {
      dd($exception->getMessage());
    }

      
  }
    
    // public function _registerOrLoginUser($data){
    //     $user = User::where('email',$data->email)->first();
    //       if(!$user){
    //          $user = new User();
    //          $user->name = $data->name;
    //          $user->email = $data->email;
    //          $user->provider_id = $data->id;
    //          $user->provider = $data->provider;
    //          $user->save();
    //       }
    //     Auth::login($user);
    //     }
        

    //Google Login
    // public function redirectToGoogle(){
    // return Socialite::driver('google')->redirect();
    // }
    
    //Google callback  
    // public function handleGoogleCallback(){
    
    // $user = Socialite::driver('google')->user();
    
    //   $this->_registerorLoginUser($user);
    //   return redirect()->route('home');
    // }
    
    //Facebook Login
    // public function redirectToFacebook(){
    // return Socialite::driver('facebook')->redirect();
    // }
    
    //facebook callback  
    // public function handleFacebookCallback(){
    
    // $user = Socialite::driver('facebook')->user();
    
    //   $this->_registerorLoginUser($user);
    //   return redirect()->route('home');
    // }

    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('provider_id', $user->id)->first();

            if($isUser){
              Auth::login($isUser);
              return redirect()->route('home');
            }else{
              $createUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'provider_id' => $user->id,
                'password' => encrypt('admin@123')
              ]);
              
              Auth::login($createUser);
              return redirect()->route('home');
            }

        }catch(Exception $exception) {
        dd($exception->getMessage());
      }

        
    }

 


    
    // Github Login
    // public function redirectToGithub(){
    // return Socialite::driver('github')->redirect();
    // }
    
    // // github callback  
    // public function handleGithubCallback(){
     
    // $user = Socialite::driver('github')->user();
    
    //   $this->_registerorLoginUser($user);
    //   return redirect()->route('home');
    // }

    public function githubRedirect(){
      return Socialite::driver('github')->redirect();
  }

  public function loginWithGithub()
  {
      try {
          $user = Socialite::driver('github')->user();
          $isUser = User::where('provider_id', $user->id)->first();

          if($isUser){
            Auth::login($isUser);
            return redirect('/home');
          }else{
            $createUser = User::create([
              'name' => $user->name,
              'email' => $user->email,
              'provider_id' => $user->id,
              'password' => encrypt('admin@124')
            ]);
            
            Auth::login($createUser);
            return redirect()->route('home');
          }

      }catch(Exception $exception) {
      dd($exception->getMessage());
    }

      
  }
 
}


