<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function __construct(){
        $this->middleware(['admin']);
    }
    public function index()
    {
        $memberships = Membership::all();



        return view('admin/memberships',compact(['memberships']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin/createMembership', compact(['tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membership = new Membership;

        $membership->name = $request->name;
        $membership->price = $request->price;
        $membership->in = $request->in;
        $membership->out = $request->out;
        
        
        $membership->save();

        $membership->tags()->attach($request->tags);

        return redirect()->intended('admin/membership');

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
        $membership = Membership::findOrFail($id);
        $tags = Tag::all();

        return view('admin/editMembership',compact('membership','tags'));
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
        $membership = Membership::findOrFail($id);


        $membership->name = $request->name;
        $membership->price = $request->price;
        $membership->in = $request->in;
        $membership->out = $request->out;

        $membership->save();

        $membership->tags()->sync($request->tags);

        return redirect()->intended('admin/membership');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membership = Membership::findOrFail($id);

        $membership->delete();

        $membership->tags()->detach();

        return redirect()->intended('admin/membership');
    }
}
