<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Trainer;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['admin']);
    }
    
        

    public function index(){
        $blogs = Blog::all();
        $trainers = Trainer::all();

        return view('admin/index',compact(['blogs','trainers']));
    }
    
}
