<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentClass;
use App\Http\Resources\StudentClass as StudentClassResources;

class StudentClassController extends Controller
{
    public function index()
    {
        return StudentClass::all();
    }
    public function store(Request $request)
    {
        return StudentClass::create($request->all());
    }
}
