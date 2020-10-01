<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\Race;
use App\Religion;
use App\School;
use App\Student;
use App\Registration;
use App\DB;

class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('create','store');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::with(
            'student.religion',
            'student.race',
            'student.gender',
            'school',
            'status'
            )->get();
        return view('registrations/index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $genders = Gender::all();
        $religions = Religion::all();
        $races = Race::all();
        $schools = School::all();

        return view('registrations.create', compact('genders', 'religions', 'races', 'schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return store method after create function
        //dd($request);
        $student = new Student();
        $student->full_name = $request->full_name;
        $student->ic_number = $request->ic_number;
        $student->dob = $request->dob;
        $student->gender_id = $request->gender;
        $student->race_id = $request->race;
        $student->religion_id = $request->religion;
        $student->save();
        

        $registration = new Registration();
        $registration->student_id = $student->id;
        $registration->school_id = $request->school;
        $registration->status_id = Registration::STATUS_PENDING;
        $registration->save();

        return redirect()->back()->with(
            [
                'status'=>true,
                'message'=> 'Student Resgitration successfully inserted'
            ]
            );
      
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
            $genders = Gender::all();
            $religions = Religion::all();
            $races = Race::all();
            $schools = School::all();
            $registration = Registration::findOrFail($id);

            return view('registrations.edit', compact('registration','genders','religions','races','schools'));
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
        $data['full_name'] = $request->full_name;
        $data['ic_number'] = $request->ic_number;
        $data['dob'] = $request->dob;
        $data['gender_id'] = $request->full_name;
        $data['race_id'] = $request->full_name;
        $data['religion_id'] = $request->full_name;


        $student = Student::findOrFail($id);
        $student->update($data);

        $data_reg['school_id'] = $request->school;

        $registration = Registration::findOrFail($id);

        $registration->update($data_reg);

        return redirect()->back()->with(
            [
                'status'=>200,
                'message'=> 'Registration successfully Approved'
            ]
            );

        
        
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

    public function approve($id)
    {
        //return $id;
        $registration = Registration::find($id);
        $registration->status_id = Registration::STATUS_ACCEPTED;
        $registration->matric_number = $this->getRandomNumber();
        $registration->save();

        return redirect()->back()->with(
            [
                'status'=>200,
                'message'=> 'Registration successfully Approved'
            ]
            );
    }

    private function getRandomNumber()
    {
        return rand(10000, 100000);
    }

    public function reject($id)
    {
         //return $id;
         $registration = Registration::find($id);
         $registration->status_id = Registration::STATUS_REJECTED;
         $registration->save();
 
         return redirect()->back()->with(
             [
                 'status'=>true,
                 'message'=> 'Registration successfully Rejected'
             ]
             );
    }
}
