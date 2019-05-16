<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mymodel\Womenlogistic;
use App\Mymodel\Weletmission;
use App\Mymodel\Joinwelet;
use App\Mymodel\Womenbroucher;
use App\Mymodel\Wiletgroup;
use App\Mymodel\Wiletrgforum;
use App\Mymodel\Wiletbdforum;
use App\Mymodel\Wiletypbdforum;
use App\Mymodel\Wiletyprgforum;


class WiletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $women = Womenlogistic::findorfail(1);
        $missions = Weletmission::all();
        $joinwilet = Joinwelet::findorfail(1);
        $broucher = Womenbroucher::findorfail(1);
        $group = Wiletgroup::findorfail(1);
        $rgfourums = Wiletrgforum::all();
        $bdfourums = Wiletbdforum::all();
        $ypbdfourums = Wiletypbdforum::all();
        $yprgfourums = Wiletyprgforum::all();
        return  view('backEnd.membership.wilet',\compact('women','missions','joinwilet','broucher','group','rgfourums','bdfourums','ypbdfourums','yprgfourums'));
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
