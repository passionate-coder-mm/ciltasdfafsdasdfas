@extends('layouts.backEnd.admin_layout')
@section('member','active')
@section('ovr','active')
@section('title', 'CILT | Home | Main Sliders')
@section('content')
<section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title">Membership</h3>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">Overview top</a></li> 
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">Grade</a></li> 
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab3">Members Benifit</a></li> 
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab4">Conduct</a></li> 
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab5">Member Fees</a></li> 
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab6">Charge</a></li> 
            </ul>
            <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                        {!!Form::open(['class' =>'form-horizontal','id'=>'memberoverview','enctype'=>'multipart/form-data'])!!}
                        <div class="box-body">
                            <h3>Member ship overview</h3>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title" value="{{$overview->title}}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$overview->id}}">
               
                               </div>
                            </div>
                           
                            <div class="form-group">
                               <label for="description" class="col-sm-2 control-label">Description</label>
                               <div class="col-sm-8">
                               <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description" rows="8">{{$overview->description}}</textarea>
                               </div>
                           </div>
                            
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                        {!!Form::close()!!}          
                </div>
                <div id="tab2" class="tab-pane fade in ">
                        
                        {!!Form::open(['class' =>'form-horizontal','id'=>'grade','enctype'=>'multipart/form-data'])!!}
                        <div id='refreshtab4'>
                        <div class="box-body">
                              <h3>Membership Grade</h3>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title" value="{{$grade->title}}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$grade->id}}">
               
                               </div>
                            </div>
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label"></label>
                                    <div class="col-md-10">
                                    <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$grade->image)}}" alt="">
                                    </div>
                                  </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Image (600X341)</label>
                                <div class="col-sm-8">
                                <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Affiliate</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                <th width="45%">title</th>
                                                <th width="55%">description (66)</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class="day_no"><input type="text" class="form-control" name="afftitle" id="" value="{{$grade->afftitle}}" ></td>
                                                <td><textarea class="form-control" id="pro_description" name="affdescription" rows="4">{{$grade->affdescription}}</textarea></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Member</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                <th width="45%">title</th>
                                                <th width="55%">description (66)</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class="day_no"><input type="text" class="form-control" name="memtitle" value="{{$grade->memtitle}}" ></td>
                                                <td><textarea class="form-control" id="pro_description" name="memdescription" rows="4">{{$grade->memdescription}}</textarea></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Chartered Member</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                <th width="45%">title</th>
                                                <th width="55%">description (66)</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class="day_no"><input type="text" class="form-control" name="cmtitle" value="{{$grade->cmtitle}}" ></td>
                                                <td><textarea class="form-control" id="pro_description" name="cmdescription" rows="4">{{$grade->cmdescription}}</textarea></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Chartered Fellow</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                <th width="45%">title</th>
                                                <th width="55%">description (66)</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class="day_no"><input type="text" class="form-control" name="cftitle" value="{{$grade->cftitle}}" ></td>
                                                <td><textarea class="form-control" id="pro_description" name="cfdescription" rows="4">{{$grade->cfdescription}}</textarea></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </div>
                        {!!Form::close()!!} 
                </div>
                <div id="tab3" class="tab-pane fade in ">
                        @php
                        $allbenifits = json_decode($benifits->description);
                        // dd($allbenifits);
                        // exit();
                        $i = 0;
                      @endphp
                      {!!Form::open(['class' =>'form-horizontal','id'=>'benifits','enctype'=>'multipart/form-data'])!!}
                      <div id='refreshtab6'>
                      <div class="box-body">
                            <h3>Member Benifits</h3>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Title</label>
                              <div class="col-sm-8">
                              <input type="text" class="form-control" id="title" name="title" value="{{$benifits->title}}">
                              <input type="hidden" class="form-control" id="id" name="id" value="{{$benifits->id}}">
             
                             </div>
                          </div>
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label"></label>
                                  <div class="col-md-10">
                                  <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$benifits->image)}}" alt="">
                                  </div>
                                </div>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Image (600X341)</label>
                              <div class="col-sm-8">
                              <input type="file" class="form-control" id="image" name="image">
                              </div>
                          </div>
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Benifits</label>
                              <div class="benifitlist col-sm-8 " data-index_no="2000">
                                  <div class="benifititemWrapper">
                                        <table class="table table-bordered benifitmoreTable">
                                                <tr>
                                                    <th width="5%">Serial No</th>
                                                    <th width="40%">description</th>
                                                    <th width="15%">Option</th>
                                                </tr>
                                                 @foreach($allbenifits as $val)
                                                 <?php $i++ ?>
                                                    <tr class="item_tr single_list">
                                                        <td class="day_no">{{$i}}</td>
                                                    <td><textarea class="form-control" id="pro_description" name="program[{{$i}}][benifit]">{{$val->benifit}}</textarea><br></td>
                                                        <td><span class="removebenifit" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                      <span  class="add_morebenifit" style="background: #28d19c;
                                                                              padding: 8px 21px;
                                                                              color: #fff;
                                                                              border-radius: 8%;text-decoration: none; margin-bottom: 10px;cursor:pointer;">+</span><br><br>
                                  </div>
                              </div>
                          </div>     
                      </div>
                      <div class="box-footer">
                          <button type="submit" class="btn btn-info">Update</button>
                      </div>
                  </div>
                      {!!Form::close()!!}  
                </div>
                <div id="tab4" class="tab-pane fade in ">
                        @php
                        $allconducts = json_decode($conducts->description);
                        // dd($allconducts);
                        // exit();
                        $i = 0;
                      @endphp
                      {!!Form::open(['class' =>'form-horizontal','id'=>'conducts','enctype'=>'multipart/form-data'])!!}
                      <div id='refreshtab6'>
                      <div class="box-body">
                            <h3>Code Of Conducts</h3>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Title</label>
                              <div class="col-sm-8">
                              <input type="text" class="form-control" id="title" name="title" value="{{$conducts->title}}">
                              <input type="hidden" class="form-control" id="id" name="id" value="{{$conducts->id}}">
             
                             </div>
                          </div>
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label"></label>
                                  <div class="col-md-10">
                                  <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$conducts->image)}}" alt="">
                                  </div>
                                </div>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Image (600X341)</label>
                              <div class="col-sm-8">
                              <input type="file" class="form-control" id="image" name="image">
                              </div>
                          </div>
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Conducts</label>
                              <div class="conductlist col-sm-8 " data-index_no="2000">
                                  <div class="conductitemWrapper">
                                        <table class="table table-bordered conductmoreTable">
                                                <tr>
                                                    <th width="5%">Serial No</th>
                                                    <th width="95%">description</th>
                                                    
                                                </tr>
                                                 @foreach($allconducts as $val)
                                                 <?php $i++ ;
                                                
                                                 ?>
                                                    <tr class="item_tr single_list">
                                                    <td class="day_no">{{$i}}</td>
                                                    <td><textarea class="form-control" id="editor{{$i}}" name="program[{{$i}}][conduct]" rows="4">{{$val->conduct}}</textarea><br></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                  </div>
                              </div>
                          </div>     
                      </div>
                      <div class="box-footer">
                          <button type="submit" class="btn btn-info">Update</button>
                      </div>
                  </div>
                      {!!Form::close()!!}  
                </div>
                <div id="tab5" class="tab-pane fade in ">
                        @php
                        $allfees = json_decode($membberfee->description);
                        // dd($allbenifits);
                        // exit();
                        $i = 0;
                      @endphp
                      {!!Form::open(['class' =>'form-horizontal','id'=>'fees','enctype'=>'multipart/form-data'])!!}
                      <div id=''>
                      <div class="box-body">
                            <h3>Membership Fee</h3>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Title</label>
                              <div class="col-sm-8">
                              <input type="text" class="form-control" id="title" name="title" value="{{$membberfee->title}}">
                              <input type="hidden" class="form-control" id="id" name="id" value="{{$membberfee->id}}">
             
                             </div>
                          </div>
                          <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Sub Title</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$membberfee->subtitle}}">
               
                               </div>
                            </div>
                          
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Fees Text (18)</label>
                              <div class="feelist col-sm-8 " data-index_no="2000">
                                  <div class="feeitemWrapper">
                                        <table class="table table-bordered feemoreTable">
                                                <tr>
                                                    <th width="5%">Serial No</th>
                                                    <th width="40%">description</th>
                                                    <th width="15%">Option</th>
                                                </tr>
                                                 @foreach($allfees as $val)
                                                 <?php $i++ ?>
                                                    <tr class="item_tr single_list">
                                                        <td class="day_no">{{$i}}</td>
                                                    <td><textarea class="form-control" id="pro_description" name="program[{{$i}}][fee]">{{$val->fee}}</textarea><br></td>
                                                        <td><span class="removefee" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                      <span  class="add_morefee" style="background: #28d19c;
                                                                              padding: 8px 21px;
                                                                              color: #fff;
                                                                              border-radius: 8%;text-decoration: none; margin-bottom: 10px;cursor:pointer;">+</span><br><br>
                                  </div>
                              </div>
                          </div>     
                      </div>
                      <div class="box-footer">
                          <button type="submit" class="btn btn-info">Update</button>
                      </div>
                  </div>
                      {!!Form::close()!!}  
                </div>
                <div id="tab6" class="tab-pane fade in ">
                        
                        {!!Form::open(['class' =>'form-horizontal','id'=>'govtcharge','enctype'=>'multipart/form-data'])!!}
                        <div id=''>
                        <div class="box-body">
                              <h3>Government Charge</h3>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Registration Fee</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="regfee" name="regfee" value="{{$govtcharge->regfee}}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$govtcharge->id}}">
               
                               </div>
                            </div>
                        
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">First</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                <th width="45%">First Amount</th>
                                                <th width="55%">Secound Amount</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class=""><input type="text" class="form-control" name="ann11" id="ann11" value="{{$govtcharge->ann11}}" ></td>
                                                <td class=""><input type="text" class="form-control" name="ann12" id="ann12" value="{{$govtcharge->ann12}}" ></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Second</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                    <th width="45%">First Amount</th>
                                                    <th width="55%">Secound Amount</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class="day_no"><input type="text" class="form-control" name="ann21" value="{{$govtcharge->ann21}}" ></td>
                                                <td><input class="form-control" id="ann22" name="ann22" rows="4"  value="{{$govtcharge->ann22}}"></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Third</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                    <th width="45%">First Amount</th>
                                                    <th width="55%">Secound Amount</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class="day_no"><input type="text" class="form-control" name="ann31" value="{{$govtcharge->ann31}}" ></td>
                                                <td><input class="form-control" id="ann22" name="ann32" rows="4"  value="{{$govtcharge->ann32}}"></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>   
                                 
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </div>
                        {!!Form::close()!!} 

                        {!!Form::open(['class' =>'form-horizontal','id'=>'nogovtcharge','enctype'=>'multipart/form-data'])!!}
                        <div id=''>
                        <div class="box-body">
                              <h3>Non Government Charge</h3>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Registration Fee</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="regfee" name="regfee" value="{{$nongovtcharge->regfee}}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$nongovtcharge->id}}">
               
                               </div>
                            </div>
                        
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">First</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                <th width="45%">First Amount</th>
                                                <th width="55%">Secound Amount</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class=""><input type="text" class="form-control" name="ann11" id="ann11" value="{{$nongovtcharge->ann11}}" ></td>
                                                <td class=""><input type="text" class="form-control" name="ann12" id="ann12" value="{{$nongovtcharge->ann12}}" ></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Second</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                    <th width="45%">First Amount</th>
                                                    <th width="55%">Secound Amount</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class="day_no"><input type="text" class="form-control" name="ann21" value="{{$nongovtcharge->ann21}}" ></td>
                                                <td><input class="form-control" id="ann22" name="ann22" rows="4"  value="{{$nongovtcharge->ann22}}"></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Third</label>
                                <div class="list col-sm-8 " data-index_no="1000">
                                    <div class="itemWrapper">
                                        <table class="table table-bordered moreTable">
                                            <tr>
                                                    <th width="45%">First Amount</th>
                                                    <th width="55%">Secound Amount</th>
                                            </tr>
                                                <tr class="item_tr single_list">
                                                <td class="day_no"><input type="text" class="form-control" name="ann31" value="{{$nongovtcharge->ann31}}" ></td>
                                                <td><input class="form-control" id="ann22" name="ann32" rows="4"  value="{{$nongovtcharge->ann32}}"></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>   
                                 
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </div>
                        {!!Form::close()!!} 
                </div>
           </div>
        </div>
</section>
<script>
    
// $('#benifits').validate({ 
//       rules: {
//             title: 
//             {
//               required: true,
              
//             },
//       },
      
//       highlight: function(element) {
//           $(element).parent().addClass('has-error');
//       },
//       unhighlight: function(element) {
//           $(element).parent().removeClass('has-error');
//       },
//    })
//    $(document).on('submit','#ypbenifits',function(e){
//     e.preventDefault();
//         //var data = $(this).serialize();
//     if ($('#ypbenifits').valid()) {
//     $.ajax({
//         url:"/admin/membership/updateypbenifit",
//         method:"POST",
//     data:new FormData(this),
//     dataType:'JSON',
//     contentType: false,
//     cache: false,
//     processData: false,
//         success:function(data)
//         {
//         // console.log(data);
//         toastr.options = {
//                 "debug": false,
//                 "positionClass": "toast-bottom-right",
//                 "onclick": null,
//                 "fadeIn": 300,
//                 "fadeOut": 1000,
//                 "timeOut": 5000,
//                 "extendedTimeOut": 1000
//                 };
//         toastr.success('Data Updated Successfully');
            

//         $("#tab19").load(location.href + " #tab19");
//         }
        
//     });
//     }
//   })
   
   $('#nogovtcharge').validate({ 
      rules: {
        regfee: 
            {
              required: true,
              
            },
            
            ann11: 
            {
              required: true,
              
            },
            ann12: 
            {
              required: true,
              
            },
            ann21: 
            {
              required: true,
              
            },
            ann22: 
            {
              required: true,
              
            },
            ann31: 
            {
              required: true,
              
            },
            ann32: 
            {
              required: true,
              
            },
            
            
            
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   })
   $(document).on('submit','#nogovtcharge',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#nogovtcharge').valid()) {
    $.ajax({
        url:"/admin/membership/updatenongovtfee",
        method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType: false,
    cache: false,
    processData: false,
        success:function(data)
        {
        // console.log(data);
        toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
                };
        toastr.success('Data Updated Successfully');
            

         $("#tab6").load(location.href + " #tab6");
        }
        
    });
    }
  })
    $('#govtcharge').validate({ 
      rules: {
        regfee: 
            {
              required: true,
              
            },
            
            ann11: 
            {
              required: true,
              
            },
            ann12: 
            {
              required: true,
              
            },
            ann21: 
            {
              required: true,
              
            },
            ann22: 
            {
              required: true,
              
            },
            ann31: 
            {
              required: true,
              
            },
            ann32: 
            {
              required: true,
              
            },
            
            
            
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   })
   $(document).on('submit','#govtcharge',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#govtcharge').valid()) {
    $.ajax({
        url:"/admin/membership/updategovtfee",
        method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType: false,
    cache: false,
    processData: false,
        success:function(data)
        {
        // console.log(data);
        toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
                };
        toastr.success('Data Updated Successfully');
            

         $("#tab6").load(location.href + " #tab6");
        }
        
    });
    }
  })
    $('#fees').validate({ 
      rules: {
            title: 
            {
              required: true,
              
            },
            
            
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   })
    $(function () {
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('editor2')
    CKEDITOR.replace('editor3')
    CKEDITOR.replace('editor4')
    CKEDITOR.replace('editor5')
    CKEDITOR.replace('editor6')
    });
    $('#conducts').validate({ 
      rules: {
            title: 
            {
              required: true,
              
            },
            
            
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   })
   $(document).on('submit','#conducts',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#conducts').valid()) {
    $.ajax({
        url:"/admin/membership/updateconduct",
        method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType: false,
    cache: false,
    processData: false,
        success:function(data)
        {
        // console.log(data);
        toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
                };
        toastr.success('Data Updated Successfully');
            

        // $("#tab4").load(location.href + " #tab4");
        }
        
    });
    }
  })

  $(document).on('click', '.add_morefee', function () {
     //alert('hi');
    var index = $('.feelist').data('index_no');
    $('.feelist').data('index_no', index + 1);
    var html = $('.feeitemWrapper .item_tr:last').clone().find('.form-control').each(function () {
        this.name = this.name.replace(/\d+/, index+1);
        this.id = this.id.replace(/\d+/, index+1);
        this.value = '';
    }).end();
    $('.feemoreTable').append(html);
    var rowCount = $('.feemoreTable tr').length;
    $(this).closest('.feeitemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
    $(this).closest('.feeitemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
});
$(document).on('click', '.removefee', function () {
    var obj=$(this);
    var count= $('.single_list').length;
    //alert(count);
    if(count > 1) {
        if(obj.closest('.single_list').is($(this).closest('.feeitemWrapper').find('.single_list:last'))){
            obj.closest('.single_list').remove();
        }else{
            alert('You can only remove the last one!');
        }
    }
});
$('#fees').validate({ 
      rules: {
            title: 
            {
              required: true,
              
            },
            
            
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   })
$(document).on('submit','#fees',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#fees').valid()) {
    $.ajax({
        url:"/admin/membership/updatefee",
        method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType: false,
    cache: false,
    processData: false,
        success:function(data)
        {
        // console.log(data);
        toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
                };
        toastr.success('Data Updated Successfully');
            

         $("#tab5").load(location.href + " #tab5");
        }
        
    });
    }
  })
     $('#benifits').validate({ 
      rules: {
            title: 
            {
              required: true,
              
            },
            
            
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   })
   $(document).on('submit','#benifits',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#benifits').valid()) {
    $.ajax({
        url:"/admin/membership/updatebenifit",
        method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType: false,
    cache: false,
    processData: false,
        success:function(data)
        {
        // console.log(data);
        toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
                };
        toastr.success('Data Updated Successfully');
            

        $("#tab3").load(location.href + " #tab3");
        }
        
    });
    }
  })
    $(document).on('click', '.add_morebenifit', function () {
     //alert('hi');
    var index = $('.benifitlist').data('index_no');
    $('.benifitlist').data('index_no', index + 1);
    var html = $('.benifititemWrapper .item_tr:last').clone().find('.form-control').each(function () {
        this.name = this.name.replace(/\d+/, index+1);
        this.id = this.id.replace(/\d+/, index+1);
        this.value = '';
    }).end();
    $('.benifitmoreTable').append(html);
    var rowCount = $('.benifitmoreTable tr').length;
    $(this).closest('.benifititemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
    $(this).closest('.benifititemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
});
$(document).on('click', '.removebenifit', function () {
    var obj=$(this);
    var count= $('.single_list').length;
    //alert(count);
    if(count > 1) {
        if(obj.closest('.single_list').is($(this).closest('.benifititemWrapper').find('.single_list:last'))){
            obj.closest('.single_list').remove();
        }else{
            alert('You can only remove the last one!');
        }
    }
});
       $('#grade').validate({ 
      rules: {
            title: 
            {
              required: true,
              
            },
            afftitle: 
            {
              required: true,
              
            },
            affdescription: 
            {
              required: true,
              
            },
            memtitle: 
            {
              required: true,
              
            },
            memdescription: 
            {
              required: true,
              
            },
            cmtitle: 
            {
              required: true,
              
            },
            cmdescription: 
            {
              required: true,
              
            },
            cftitle: 
            {
              required: true,
              
            },
            cfdescription: 
            {
              required: true,
              
            },
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   })
    $(document).on('submit','#grade',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#grade').valid()) {
    $.ajax({
        url:"/admin/membership/updategrade",
        method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType: false,
    cache: false,
    processData: false,
        success:function(data)
        {
        // console.log(data);
        toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
                };
        toastr.success('Data Updated Successfully');
            

        $("#tab2").load(location.href + " #tab2");
        }
        
    });
    }
  })
 
     $('#memberoverview').validate({ 
      rules: {
            title: 
            {
              required: true,
              
            },
            description: 
            {
              required: true,
              
            },
            
            
            
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
   })
   $(document).on('submit','#memberoverview',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#memberoverview').valid()) {
    $.ajax({
        url:"/admin/membership/membertopupdate",
        method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType: false,
    cache: false,
    processData: false,
        success:function(data)
        {
        // console.log(data);
        toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
                };
        toastr.success('Data Updated Successfully');
            

         $("#tab1").load(location.href + " #tab1");
        }
        
    });
    }
  })
</script>
@endsection