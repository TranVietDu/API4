<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassValidator;
use App\Http\Requests\UpdateClassValidator;
use Illuminate\Http\Request;
use App\Models\Classs;
use App\Service\ClassService;
use App\Http\Resources\Classs as ClasssResource;

use function GuzzleHttp\Promise\all;

class ClassController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $classService;
    public function __construct(ClassService $classService)
    {
        $this->classService=$classService;
    }
    public function index()
    {
        $all= $this->classService->allClass();
        return view('home.class',compact('all'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassValidator $request)
    {
       return $this->classService->store($request);
    }


    public function show(Classs $classs)
    {
        return $this->classService->show($classs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassValidator $request, Classs $classs)
    {
        return $this->classService->update($request,$classs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classs $classs)
    {
       $classs->delete();
    }
    public function nnCountStudentOnClass(Classs $classs){
        return $this->classService->countNumberInClass($classs);
    }
    public function allClassStudent(Classs $classs){
        return $this->classService->allStudentAllClass($classs);
    }
    
    public function showClass(Classs $classs){
        return $this->classService->studentInClass($classs);
    }
    
    
}
