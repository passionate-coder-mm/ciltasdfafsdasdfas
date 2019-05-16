<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventList = Event::all();
        return view('backEnd.events.events',compact('eventList'));
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
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Event();
        $data->image = 'ciltimage/'.$new_name;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->save();
        return response()->json($data);
    }
    Public function editEvent($id){
        $findNews = Event::find($id);
        return response()->json($findNews);
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
    public function update(Request $request)
    {
        if($request->file('image')){
            $find_image = Event::find($request->id);
           $old_img = $find_image->image;
           if($old_img){
               unlink($old_img);
           }
           $image = $request->file('image');
           $new_name = rand() . '.' . $image->getClientOriginalExtension();
           $image->move(public_path('ciltimage'), $new_name);
           $data = Event::find($request->id);
           $data->image = 'ciltimage/'.$new_name;
           $data->title = $request->title;
           $data->date = $request->date;

           $data->description = $request->description;
           $data->save();
           return response()->json($data);
       }else{
       $data = Event::find($request->id);
       $data->title = $request->title;
       $data->date = $request->date;
        $data->description = $request->description;
       $data->save();
       return response()->json($data);
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
        $find_partner = Event::find($id);
        $old_img = $find_partner->image;
        unlink($old_img);
        $find_partner->delete();
    }
}
