<?php

namespace App\Http\Controllers;


use App\Models\tblplaces;
use App\Models\tblusers;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Validator;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
                return redirect()->route('index');
            }
    
                return view('includes/signin');
    }

    public function signin()
    {
        if(Auth::check()) {
            return redirect()->route('index');
        }

            return view('includes/signin');

    }
    

    public function register()
    {
        
        // $data['data_place'] = tblplaces::all();
        return view('includes/register');
    }

    public function store(Request $request)
    {
        // Validate the request...
        

        $register = new user;

        $register->fname = $request->fname;
        $register->mnumber = $request->mnumber;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $register->RegDate = date("Y/m/d");
        $register->UpdationDate = date("Y/m/d");

        $register->save();
        
        auth()->login($register);
        return redirect('/index');
    }


    public function login(Request $request)
    {
    
        
        $messages = [

            'email.required' => 'Please fill in the email',
            'email.email' => 'this email is not valid.',
            'password.required' => 'Please fill in the password',
            'password.string' => 'Password needs to be a string'

        ];


        $validator = Validator::make($request->all(),$messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors ($validator)->withInput ($request->all);
        }

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::hasUser()) { // true sekalian session field di-users nanti-bisa dipanggil via Auth
        //Login Success
            return redirect('/index');
        }else {// false
        //Login Fail
        return back()->with('loginError', 'Incorrect credentials, please try again.');
        }

       
    }
     
    public function logout()
    {
        Auth::logout();

        return redirect('/index');
    }

    public function profile()
    {
        
        
        return view('profile');
    }

    public function dashboard()
    {
        
        
        return view('dashboard');
    }

    public function bookmarks()
    {
        
        
        return view('bookmarks');
    }

    public function reviewhome()
    {
        
        
        return view('reviewhome');
    }

    public function admin()// not fixed
    {
        
        
        return view('admin/admin_dashboard');
    }

    public function manage() //not fixed
    {
        
        
        return view('admin/admin_manageusers');
    }
}

    