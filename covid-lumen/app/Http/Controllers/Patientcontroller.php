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
        if($request->result == "negative" || $request->result == "recovered")
            {    
                $iso = "--";
            }
            else{
                $iso = $request->iso;
            }
            if($request->v1date == "")
            {    
                $v1date = "--";
            }
            else{
                $v1date=$request->v1date;
            }
            if($request->v2date == "")
            {    
                $v2date = "--";
            }
            else{
                $v2date=$request->v2date;
            }
            if($request->iso == "")
            {    
                $iso = "--";
            }
            else{
                $iso=$request->iso;
            }
        Patient::create([
            'fullname' => $request->fullname,
            'age' => $request->age,
            'dob' => $request->dob,
            'acn' => $request->acn,
            'address' => $request->address,
            // 'acn' => $request->acn,
            // 'address' => $request->address,
            'vaccine' => $request->vaccine,
            'v1date' => $v1date,
            'v2date' => $v2date,
            'result' => $request->result,
            'iso' => $iso,
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
        
        if($request->result == "negative" || $request->result == "recovered")
        {    
            $patient->iso = "--";
        }
        else{
            $patient->iso = $request->iso;
        }
        if($request->v1date == "")
        {    
            $patient->v1date = "--";
        }
        if($request->v2date == "")
        {    
            $patient->v2date = "--";
        }
        if($request->iso == "")
        {    
            $patient->iso = "--";
        }
        
        $patient->save();
        return response()->json($patient);
    }
    //
    public function delete(Request $request, $id)
    {
        // $patient = Patient::findOrFail($id);
        $patient = Patient::where('id', $id)->first();
        $patient->delete();
        return response()->json(['message'=>'success'],200);
    }
}
