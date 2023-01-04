<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\confirmorder;
use Illuminate\Support\Facades\DB;

class Confirmordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ordermeals.ConfirmOrder');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new ConfirmOrder([
            'title' =>$request->get('title'),
            'description' =>$request->get('description'),
            'cost' =>$request->get('cost'),
            'spice' =>$request->get('spice'),
            'size' =>$request->get('info'),
            'instructions' =>$request->get('instructions')
        ]);
        $order->save();
        $meals = ConfirmOrder::all();
        return view('ordermeals.Cart', ['meals'=>$meals,'message'=>'']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/Cart');
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
        //
        $order = confirmorder::find($id);
        $order->update($request->all());
        /*$meals = ConfirmOrder::all();*/
        /*return view('ordermeals.Cart', ['meals'=>$meals,'message'=>'']);*/
        return redirect('/Cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = confirmorder::find($id)->delete();
        return redirect('/Cart');
    }
}
