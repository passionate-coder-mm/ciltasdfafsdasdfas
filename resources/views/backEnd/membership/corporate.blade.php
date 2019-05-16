@extends('layouts.backEnd.admin_layout')
@section('member','active')
@section('cp','active')
@section('title', 'CILT | Home | Corporate')
@section('content')
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Corporate Membership</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
        </div>
        <ul class="nav nav-tabs">
                <li class="active commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab1">Corporate Top</a></li> 
                <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab2">Corporate Middle</a></li>  
                <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab3">Corporate Membership</a></li> 
    </ul>
        <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                        {!!Form::open(['class' =>'form-horizontal','id'=>'corporateov','enctype'=>'multipart/form-data'])!!}
                        <div class="box-body">
                            <h3>Corporate overview</h3>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title" value="{{$corporateover->title}}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$corporateover->id}}">
               
                               </div>
                            </div>
                           
                            <div class="form-group">
                               <label for="description" class="col-sm-2 control-label">Description</label>
                               <div class="col-sm-8">
                               <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description" rows="6">{{$corporateover->description}}</textarea>
                               </div>
                           </div>
                            
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                        {!!Form::close()!!}    
                        <script>
                              $('#corporateov').validate({ 
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
                                $(document).on('submit','#corporateov',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                    if ($('#corporateov').valid()) {
                                    $.ajax({
                                        url:"/admin/membership/updatecorporateov",
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
                        </script>      
                </div>
                <div id="tab2" class="tab-pane fade in">
                        {!!Form::open(['class' =>'form-horizontal','id'=>'corporatemid','enctype'=>'multipart/form-data'])!!}
                        <div class="box-body">
                            <h3>Corporate Middle</h3>
                            
                           
                            <div class="form-group">
                               <label for="description" class="col-sm-2 control-label">Description</label>
                               <div class="col-sm-8">
                               <textarea type="text" class="form-control" id="editor1"  name="description" placeholder="Enter Image Description" rows="6">{{$corporatemid->description}}</textarea>
                               </div>
                           </div>
                        <div class="form-group" id="corpref">
                                <label for="title" class="col-sm-2 control-label"></label>
                                <div class="col-md-10">
                                <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$corporatemid->image)}}" alt="">
                                </div>
                              </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                           <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Wilet Title</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title" value="{{$corporatemid->title}}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$corporatemid->id}}">
               
                               </div>
                            </div>
                            
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                        {!!Form::close()!!} 
                        <script>
                            $(function () {
                                    CKEDITOR.replace('editor1')
                                
                                    });
                               $('#corporatemid').validate({ 
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
                                    $(document).on('submit','#corporatemid',function(e){
                                        e.preventDefault();
                                            //var data = $(this).serialize();
                                        if ($('#corporatemid').valid()) {
                                        $.ajax({
                                            url:"/admin/membership/updatecorporatemid",
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
                                                

                                            $("#corpref").load(location.href + " #corpref");
                                            }
                                            
                                        });
                                        }
                                    })
                        </script>
                </div>
                <div id="tab3" class="tab-pane fade in ">
                        @php
                        $alladvantage = json_decode($cpmembers->description);
                        // dd($allbenifits);
                        // exit();
                        $i = 0;
                      @endphp
                      {!!Form::open(['class' =>'form-horizontal','id'=>'cpmember','enctype'=>'multipart/form-data'])!!}
                      <div id=''>
                      <div class="box-body">
                            <h3>Corporte Membership</h3>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Title</label>
                              <div class="col-sm-8">
                              <input type="text" class="form-control" id="title" name="title" value="{{$cpmembers->title}}">
                              <input type="hidden" class="form-control" id="id" name="id" value="{{$cpmembers->id}}">
             
                             </div>
                          </div>
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label"></label>
                                  <div class="col-md-10">
                                  <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$cpmembers->image)}}" alt="">
                                  </div>
                                </div>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Image</label>
                              <div class="col-sm-8">
                              <input type="file" class="form-control" id="image" name="image">
                              </div>
                          </div>
                          <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Bottom text</label>
                                <div class="col-sm-8">
                                <textarea type="text" class="form-control" id="bottomdescription" name="bottomdescription" rows="8">{{$cpmembers->bottomdescription}}</textarea>
               
                               </div>
                            </div>
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Advantages</label>
                              <div class="cplist col-sm-8" data-index_no="2000">
                                  <div class="cpitemWrapper">
                                        <table class="table table-bordered cpmoreTable">
                                                <tr>
                                                    <th width="5%">Serial No</th>
                                                    <th width="40%">description</th>
                                                    <th width="15%">Option</th>
                                                </tr>
                                                 @foreach($alladvantage as $val)
                                                 <?php $i++ ?>
                                                    <tr class="item_tr single_list">
                                                        <td class="day_no">{{$i}}</td>
                                                    <td><textarea class="form-control" id="pro_description" name="program[{{$i}}][advantage]">{{$val->advantage}}</textarea><br></td>
                                                        <td><span class="removecp" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                      <span  class="add_morecp" style="background: #28d19c;
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
                             $('#cpmember').validate({ 
                                        rules: {
                                                title: 
                                                {
                                                required: true,
                                                
                                                },
                                                bottomdescription: 
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
                                    $(document).on('click', '.add_morecp', function () {
                                        //alert('hi');
                                        var index = $('.cpist').data('index_no');
                                        $('.feelist').data('index_no', index + 1);
                                        var html = $('.cpitemWrapper .item_tr:last').clone().find('.form-control').each(function () {
                                            this.name = this.name.replace(/\d+/, index+1);
                                            this.id = this.id.replace(/\d+/, index+1);
                                            this.value = '';
                                        }).end();
                                        $('.cpmoreTable').append(html);
                                        var rowCount = $('.cpmoreTable tr').length;
                                        $(this).closest('.cpitemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
                                        $(this).closest('.cpitemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
                                    });
                                    $(document).on('click', '.removecp', function () {
                                        var obj=$(this);
                                        var count= $('.single_list').length;
                                        //alert(count);
                                        if(count > 1) {
                                            if(obj.closest('.single_list').is($(this).closest('.cpitemWrapper').find('.single_list:last'))){
                                                obj.closest('.single_list').remove();
                                            }else{
                                                alert('You can only remove the last one!');
                                            }
                                        }
                                    });
                                    $(document).on('submit','#cpmember',function(e){
                                        e.preventDefault();
                                            //var data = $(this).serialize();
                                        if ($('#cpmember').valid()) {
                                        $.ajax({
                                            url:"/admin/membership/updatecpmember",
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
</section>  
@endsection