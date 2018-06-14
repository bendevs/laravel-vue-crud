<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thought;

class ThoughtController extends Controller
{
    public function __construct()
    {
        // Declara que necesita autentificarse para usar este controlador
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Thought::All();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thought =  new Thought();
        $thought->description =  $request->description;
        $thought->user_id = auth()->id();
        $thought->save();

        return $thought;
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
        $thought = Thought::find($id);
        $thought->description = $request->description;
        $thought->save();

        return $thought;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thought = Thought::find($id);
        $thought->delete();
    }
}
