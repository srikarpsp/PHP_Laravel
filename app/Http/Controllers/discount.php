<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\discountquestions;

class discount extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cupon='';
        $discount='';
        $discountQuestions = discountquestions::all();


        return view('Discount.Discount',['coupon'=>$cupon,'discount'=>$discount,'dialog'=>'Please do the quiz to get discount and coupon','discountQuestions'=>$discountQuestions]);
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
        //
        $count=0;
        $cupon='';
        $discount=0;
        $q1 = $request->question1;
        $q2 = $request->question2;
        $q3 = $request->question3;
        $q4 = $request->question4;
        if ($q1=='city of Naples'){
            $count+=1;
        }
        if ($q2=='90'){
            $count+=1;
        };
        if ($q3=='Chickpeas'){
            $count+=1;
        };
        if ($q4=='CocaCola'){
            $count+=1;
        };
        if ($count==4){
            $cupon='DAN40';
            $discount=40;
        }
        if ($count==3){
            $cupon='CAN30';
            $discount=30;
        }
        if ($count==2){
            $cupon='BAN20';
            $discount=20;
        }
        if ($count==1){
            $cupon='AAN10';
            $discount=10;
        }
        $discountQuestions = discountquestions::all();

        return view('Discount.Discount',['coupon'=>$cupon,'discount'=>$discount,'dialog'=>'Here is your discount and coupon','discountQuestions'=>$discountQuestions]);


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
    }
}
