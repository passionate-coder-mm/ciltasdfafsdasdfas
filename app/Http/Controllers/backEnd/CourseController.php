<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courseoverview;
use App\Course;
use App\Downloadtop;
use App\Download;
use App\Knowledgetop;
use App\Logistic;
use App\Broucher;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $courses = Course::all(); 
        $overview = Courseoverview::find(1);
        
        return view('backEnd.education.courses',compact('overview','courses'));

    }
    public function overviewupdate(Request $request){
    
        $data = Courseoverview::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return response()->json($data);
        }

    public function knowledgeupdate(Request $request){

        $data = Knowledgetop::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return response()->json($data);
        }
    public function downloadtop(Request $request){

        $data = Downloadtop::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return response()->json($data);
        }
      
    public function logisticupdate(Request $request){
        if($request->file('image')){
            $find_image = Logistic::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =Logistic::find($request->id);
            $data->title = $request->title;
            $data->videolink = $request->videolink;
            $data->description = $request->description;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
          
        $data = Logistic::find($request->id);
        $data->title = $request->title;
        $data->videolink = $request->videolink;
        $data->description = $request->description;

        $data->save();
        return response()->json($data);
        }
    }
    public function broucherupdate(Request $request){
        if($request->file('image')){
             $find_image = Broucher::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $find_image->delete();
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data = new Broucher();
            $data->title = $request->title;
            $data->id = 1;
            $all_des = json_encode($request->program);
            $data->description = $all_des;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
        $data =  Broucher::find(1);
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->save();
        return response()->json($data);
        }
        
     }

     public function storedownload(Request $request){
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Download();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
     }
     public function editdownload($id){
        $boardmembers = Download::find($id);
        return response()->json($boardmembers);
    }
    public function updateDownload(Request $request){
        if($request->file('image')){
            $find_image = Download::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =  Download::find($request->id);
             $data->image = 'ciltimage/'.$new_name;
             $data->title = $request->title;
             $data->description = $request->description;
             $data->save();
            return response()->json($data);
        }else{

            $data =  Download::find($request->id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
           return response()->json($data);
 
        }
    }
    public function deletedownload($id){
        $findmember = Download::find($id);
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
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Course();
        $data->title = $request->title;
        $data->duration = $request->duration;        
        $data->descriptiontop = $request->descriptiontop;
        $data->description = $request->description;
        $data->fees = $request->fees;
        $data->discount = $request->discount;
        $data->startdate = $request->startdate;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }
    public function editcourse($id){
        $boardmembers = Course::find($id);
        return view('backEnd.education.edit_course',compact('boardmembers'));
        //return response()->json($boardmembers);
    }
    public function updatecourse(Request $request){
        if($request->file('image')){
            $find_image = Course::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data = Course::find($request->id);
            $data->title = $request->title;
            $data->duration = $request->duration;
            $data->descriptiontop = $request->descriptiontop;
            $data->description = $request->description;
            $data->fees = $request->fees;
            $data->discount = $request->discount;
            $data->startdate = $request->startdate;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
          
        $data = Course::find($request->id);
        $data->title = $request->title;
        $data->duration = $request->duration;
        $data->descriptiontop = $request->descriptiontop;
        $data->description = $request->description;
        $data->fees = $request->fees;
        $data->discount = $request->discount;
        $data->startdate = $request->startdate;
        $data->save();
        return response()->json($data);
        }
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
        $find_partner = Course::find($id);
        $old_img = $find_partner->image;
        unlink($old_img);
        $find_partner->delete();
    }
}
