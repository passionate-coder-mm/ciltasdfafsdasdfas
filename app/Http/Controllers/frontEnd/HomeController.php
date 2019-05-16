<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mainslider;
use App\Ciltbangladesh;
use App\Cltibdbottom;
use App\Professionforum;
use App\Footerlogo;
use App\News;
use App\Event;
use App\Partner;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allslider = Mainslider::all();
        $ciltbangladesh_info = Ciltbangladesh::find(1);
        $allCltibdbottom = Cltibdbottom::all();
        $allprofessionalinfo1 = Professionforum::find(1);
        $allprofessionalinfo2 = Professionforum::find(2);
        $newsList = News::all();
        $eventList = Event::all();
        $partners = Partner::all();
        
        return view('frontEnd.home',compact('allslider','ciltbangladesh_info','allCltibdbottom','allprofessionalinfo1','allprofessionalinfo2','newsList','eventList','partners'));
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
