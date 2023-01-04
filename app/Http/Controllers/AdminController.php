<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Meals;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $meals = Meals::all();
        //dd($meals);
        return view('Admin.list', ['meals'=>$meals,'message'=>'']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //, ['meals'=>$meals,'message'=>'']

        return view('Admin.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $order = new Meals([
            'title' =>$request->get('title'),
            'description' =>$request->get('description'),
            'cost' =>$request->get('cost'),
            'long_description' =>$request->get('long_description')
        ]);
        $order->save();
        $meals = Meals::all();
        return view('Admin.show', ['meals'=>$meals,'message'=>'']);
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
        $meals = Meals::find($id);
        return view('Admin.show',['meals' => $meals]);
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
        $meals = Meals::find($id);
        return view('Admin.edit', ['meals' => $meals]);
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
        //
        $meals = Meals::find($id);
        $meals->update($request->all());
        return redirect('Admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $meals = Meals::find($id)->delete();
        return redirect('/Admin');
    }
}
