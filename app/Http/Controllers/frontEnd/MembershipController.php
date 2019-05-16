<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Membershipover;
use App\Grade;
use App\Benifits;
use App\Mymodel\Conduct;
use App\Mymodel\Memberfee;
use App\Mymodel\Govtcharge;
use App\Mymodel\Nongovtcharge;
use App\Mymodel\Corporatetop;
use App\Mymodel\Corporatemiddle;
use App\Mymodel\Cpmember;
use App\Mymodel\Womenlogistic;
use App\Mymodel\Weletmission;
use App\Mymodel\Joinwelet;
use App\Mymodel\Womenbroucher;
use App\Mymodel\Wiletgroup;
use App\Mymodel\Wiletrgforum;
use App\Mymodel\Wiletbdforum;
use App\Mymodel\Wiletypbdforum;
use App\Mymodel\Wiletyprgforum;
use App\Mymodel\Ypbroucher;
use App\Mymodel\Ypgroup;
use App\Mymodel\Ypbenifit;
use App\Mymodel\Ypwjoin;
use App\Mymodel\Yptop;



use DB;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $overview = Membershipover::findorfail(1);
        $grade = Grade::findorfail(1);
        $benifits = Benifits::findorfail(1);
        $conducts = DB::table('conducts')->first();
        $membberfee = Memberfee::findorfail(1);
        $govtcharge = Govtcharge::findorfail(1); 
        $nongovtcharge = Nongovtcharge::findorfail(1); 
        return view('frontEnd.member_overview',compact('overview','grade','benifits','conducts','membberfee','govtcharge','nongovtcharge'));
    }
    public function wiletindex(){
        $women = Womenlogistic::findorfail(1);
        $missions = Weletmission::all();
        $joinwilet = Joinwelet::findorfail(1);
        $broucher = Womenbroucher::findorfail(1);
        $group = Wiletgroup::findorfail(1);
        $rgfourums = Wiletrgforum::all();
        $bdfourums = Wiletbdforum::all();
        $ypbdfourums = Wiletypbdforum::all();
        $yprgfourums = Wiletyprgforum::all();
        return view('frontEnd.member_wilet',compact('women','missions','joinwilet','broucher','group','rgfourums','bdfourums','ypbdfourums','yprgfourums'));
    }
    public function ypindex(){
        $ypbdfourums = Wiletypbdforum::all();
        $yprgfourums = Wiletyprgforum::all();
        $ypbroucher = Ypbroucher::findorfail(1);
        $ypgroup = Ypgroup::findorfail(1);
        $ypbenifits = Ypbenifit::findorfail(1);
        $ypwoverview =  Ypwjoin::findorfail(1); 
        $yptop = Yptop::findorfail(1);
        $joinwilet = Joinwelet::findorfail(1);
        return view('frontEnd.member_yp',compact('yptop','ypwoverview','ypbenifits','ypgroup','ypbroucher','yprgfourums','ypbdfourums','joinwilet'));
    }
    public function corporateindex(){
        $corporateover =Corporatetop::findorfail(1);
        $cpmembers = Cpmember::findorfail(1);
        $corporatemid = Corporatemiddle::findorfail(1);
        return view('frontEnd.member_corporate',compact('corporateover','cpmembers','corporatemid'));
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
