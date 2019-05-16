<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mymodel\Wiletypbdforum;
use App\Mymodel\Wiletyprgforum;
use App\Mymodel\Ypbroucher;
use App\Mymodel\Ypgroup;
use App\Mymodel\Ypbenifit;
use App\Mymodel\Ypwjoin;
use App\Mymodel\Yptop;

class YpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ypbdfourums = Wiletypbdforum::all();
        $yprgfourums = Wiletyprgforum::all();
        $ypbroucher = Ypbroucher::findorfail(1);
        $ypgroup = Ypgroup::findorfail(1);
        $ypbenifits = Ypbenifit::findorfail(1);
        $ypwoverview =  Ypwjoin::findorfail(1); 
        $yptop = Yptop::findorfail(1);
        return  view('backEnd.membership.yp',compact('ypbdfourums','yprgfourums','ypbroucher','ypgroup','ypbenifits','ypwoverview','yptop'));
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
