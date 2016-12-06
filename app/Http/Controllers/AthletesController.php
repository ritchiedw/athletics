<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Athlete;
use Session;

class AthletesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //return view('athletes.index');
        $athletes = Athlete::all();

        return view('athletes.index')->withAthletes($athletes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('athletes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'firstname' => 'required',
            'surname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address_1' => 'required',
            'address_2' => 'required',
            'postcode' => 'required',
            'parent_1_firstname' => 'required',
            'parent_1_surname' => 'required',
            'parent_1_email_address' => 'required',
            'telephone_number_1' => 'required',
            'emergency_contact_firstname' => 'required',
            'emergency_contact_surname' => 'required',
            'emergency_contact_relationship' => 'required',
            'membership_type' => 'required'
        ]);

        $input = $request->all();

        Athlete::create($input);

        Session::flash('flash_message', 'Athlete successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
        $athlete = Athlete::findOrFail($id);
        return view('athletes.show')->withAthlete($athlete);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        $athlete = Athlete::findOrFail($id);
        return view('athletes.edit')->withAthlete($athlete);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        
        
        $this->validate($request, [
            'firstname' => 'required',
            'surname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address_1' => 'required',
            'address_2' => 'required',
            'postcode' => 'required',
            'parent_1_firstname' => 'required',
            'parent_1_surname' => 'required',
            'parent_1_email_address' => 'required',
            'telephone_number_1' => 'required',
            'emergency_contact_firstname' => 'required',
            'emergency_contact_surname' => 'required',
            'emergency_contact_relationship' => 'required',
            'membership_type' => 'required'
        ]);

        $input = $request->all();

        Athlete::create($input);

        Session::flash('flash_message', 'Athlete successfully added!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
