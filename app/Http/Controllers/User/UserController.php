<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
      
        return view('welcome');
    }
    public function create()
    {
      
        return view('user/add');
    }

    public function index()
    {  $users = User::all();
        return view('user/index',compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function loginCheck(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validate->passes())
        {
            $user = User::where('email',$request->email)->first();
            if($user)
            {
    
                if(!Hash::check($request->password,$user->password))
                {   
                    return back()->with('error','Wrong Password!');
                }
               
               
                session()->put('user',$user);

            
                return redirect('/user/dashboard')->with('msg','User Login succesfully!');
            }
            else{
                return back()->with('error','Email No  found!');
            }
        }
        else{
            return back()->withErrors($validate)->withInput();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function user_dashboard(Request $request)
    {
        return view('dashboard');
    }

    public function logout()
    {
        if(session()->has('user'))
        {
            session()->remove('user');
        }
        else{
            return back();
        }
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function store(Request $request)
    {
        // echo"<pre>";
        // print_r($request->all());
        // exit;
       $validator = Validator::make($request->all(),[
        'first_name'=>'required',
        'last_name'=>'required',
        'email' => 'required|email|unique:users|string',
        'mobile' => 'required',
        'password' => 'required|string',
        'confirm_password' => 'required|string',
        
       ]);

       if($validator->passes())
       {


        if($request->confirm_password == $request->password)
        {

           

        $user = new User;

        $user->password = Hash::make($request->password);

        $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;

            $user->save();

            $request->session()->flash('msg','Add New User Successfully.');
            return redirect('/user');

        }
        else{
            return back()->with('notmatch','Password is not matching');
        }




    }
    else{
        return back()->withErrors($validator)->withInput();
    }


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
