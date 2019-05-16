<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courseoverview;
use App\Course;
use App\Knowledgetop;
use App\Logistic;
use App\Broucher;
use App\Downloadtop;
use App\Download;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $courses = Course::all(); 
        $overview = Courseoverview::find(1);
       
        
        return view('frontEnd.course',compact('overview','courses'));
    }
    public function  knowledgeindex(){
         $konwledgeTop = Knowledgetop::findorfail(1);
        $logistic = Logistic::findorfail(1);
        $broucher = Broucher ::findorfail(1);
        return view('frontEnd.knowledge',compact('konwledgeTop','logistic','broucher'));
    }
    public function  downloadindex(){
        $download = Downloadtop ::findorfail(1);
        $alldownload = Download ::all();
        return view('frontEnd.download',compact('download','alldownload'));
   
    }

    public function singlecourseindex($id){
        $coursedetail = Course::findorfail($id);
        return view('frontEnd.single_course',compact('coursedetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
}
