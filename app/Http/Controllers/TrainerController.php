<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['admin'])->only(['index','create','store','edit','update','destroy']);
    }
    
        
   
    public function index()
    {
        $trainers = Trainer::all();

        return view('admin/trainers',compact(['trainers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createTrainer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainer = new Trainer;

        $trainer->name = $request->name;
        $trainer->achivments = $request->input('achivments');
        $trainer->number = $request->number;
        $trainer->gmail = $request->gmail;

        if($path = $request->profile_image){
            $name = $path->getClientOriginalName();

            $path->move('images/trainers', $name);

            $trainer->profile_image = $name;
        }

        $trainer->save();
        
        return redirect()->intended('admin/trainer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();

        return redirect()->intended('admin/trainer');
    }
}
