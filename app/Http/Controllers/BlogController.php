<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   
    public function __construct()
    {
        return $this->middleware(['admin']);
    }
    
        

    public function index()
    {
        return view('admin/create_blog');
    }


    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->name = $request->name;
        $blog->description = $request->description;
        if($path = $request->path){
            $name = $path->getClientOriginalName();

            $path->move('images/blog',$name);

            $blog->path = $name;
        }
        $blog->save();

        return redirect()->intended('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog =  Blog::find($id);

        return view('admin/edit_blog',compact(['blog']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $blog->name = $request->name;
        $blog->description = $request->description;
        if($path = $request->path){
            $name = $path->getClientOriginalName();

            $path->move('images/blog',$name);

            $blog->path = $name;
        }
        $blog->save();

        return redirect()->intended('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $blog = Blog::find($id);

        $blog->delete();

        return redirect()->intended('/admin');
    }
}
