@extends('layouts.backEnd.admin_layout')
@section('ed','active')
@section('kn','active')
@section('title', 'CILT | Education | Knowledge')
@section('content')
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Knowledge Center</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
        </div>
        <ul class="nav nav-tabs">
                <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">knowledge Top </a></li>
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">Logistics And Transport</a></li>
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab3">Broucher</a></li>
                       
        </ul>
        <div class="tab-content">                        
            <div id="tab1" class="tab-pane fade in active ">
                {!!Form::open(['class' =>'form-horizontal','id'=>'knowledgeoverview','enctype'=>'multipart/form-data'])!!}
                 <div class="box-body">
                       <h3>knowledge Overview</h3>
                     <div class="form-group">
                         <label for="title" class="col-sm-2 control-label">Title</label>
                         <div class="col-sm-8">
                         <input type="text" class="form-control" id="title" name="title" value="{{$konwledgeTop->title}}">
                         <input type="hidden" class="form-control" id="id" name="id" value="{{$konwledgeTop->id}}">
        
                        </div>
                     </div>
                    
                     <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                        <textarea type="text" class="form-control"  name="description" rows="10" placeholder="Enter Image Description" rows="6">{{$konwledgeTop->description}}</textarea>
                        </div>
                    </div>
                     
                 </div>
                 <div class="box-footer">
                     <button type="submit" class="btn btn-info">Update</button>
                 </div>
                 {!!Form::close()!!}
                <script>
                      $('#knowledgeoverview').validate({ 
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
                    });
                    $(document).on('submit','#knowledgeoverview',function(e){
                        e.preventDefault();
                            //var data = $(this).serialize();
                        if ($('#knowledgeoverview').valid()) {
                        $.ajax({
                            url:"/admin/courses/knowledgeupdate",
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
               </div>
               <div id="tab2" class="tab-pane fade in">
                    {!!Form::open(['class' =>'form-horizontal','id'=>'logisticform','enctype'=>'multipart/form-data'])!!}
                    <div class="box-body">
                            <h3>Logistics And Transport </h3>
                            
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" value="{{$logistic->title}}">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$logistic->id}}">
       
                           </div>
                        </div>
                        <div class="form-group">
                         <label for="title" class="col-sm-2 control-label">Video link</label>
                         <div class="col-sm-8">
                         <input type="text" class="form-control" id="videolink" name="videolink" value="{{$logistic->videolink}}">
                        </div>
                     </div>
                       
                        <div class="form-group">
                           <label for="description" class="col-sm-2 control-label">Description</label>
                           <div class="col-sm-8">
                           <textarea type="text" class="form-control"  name="description"  rows="10" placeholder="Enter Image Description">{{$logistic->description}}</textarea>
                           </div>
                       </div>
                       <div class="form-group">
                               <label for="title" class="col-sm-2 control-label"></label>
                               <div class="col-md-10">
                               <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$logistic->image)}}" alt="">
                               </div>
                             </div>
                       <div class="form-group">
                           <label for="title" class="col-sm-2 control-label">Image</label>
                           <div class="col-sm-8">
                           <input type="file" class="form-control" id="image" name="image">
                           </div>
                       </div>
                        
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                    {!!Form::close()!!}
                    <script>
                         
                            $('#logisticform').validate({ 
                            rules: {
                                    title: 
                                    {
                                    required: true,
                                    
                                    },
                                    videolink: 
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
                            });
                        
                        $(document).on('submit','#logisticform',function(e){
                            e.preventDefault();
                                //var data = $(this).serialize();
                                if ($('#logisticform').valid()) {
                                $.ajax({
                                    url:"/admin/courses/logisticupdate",
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
                      
                                            
                   </script>
                 </div>
                 <div id="tab3" class="tab-pane fade in ">
                        @php
                              $description = json_decode($broucher->description);
                                $i = 0;
                              @endphp
                              {!!Form::open(['class' =>'form-horizontal','id'=>'broucher','enctype'=>'multipart/form-data'])!!}
                              <div id='refreshtab5'>
                              <div class="box-body">
                                    <h3>Brouchure</h3>
                                  <div class="form-group">
                                      <label for="title" class="col-sm-2 control-label">Title</label>
                                      <div class="col-sm-8">
                                      <input type="text" class="form-control" id="title" name="title" value="{{$broucher->title}}">
                                      <input type="hidden" class="form-control" id="id" name="id" value="{{$broucher->id}}">
                     
                                     </div>
                                  </div>
                                  <div class="form-group">
                                          <label for="title" class="col-sm-2 control-label"></label>
                                          <div class="col-md-10">
                                          <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$broucher->image)}}" alt="">
                                          </div>
                                        </div>
                                  <div class="form-group">
                                      <label for="title" class="col-sm-2 control-label">Image</label>
                                      <div class="col-sm-8">
                                      <input type="file" class="form-control" id="image" name="image">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                          <label for="title" class="col-sm-2 control-label">Description</label>
                                      <div class="list col-sm-8 " data-index_no="1000">
                                          <div class="itemWrapper">
                                              <table class="table table-bordered moreTable">
                                                  <tr>
                                                      <th width="5%">Serial No</th>
                                                      <th width="40%">description</th>
                                                      <th width="15%">Option</th>
                                                  </tr>
                                                   @foreach($description as $val)
                                                   <?php $i++ ?>
                                                      <tr class="item_tr single_list">
                                                          <td class="day_no">{{$i}}</td>
                                                      <td><textarea class="form-control" id="pro_description" name="program[{{$i}}][description]">{{$val->description}}</textarea><br></td>
                                                          {{-- <input type="hidden" name="program[0][day]" class="form-control dayval" value="1"> --}}
                                                          <td><span class="remove" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                      </tr>
                                                  @endforeach
                                              </table>
                                              <span  class="add_more" style="background: #28d19c;
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
                             <script>
                                  $(document).on('click', '.add_more', function () {
                                    var index = $('.list').data('index_no');
                                    $('.list').data('index_no', index + 1);
                                    var html = $('.itemWrapper .item_tr:last').clone().find('.form-control').each(function () {
                                        this.name = this.name.replace(/\d+/, index+1);
                                        this.id = this.id.replace(/\d+/, index+1);
                                        this.value = '';
                                    }).end();
                                    $('.moreTable').append(html);
                                    var rowCount = $('.moreTable tr').length;
                                    $(this).closest('.itemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
                                    $(this).closest('.itemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
                                });
                                $(document).on('click', '.remove', function () {
                                    var obj=$(this);
                                    var count= $('.single_list').length;
                                    // alert(count);
                                    if(count > 1) {
                                        if(obj.closest('.single_list').is($(this).closest('.itemWrapper').find('.single_list:last'))){
                                            obj.closest('.single_list').remove();
                                        }else{
                                            alert('You can only remove the last one!');
                                        }
                                    }
                                });

                                 $('#broucher').validate({ 
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
                                });
                                $(document).on('submit','#broucher',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                    if ($('#broucher').valid()) {
                                    $.ajax({
                                        url:"/admin/courses/broucherupdate",
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
                            </script>
                     </div>
            </div>
        </div>
    </div>
</section>
@endsection