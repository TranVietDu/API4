<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentValidator;
use App\Http\Requests\UpdateStudentValidator;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Service\StudentService;
class StudentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }
    public function index(){
        $all= $this->studentService->showAll(); 
        return view('home.student',compact('all'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function create(){
        return view('home.addstudent');
    }
    public function store(StoreStudentValidator $request)
    {
       $this->studentService->store($request);
       $all= $this->studentService->showAll();
       return redirect()->route('student');
    }
    public function show(Student $student)
    {
        return $this->studentService->showStudent($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentValidator $request, Student $student)
    {
       $student= $this->studentService->update($request,$student);
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
       $student->delete();
       return redirect()->route('student');
    }
    public function restore(Student $student){
        $student->restore();
    }
}
