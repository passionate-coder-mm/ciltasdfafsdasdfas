<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bordmember;
use App\Presedentmsg;
class CiltboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boardmembers = Bordmember::all();
        $presidentMsg = Presedentmsg::find(1);
        return view('backEnd.about_us.board_cilt',compact('boardmembers','presidentMsg'));
    }
    public function updatepresidentmsg(Request $request){
        if($request->file('image')){
            $find_image = Presedentmsg::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =Presedentmsg::find($request->id);
            $data->title = $request->title;
            $data->name = $request->name;
            $data->message = $request->message;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
          
        $data = Presedentmsg::find($request->id);
        $data->title = $request->title;
        $data->name = $request->name;
        $data->message = $request->message;
        $data->save();
        return response()->json($data);
        }
    }
    public function storeboardMember(Request $request){
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Bordmember();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->description = $request->description;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }
    public function editmemberinfo($id){
        $boardmembers = Bordmember::find($id);
        return response()->json($boardmembers);
    }
    public function updateBoardmember(Request $request){
        if($request->file('image')){
            $find_image = Bordmember::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =  Bordmember::find($request->id);
             $data->image = 'ciltimage/'.$new_name;
             $data->name = $request->name;
             $data->designation = $request->designation;
             $data->description = $request->description;
             $data->save();
            return response()->json($data);
        }else{

            $data =  Bordmember::find($request->id);
            $data->name = $request->name;
            $data->designation = $request->designation;
            $data->description = $request->description;
            $data->save();
           return response()->json($data);
 
        }
    }
    public function deleteMember($id){
        $findmember = Bordmember::find($id);
        $old_img = $findmember->image;
         unlink($old_img);
         $findmember->delete();
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
