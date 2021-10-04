<?php
namespace App\Service;

use App\Http\Requests\StoreStudentValidator;
use App\Http\Requests\UpdateStudentValidator;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentService
{
    public function showAll()
    {
       return Student::all();
    }
    public function store(StoreStudentValidator $request){
        $student=new Student;
        $student->name=$request->name;
        $student->age=$request->age;
        $student->save();
    }
    public function showStudent(Student $student){
        return Student::find($student);
    }
    public function update(UpdateStudentValidator $request,Student $student){
        $student->name=$request->name;
        $student->age=$request->age;
        $student->save();
    }
}
