<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mainslider;

class MainsliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $sliderList = Mainslider::all();
        return view('backEnd.home.main_sliders',compact('sliderList'));
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
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('sliderimage'), $new_name);
        $slider = new Mainslider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->image = 'sliderimage/'.$new_name;
        $slider->save();
        return response()->json($slider);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findSlider = Mainslider::find($id);
        return response()->json($findSlider);
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
    public function update(Request $request)
    { 
        if($request->file('image')){
            $find_image = Mainslider::find($request->sliderid);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('sliderimage'), $new_name);
            $slider =Mainslider::find($request->sliderid);
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->image = 'sliderimage/'.$new_name;
            $slider->save();
            return response()->json($slider);
        }else{
          
        $slider = Mainslider::find($request->sliderid);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->save();
        return response()->json($slider);
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
        $delete_sliderimg = Mainslider::find($id);
        $unlink_img =  $delete_sliderimg->image;
        $delete_sliderimg->delete();
        unlink($unlink_img);
    }
}
