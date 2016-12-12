<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Athlete;
use Session;
use Illuminate\Support\Facades\Log;
use Gate;

class AthletesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Gate::allows('athletes-get')) {
            $athletes = Athlete::all();

            return view('athletes.index')->withAthletes($athletes);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $athlete = new Athlete();
        return view('athletes.create')->withAthlete($athlete);
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

        $athlete = Athlete::findOrFail($id);
        $input = $request->all();

        $athlete->fill($input)->save();

        Session::flash('flash_message', 'Athlete successfully updated!');

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
        Log::info("The ID to be destroyed: " . $id);
        Athlete::destroy($id);
        Session::flash('flash_message', 'Athlete successfully deleted!');
        return redirect()->back();
    }

}
