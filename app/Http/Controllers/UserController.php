<?php

namespace App\Http\Controllers;


use App\Models\tblplaces;
use App\Models\catagories;
use App\Models\user;
use App\Models\bookmarks;
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
                $data = DB::table('catagories')->get();
                $dataplace = DB::table('tblplaces')->get();
                
            }
                return view('includes/signin');
    }

    // public function search(Request $request)
    // {
    //     $search = $request->search;

    //     $dataplace = DB::table('tblplaces')->where('place_name','like',"%".$search."%");

    //     $data = DB::table('catagories')->where('Categories','like',"%".$search."%");
       
       
    //     return view('index', ['data' => $data], ['place' => $dataplace]);
        


    // }

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

    public function hotels()
    {
       
            $data = DB::table('catagories')->get();
            $dataplace = DB::table('tblplaces')
                ->where('intCatId', '=', 1)
                ->get();
            return view('index', ['data' => $data], ['place' => $dataplace]);

    }

    public function restaurants()
    {
       
            $data = DB::table('catagories')->get();
            $dataplace = DB::table('tblplaces')
                ->where('intCatId', '=', 2)
                ->get();
            return view('index', ['data' => $data], ['place' => $dataplace]);
   
    }

    public function landmarks()
    {
       
            $data = DB::table('catagories')->get();
            $dataplace = DB::table('tblplaces')
                ->where('intCatId', '=', 3)
                ->get();
            return view('index', ['data' => $data], ['place' => $dataplace]);
   
    }

    public function cities()
    {
       
            $data = DB::table('catagories')->get();
            $dataplace = DB::table('tblplaces')
                ->where('intCatId', '=', 5)
                ->get();
            return view('index', ['data' => $data], ['place' => $dataplace]);
   
    }

    
    public function trending()
    {
       
            $page_viewer_count = DB::table('catagories')->get();
            $data = DB::table('catagories')->get();
            $dataplace = DB::table('tblplaces')
                ->where('intCatId', '=', 5)
                ->get();
            return view('index', ['data' => $data], ['place' => $dataplace]);
   
    }

   

    
    public function dashboard()
    {
        
        
        return view('dashboard');
    }

    public function bookmarks()
    {
        $users = auth()->user()->user_id;
        $place =  DB::table('bookmarks')->where('user_id',$users)->get();
        
        return view('bookmarks',['place'=>$place]);
    }

    public function reviewhome($id)
    {
        $place = DB::table('tblplaces')->where('place_id', $id)->first();
        $comment = DB::table('comments')->where('place_id',$id)->get();
        $dbviewercount = $place->page_viewer_count;
        DB::table('tblplaces')->where('place_id',$id)->update([
            'page_viewer_count' => $dbviewercount + 1,
        ]);
        return view('places' , ['place' => $place, 'comments' => $comment] );
    }

    public function placedetails()
    {
        
        
        return view('placedetails');
    }

    public function reviewpost (Request $request) {
        $place_id = $request->place_id;
        $place = DB::table('tblplaces')->where('place_id', $place_id)->first();
        $dbrating = $place->place_ratings;
        $inputedstar = $request->input('star');
        $postedrating = $dbrating + $inputedstar;
        $posteduser = $place->total_user_reviews + 1;
        $total = $postedrating / $posteduser;
        $postedtotal = round($total);

        DB::table('tblplaces')->where('place_id',$place_id)->update([
            'place_ratings' => $postedrating,
            'total_user_reviews' => $posteduser,
            'total_place_rating' => $postedtotal
        ]);

        return redirect('/index');
    }

    public function addbookmark (Request $request) {
        $place_id = $request->place_id;
        $place_name = $request->place_name;
        $place_image = $request->place_image;
        $users = auth()->user()->user_id;


        DB::table('bookmarks')->insert(['place_id' => $place_id, 'user_id' => $users, 'place_name' => $place_name, 'place_image' => $place_image]);
        
        return redirect('/index');
    }

    public function addcomment (Request $request) {
        $place_id = $request->place_id;
        $comments = $request->comments;
        $users = auth()->user()->fname;


        DB::table('comments')->insert(['place_id' => $place_id, 'fname' => $users, 'review' => $comments]);
        
        return redirect('/index');
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

    if( $request -> id == ucwords(auth()->user()->user_id))
    {

    DB::table('users')->where('user_id',$request->id)->update([
        'fname' => $request->fname,
        'email' => $request->email,
        'mnumber' => $request->mnumber,
        'role' => $request->role,
        'password' => Hash::make($request->password),

        
       
    ]);

    return redirect('/profile');

    }

    else{

        DB::table('users')->where('user_id',$request->id)->update([
            'fname' => $request->fname,
            'email' => $request->email,
            'mnumber' => $request->mnumber,
            'role' => $request->role,

            
        ]);

        return redirect('/manage_user');

    } 


	
	
    }

    public function delete_user($id) 
    {
        
        $deleted = DB::table('users')->where('user_id', '=', $id)->delete();

        return redirect('/manage_user');
        
    }

    public function manage_place() 
    {
        $places = DB::table('tblplaces')
        ->join('catagories', 'tblplaces.intCatId', '=', 'catagories.intCatId')
        ->select('tblplaces.*', 'catagories.Categories')
        // ->get()
        ->paginate(5);
       

        return view('admin.admin_manageplaces', ['place' => $places]);
        
        
    }

    public function store_place(Request $request)
    {
        // Validate the request...
      
        $name = $request->file('place_image')->getClientOriginalName();  
        $path = $request->file('place_image')->store('public/images');
        $placeinfo = pathinfo($path)['basename'];

        $add = new tblplaces;

        $add->place_name = $request->place_name;
        $add->place_description = $request->place_description;
        $add->intCatId = $request->intCatId;
        $add->place_ratings = $request->place_ratings;
        $add->place_image = $placeinfo;
        $add->page_viewer_count = 1;

        $add->save();
        
       
        return redirect('/manage_place');
    }

    public function add_place()
    {
        
        // $data['data_place'] = tblplaces::all();
        return view('admin/admin_addplace');
    }

    public function delete_place($id)
    {
        $deleted = DB::table('tblplaces')->where('place_id', '=', $id)->delete();

        return redirect('/manage_place');
        
    }

    public function edit_place($id) 
    {
       
        $places = DB::table('tblplaces')->where('place_id',$id)->get();

        return view('/admin/admin_editplace',['place' => $places]);
        
    }

    public function update_place(Request $request)
    {

        $name = $request->file('place_image')->getClientOriginalName();  
        $path = $request->file('place_image')->store('public/images');
        $placeinfo = pathinfo($path)['basename'];

	DB::table('tblplaces')->where('place_id',$request->id)->update([
		'place_name' => $request->place_name,
		'place_description' => $request->place_description,
		'place_ratings' => $request->place_ratings,
        'intCatId' => $request->intCatId,
		'place_image' => $placeinfo,

	]);

	
	return redirect('/manage_place');
    }

    


    public function manage_category() 
    {
        $categories = DB::table('catagories')->paginate(5);
       

        return view('admin.admin_managecategory', ['category' => $categories]);
        
    }

    public function store_category(Request $request)
    {
        // Validate the request...
      
        $update = new catagories();

        $update->Categories = $request->Categories;
        $update->Icon = $request->Icon;
       
       

        $update->save();
        
       
        return redirect('/manage_category');
    }


    public function add_category()
    {
        
        // $data['data_place'] = tblplaces::all();
        return view('admin/admin_addcategory');
    }

    public function delete_category($id)
    {
        $deleted = DB::table('catagories')->where('intCatId', '=', $id)->delete();

        return redirect('/manage_category');
        
    }

    public function edit_category($id) 
    {
       
        $categories = DB::table('catagories')->where('intCatId',$id)->get();

        return view('/admin/admin_editcategory',['category' => $categories]);
        
    }

    public function update_category(Request $request)
    {

	    DB::table('catagories')->where('intCatId',$request->id)->update([
		'Categories' => $request->Categories,
		'Icon' => $request->Icon,
		

        
	]);
    return redirect('/manage_category');
    }

    
}



    