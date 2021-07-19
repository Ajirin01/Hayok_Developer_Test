<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patients;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patients::all();
        return view('patients',['patients'=> $patients]);
    }

    public function create()
    {
        return view('create-patient');
    }

    public function store(Request $request)
    {
        return response()->json($request->all());
    }

    public function show($id)
    {
        return response()->json($id);
    }
    
    public function edit($id)
    {
        return response()->json($id);
    }
    
    public function update(Request $request, $id)
    {
        return response()->json([$request->all(), $id]);
    }
    
    public function destroy($id)
    {
        echo "delete patient: ". $id;
    }
}
