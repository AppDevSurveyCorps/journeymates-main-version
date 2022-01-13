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

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $data['data_place'] = tblplaces::all();
        return view('index');
    }

}

    