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
            'age' => $request->age,
            'dob' => $request->dob,
            'acn' => $request->acn,
            'address' => $request->address,
            // 'acn' => $request->acn,
            // 'address' => $request->address,
            'vaccine' => $request->vaccine,
            'v1date' => $request->v1date,
            'v2date' => $request->v2date,
            'result' => $request->result,
            'iso' => $request->iso,
        ]);
        return response()->json(['message'=>'success'],200);
    }

    public function update(Request $request, $id)
    {
        // $patient = Patient::findOrFail($id);
        $patient = Patient::where('id', $id)->first();
        $patient->fullname = $request->fullname;
        $patient->dob = $request->dob;
        $patient->age = $request->age;
        $patient->acn = $request->acn;
        $patient->address = $request->address;
        $patient->vaccine = $request->vaccine;
        $patient->v1date = $request->v1date;
        $patient->v2date = $request->v2date;
        $patient->result = $request->result;
        $patient->iso = $request->iso;

        // $patient->email = $request->email;
        $patient->save();
        return response()->json($request);
    }
    //
}
