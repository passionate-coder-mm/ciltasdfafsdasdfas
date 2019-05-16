<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ciltbangladesh;
use App\Cltibdbottom;

class CiltbangladeshController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $ciltbangladesh_info = Ciltbangladesh::find(1);
        return view('backEnd.home.clti_bangladesh',compact('ciltbangladesh_info'));

    }
    public function ciltbottomshow(){
       $allCltibdbottom = Cltibdbottom::all();
        return view('backEnd.home.clti_bangladesh_bottom',compact('allCltibdbottom'));
 
    }
    public function storeciltbottom(Request $request){
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Cltibdbottom();
        $data->title = $request->title;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        // $data = $request->all();
         return response()->json($data);
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
        $findcltibottomimg = Cltibdbottom::find($id);
        return response()->json($findcltibottomimg);
    }
    public function updatecltibottomimg(Request $request){
        if($request->file('image')){
            $find_image = Cltibdbottom::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =Cltibdbottom::find($request->id);
            $data->title = $request->title;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
          
        $data = Cltibdbottom::find($request->id);
        $data->title = $request->title;
        $data->save();
        return response()->json($data);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->file('image')){
            $find_image = Ciltbangladesh::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('sliderimage'), $new_name);
            $cilt_bd =Ciltbangladesh::find($request->id);
            $cilt_bd->title = $request->title;
            $cilt_bd->description = $request->description;
            $cilt_bd->image = 'sliderimage/'.$new_name;
            $cilt_bd->save();
            return response()->json($cilt_bd);
        }else{
          
        $cilt_bd = Ciltbangladesh::find($request->id);
        $cilt_bd->title = $request->title;
        $cilt_bd->description = $request->description;
        $cilt_bd->save();
        return response()->json($cilt_bd);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_sliderimg = Cltibdbottom::find($id);
        $unlink_img =  $delete_sliderimg->image;
        $delete_sliderimg->delete();
        unlink($unlink_img);
    }
}
