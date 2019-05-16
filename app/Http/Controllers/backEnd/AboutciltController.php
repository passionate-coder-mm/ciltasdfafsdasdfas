<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Corevalues;
use App\Abtwhoweare;
use App\Whyjoinus;
use App\Partner;
use App\Ourhistory;
use App\Whatdo;

class AboutciltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $coreValues = Corevalues::find(1);
       $abtWhoweare = Abtwhoweare::find(1);
       $Whatdo = Whatdo::all();
       $whyJoin = Whyjoinus::find(1);
       $partners = Partner::all();
       $ourhistory = Ourhistory::find(1);
       return view('backEnd.about_us.about_cilt',compact('coreValues','abtWhoweare','whyJoin','partners','ourhistory','Whatdo'));
    }
   public function corevalueUpdate(Request $request){
    
    $data = Corevalues::find($request->id);
    $data->title = $request->title;
    $data->description = $request->description;
    $data->save();
    return response()->json($data);
    }
    public function whoweareUpdate(Request $request){
    
        if($request->file('image')){
            $find_image = Abtwhoweare::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =Abtwhoweare::find($request->id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
          
        $data = Abtwhoweare::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return response()->json($data);
        }
        
     }
     public function whyjoinUpdate(Request $request){
        if($request->file('image')){
             $find_image = Whyjoinus::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $find_image->delete();
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data = new Whyjoinus();
            $data->title = $request->title;
            $data->id = 1;
            $all_des = json_encode($request->program);
            $data->description = $all_des;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
        $data =  Whyjoinus::find(1);
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->save();
        return response()->json($data);
        }
        
     }
     public function updateHistory(Request $request){
        if($request->file('image')){
            $find_image = Ourhistory::find($request->id);
           $old_img = $find_image->image;
           if($old_img){
               unlink($old_img);
           }
           $find_image->delete();
           $image = $request->file('image');
           $new_name = rand() . '.' . $image->getClientOriginalExtension();
           $image->move(public_path('ciltimage'), $new_name);
           $data = new Ourhistory();
           $data->title = $request->title;
           $data->id = 1;
           $all_his = json_encode($request->program);
           $data->history = $all_his;
           $data->image = 'ciltimage/'.$new_name;
           $data->save();
           return response()->json($data);
       }else{
       $data =  Ourhistory::find(1);
       $data->title = $request->title;
       $data->id = 1;
       $all_his = json_encode($request->program);
       $data->history = $all_his;
       $data->save();
       return response()->json($data);
       }
       

     }
     public function createPartner(Request $request){
        if($request->file('image')){
           $image = $request->file('image');
           $new_name = rand() . '.' . $image->getClientOriginalExtension();
           $image->move(public_path('ciltimage'), $new_name);
           $data = new Partner();
          $data->image = 'ciltimage/'.$new_name;
           $data->save();
           return response()->json($data);
       }else{
        return response()->json('Error');

       }
     }
     public function createWhattodo(Request $request){
      
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data = new Whatdo();
            $data->title = $request->title;
             $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
       
     }
     public function updateWhatdo(Request $request){
        if($request->file('image')){
            $find_image = Whatdo::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =  Whatdo::find($request->id);
             $data->image = 'ciltimage/'.$new_name;
             $data->title = $request->title;
             $data->save();
            return response()->json($data);
        }else{

            $data =  Whatdo::find($request->id);
            $data->title = $request->title;
            $data->save();
           return response()->json($data);
 
        }
     }
     
     public function editPartner($id){
         $findPartner = Partner::find($id);
         return response()->json($findPartner);
     }
     public function editWhatwedo($id){
        $findwhatto = Whatdo::find($id);
        return response()->json($findwhatto);
    }
     
     public function updatePartner(Request $request){
        if($request->file('image')){
            $find_image = Partner::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data =  Partner::find($request->id);
             $data->image = 'ciltimage/'.$new_name;
             $data->save();
            return response()->json($data);
        }else{

          return response()->json('Error');
 
        }
     }
     public function deletePartner($id){
         $find_partner = Partner::find($id);
         $old_img = $find_partner->image;
         unlink($old_img);
         $find_partner->delete();

     }
     public function deleteWhatwedo($id){
        $find_partner = Whatdo::find($id);
        $old_img = $find_partner->image;
        unlink($old_img);
        $find_partner->delete();

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
