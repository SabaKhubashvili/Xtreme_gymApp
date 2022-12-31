<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Trainer;
use App\Models\Membership;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function index(){
        $blogs = Blog::all();
        $trainers = Trainer::all();
        $memberships = Membership::all();
        
        return view('index',compact(['blogs','trainers', 'memberships']));
    }

    public function showTrainer($id){
        $trainer = Trainer::find($id);

        return view('trainer',compact(['trainer']));
    }
    public function showBlog($id){
        $blog = Blog::findOrFail($id);

        return view('single_blog', compact(['blog']));
    }

    public function pricing(){
        $memberships = Membership::all();

        return view('pricing', compact(['memberships']));
    }
    public function blogs(){
        $blogs = Blog::all();

        return view('blogs',compact(['blogs']));
    }
    public function contact(){
        return view('contact');
    }
    public function faq(){
        return view('faq');
    }
}
