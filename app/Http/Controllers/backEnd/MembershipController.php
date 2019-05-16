<?php

namespace App\Http\Controllers\backEnd;

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
        $corporateover =Corporatetop::findorfail(1);
        $cpmembers = Cpmember::findorfail(1);
        $corporatemid = Corporatemiddle::findorfail(1);
        $women = Womenlogistic::findorfail(1);
        $missions = Weletmission::all();
        $joinwilet = Joinwelet::findorfail(1);
        $broucher = Womenbroucher::findorfail(1);
        $group = Wiletgroup::findorfail(1);
        $rgfourums = Wiletrgforum::all();
        $bdfourums = Wiletbdforum::all();
        $ypbdfourums = Wiletypbdforum::all();
        $yprgfourums = Wiletyprgforum::all();
        $ypbroucher = Ypbroucher::findorfail(1);
        $ypgroup = Ypgroup::findorfail(1);
        $ypbenifits = Ypbenifit::findorfail(1);
        $ypwoverview =  Ypwjoin::findorfail(1); 
        $yptop = Yptop::findorfail(1);
        return view('backEnd.membership.membership',compact('overview','grade','benifits','conducts','membberfee','govtcharge','nongovtcharge','corporateover','cpmembers','corporatemid','women','missions','joinwilet','broucher','group','rgfourums','bdfourums','ypbdfourums','yprgfourums','ypbroucher','ypgroup','ypbenifits','ypwoverview','yptop'));
    }
    public function membertopupdate(Request $request){
    
        $data = Membershipover::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return response()->json($data);
    }
    public function ypwjoinupdate(Request $request){
    
        $data = Ypwjoin::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return response()->json($data);
    }
    public function updategrade(Request $request){
        if($request->file('image')){
            $find_image = Grade::find($request->id);
           $old_img = $find_image->image;
           if($old_img){
               unlink($old_img);
           }
           $find_image->delete();
           $image = $request->file('image');
           $new_name = rand() . '.' . $image->getClientOriginalExtension();
           $image->move(public_path('ciltimage'), $new_name);
           $data = new Grade();
           $data->title = $request->title;
           $data->afftitle = $request->afftitle;
           $data->affdescription = $request->affdescription;
           $data->memtitle = $request->memtitle;
           $data->memdescription = $request->memdescription;
           $data->cmtitle = $request->cmtitle;
           $data->cmdescription = $request->cmdescription;
           $data->cftitle = $request->cftitle;
           $data->cfdescription = $request->cfdescription;
           
           $data->id = 1;
           $data->image = 'ciltimage/'.$new_name;
           $data->save();
           return response()->json($data);
       }else{
       $data =  Grade::find(1);
       $data->title = $request->title;
       $data->afftitle = $request->afftitle;
           $data->affdescription = $request->affdescription;
           $data->memtitle = $request->memtitle;
           $data->memdescription = $request->memdescription;
           $data->cmtitle = $request->cmtitle;
           $data->cmdescription = $request->cmdescription;
           $data->cftitle = $request->cftitle;
           $data->cfdescription = $request->cfdescription;
       $data->id = 1;
       $data->save();
       return response()->json($data);
       }
    }
    public function updatebenifit(Request $request){
        if($request->file('image')){
             $find_image = Benifits::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $find_image->delete();
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data = new Benifits();
            $data->title = $request->title;
            $data->id = 1;
            $all_des = json_encode($request->program);
            $data->description = $all_des;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
        $data =  Benifits::find(1);
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->save();
        return response()->json($data);
        }
        
     }

     public function updateconduct(Request $request){
        if($request->file('image')){
             $find_image =  Conduct::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $find_image->delete();
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ciltimage'), $new_name);
            $data = new Conduct();
            $data->title = $request->title;
            $data->id = 1;
            $all_des = json_encode($request->program);
            $data->description = $all_des;
            $data->image = 'ciltimage/'.$new_name;
            $data->save();
            return response()->json($data);
        }else{
        $data =  Conduct::find(1);
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->save();
        return response()->json($data);
        }
        
     }

     public function updatefee(Request $request){
            $find_image = Memberfee::find($request->id);
            $find_image->delete();
            $data = new Memberfee();
            $data->title = $request->title;
            $data->subtitle = $request->subtitle;
            $data->id = 1;
            $all_des = json_encode($request->program);
            $data->description = $all_des;
            $data->save();
            return response()->json($data);
       
     }

     public function updategovtfee(Request $request){
        
        $data =  Govtcharge::find($request->id);
        $data->regfee = $request->regfee;
        $data->ann11 = $request->ann11;
        $data->ann12 = $request->ann12;
        $data->ann21 = $request->ann21;
        $data->ann22 = $request->ann22;
        $data->ann31 = $request->ann31;
        $data->ann32 = $request->ann32;
        $data->save();
        return response()->json($data);
   
   }
   public function updatenongovtfee(Request $request){
        
    $data =  Nongovtcharge::find($request->id);
    $data->regfee = $request->regfee;
    $data->ann11 = $request->ann11;
    $data->ann12 = $request->ann12;
    $data->ann21 = $request->ann21;
    $data->ann22 = $request->ann22;
    $data->ann31 = $request->ann31;
    $data->ann32 = $request->ann32;
    $data->save();
    return response()->json($data);

}
public function updatecorporateov(Request $request){
    
    $data = Corporatetop::find($request->id);
    $data->title = $request->title;
    $data->description = $request->description;
    $data->save();
    return response()->json($data);
}
public function updatecpmember(Request $request){
    if($request->file('image')){
         $find_image = Cpmember::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $find_image->delete();
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Cpmember();
        $data->title = $request->title;
        $data->bottomdescription = $request->bottomdescription;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Cpmember::find(1);
    $data->title = $request->title;
    $data->bottomdescription = $request->bottomdescription;
    $data->id = 1;
    $all_des = json_encode($request->program);
    $data->description = $all_des;
    $data->save();
    return response()->json($data);
    }
    
 }
 public function updatecorporatemid(Request $request){
    if($request->file('image')){
        $find_image = Corporatemiddle::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        // $find_image->delete();
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data =  Corporatemiddle::find(1);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Corporatemiddle::find(1);
    $data->title = $request->title;
    $data->description = $request->description;
    $data->save();
    return response()->json($data);
    }
    
 }
 public function updateyptop(Request $request){
    if($request->file('image')){
        $find_image = Yptop::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data =  Yptop::find(1);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Yptop::find(1);
    $data->title = $request->title;
    $data->description = $request->description;
    $data->save();
    return response()->json($data);
    }
    
 }

 public function updatewomenoverview(Request $request){
    if($request->file('image')){
        $find_image = Womenlogistic::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data =  Womenlogistic::find(1);
        $data->description = $request->description;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Womenlogistic::find(1);
    $data->description = $request->description;
    $data->save();
    return response()->json($data);
    }
    
 }
 public function storemission(Request $request){
    
    $data = new Weletmission();
    $data->title = $request->title;
    $data->description = $request->description;
    $data->save();
    return response()->json($data);
}
public function editmission($id){
    $boardmembers = Weletmission::find($id);
    return response()->json($boardmembers);
}
 
public function updatemission(Request $request){
    
        $data =  Weletmission::find($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
       return response()->json($data);

   
}
public function deletemission($id){
    $findmember = Weletmission::find($id);
   
     $findmember->delete();
}


public function updatejoinwilet(Request $request){
    if($request->file('image')){
        $find_image = Joinwelet::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data =  Joinwelet::find(1);
        $data->description = $request->description;
        $data->title = $request->title;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Joinwelet::find(1);
    $data->title = $request->title;
    $data->description = $request->description;
    $data->save();
    return response()->json($data);
    }
    
 }

 public function broucherupdate(Request $request){
    if($request->file('image')){
         $find_image = Womenbroucher::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $find_image->delete();
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Womenbroucher();
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Womenbroucher::find(1);
    $data->title = $request->title;
    $data->id = 1;
    $all_des = json_encode($request->program);
    $data->description = $all_des;
    $data->save();
    return response()->json($data);
    }
    
 }
 public function updategroup(Request $request){
    if($request->file('image')){
         $find_image =  Wiletgroup::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $find_image->delete();
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Wiletgroup();
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Wiletgroup::find(1);
    $data->title = $request->title;
    $data->id = 1;
    $all_des = json_encode($request->program);
    $data->description = $all_des;
    $data->save();
    return response()->json($data);
    }
    
 }

 //rg forum curd
 public function storergforum(Request $request){
    $image = $request->file('image');
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('ciltimage'), $new_name);
    $data = new Wiletrgforum();
    $data->name = $request->name;
    $data->designation = $request->designation;
    $data->email = $request->email;
    $data->country = $request->country;

    $data->image = 'ciltimage/'.$new_name;
    $data->save();
    return response()->json($data);
}
public function editrgforum($id){
    $boardmembers = Wiletrgforum::find($id);
    return response()->json($boardmembers);
}
public function rgforumupdate(Request $request){
    if($request->file('image')){
        $find_image = Wiletrgforum::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data =  Wiletrgforum::find($request->id);
         $data->image = 'ciltimage/'.$new_name;
         $data->name = $request->name;
         $data->designation = $request->designation;
         $data->email = $request->email;
         $data->country = $request->country;
         $data->save();
        return response()->json($data);
    }else{

        $data =  Wiletrgforum::find($request->id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->country = $request->country;
        $data->save();
       return response()->json($data);

    }
}
public function deletergforum($id){
    $findmember = Wiletrgforum::find($id);
    $old_img = $findmember->image;
     unlink($old_img);
     $findmember->delete();
}

 //endrg forum curd

 //bd forum curd
 public function storebdforum(Request $request){
    $image = $request->file('image');
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('ciltimage'), $new_name);
    $data = new Wiletbdforum();
    $data->name = $request->name;
    $data->designation = $request->designation;
    $data->email = $request->email;
    $data->country = $request->country;

    $data->image = 'ciltimage/'.$new_name;
    $data->save();
    return response()->json($data);
}
public function editbdforum($id){
    $boardmembers = Wiletbdforum::find($id);
    return response()->json($boardmembers);
}
public function bdforumupdate(Request $request){
    if($request->file('image')){
        $find_image = Wiletbdforum::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data =  Wiletbdforum::find($request->id);
         $data->image = 'ciltimage/'.$new_name;
         $data->name = $request->name;
         $data->designation = $request->designation;
         $data->email = $request->email;
         $data->country = $request->country;
         $data->save();
        return response()->json($data);
    }else{

        $data =  Wiletbdforum::find($request->id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->country = $request->country;
        $data->save();
       return response()->json($data);

    }
}
public function deletebdforum($id){
    $findmember = Wiletbdforum::find($id);
    $old_img = $findmember->image;
     unlink($old_img);
     $findmember->delete();
}

 //endbd forum curd

  //yp bd forum curd
  public function storeypbdforum(Request $request){
    $image = $request->file('image');
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('ciltimage'), $new_name);
    $data = new Wiletypbdforum();
    $data->name = $request->name;
    $data->designation = $request->designation;
    $data->email = $request->email;
    $data->country = $request->country;

    $data->image = 'ciltimage/'.$new_name;
    $data->save();
    return response()->json($data);
}
public function editypbdforum($id){
    $boardmembers = Wiletypbdforum::find($id);
    return response()->json($boardmembers);
}
public function ypbdforumupdate(Request $request){
    if($request->file('image')){
        $find_image = Wiletypbdforum::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data =  Wiletypbdforum::find($request->id);
         $data->image = 'ciltimage/'.$new_name;
         $data->name = $request->name;
         $data->designation = $request->designation;
         $data->email = $request->email;
         $data->country = $request->country;
         $data->save();
        return response()->json($data);
    }else{

        $data =  Wiletypbdforum::find($request->id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->country = $request->country;
        $data->save();
       return response()->json($data);

    }
}
public function deleteypbdforum($id){
    $findmember = Wiletypbdforum::find($id);
    $old_img = $findmember->image;
     unlink($old_img);
     $findmember->delete();
}

 //end yp bd forum curd

 //yp rg forum curd
 public function storeyprgforum(Request $request){
    $image = $request->file('image');
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('ciltimage'), $new_name);
    $data = new Wiletyprgforum();
    $data->name = $request->name;
    $data->designation = $request->designation;
    $data->email = $request->email;
    $data->country = $request->country;

    $data->image = 'ciltimage/'.$new_name;
    $data->save();
    return response()->json($data);
}
public function edityprgforum($id){
    $boardmembers = Wiletyprgforum::find($id);
    return response()->json($boardmembers);
}
public function yprgforumupdate(Request $request){
    if($request->file('image')){
        $find_image = Wiletyprgforum::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data =  Wiletyprgforum::find($request->id);
         $data->image = 'ciltimage/'.$new_name;
         $data->name = $request->name;
         $data->designation = $request->designation;
         $data->email = $request->email;
         $data->country = $request->country;
         $data->save();
        return response()->json($data);
    }else{

        $data =  Wiletyprgforum::find($request->id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->country = $request->country;
        $data->save();
       return response()->json($data);

    }
}
public function deleteyprgforum($id){
    $findmember = Wiletyprgforum::find($id);
    $old_img = $findmember->image;
     unlink($old_img);
     $findmember->delete();
}

 //end yp rg forum curd

 public function ypbroucherupdate(Request $request){
    if($request->file('image')){
         $find_image = Ypbroucher::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $find_image->delete();
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Ypbroucher();
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Ypbroucher::find(1);
    $data->title = $request->title;
    $data->id = 1;
    $all_des = json_encode($request->program);
    $data->description = $all_des;
    $data->save();
    return response()->json($data);
    }
    
 }

 public function updateypgroup(Request $request){
    if($request->file('image')){
         $find_image =  Ypgroup::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $find_image->delete();
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Ypgroup();
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Ypgroup::find(1);
    $data->title = $request->title;
    $data->id = 1;
    $all_des = json_encode($request->program);
    $data->description = $all_des;
    $data->save();
    return response()->json($data);
    }
    
 }

 public function updateypbenifit(Request $request){
    if($request->file('image')){
         $find_image = Ypbenifit::find($request->id);
        $old_img = $find_image->image;
        if($old_img){
            unlink($old_img);
        }
        $find_image->delete();
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ciltimage'), $new_name);
        $data = new Ypbenifit();
        $data->title = $request->title;
        $data->id = 1;
        $all_des = json_encode($request->program);
        $data->description = $all_des;
        $data->image = 'ciltimage/'.$new_name;
        $data->save();
        return response()->json($data);
    }else{
    $data =  Ypbenifit::find(1);
    $data->title = $request->title;
    $data->id = 1;
    $all_des = json_encode($request->program);
    $data->description = $all_des;
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
