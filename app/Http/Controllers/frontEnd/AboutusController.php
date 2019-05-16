<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Corevalues;
use App\Abtwhoweare;
use App\Whyjoinus;
use App\Partner;
use App\Ourhistory;
use App\Whatdo;
use App\Bordmember;
use App\Presedentmsg;
class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $coreValues = Corevalues::find(1);
        $abtWhoweare = Abtwhoweare::find(1);
       $Whatdo = Whatdo::all();
       $whyJoin = Whyjoinus::find(1);
       $partners = Partner::all();
       $ourhistory = Ourhistory::find(1);
        return view('frontEnd.aboutcilt',compact('coreValues','abtWhoweare','Whatdo','whyJoin','partners','ourhistory'));
    }
    public function ciltboardindex(){
        $boardmembers = Bordmember::all();
        $presidentMsg = Presedentmsg::find(1);
        return view('frontEnd.ciltboard',compact('boardmembers','presidentMsg'));
    }
    public function ciltboardsingleinfo($id){
        $memInfo = Bordmember::find($id);
        return response()->json($memInfo);
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
