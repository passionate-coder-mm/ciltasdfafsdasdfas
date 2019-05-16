<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mainslider;
use App\Ciltbangladesh;
use App\Cltibdbottom;
use App\Professionforum;
use App\Footerlogo;
use App\Mymodel\Social;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $allCltibdbottom = Cltibdbottom::all();
        $ciltbangladesh_info = Ciltbangladesh::find(1);
        $sliderList = Mainslider::all();
        $allprofessionalinfo1 = Professionforum::find(1);
        $allprofessionalinfo2 = Professionforum::find(2);
        $footerlogo = Footerlogo::find(1);
        $sm = Social::find(1);
       return view('backEnd.home.home',compact('sliderList','allCltibdbottom','ciltbangladesh_info','allprofessionalinfo2','allprofessionalinfo1','footerlogo','sm'));
    }
    public function sociallinkupdate(Request $request){
        $sm = Social::find(1);
        $sm->fblink = $request->fblink;
        $sm->twlink = $request->twlink;
        $sm->lklink = $request->lklink;
        $sm->inlink = $request->inlink;
        $sm->save();
        return response()->json('Success');
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
