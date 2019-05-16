<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Professionforum;
use App\Footerlogo;
class ProfessionalforumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allprofessionalinfo1 = Professionforum::find(1);
        $allprofessionalinfo2 = Professionforum::find(2);

        return view('backEnd.home.professional_transport',compact('allprofessionalinfo1','allprofessionalinfo2'));

    }
  
    public function updateprofessionalforum(Request $request){
        if($request->file('image')){
            $find_image = Professionforum::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =Professionforum::find($request->id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
          
        $data = Professionforum::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        return response()->json($data);
        }
    }
    public function updatelogisticforum(Request $request){
        if($request->file('image')){
            $find_image = Professionforum::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =Professionforum::find($request->id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
          
        $data = Professionforum::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        return response()->json($data);
        }
    }
    public function footerlogo(){
        $footerlogo = Footerlogo::find(1);
        return view('backEnd.home.footer_logo',compact('footerlogo'));

    }
    public function footerlogoupdate(Request $request){
        if($request->file('image')){
            $find_image = Footerlogo::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =Footerlogo::find($request->id);
            $data->title = $request->title;
            $data->subtitle = $request->subtitle;
            $data->description = $request->description;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
          
        $data = Footerlogo::find($request->id);
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->description = $request->description;

        $data->save();
        return response()->json($data);
        }

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
