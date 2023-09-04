<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    //

    public function login (){
        return view('login');
    }


    public function register (){
        return view('register');
    }


    public function store (Request $request){
        $data = $request->all();

        $request->validate([
            'first_name' => "required|min:2",
            'last_name'=>"required|min:2",
            'email'=> array(
                "required",
                "unique:users",
                "regex:/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/",
            ),
            'password'=> array(
            "required",
            "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&#^_;:,])[A-Za-z\d@$!%?&#^_;:,]{8,}$/",
            "confirmed:password_confirmation"
            )
        ]);

            $save = User::create([
            "first_name"=>$data['first_name'],
            "last_name"=>$data['last_name'],
            "email"=>$data['email'],
            "birthday"=>$data['birthday'],
            "password"=>Hash::make($data['password']) 
            
        ]); 
 
        //creation de l'url d'activation
        $url = URL::temporarySignedRoute(
            'verifyEmail', now()->addMinutes(30),['email'=>$data['email']]
        );

        //envoie de l'url generer par mail pour activation du compte
        //send(view, params, callback)
        Mail::send('mail', ['url'=>$url, 'nom'=>$data['first_name'].''.$data['last_name']],function ($message) use($data){
            $config = config('mail');
            $name = $data['first_name'].''.$data['last_name'];
            $message->subject("Registration verification !")
            ->from($config ['from']['address']) 
            ->to($data['email'], $name);
        });

        return redirect()->back()->with('message', "Veuillez vérifer votre mail pour activer votre compte d'utilisateur");
    }

    //verification de l'email pour création

    public function verify(Request $request, $email){
        $user = User::where('email', $email)->first();
        if(!$user){
            abort(404);
        }

        if(!$request->hasValidSignature()){
            abort(404);
        }

        $user->update([
            'email_verified_at' => now(),
            'email_verified' => true
        ]);

        return redirect()->route('login')->with('message', 'compte activé avec succès');

    }  

    public function authentification(Request $request){

        $user = Auth::attempt([
            "email"=>$request->email, 
            "password"=>$request->password,
            "email_verified"=>true
        ]);
        if($user){
            return redirect()->route('index');

        }
      
        
        return redirect()->back()->with("error", "combinaison email");
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


}
