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
                return redirect('/index');
            }
    
                return view('includes/signin');
    }

    public function signin()
    {
        if(Auth::check()) {
                return redirect('/index');
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

  
    public function manage_user() 
    {
        $users = DB::table('users')->paginate(5);
       

        return view('admin.admin_manageusers', ['user' => $users]);
        
    }

    public function edit_user($id) 
    {
       
        $users = DB::table('users')->where('user_id',$id)->get();

        return view('/admin/admin_edit_user',['user' => $users]);
        
    }


    public function update_user(Request $request)
    {

	DB::table('users')->where('user_id',$request->id)->update([
		'fname' => $request->fname,
		'email' => $request->email,
		'mnumber' => $request->mnumber,
		'role' => $request->role,
	]);
	
	return redirect('/manage_user');
    }

    public function delete_user($id) 
    {
        
        $deleted = DB::table('users')->where('user_id', '=', $id)->delete();

        return redirect('/manage_user');
        
    }

    public function manage_place() 
    {
        $places = DB::table('tblplaces')->paginate(5);
       

        return view('admin.admin_manageplaces', ['place' => $places]);
        
        
    }

    public function store_place(Request $request)
    {
        // Validate the request...
        

        $add = new user;

        $add->place_name = $request->place_name;
        $add->place_description = $request->place_description;
        $add->place_ratings = $request->place_ratings;
        // $add->place_picture = Hash::make($request->password);
        // $add->page_viewer_count = date("Y/m/d");
       

        $add->save();
        
        // auth()->login($add);
        return redirect('/admin');
    }
}



    