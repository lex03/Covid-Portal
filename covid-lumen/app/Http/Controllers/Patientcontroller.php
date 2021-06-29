<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function index()
    {
        return Patient::all();
    }
    public function store(Request $request)
    {
        Patient::create([
            'fullname' => $request->fullname,
            // 'age' => $request->age,
            // 'dob' => $request->dob,
            // 'acn' => $request->acn,
            // 'address' => $request->address,
            // 'vaccdone' => $request->vaccdone,
            // 'vaccdone1' => $request->vaccdone1,
            // 'vaccdone2' => $request->vaccdone2,
            // 'result' => $request->result,
            // 'iso' => $request->iso,
        ]);
        return response()->json(['message'=>'success'],200);
    }

    public function update(Request $request, $id)
    {
        // $patient = Patient::findOrFail($id);
        $patient = Patient::where('id', $id)->first();
        $patient->fullname = $request->fullname;
        // $patient->last_name = $request->lastname;
        // $patient->email = $request->email;
        $patient->save();
        return response()->json($request);
    }
    //
}
