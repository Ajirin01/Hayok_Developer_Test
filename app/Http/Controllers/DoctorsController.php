<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctors;
class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctors::all();
        return view('doctors',['doctors'=> $doctors]);
    }
    
    public function create()
    {
        return view('create-doctor');
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
        return response()->json($id);
    }
}
