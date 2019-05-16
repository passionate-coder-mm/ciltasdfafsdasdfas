@extends('layouts.backEnd.admin_layout')
@section('member','active')
@section('wilet','active')
@section('title', 'CILT | Membership | Wilet')
@section('content')
<section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title">Wilet Options</h3>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
            </div>
            <ul class="nav nav-tabs">
                    <li class="active commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab1">Women And Logistic</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab2">Welet Mission Vission</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab3">Join Welet With Image</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab4">Broucher</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab5">Wilates Group</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab6">Wilates Regional Forum</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab7">Wilates Bangladeshi Forum</a></li>
    
            </ul>
            <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                            {!!Form::open(['class' =>'form-horizontal','id'=>'womenoverview','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                                <h3>Women and Logistic overview</h3>
                                <div class="form-group">
                                   <label for="description" class="col-sm-2 control-label">Description</label>
                                   <div class="col-sm-8">
                                   <textarea type="text" class="form-control"  name="description" id="editor1" placeholder="Enter Image Description" rows="6">{{$women->description}}</textarea>
                                   <input type="hidden" class="form-control" id="id" name="id" value="{{$women->id}}">
                               </div>
                               </div>
                               <div class="form-group" id='refresh1'>
                                <label for="title" class="col-sm-2 control-label"></label>
                                <div class="col-md-10">
                                <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$women->image)}}" alt="">
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
                                $(function () {
                                    CKEDITOR.replace('editor1')
                                    CKEDITOR.replace('editor2')
                                   
                                    });
                                   $('#womenoverview').validate({ 
                                    rules: {
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
                                $(document).on('submit','#womenoverview',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                    if ($('#womenoverview').valid()) {
                                    $.ajax({
                                        url:"/admin/membership/updatewomenoverview",
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
                                            

                                        $("#refresh1").load(location.href + " #refresh1");
                                        }
                                        
                                    });
                                    }
                                })
                            </script>       
                    </div>
                    <div id="tab2" class="tab-pane fade in">
                            {!!Form::open(['class' =>'form-horizontal','id'=>'mission','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                                <h3>Wilet Mission Vision</h3>
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter name">
                                  </div>
                                </div>
                                
                            
                             <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description (34)</label>
                                <div class="col-sm-8">
                                <textarea type="text" class="form-control" id="description"  name="description" placeholder="Enter  Description" rows="6"></textarea>
                                </div>
                            </div>
                           
                                
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                            {!!Form::close()!!}
                            <div class="box-body">
                                    <h3>Mission Vision List</h3>
                                    <table id="example1" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th width="25%">Title</th>
                                        <th width="35%">Description</th>
                                        <th width="20%">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody class='mission'>
                                        @foreach($missions as $val)
                                            <tr class='unqmission{{$val->id}}'>
                                            <td>{{$val->title}}</td>      
                                            <td>{!! str_limit($val->description, $limit =100, $end = '..')!!}</td>                   
                                                <td>
                                                <a data-id ="{{$val->id}}" data-toggle="modal" data-target="#missionModal" class="editmission"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                <a class="deletemission" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                </td>
                                                </tr>
                                            @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal fade" id="missionModal">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title">Edit Mission</h4>
                                            </div>
                                              <div class="modal-body">
                                                    {!!Form::open(['class' =>'form-horizontal','id'=>'missionupdate','enctype'=>'multipart/form-data'])!!}
                                                    <div class="box-body">
                                                        <h3>Mission Vision</h3>
                                                        <div class="form-group">
                                                            <label for="title" class="col-sm-2 control-label">Title</label>
                                                            <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter name">
                                                            <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter name">
                                                          </div>
                                                        </div>
                                                        
                                                    
                                                     <div class="form-group">
                                                        <label for="description" class="col-sm-2 control-label">Description (34)</label>
                                                        <div class="col-sm-8">
                                                        <textarea type="text" class="form-control" id="description"  name="description" placeholder="Enter  Description" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                  
                                                    </div>
                                                    <div class="box-footer">
                                                        <button type="submit" class="btn btn-info">Update</button>
                                                    </div>
                                                    {!!Form::close()!!}
                                            </div>
                                          </div>
                                       </div>
                                </div> 
                            <script>
                                  $('#mission').validate({ 
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
                                        $(document).on('submit','#mission',function(e){
                                            e.preventDefault();
                                                //var data = $(this).serialize();
                                            if ($('#mission').valid()) {
                                            $.ajax({
                                                url:"/admin/membership/storemission",
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
                                                toastr.success('Data Inserted Successfully');
                                                    
                                                $('#mission').trigger('reset');
                                                $(".mission").prepend(`<tr class="unqmission`+data.id+`">
                                                            <td>`+data.title+`</td>      
                                                            <td>`+data.description+`</td>                   
                                                                <td>
                                                                    <a data-id ="`+data.id+`" data-toggle="modal" data-target="#missionModal" class="editmission"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                                <a class="deletemission" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                                </td>
                                                </tr>`);
                                        

                                                }
                                                
                                            });
                                            }
                                        })

                                        $('#missionupdate').validate({ 
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

                                        $(document).on('click','.editmission',function(){
                                            //alert(id);
                                            var id = $(this).data('id');
                                            $.get('/admin/membership/editmission/'+id,function(data){
                                            var img = data.image;
                                            var srcimg='/'+img;
                                            $('#missionupdate').find('#id').val(data.id);
                                            $('#missionupdate').find('#title').val(data.title);
                                            $('#missionupdate').find('#description').val(data.description);
                                            // console.log(data);
                                            })
                                        })

                                        $(document).on('submit','#missionupdate',function(e){
                                            e.preventDefault();
                                                //var data = $(this).serialize();
                                                if ($('#missionupdate').valid()) {
                                                $.ajax({
                                                    url:"/admin/membership/updatemission",
                                                    method:"POST",
                                                    data:new FormData(this),
                                                    dataType:'JSON',
                                                    contentType: false,
                                                    cache: false,
                                                    processData: false,
                                                    success:function(data)
                                                    {
                                                    //console.log(data);
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
                                                        $('.unqmission'+data.id).replaceWith(`<tr class="unqmission`+data.id+`">
                                                            <td>`+data.title+`</td>      
                                                            <td>`+data.description+`</td>                   
                                                                <td>
                                                                    <a data-id ="`+data.id+`" data-toggle="modal" data-target="#missionModal" class="editmission"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                                <a class="deletemission" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                                </td>
                                                </tr>`);    
                                                        setTimeout(function() {$('#missionModal').modal('hide');}, 1500);
                                            
                                                        $('#missionupdate').trigger('reset');
                                                    }
                                                    
                                                });
                                            }
                                        })
                                        $(document).on('click','.deletemission',function(e) {
                                                e.preventDefault();
                                                var id = $(this).data('id');
                                                //alert(role);
                                                Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                type: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, delete it!',
                                                
                                                }).then(result => {
                                                
                                                if (result.value) {
                                                    
                                                    $.get('/admin/membership/deletemission/'+id,function(){
                                                        //console.log('yes');
                                                        
                                                    })
                                                    
                                                    $(this).closest('tr').hide();
                                                    
                                                }
                                                }
                                            )
                                        }); 
                            </script>
                    </div>
                    <div id="tab3" class="tab-pane fade in">
                            {!!Form::open(['class' =>'form-horizontal','id'=>'joinwilet','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                                <h3>Join Welet text</h3>
                                <div class="form-group">
                                        <label for="description" class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-8">
                                        <textarea type="text" class="form-control"  name="title"  placeholder="Enter  Description" rows="6">{{$joinwilet->title}}</textarea>
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{$joinwilet->id}}">
                                    </div>
                                    </div>
                               
                                <div class="form-group">
                                   <label for="description" class="col-sm-2 control-label">Description</label>
                                   <div class="col-sm-8">
                                   <textarea type="text" class="form-control"  name="description" id="editor2" placeholder="Enter  Description" rows="6">{{$joinwilet->description}}</textarea>
                                   <input type="hidden" class="form-control" id="id" name="id" value="{{$joinwilet->id}}">
                               </div>
                               </div>
                               <div class="form-group" id='refresh3'>
                                <label for="title" class="col-sm-2 control-label"></label>
                                <div class="col-md-10">
                                <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$joinwilet->image)}}" alt="">
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
                                       $('#joinwilet').validate({ 
                                            rules: {
                                                    description: 
                                                    {
                                                    required: true,
                                                    
                                                    },
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
                                        $(document).on('submit','#joinwilet',function(e){
                                            e.preventDefault();
                                                //var data = $(this).serialize();
                                            if ($('#joinwilet').valid()) {
                                            $.ajax({
                                            url:"/admin/membership/updatejoinwilet",
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
                                                    

                                                $("#refresh3").load(location.href + " #refresh3");
                                                }
                                                
                                            });
                                            }
                                        })
                            </script>        
                    </div>
                          
            <div id="tab4" class="tab-pane fade in ">
                    @php
                          $description = json_decode($broucher->description);
                            $i = 0;
                          @endphp
                          {!!Form::open(['class' =>'form-horizontal','id'=>'broucher','enctype'=>'multipart/form-data'])!!}
                          <div id='refreshtab4'>
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
                                  <div class="broucherlist col-sm-8 " data-index_no="1000">
                                      <div class="broucheritemWrapper">
                                          <table class="table table-bordered brouchermoreTable">
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
                                                      <td><span class="removebroucher" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                  </tr>
                                              @endforeach
                                          </table>
                                          <span  class="add_morebroucher" style="background: #28d19c;
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
                                $(document).on('click', '.add_morebroucher', function () {
                                var index = $('.broucherlist').data('index_no');
                                $('.broucherlist').data('index_no', index + 1);
                                var html = $('.broucheritemWrapper .item_tr:last').clone().find('.form-control').each(function () {
                                    this.name = this.name.replace(/\d+/, index+1);
                                    this.id = this.id.replace(/\d+/, index+1);
                                    this.value = '';
                                }).end();
                                $('.brouchermoreTable').append(html);
                                var rowCount = $('.brouchermoreTable tr').length;
                                $(this).closest('.broucheritemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
                                $(this).closest('.broucheritemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
                            });
                            $(document).on('click', '.removebroucher', function () {
                                var obj=$(this);
                                var count= $('.single_list').length;
                                // alert(count);
                                if(count > 1) {
                                    if(obj.closest('.single_list').is($(this).closest('.broucheritemWrapper').find('.single_list:last'))){
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
                                    url:"/admin/membership/broucherupdate",
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
                                        

                                    $("#tab4").load(location.href + " #tab4");
                                    }
                                    
                                });
                                }
                            })
                            </script>
                 </div>
                 <div id="tab5" class="tab-pane fade in ">
                        @php
                        $allgroup = json_decode($group->description);
                        // dd($allconducts);
                        // exit();
                        $i = 0;
                        $editor = 10
                      @endphp
                      {!!Form::open(['class' =>'form-horizontal','id'=>'wilatgroup','enctype'=>'multipart/form-data'])!!}
                      <div id='refreshtab6'>
                      <div class="box-body">
                            <h3>Wilets Group</h3>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Title</label>
                              <div class="col-sm-8">
                              <input type="text" class="form-control" id="title" name="title" value="{{$group->title}}">
                              <input type="hidden" class="form-control" id="id" name="id" value="{{$group->id}}">
             
                             </div>
                          </div>
                          <div class="form-group" id="groupref">
                                  <label for="title" class="col-sm-2 control-label"></label>
                                  <div class="col-md-10">
                                  <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$group->image)}}" alt="">
                                  </div>
                                </div>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Image</label>
                              <div class="col-sm-8">
                              <input type="file" class="form-control" id="image" name="image">
                              </div>
                          </div>
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Groups</label>
                              <div class="conductlist col-sm-8 " data-index_no="2000">
                                  <div class="conductitemWrapper">
                                        <table class="table table-bordered conductmoreTable">
                                                <tr>
                                                    <th width="5%">Serial No</th>
                                                    <th width="30%">Title</th>
                                                    <th width="30%">Link</th>
                                                    <th width="30%">Text</th>
                                                    <th width="5%">Option</th>
                                                    
                                                </tr>
                                                 @foreach($allgroup as $val)
                                                 <?php $i++ ;
                                                 
                                                 ?>
                                                    <tr class="item_tr csingle_list">
                                                    <td class="day_no">{{$i}}</td>
                                                    <td ><input type="text" class="form-control" name="program[{{$i}}][title]" value="{{$val->title}}"></td>
                                                    <td ><input type="text" class="form-control" name="program[{{$i}}][link]" value="{{$val->link}}"></td>
                                                    <td ><input type="text" class="form-control" name="program[{{$i}}][conduct]" value="{{$val->conduct}}"></td>
                                                    <td><span class="removeconduct" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                </tr>
                                                @endforeach
                                            </table>
                                            <span  class="add_moreconduct" style="background: #28d19c;
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
                           $(document).on('click', '.add_moreconduct', function () {
                                var index = $('.conductlist').data('index_no');
                                $('.conductlist').data('index_no', index + 1);
                                var html = $('.conductitemWrapper .item_tr:last').clone().find('.form-control').each(function () {
                                    this.name = this.name.replace(/\d+/, index+1);
                                    this.id = this.id.replace(/\d+/, index+1);
                                    this.value = '';
                                }).end();
                                $('.conductmoreTable').append(html);
                                var rowCount = $('.conductmoreTable tr').length;
                                $(this).closest('.conductitemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
                                $(this).closest('.conductitemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
                            });
                            $(document).on('click', '.removeconduct', function () {
                                var obj=$(this);
                                var count= $('.csingle_list').length;
                                // alert(count);
                                if(count > 1) {
                                    if(obj.closest('.csingle_list').is($(this).closest('.conductitemWrapper').find('.csingle_list:last'))){
                                        obj.closest('.csingle_list').remove();
                                    }else{
                                        alert('You can only remove the last one!');
                                    }
                                }
                            });
                             $('#wilatgroup').validate({ 
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
                                $(document).on('submit','#wilatgroup',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                    if ($('#wilatgroup').valid()) {
                                    $.ajax({
                                        url:"/admin/membership/updategroup",
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
                                            

                                        $("#groupref").load(location.href + " #groupref");
                                        }
                                        
                                    });
                                    }
                                })
                      </script>
                </div>
                <div id="tab6" class="tab-pane fade in">
                        {!!Form::open(['class' =>'form-horizontal','id'=>'rgforum','enctype'=>'multipart/form-data'])!!}
                          <div class="box-body">
                              <h3>Regional Forum</h3>
                              <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Name</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                </div>
                              </div>
                              <div class="form-group">
                                      <label for="title" class="col-sm-2 control-label">Designation</label>
                                      <div class="col-sm-8">
                                      <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter name">
                                    </div>
                              </div>
                          
                           <div class="form-group">
                              <label for="description" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                          </div>
                          <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Country</label>
                                <div class="col-sm-8">
                                      <input type="text" class="form-control" id="country" name="country" placeholder="Enter country">
                                  </div>
                            </div>
                          <div class="form-group">
                              <label for="description" class="col-sm-2 control-label">Image</label>
                              <div class="col-sm-8">
                                      <input type="file" class="form-control" id="image" name="image" >
                              </div>
                          </div>
                              
                          </div>
                          <div class="box-footer">
                              <button type="submit" class="btn btn-info">Submit</button>
                          </div>
                          {!!Form::close()!!}
                          <div class="box-body">
                                  <h3>Regional Forum List</h3>
                                  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Designation</th>
                                      <th>Photo</th>
                                      <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class='rgforum'>
                                      @foreach($rgfourums as $val)
                                          <tr class='unqrgforum{{$val->id}}'>
                                          <td>{{$val->name}}</td>      
                                          <td>{{$val->designation}}</td>                   
                                          <td><img src="{{url('/'.$val->image)}}" width="100" height="70"></td>
                                              <td>
                                                  <a data-id ="{{$val->id}}" data-toggle="modal" data-target="#rgforumModal" class="editrgforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                              <a class="deletergforum" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                              </td>
                                              </tr>
                                          @endforeach
                                    </tbody>
                                  </table>
                                </div>
                                <div class="modal fade" id="rgforumModal">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Edit Boardmember</h4>
                                          </div>
                                            <div class="modal-body">
                                                  {!!Form::open(['class' =>'form-horizontal','id'=>'rgforumupdate','enctype'=>'multipart/form-data'])!!}
                                                  <div class="box-body">
                                                      <h3>Board Members</h3>
                                                      <div class="form-group">
                                                          <label for="title" class="col-sm-2 control-label">Name</label>
                                                          <div class="col-sm-8">
                                                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                                          <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter name">
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                              <label for="title" class="col-sm-2 control-label">Designation</label>
                                                              <div class="col-sm-8">
                                                              <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter name">
                                                            </div>
                                                      </div>
                                                  
                                                      <div class="form-group">
                                                            <label for="description" class="col-sm-2 control-label">Email</label>
                                                            <div class="col-sm-8">
                                                                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                                              </div>
                                                        </div>
                                                        <div class="form-group">
                                                              <label for="description" class="col-sm-2 control-label">Country</label>
                                                              <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter email">
                                                                </div>
                                                          </div>
                                                  <div class="form-group">
                                                      <label for="description" class="col-sm-2 control-label">Image</label>
                                                      <div class="col-sm-8">
                                                         <input type="file" class="form-control" id="image" name="image" >
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                          <label for="title" class="col-sm-2 control-label"></label>
                                                          <div class="col-md-10">
                                                              <img id="myImage" class="img-responsive" width="100" height="50" src="" alt="">
                                                          </div>
                                                        </div>
                                                      
                                                  </div>
                                                  <div class="box-footer">
                                                      <button type="submit" class="btn btn-info">Update</button>
                                                  </div>
                                                  {!!Form::close()!!}
                                          </div>
                                        </div>
                                     </div>
                              </div> 
                   
                      <script>
                          $('#rgforum').validate({ 
                                rules: {
                                        image: 
                                        {
                                        required: true,
                                        
                                        },
                                        name: 
                                        {
                                        required: true,
                                        
                                        },
                                        designation: 
                                        {
                                        required: true,
                                        
                                        },
                                        email: 
                                        {
                                        required: true,
                                        
                                        },
                                        country: 
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
                            $('#rgforumupdate').validate({ 
                                rules: {
                                    
                                        name: 
                                        {
                                        required: true,
                                        
                                        },
                                        designation: 
                                        {
                                        required: true,
                                        
                                        },
                                        email: 
                                        {
                                        required: true,
                                        
                                        },
                                        country: 
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
                            $(document).on('submit','#rgforum',function(e){
                                e.preventDefault();
                                    //var data = $(this).serialize();
                                if ($('#rgforum').valid()) {
                                $.ajax({
                                    url:"/admin/membership/storergforum",
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
                                    toastr.success('Data Inserted Successfully');
                                        
                                    $('#rgforum').trigger('reset');
                                    $(".rgforum").prepend(`<tr class="unqrgforum`+data.id+`">
                                                <td>`+data.name+`</td>      
                                                <td>`+data.designation+`</td>                   
                                                <td><img src="/`+data.image+`" width="100" height="70"></td>
                                                    <td>
                                                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#rgforumModal" class="editrgforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                    <a class="deletergforum" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                    </td>
                                    </tr>`);
                            

                                    }
                                    
                                });
                                }
                            })
                            $(document).on('click','.editrgforum',function(){
                                //alert(id);
                                var id = $(this).data('id');
                                $.get('/admin/membership/editrgforum/'+id,function(data){
                                var img = data.image;
                                var srcimg='/'+img;
                                $('#rgforumupdate #myImage ').attr("src", srcimg);
                                $('#rgforumupdate').find('#id').val(data.id);
                                $('#rgforumupdate').find('#name').val(data.name);
                                $('#rgforumupdate').find('#designation').val(data.designation);
                                $('#rgforumupdate').find('#email').val(data.email);
                                $('#rgforumupdate').find('#country').val(data.country);

                                // console.log(data);
                                })
                            })
                            $(document).on('submit','#rgforumupdate',function(e){
                                e.preventDefault();
                                    //var data = $(this).serialize();
                                    if ($('#rgforumupdate').valid()) {
                                    $.ajax({
                                        url:"/admin/membership/rgforumupdate",
                                        method:"POST",
                                        data:new FormData(this),
                                        dataType:'JSON',
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        success:function(data)
                                        {
                                        //console.log(data);
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
                                            $('.unqrgforum'+data.id).replaceWith(`<tr class="unqrgforum`+data.id+`">
                                                <td>`+data.name+`</td>      
                                                <td>`+data.designation+`</td>                   
                                                <td><img src="/`+data.image+`" width="100" height="70"></td>
                                                    <td>
                                                    <a data-id ="`+data.id+`" data-toggle="modal" data-target="#rgforumModal" class="editrgforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                    <a class="deletergforum" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                    </td>
                                    </tr>`);    
                                            setTimeout(function() {$('#rgforumModal').modal('hide');}, 1500);
                                
                                            $('#rgforumupdate').trigger('reset');
                                        }
                                        
                                    });
                                }
                            })
                            $(document).on('click','.deletergforum',function(e) {
                                    e.preventDefault();
                                    var id = $(this).data('id');
                                    //alert(role);
                                    Swal.fire({
                                    title: 'Are you sure?',
                                    text: "You won't be able to revert this!",
                                    type: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes, delete it!',
                                    
                                    }).then(result => {
                                    
                                    if (result.value) {
                                        
                                        $.get('/admin/membership/deletergforum/'+id,function(){
                                            //console.log('yes');
                                            
                                        })
                                        
                                        $(this).closest('tr').hide();
                                        
                                    }
                                    }
                                )
                            });
                </script>
            </div>

            <div id="tab7" class="tab-pane fade in">
                    {!!Form::open(['class' =>'form-horizontal','id'=>'bdforum','enctype'=>'multipart/form-data'])!!}
                      <div class="box-body">
                          <h3>BD Forum</h3>
                          <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-8">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                            </div>
                          </div>
                          <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Designation</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter name">
                                </div>
                          </div>
                      
                       <div class="form-group">
                          <label for="description" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-8">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                            </div>
                      </div>
                      <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Country</label>
                            <div class="col-sm-8">
                                  <input type="text" class="form-control" id="country" name="country" placeholder="Enter country">
                              </div>
                        </div>
                      <div class="form-group">
                          <label for="description" class="col-sm-2 control-label">Image</label>
                          <div class="col-sm-8">
                                  <input type="file" class="form-control" id="image" name="image" >
                          </div>
                      </div>
                          
                      </div>
                      <div class="box-footer">
                          <button type="submit" class="btn btn-info">Submit</button>
                      </div>
                      {!!Form::close()!!}
                      <div class="box-body">
                              <h3>BD Forum List</h3>
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Designation</th>
                                  <th>Photo</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class='bdforum'>
                                  @foreach($bdfourums as $val)
                                      <tr class='unqbdforum{{$val->id}}'>
                                      <td>{{$val->name}}</td>      
                                      <td>{{$val->designation}}</td>                   
                                      <td><img src="{{url('/'.$val->image)}}" width="100" height="70"></td>
                                          <td>
                                              <a data-id ="{{$val->id}}" data-toggle="modal" data-target="#bdforumModal" class="editbdforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                          <a class="deletebdforum" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                          </td>
                                          </tr>
                                      @endforeach
                                </tbody>
                              </table>
                            </div>
                            <div class="modal fade" id="bdforumModal">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Edit BD Forum</h4>
                                      </div>
                                        <div class="modal-body">
                                              {!!Form::open(['class' =>'form-horizontal','id'=>'bdforumupdate','enctype'=>'multipart/form-data'])!!}
                                              <div class="box-body">
                                                  <h3>BD Forum Members</h3>
                                                  <div class="form-group">
                                                      <label for="title" class="col-sm-2 control-label">Name</label>
                                                      <div class="col-sm-8">
                                                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                                      <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter name">
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                          <label for="title" class="col-sm-2 control-label">Designation</label>
                                                          <div class="col-sm-8">
                                                          <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter name">
                                                        </div>
                                                  </div>
                                              
                                                  <div class="form-group">
                                                        <label for="description" class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-8">
                                                              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                                          </div>
                                                    </div>
                                                    <div class="form-group">
                                                          <label for="description" class="col-sm-2 control-label">Country</label>
                                                          <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter email">
                                                            </div>
                                                      </div>
                                              <div class="form-group">
                                                  <label for="description" class="col-sm-2 control-label">Image</label>
                                                  <div class="col-sm-8">
                                                     <input type="file" class="form-control" id="image" name="image" >
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                      <label for="title" class="col-sm-2 control-label"></label>
                                                      <div class="col-md-10">
                                                          <img id="myImage" class="img-responsive" width="100" height="50" src="" alt="">
                                                      </div>
                                                    </div>
                                                  
                                              </div>
                                              <div class="box-footer">
                                                  <button type="submit" class="btn btn-info">Update</button>
                                              </div>
                                              {!!Form::close()!!}
                                      </div>
                                    </div>
                                 </div>
                          </div> 
                          <script>
                              $('#bdforum').validate({ 
                                    rules: {
                                            image: 
                                            {
                                            required: true,
                                            
                                            },
                                            name: 
                                            {
                                            required: true,
                                            
                                            },
                                            designation: 
                                            {
                                            required: true,
                                            
                                            },
                                            email: 
                                            {
                                            required: true,
                                            
                                            },
                                            country: 
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
                                $('#bdforumupdate').validate({ 
                                    rules: {
                                        
                                            name: 
                                            {
                                            required: true,
                                            
                                            },
                                            designation: 
                                            {
                                            required: true,
                                            
                                            },
                                            email: 
                                            {
                                            required: true,
                                            
                                            },
                                            country: 
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
                                $(document).on('submit','#bdforum',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                    if ($('#bdforum').valid()) {
                                    $.ajax({
                                        url:"/admin/membership/storebdforum",
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
                                        toastr.success('Data Inserted Successfully');
                                            
                                        $('#bdforum').trigger('reset');
                                        $(".bdforum").prepend(`<tr class="unqbdforum`+data.id+`">
                                                    <td>`+data.name+`</td>      
                                                    <td>`+data.designation+`</td>                   
                                                    <td><img src="/`+data.image+`" width="100" height="70"></td>
                                                        <td>
                                                            <a data-id ="`+data.id+`" data-toggle="modal" data-target="#bdforumModal" class="editbdforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                        <a class="deletebdforum" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                        </td>
                                        </tr>`);
                                

                                        }
                                        
                                    });
                                    }
                                })
                                $(document).on('click','.editbdforum',function(){
                                    //alert(id);
                                    var id = $(this).data('id');
                                    $.get('/admin/membership/editbdforum/'+id,function(data){
                                    var img = data.image;
                                    var srcimg='/'+img;
                                    $('#bdforumupdate #myImage ').attr("src", srcimg);
                                    $('#bdforumupdate').find('#id').val(data.id);
                                    $('#bdforumupdate').find('#name').val(data.name);
                                    $('#bdforumupdate').find('#designation').val(data.designation);
                                    $('#bdforumupdate').find('#email').val(data.email);
                                    $('#bdforumupdate').find('#country').val(data.country);

                                    // console.log(data);
                                    })
                                })
                                $(document).on('submit','#bdforumupdate',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                        if ($('#bdforumupdate').valid()) {
                                        $.ajax({
                                            url:"/admin/membership/bdforumupdate",
                                            method:"POST",
                                            data:new FormData(this),
                                            dataType:'JSON',
                                            contentType: false,
                                            cache: false,
                                            processData: false,
                                            success:function(data)
                                            {
                                            //console.log(data);
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
                                                $('.unqbdforum'+data.id).replaceWith(`<tr class="unqbdforum`+data.id+`">
                                                    <td>`+data.name+`</td>      
                                                    <td>`+data.designation+`</td>                   
                                                    <td><img src="/`+data.image+`" width="100" height="70"></td>
                                                        <td>
                                                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#bdforumModal" class="editbdforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                        <a class="deletebdforum" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                        </td>
                                        </tr>`);    
                                                setTimeout(function() {$('#bdforumModal').modal('hide');}, 1500);
                                    
                                                $('#bdforumupdate').trigger('reset');
                                            }
                                            
                                        });
                                    }
                                })
                                $(document).on('click','.deletebdforum',function(e) {
                                        e.preventDefault();
                                        var id = $(this).data('id');
                                        //alert(role);
                                        Swal.fire({
                                        title: 'Are you sure?',
                                        text: "You won't be able to revert this!",
                                        type: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!',
                                        
                                        }).then(result => {
                                        
                                        if (result.value) {
                                            
                                            $.get('/admin/membership/deletebdforum/'+id,function(){
                                                //console.log('yes');
                                                
                                            })
                                            
                                            $(this).closest('tr').hide();
                                            
                                        }
                                        }
                                    )
                                });
                              </script>
                  </div>
            </div>
        </div>
</section>
@endsection