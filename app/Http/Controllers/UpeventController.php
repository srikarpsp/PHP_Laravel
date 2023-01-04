<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class UpeventController extends Controller
{
    public function index(){

        $event = event::all();
        return view('Upevent.list', [ 'event' => $event]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Upevent.create');
    }
    public function edit($id)
    {
        $event= event::find($id);
        return view('Upevent.edit')->with('event', $event);
    }
    public function update(Request $request, $id)
    {
        $event = event::find($id);
        $event->update($request->all());

        return redirect('Upevent');
    }

    public function store(Request $request)
    {

        event::create($request->all());
        return redirect('Upevent');
    }
    public function destroy($id)
    {
        $event = event::find($id)->delete();
        return redirect('Upevent');
    }


}
