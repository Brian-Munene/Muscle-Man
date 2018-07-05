<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\session94233;
use Auth;
use App\Http\Requests;
use  App\Http\Resources\SessionResource;

class session94233Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $session = $request->isMethod('put') ?
         session94233::findOrFail($request->session_id) : new session94233;
        $session->id = auth()->user()->id;
        $session->location = $request->input('location');
        $session->exercise_type = $request->input('exercise-type');
        $session->reps = $request->input('reps');
        $session->sets = $request->input('sets');
        $session->date = $request->input('date');

        if($session->save()){
            return new SessionResource($session);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $userID
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         
          //show a single session
          $session = session94233::all();
          return $session;
          //Return as a resource
          //return new SessionResource($session);
         

          //$session = session94233::find($userID);
          //return $session;
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
