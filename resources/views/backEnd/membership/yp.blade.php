@extends('layouts.backEnd.admin_layout')
@section('member','active')
@section('yp','active')
@section('title', 'CILT | Membership | Wilet')
@section('content')
<section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title">Young Professional Options</h3>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
            </div>
            <ul class="nav nav-tabs">
                    <li class="active commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab1">Y P top</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab2">Y P How join</a></li>  
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab3">Y P Benifits</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab4">Y P Bd FORUM</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab5">Y P REG FORUM</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab6">Y P Broucher</a></li> 
                    <li class="commonlitabforcash" style="margin-top:3px"><a data-toggle="tab" href="#tab7">Y P Grpup RG</a></li> 
            </ul>
            <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                            {!!Form::open(['class' =>'form-horizontal','id'=>'yptop','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                                <h3>Y P TOP </h3>
                                
                                <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Top Title</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$yptop->title}}">
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{$yptop->id}}">
                       
                                       </div>
                                    </div>
                                <div class="form-group">
                                   <label for="description" class="col-sm-2 control-label">Left Description</label>
                                   <div class="col-sm-8">
                                   <textarea type="text" class="form-control" id="editor1"  name="description" placeholder="Enter Image Description" rows="6">{{$yptop->description}}</textarea>
                                   </div>
                               </div>
                            <div class="form-group" id="topref">
                                    <label for="title" class="col-sm-2 control-label"></label>
                                    <div class="col-md-10">
                                    <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$yptop->image)}}" alt="">
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
                                   
                                    });
                                $('#yptop').validate({ 
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
                                    $(document).on('submit','#yptop',function(e){
                                        e.preventDefault();
                                            //var data = $(this).serialize();
                                        if ($('#yptop').valid()) {
                                        $.ajax({
                                            url:"/admin/membership/updateyptop",
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
                                                

                                            $("#topref").load(location.href + " #topref");
                                            }
                                            
                                        });
                                        }
                                    })
                                </script>
                    </div>
                    <div id="tab2" class="tab-pane fade in">
                            {!!Form::open(['class' =>'form-horizontal','id'=>'ypwjoin','enctype'=>'multipart/form-data'])!!}
                            <div class="box-body">
                                <h3>Y P Why Join</h3>
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="title" name="title" value="{{$ypwoverview->title}}">
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{$ypwoverview->id}}">
                   
                                   </div>
                                </div>
                               
                                <div class="form-group">
                                   <label for="description" class="col-sm-2 control-label">Description</label>
                                   <div class="col-sm-8">
                                   <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description" rows="6">{{$ypwoverview->description}}</textarea>
                                   </div>
                               </div>
                                
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                            {!!Form::close()!!}      
                            <script>
                                 $('#ypwjoin').validate({ 
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
                                    $(document).on('submit','#ypwjoin',function(e){
                                        e.preventDefault();
                                            //var data = $(this).serialize();
                                        if ($('#ypwjoin').valid()) {
                                        $.ajax({
                                            url:"/admin/membership/ypwjoinupdate",
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
                            $allypbenifits = json_decode($ypbenifits->description);
                            // dd($allbenifits);
                            // exit();
                            $i = 0;
                          @endphp
                          {!!Form::open(['class' =>'form-horizontal','id'=>'ypbenifits','enctype'=>'multipart/form-data'])!!}
                          <div id='refreshtab6'>
                          <div class="box-body">
                                <h3>Y P Benifits</h3>
                              <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Title</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" id="title" name="title" value="{{$ypbenifits->title}}">
                                  <input type="hidden" class="form-control" id="id" name="id" value="{{$ypbenifits->id}}">
                 
                                 </div>
                              </div>
                              <div class="form-group">
                                      <label for="title" class="col-sm-2 control-label"></label>
                                      <div class="col-md-10">
                                      <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$ypbenifits->image)}}" alt="">
                                      </div>
                                    </div>
                              <div class="form-group">
                                  <label for="title" class="col-sm-2 control-label">Image</label>
                                  <div class="col-sm-8">
                                  <input type="file" class="form-control" id="image" name="image">
                                  </div>
                              </div>
                              <div class="form-group">
                                      <label for="title" class="col-sm-2 control-label">Y P Benifits</label>
                                  <div class="ypbenifitlist col-sm-8 " data-index_no="2000">
                                      <div class="ypbenifititemWrapper">
                                            <table class="table table-bordered ypbenifitmoreTable">
                                                    <tr>
                                                        <th width="5%">Serial No</th>
                                                        <th width="40%">description</th>
                                                        <th width="15%">Option</th>
                                                    </tr>
                                                     @foreach($allypbenifits as $val)
                                                     <?php $i++ ?>
                                                        <tr class="item_tr csingle_list">
                                                            <td class="day_no">{{$i}}</td>
                                                        <td><textarea class="form-control" id="pro_description" name="program[{{$i}}][benifit]">{{$val->benifit}}</textarea><br></td>
                                                            <td><span class="removeypbenifit" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                          <span  class="add_moreypbenifit" style="background: #28d19c;
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
                        $(document).on('click', '.add_moreypbenifit', function () {
                             //alert('hi');
                            var index = $('.ypbenifitlist').data('index_no');
                            $('.ypbenifitlist').data('index_no', index + 1);
                            var html = $('.ypbenifititemWrapper .item_tr:last').clone().find('.form-control').each(function () {
                                this.name = this.name.replace(/\d+/, index+1);
                                this.id = this.id.replace(/\d+/, index+1);
                                this.value = '';
                            }).end();
                            $('.ypbenifitmoreTable').append(html);
                            var rowCount = $('.ypbenifitmoreTable tr').length;
                            $(this).closest('.ypbenifititemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
                            $(this).closest('.ypbenifititemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
                        });
                        $(document).on('click', '.removeypbenifit', function () {
                            var obj=$(this);
                            var count= $('.csingle_list').length;
                            //alert(count);
                            if(count > 1) {
                                if(obj.closest('.csingle_list').is($(this).closest('.ypbenifititemWrapper').find('.csingle_list:last'))){
                                    obj.closest('.csingle_list').remove();
                                }else{
                                    alert('You can only remove the last one!');
                                }
                            }
                        });
                         $(document).on('submit','#ypbenifits',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                    if ($('#ypbenifits').valid()) {
                                    $.ajax({
                                        url:"/admin/membership/updateypbenifit",
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
                    <div id="tab4" class="tab-pane fade in">
                            {!!Form::open(['class' =>'form-horizontal','id'=>'ypbdforum','enctype'=>'multipart/form-data'])!!}
                              <div class="box-body">
                                  <h3>Young Professional BD Forum</h3>
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
                                      <h3>Young Professional BD Forum List</h3>
                                      <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Designation</th>
                                          <th>Photo</th>
                                          <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class='ypbdforum'>
                                          @foreach($ypbdfourums as $val)
                                              <tr class='unqypbdforum{{$val->id}}'>
                                              <td>{{$val->name}}</td>      
                                              <td>{{$val->designation}}</td>                   
                                              <td><img src="{{url('/'.$val->image)}}" width="100" height="70"></td>
                                                  <td>
                                                      <a data-id ="{{$val->id}}" data-toggle="modal" data-target="#ypbdforumModal" class="editypbdforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                  <a class="deleteypbdforum" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                  </td>
                                                  </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="modal fade" id="ypbdforumModal">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Edit Young Professional BD Forum</h4>
                                              </div>
                                                <div class="modal-body">
                                                      {!!Form::open(['class' =>'form-horizontal','id'=>'ypbdforumupdate','enctype'=>'multipart/form-data'])!!}
                                                      <div class="box-body">
                                                          <h3>Young Professional BD Forum Members</h3>
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
                                    //yp bd forum//
                                    $('#ypbdforum').validate({ 
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
                                    $('#ypbdforumupdate').validate({ 
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
                                    $(document).on('submit','#ypbdforum',function(e){
                                        e.preventDefault();
                                            //var data = $(this).serialize();
                                        if ($('#ypbdforum').valid()) {
                                        $.ajax({
                                            url:"/admin/membership/storeypbdforum",
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
                                                
                                            $('#ypbdforum').trigger('reset');
                                            $(".ypbdforum").prepend(`<tr class="unqypbdforum`+data.id+`">
                                                        <td>`+data.name+`</td>      
                                                        <td>`+data.designation+`</td>                   
                                                        <td><img src="/`+data.image+`" width="100" height="70"></td>
                                                            <td>
                                                                <a data-id ="`+data.id+`" data-toggle="modal" data-target="#ypbdforumModal" class="editypbdforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                            <a class="deleteypbdforum" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                            </td>
                                            </tr>`);
                                    

                                            }
                                            
                                        });
                                        }
                                    })
                                    $(document).on('click','.editypbdforum',function(){
                                        //alert(id);
                                        var id = $(this).data('id');
                                        $.get('/admin/membership/editypbdforum/'+id,function(data){
                                        var img = data.image;
                                        var srcimg='/'+img;
                                        $('#ypbdforumupdate #myImage ').attr("src", srcimg);
                                        $('#ypbdforumupdate').find('#id').val(data.id);
                                        $('#ypbdforumupdate').find('#name').val(data.name);
                                        $('#ypbdforumupdate').find('#designation').val(data.designation);
                                        $('#ypbdforumupdate').find('#email').val(data.email);
                                        $('#ypbdforumupdate').find('#country').val(data.country);

                                        // console.log(data);
                                        })
                                    })
                                    $(document).on('submit','#ypbdforumupdate',function(e){
                                        e.preventDefault();
                                            //var data = $(this).serialize();
                                            if ($('#ypbdforumupdate').valid()) {
                                            $.ajax({
                                                url:"/admin/membership/ypbdforumupdate",
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
                                                    $('.unqypbdforum'+data.id).replaceWith(`<tr class="unqypbdforum`+data.id+`">
                                                        <td>`+data.name+`</td>      
                                                        <td>`+data.designation+`</td>                   
                                                        <td><img src="/`+data.image+`" width="100" height="70"></td>
                                                            <td>
                                                            <a data-id ="`+data.id+`" data-toggle="modal" data-target="#ypbdforumModal" class="editypbdforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                            <a class="deleteypbdforum" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                            </td>
                                            </tr>`);    
                                                    setTimeout(function() {$('#ypbdforumModal').modal('hide');}, 1500);
                                        
                                                    $('#ypbdforumupdate').trigger('reset');
                                                }
                                                
                                            });
                                        }
                                    })
                                    $(document).on('click','.deleteypbdforum',function(e) {
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
                                                
                                                $.get('/admin/membership/deleteypbdforum/'+id,function(){
                                                    //console.log('yes');
                                                    
                                                })
                                                
                                                $(this).closest('tr').hide();
                                                
                                            }
                                            }
                                        )
                                    });
                                      </script>
                          </div>
                          
                          <div id="tab5" class="tab-pane fade in">
                                {!!Form::open(['class' =>'form-horizontal','id'=>'yprgforum','enctype'=>'multipart/form-data'])!!}
                                  <div class="box-body">
                                      <h3> Young Professional Regional Forum</h3>
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
                                          <h3> Young Professional Regional Forum List</h3>
                                          <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                              <th>Name</th>
                                              <th>Designation</th>
                                              <th>Photo</th>
                                              <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class='yprgforum'>
                                              @foreach($yprgfourums as $val)
                                                  <tr class='unqyprgforum{{$val->id}}'>
                                                  <td>{{$val->name}}</td>      
                                                  <td>{{$val->designation}}</td>                   
                                                  <td><img src="{{url('/'.$val->image)}}" width="100" height="70"></td>
                                                      <td>
                                                          <a data-id ="{{$val->id}}" data-toggle="modal" data-target="#yprgforumModal" class="edityprgforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                      <a class="deleteyprgforum" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                      </td>
                                                      </tr>
                                                  @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                        <div class="modal fade" id="yprgforumModal">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Edit Young Professional Regional</h4>
                                                  </div>
                                                    <div class="modal-body">
                                                          {!!Form::open(['class' =>'form-horizontal','id'=>'yprgforumupdate','enctype'=>'multipart/form-data'])!!}
                                                          <div class="box-body">
                                                              <h3>Young Professionals</h3>
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
                                          $('#yprgforum').validate({ 
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
                                            $('#yprgforumupdate').validate({ 
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
                                            $(document).on('submit','#yprgforum',function(e){
                                                e.preventDefault();
                                                    //var data = $(this).serialize();
                                                if ($('#yprgforum').valid()) {
                                                $.ajax({
                                                    url:"/admin/membership/storeyprgforum",
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
                                                        
                                                    $('#yprgforum').trigger('reset');
                                                    $(".yprgforum").prepend(`<tr class="unqyprgforum`+data.id+`">
                                                                <td>`+data.name+`</td>      
                                                                <td>`+data.designation+`</td>                   
                                                                <td><img src="/`+data.image+`" width="100" height="70"></td>
                                                                    <td>
                                                                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#yprgforumModal" class="edityprgforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                                    <a class="deleteyprgforum" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                                    </td>
                                                    </tr>`);
                                            

                                                    }
                                                    
                                                });
                                                }
                                            })
                                            $(document).on('click','.edityprgforum',function(){
                                                //alert(id);
                                                var id = $(this).data('id');
                                                $.get('/admin/membership/edityprgforum/'+id,function(data){
                                                var img = data.image;
                                                var srcimg='/'+img;
                                                $('#yprgforumupdate #myImage ').attr("src", srcimg);
                                                $('#yprgforumupdate').find('#id').val(data.id);
                                                $('#yprgforumupdate').find('#name').val(data.name);
                                                $('#yprgforumupdate').find('#designation').val(data.designation);
                                                $('#yprgforumupdate').find('#email').val(data.email);
                                                $('#yprgforumupdate').find('#country').val(data.country);

                                                // console.log(data);
                                                })
                                            })
                                            $(document).on('submit','#yprgforumupdate',function(e){
                                                e.preventDefault();
                                                    //var data = $(this).serialize();
                                                    if ($('#yprgforumupdate').valid()) {
                                                    $.ajax({
                                                        url:"/admin/membership/yprgforumupdate",
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
                                                            $('.unqyprgforum'+data.id).replaceWith(`<tr class="unqyprgforum`+data.id+`">
                                                                <td>`+data.name+`</td>      
                                                                <td>`+data.designation+`</td>                   
                                                                <td><img src="/`+data.image+`" width="100" height="70"></td>
                                                                    <td>
                                                                    <a data-id ="`+data.id+`" data-toggle="modal" data-target="#yprgforumModal" class="edityprgforum"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                                    <a class="deleteyprgforum" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                                    </td>
                                                    </tr>`);    
                                                            setTimeout(function() {$('#yprgforumModal').modal('hide');}, 1500);
                                                
                                                            $('#yprgforumupdate').trigger('reset');
                                                        }
                                                        
                                                    });
                                                }
                                            })
                                            $(document).on('click','.deleteyprgforum',function(e) {
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
                                                        
                                                        $.get('/admin/membership/deleteyprgforum/'+id,function(){
                                                            //console.log('yes');
                                                            
                                                        })
                                                        
                                                        $(this).closest('tr').hide();
                                                        
                                                    }
                                                    }
                                                )
                                            });
                                          </script>
                              </div>
                              <div id="tab6" class="tab-pane fade in ">
                                    @php
                                          $ypdescription = json_decode($ypbroucher->description);
                                            $i = 0;
                                          @endphp
                                          {!!Form::open(['class' =>'form-horizontal','id'=>'ypbroucher','enctype'=>'multipart/form-data'])!!}
                                          <div id='refreshtab4'>
                                          <div class="box-body">
                                                <h3>Y P Brouchure</h3>
                                              <div class="form-group">
                                                  <label for="title" class="col-sm-2 control-label">Title</label>
                                                  <div class="col-sm-8">
                                                  <input type="text" class="form-control" id="title" name="title" value="{{$ypbroucher->title}}">
                                                  <input type="hidden" class="form-control" id="id" name="id" value="{{$ypbroucher->id}}">
                                 
                                                 </div>
                                              </div>
                                              <div class="form-group">
                                                      <label for="title" class="col-sm-2 control-label"></label>
                                                      <div class="col-md-10">
                                                      <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$ypbroucher->image)}}" alt="">
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
                                                  <div class="ypbroucherlist col-sm-8 " data-index_no="1000">
                                                      <div class="ypbroucheritemWrapper">
                                                          <table class="table table-bordered ypbrouchermoreTable">
                                                              <tr>
                                                                  <th width="5%">Serial No</th>
                                                                  <th width="40%">description</th>
                                                                  <th width="15%">Option</th>
                                                              </tr>
                                                               @foreach($ypdescription as $val)
                                                               <?php $i++ ?>
                                                                  <tr class="item_tr bsingle_list">
                                                                      <td class="day_no">{{$i}}</td>
                                                                  <td><textarea class="form-control" id="pro_description" name="program[{{$i}}][description]">{{$val->description}}</textarea><br></td>
                                                                      {{-- <input type="hidden" name="program[0][day]" class="form-control dayval" value="1"> --}}
                                                                      <td><span class="removeypbroucher" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                                  </tr>
                                                              @endforeach
                                                          </table>
                                                          <span  class="add_moreypbroucher" style="background: #28d19c;
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
                                                    $(document).on('click', '.add_moreypbroucher', function () {
                                                    var index = $('.ypbroucherlist').data('index_no');
                                                    $('.ypbroucherlist').data('index_no', index + 1);
                                                    var html = $('.ypbroucheritemWrapper .item_tr:last').clone().find('.form-control').each(function () {
                                                        this.name = this.name.replace(/\d+/, index+1);
                                                        this.id = this.id.replace(/\d+/, index+1);
                                                        this.value = '';
                                                    }).end();
                                                    $('.ypbrouchermoreTable').append(html);
                                                    var rowCount = $('.ypbrouchermoreTable tr').length;
                                                    $(this).closest('.ypbroucheritemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
                                                    $(this).closest('.ypbroucheritemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
                                                });
                                                $(document).on('click', '.removeypbroucher', function () {
                                                    var obj=$(this);
                                                    var count= $('.bsingle_list').length;
                                                    // alert(count);
                                                    if(count > 1) {
                                                        if(obj.closest('.bsingle_list').is($(this).closest('.ypbroucheritemWrapper').find('.bsingle_list:last'))){
                                                            obj.closest('.bsingle_list').remove();
                                                        }else{
                                                            alert('You can only remove the last one!');
                                                        }
                                                    }
                                                });
                                                $('#ypbroucher').validate({ 
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
                                                $(document).on('submit','#ypbroucher',function(e){
                                                    e.preventDefault();
                                                        //var data = $(this).serialize();
                                                    if ($('#ypbroucher').valid()) {
                                                    $.ajax({
                                                        url:"/admin/membership/ypbroucherupdate",
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
                                 
                                 <div id="tab7" class="tab-pane fade in ">
                                        @php
                                        $allypgroup = json_decode($ypgroup->description);
                                        // dd($allconducts);
                                        // exit();
                                        $i = 0;
                                       
                                      @endphp
                                      {!!Form::open(['class' =>'form-horizontal','id'=>'ypwilatgroup','enctype'=>'multipart/form-data'])!!}
                                      <div id='refreshtab6'>
                                      <div class="box-body">
                                            <h3>Local Young Professional Group</h3>
                                          <div class="form-group">
                                              <label for="title" class="col-sm-2 control-label">Title</label>
                                              <div class="col-sm-8">
                                              <input type="text" class="form-control" id="title" name="title" value="{{$ypgroup->title}}">
                                              <input type="hidden" class="form-control" id="id" name="id" value="{{$ypgroup->id}}">
                             
                                             </div>
                                          </div>
                                          <div class="form-group" id="ypgroupref">
                                                  <label for="title" class="col-sm-2 control-label"></label>
                                                  <div class="col-md-10">
                                                  <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$ypgroup->image)}}" alt="">
                                                  </div>
                                                </div>
                                          <div class="form-group">
                                              <label for="title" class="col-sm-2 control-label">Image</label>
                                              <div class="col-sm-8">
                                              <input type="file" class="form-control" id="image" name="image">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                                  <label for="title" class="col-sm-2 control-label">Grpups</label>
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
                                                                 @foreach($allypgroup as $val)
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
                            $('#ypwilatgroup').validate({ 
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
                                $(document).on('submit','#ypwilatgroup',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                    if ($('#ypwilatgroup').valid()) {
                                    $.ajax({
                                        url:"/admin/membership/updateypgroup",
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
                                            

                                        $("#ypgroupref").load(location.href + " #ypgroupref");
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