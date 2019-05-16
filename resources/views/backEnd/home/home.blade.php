@extends('layouts.backEnd.admin_layout')
@section('home-active','active')
@section('title', 'CILT | Home')
@section('content')
<section class="content" >
     <div class="box box-info">
             <div class="box-header with-border">
             <h3 class="box-title">Home Options</h3>
                 <div class="box-tools pull-right">
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
             </div>
             </div>
             <ul class="nav nav-tabs">
                <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">Slider</a></li>
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">CILT BD</a></li>
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab3">Why study </a></li>
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab4">YP Wilet Forum</a></li>
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab5">Footer Logo</a></li>
                <li class="commonlitabforcash"><a data-toggle="tab" href="#tab6">Social Media</a></li>
            </ul>
            <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                            <section class="content">
                                    <div class="box box-info">
                                         <div class="box-header with-border">
                                         <h3 class="box-title">Home Slider</h3>
                                         </div>
                                         {!!Form::open(['class' => 'form-horizontal','id'=>'mainsliderform','enctype'=>'multipart/form-data'])!!}
                                         <div class="box-body">
                                             <div class="form-group">
                                                 <label for="title" class="col-sm-2 control-label">Title (2)</label>
                                                 <div class="col-sm-8">
                                                 <input type="text" class="form-control" id="title" name="title" placeholder="Enter Image Title">
                                                 </div>
                                             </div>
                                            
                                             <div class="form-group">
                                                <label for="description" class="col-sm-2 control-label">Image Description (6)</label>
                                                <div class="col-sm-8">
                                                <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-2 control-label">Image (1170X369)</label>
                                                <div class="col-sm-8">
                                                <input type="file" class="form-control" id="image" name="image">
                                                </div>
                                            </div>
                                         </div>
                                         <div class="box-footer">
                                             <button type="submit" class="btn btn-info">Submit</button>
                                         </div>
                                         {!!Form::close()!!}
                                     </div>
                                 </section>
                                <section class="content">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="box box-info">
                                        <div class="box-header">
                                          <h3 class="box-title">Slider  List</h3>
                                           <div class="box-tools pull-right">
                                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                                            </div>
                                           </div>
                                        <div class="box-body">
                                          <table id="example1" class="table table-bordered table-striped deprtmentprepend">
                                            <thead>
                                            <tr>
                                              <th width="20%">Title</th>
                                              <th width="40%">Description</th>
                                              <th width="25%">Photo</th>  
                                              <th width="15%">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sliderimgappend">
                                              @foreach($sliderList as $slider)
                                             <tr class='unqsliderimg{{$slider->id}}'>
                                                <td>{{$slider->title}}</td>
                                                <td>{{$slider->description}}</td>
                                               
                                              <td><img src="{{url('/'.$slider->image)}}" width="100" height="70"></td>
                                                <td>
                                                  <a data-sliderid ="{{$slider->id}}" data-toggle="modal" data-target="#sliderupdate" class="editsliderimg"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                  <a class="deletesliderimage" data-sliderid ="{{$slider->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                </td>
                                              </tr>
                                            @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                      <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                  </div>
                                </section>
                                    {{-- //department edit modal --}}
                                    <div class="modal fade" id="sliderupdate">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title">Edit Slider Info</h4>
                                            </div>
                                              <div class="modal-body">
                                                  {!!Form::open(['class' => 'form-horizontal','id'=>'updatesliderimg','enctype'=>'multipart/form-data'])!!}
                                                  <div class="box-body">
                                                      <div class="form-group">
                                                          <label for="title" class="col-sm-2 control-label">Title (2)</label>
                                                          <div class="col-sm-8">
                                                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter Image Title">
                                                          <input type="hidden" class="form-control" id="sliderid" name="sliderid" placeholder="Enter Image Title">
                              
                                                          </div>
                                                      </div>
                                                     
                                                      <div class="form-group">
                                                         <label for="description" class="col-sm-2 control-label"> Description (6)</label>
                                                         <div class="col-sm-8">
                                                         <textarea type="text" class="form-control"  name="description" id="description" rows="10" placeholder="Enter Image Description"></textarea>
                                                         </div>
                                                     </div>
                                                     
                                                     <div class="form-group">
                                                         <label for="title" class="col-sm-2 control-label">Image (1170)X369)</label>
                                                         <div class="col-sm-8">
                                                         <input type="file" class="form-control" id="image" name="image">
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
                                //Form validation Script
                                $(document).ready(function () {
                                  $('#mainsliderform').validate({ 
                                    rules: {
                                          title: 
                                          {
                                            required: true,
                                            
                                          },
                                          description: 
                                          {
                                            required: true,
                                            
                                          },
                                          image: 
                                          {
                                            required: true,
                                            
                                          }
                                    },
                                    
                                    highlight: function(element) {
                                        $(element).parent().addClass('has-error');
                                    },
                                    unhighlight: function(element) {
                                        $(element).parent().removeClass('has-error');
                                    },
                                  });
                                });
                                //Form validation Script
                                $(document).ready(function () {
                                  $('#updatesliderimg').validate({ 
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
                                });
                                   $('#mainsliderform').on('submit',function(e){
                                        e.preventDefault();
                                        //var data = $(this).serialize();
                                        if ($('#mainsliderform').valid()) {
                                         $.ajax({
                                            url:"{{route('main-sliders.store')}}",
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
                                              toastr.success('Data Inserted Successfully');
                                               $('.sliderimgappend').prepend(`<tr class='unqsliderimg`+data.id+`'>
                                                <td>`+data.title+`</td>
                                                <td>`+data.description+`</td>
                                               <td><img src="/`+data.image+`" width="100" height="70"></td> 
                                                <td>
                                                  <a data-sliderid ="`+data.id+`" data-toggle="modal" data-target="#sliderupdate" class="editsliderimg"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                  <a class="deletesliderimage" data-sliderid ="`+data.id+`" data-deptid=""><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                </td>
                                              </tr>`);          
                                              $('#mainsliderform').trigger('reset');
                                            }
                                            
                                        });
                                        }
                                   });
                                $(document).on('click','.editsliderimg',function(){
                                  var id = $(this).data('sliderid');
                                  $.get('/admin/home/sliderimgedit/'+id,function(data){
                                    var img = data.image;
                                    var srcimg='/'+img;
                                    $('#sliderupdate #myImage ').attr("src", srcimg);
                                    $('#sliderupdate').find('#title').val(data.title);
                                    $('#sliderupdate').find('#sliderid').val(data.id);
                              
                                    $('#sliderupdate').find('#description').val(data.description);
                              
                                    //console.log(data);
                                  })
                                })
                                $(document).on('submit','#updatesliderimg',function(e){
                                  e.preventDefault();
                                        //var data = $(this).serialize();
                                        if ($('#updatesliderimg').valid()) {
                                         $.ajax({
                                            url:"/admin/home/updatemainslider",
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
                                               $('.unqsliderimg'+data.id).replaceWith(`<tr class='unqsliderimg`+data.id+`'>
                                                <td>`+data.title+`</td>
                                                <td>`+data.description+`</td>
                                               <td><img src="/`+data.image+`" width="100" height="70"></td> 
                                                <td>
                                                  <a data-sliderid ="`+data.id+`" data-toggle="modal" data-target="#sliderupdate" class="editsliderimg"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                  <a class="deletesliderimage"  data-sliderid ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                </td>
                                              </tr>`);    
                                              setTimeout(function() {$('#sliderupdate').modal('hide');}, 1500);
                                    
                                              $('#updatesliderimg').trigger('reset');
                                            }
                                            
                                        });
                                    }
                                })
                                $(document).on('click','.deletesliderimage',function(e) {
                                      e.preventDefault();
                                      var id = $(this).data('sliderid');
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
                                          
                                          $.get('/admin/home/deletesliderimg/'+id,function(){
                                              //console.log('yes');
                                          })
                                          $(this).closest('tr').hide();
                                          
                                        }
                                        }
                                    )
                              });
                            </script>
                    </div>
                    <div id="tab2" class="tab-pane fade in">
                            <section class="content" id="contentid">
                                    <div class="box box-info">
                                         <div class="box-header with-border">
                                         <h3 class="box-title">Clti Bangladesh</h3>
                                            
                                         </div>
                                         {!!Form::open(['class' => 'form-horizontal','id'=>'cltibangladesh','enctype'=>'multipart/form-data'])!!}
                                         <div class="box-body">
                                             <div class="form-group">
                                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                                 <div class="col-sm-8">
                                                 <input type="text" class="form-control" id="title" name="title" value="{{$ciltbangladesh_info->title}}">
                                                 <input type="hidden" class="form-control" id="id" name="id" value="{{$ciltbangladesh_info->id}}">
                            
                                                </div>
                                             </div>
                                            
                                             <div class="form-group">
                                                <label for="description" class="col-sm-2 control-label">Description (40)</label>
                                                <div class="col-sm-8">
                                                <textarea type="text" class="form-control"  name="description" rows="10" placeholder="Enter Image Description">{{$ciltbangladesh_info->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label"></label>
                                                    <div class="col-md-10">
                                                    <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$ciltbangladesh_info->image)}}" alt="">
                                                    </div>
                                                  </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-2 control-label">Image (748X530)</label>
                                                <div class="col-sm-8">
                                                <input type="file" class="form-control" id="image" name="image">
                                                </div>
                                            </div>
                                             
                                         </div>
                                         <div class="box-footer">
                                             <button type="submit" class="btn btn-info">Update</button>
                                         </div>
                                         {!!Form::close()!!}
                                     </div>
                                 </section>
                            <script>
                                $(document).ready(function () {
                                $('#cltibangladesh').validate({ 
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
                              });
                              $(document).on('submit','#cltibangladesh',function(e){
                                e.preventDefault();
                                      //var data = $(this).serialize();
                                      if ($('#cltibangladesh').valid()) {
                                       $.ajax({
                                          url:"/admin/home/updatecltibangladesh",
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
                                             
                                  
                                            $("#contentid").load(location.href + " #contentid");
                                          }
                                          
                                      });
                                  }
                              })
                            </script>
                    </div>
                    <div id="tab3" class="tab-pane fade in">
                            <section class="content" id="contentid">
                                    <div class="box box-info">
                                         <div class="box-header with-border">
                                         <h3 class="box-title">Clti Bangladesh Bottom</h3>
                                             
                                         </div>
                                         {!!Form::open(['class' => 'form-horizontal','id'=>'cltibangladeshbototm','enctype'=>'multipart/form-data'])!!}
                                         <div class="box-body">
                                             <div class="form-group">
                                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                                 <div class="col-sm-8">
                                                 <input type="text" class="form-control" id="title" name="title">
                            
                                                </div>
                                             </div>
                                            
                                            <div class="form-group">
                                                <label for="title" class="col-sm-2 control-label">Image (268x204)</label>
                                                <div class="col-sm-8">
                                                <input type="file" class="form-control" id="image" name="image">
                                                </div>
                                            </div>
                                             
                                         </div>
                                         <div class="box-footer">
                                             <button type="submit" class="btn btn-info">Submit</button>
                                         </div>
                                         {!!Form::close()!!}
                                     </div>
                                 </section>
                                 <section class="content">
                                        <div class="row">
                                          <div class="col-xs-12">
                                            <div class="box box-info">
                                              <div class="box-header">
                                                <h3 class="box-title">BD Bottom list</h3>
                                                 <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                                                  </div>
                                                 </div>
                                              <div class="box-body">
                                                <table id="example1" class="table table-bordered table-striped deprtmentprepend">
                                                  <thead>
                                                  <tr>
                                                    <th>Title</th>
                                                    <th>Photo</th>
                                                    <th>Action</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody class="cltibdappend">
                                                    @foreach($allCltibdbottom as $cltibdbottom)
                                                   <tr class='unqcltibdbottom{{$cltibdbottom->id}}'>
                                                   <td>{{$cltibdbottom->title}}</td>                         
                                                   <td><img src="{{url('/'.$cltibdbottom->image)}}" width="100" height="70"></td>
                                                      <td>
                                                        <a data-id ="{{$cltibdbottom->id}}" data-toggle="modal" data-target="#cltibdbottomupdate" class="editcltibdbottom"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                      <a class="delecltibdbottom" data-id ="{{$cltibdbottom->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                      </td>
                                                    </tr>
                                                  @endforeach
                                                  </tbody>
                                                </table>
                                              </div>
                                              <!-- /.box-body -->
                                            </div>
                                            <!-- /.box -->
                                          </div>
                                          <!-- /.col -->
                                        </div>
                                      </section>
                                      <div class="modal fade" id="cltibdbottomupdate">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Edit Cltibd Bottom info</h4>
                                                </div>
                                                  <div class="modal-body">
                                                      {!!Form::open(['class' => 'form-horizontal','id'=>'updatecltibottom','enctype'=>'multipart/form-data'])!!}
                                                      <div class="box-body">
                                                          <div class="form-group">
                                                              <label for="title" class="col-sm-2 control-label">Title</label>
                                                              <div class="col-sm-8">
                                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter Image Title">
                                                              <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter Image Title">
                                  
                                                              </div>
                                                          </div>
                                                         
                                                         
                                                         <div class="form-group">
                                                             <label for="title" class="col-sm-2 control-label">Image (268X204)</label>
                                                             <div class="col-sm-8">
                                                             <input type="file" class="form-control" id="image" name="image">
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
                                
                                $('#cltibangladeshbototm').validate({ 
                                  rules: {
                                        title: 
                                        {
                                          required: true,
                                          
                                        },
                                        image: 
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
                          
                          
                                $('#updatecltibottom').validate({ 
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
                            
                              $('#cltibangladeshbototm').on('submit',function(e){
                                      e.preventDefault();
                                      //var data = $(this).serialize();
                                      if ($('#cltibangladeshbototm').valid()) {
                                       $.ajax({
                                          url:"{{route('cilt-bangladesh.store')}}",
                                          method:"POST",
                                        data:new FormData(this),
                                        dataType:'JSON',
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                          success:function(data)
                                          {
                                          //  console.log(data);
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
                                             $('.cltibdappend').prepend(`<tr class='unqcltibdbottom`+data.id+`'>
                                                   <td>`+data.title+`</td>                         
                                                   <td><img src="/`+data.image+`" width="100" height="70"></td> 
                                                      <td>
                                                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#cltibdbottomupdate" class="editcltibdbottom"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                      <a class="delecltibdbottom" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                      </td>
                                                    </tr>`);          
                                            $('#cltibangladeshbototm').trigger('reset');
                                          }
                                          
                                      });
                                      }
                                 });
                            $(document).on('click','.editcltibdbottom',function(){
                                var id = $(this).data('id');
                                $.get('/admin/home/cltibottomedit/'+id,function(data){
                                  var img = data.image;
                                  var srcimg='/'+img;
                                  $('#updatecltibottom #myImage ').attr("src", srcimg);
                                  $('#updatecltibottom').find('#id').val(data.id);
                                  $('#updatecltibottom').find('#title').val(data.title);
                            
                                  // console.log(data);
                                })
                              })
                            
                              $(document).on('submit','#updatecltibottom',function(e){
                                e.preventDefault();
                                      //var data = $(this).serialize();
                                      if ($('#updatecltibottom').valid()) {
                                       $.ajax({
                                          url:"/admin/home/updatecltibottom",
                                          method:"POST",
                                        data:new FormData(this),
                                        dataType:'JSON',
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                          success:function(data)
                                          {
                                          //  console.log(data);
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
                                             $('.unqcltibdbottom'+data.id).replaceWith(`<tr class='unqcltibdbottom`+data.id+`'>
                                                   <td>`+data.title+`</td>                         
                                                   <td><img src="/`+data.image+`" width="100" height="70"></td> 
                                                      <td>
                                                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#cltibdbottomupdate" class="editcltibdbottom"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                      <a class="delecltibdbottom" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                      </td>
                                                    </tr>`);    
                                            setTimeout(function() {$('#cltibdbottomupdate').modal('hide');}, 1500);
                                  
                                            $('#updatesliderimg').trigger('reset');
                                          }
                                          
                                      });
                                  }
                              })
                              $(document).on('click','.delecltibdbottom',function(e) {
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
                                        
                                        $.get('/admin/home/deletecltbottomimg/'+id,function(){
                                            //console.log('yes');
                                            
                                        })
                                        
                                        $(this).closest('tr').hide();
                                        
                                      }
                                      }
                                  )
                            });
                            </script>
                    </div>
                    <div id="tab4" class="tab-pane fade in">
                            <section class="content" id="professional">
                                    <div class="box box-info">
                                         <div class="box-header with-border">
                                         <h3 class="box-title">PROFESSIONALS' FORUM</h3>
                                             
                                         </div>
                                         {!!Form::open(['class' => 'form-horizontal','id'=>'professionalforum','enctype'=>'multipart/form-data'])!!}
                                         <div class="box-body">
                                             <div class="form-group">
                                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                                 <div class="col-sm-8">
                                                 <input type="text" class="form-control" id="title" name="title" value="{{$allprofessionalinfo1->title}}">
                                                 <input type="hidden" class="form-control" id="id" name="id" value="{{$allprofessionalinfo1->id}}">
                            
                                                </div>
                                             </div>
                                            
                                             <div class="form-group">
                                                <label for="description" class="col-sm-2 control-label">Description (40)</label>
                                                <div class="col-sm-8">
                                                <textarea type="text" class="form-control"  name="description" rows="10" placeholder="Enter Image Description">{{$allprofessionalinfo1->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label"></label>
                                                    <div class="col-md-10">
                                                    <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$allprofessionalinfo1->image)}}" alt="" style="background:rebeccapurple">
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
                                     </div>
                                 </section>
                                 <section class="content" id="logistics">
                                        <div class="box box-info">
                                             <div class="box-header with-border">
                                             <h3 class="box-title">LOGISTICS  FORUM</h3>
                                                 <div class="box-tools pull-right">
                                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                                             </div>
                                             </div>
                                             {!!Form::open(['class' => 'form-horizontal','id'=>'logisticsforum','enctype'=>'multipart/form-data'])!!}
                                             <div class="box-body">
                                                 <div class="form-group">
                                                     <label for="title" class="col-sm-2 control-label">Title</label>
                                                     <div class="col-sm-8">
                                                     <input type="text" class="form-control" id="title" name="title" value="{{$allprofessionalinfo2->title}}">
                                                     <input type="hidden" class="form-control" id="id" name="id" value="{{$allprofessionalinfo2->id}}">
                                
                                                    </div>
                                                 </div>
                                                
                                                 <div class="form-group">
                                                    <label for="description" class="col-sm-2 control-label">Description (40)</label>
                                                    <div class="col-sm-8">
                                                    <textarea type="text" class="form-control"  name="description" rows="10" placeholder="Enter Image Description">{{$allprofessionalinfo2->description}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="title" class="col-sm-2 control-label"></label>
                                                        <div class="col-md-10">
                                                        <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$allprofessionalinfo2->image)}}" alt="" style="background:rebeccapurple">
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
                                         </div>
                                     </section>
                            <script>
                               
                                $('#professionalforum').validate({ 
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
                              
                            
                              $('#logisticsforum').validate({ 
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
                              
                              $(document).on('submit','#professionalforum',function(e){
                                e.preventDefault();
                                      //var data = $(this).serialize();
                                      if ($('#professionalforum').valid()) {
                                       $.ajax({
                                          url:"/admin/home/updateprofessionalforum",
                                          method:"POST",
                                        data:new FormData(this),
                                        dataType:'JSON',
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                          success:function(data)
                                          {
                                          //  console.log(data);
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
                                             
                                  
                                            $("#professional").load(location.href + " #professional");
                                          }
                                          
                                      });
                                  }
                              });
                            
                              $(document).on('submit','#logisticsforum',function(e){
                                e.preventDefault();
                                      //var data = $(this).serialize();
                                      if ($('#logisticsforum').valid()) {
                                       $.ajax({
                                          url:"/admin/home/updatelogisticforum",
                                          method:"POST",
                                        data:new FormData(this),
                                        dataType:'JSON',
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                          success:function(data)
                                          {
                                          //  console.log(data);
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
                                             
                                  
                                            $("#logistics").load(location.href + " #logistics");
                                          }
                                          
                                      });
                                  }
                              })
                          
                            </script>
                     </div>
                    <div id="tab5" class="tab-pane fade in">
                            <section class="content" id="footerlogoref">
                                    <div class="box box-info">
                                         <div class="box-header with-border">
                                         <h3 class="box-title">Footer logo</h3>
                                             
                                         </div>
                                         {!!Form::open(['class' =>'form-horizontal','id'=>'footerLogoform','enctype'=>'multipart/form-data'])!!}
                                         <div class="box-body">
                                             <div class="form-group">
                                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                                 <div class="col-sm-8">
                                                 <input type="text" class="form-control" id="title" name="title" value="{{$footerlogo->title}}">
                                                 <input type="hidden" class="form-control" id="id" name="id" value="{{$footerlogo->id}}">
                            
                                                </div>
                                             </div>
                                             <div class="form-group">
                                              <label for="title" class="col-sm-2 control-label">Sub Title </label>
                                              <div class="col-sm-8">
                                              <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$footerlogo->subtitle}}">
                                             </div>
                                          </div>
                                            
                                             <div class="form-group">
                                                <label for="description" class="col-sm-2 control-label">Description (10)</label>
                                                <div class="col-sm-8">
                                                <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description">{{$footerlogo->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label"></label>
                                                    <div class="col-md-10">
                                                    <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$footerlogo->image)}}" alt="">
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
                                     </div>
                                 </section>
                            <script>
                             
                                $('#footerLogoform').validate({ 
                                  rules: {
                                        title: 
                                        {
                                          required: true,
                                          
                                        },
                                        subtitle: 
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
                              
                              $(document).on('submit','#footerLogoform',function(e){
                                e.preventDefault();
                                      //var data = $(this).serialize();
                                      if ($('#footerLogoform').valid()) {
                                       $.ajax({
                                          url:"/admin/home/footerlogoupdate",
                                          method:"POST",
                                        data:new FormData(this),
                                        dataType:'JSON',
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                          success:function(data)
                                          {
                                          //  console.log(data);
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
                                             
                                  
                                            $("#footerlogoref").load(location.href + " #footerlogoref");
                                          }
                                          
                                      });
                                  }
                              })
                       
                            </script>
                    </div>
                    <div id="tab6" class="tab-pane fade in">
                            <section class="content" id="socialref">
                                    <div class="box box-info">
                                         <div class="box-header with-border">
                                         <h3 class="box-title">Social Media Link</h3>
                                            
                                         </div>
                                         {!!Form::open(['class' =>'form-horizontal','id'=>'socialmedia','enctype'=>'multipart/form-data'])!!}
                                         <div class="box-body">
                                             <div class="form-group">
                                                 <label for="title" class="col-sm-2 control-label">Facebook Link</label>
                                                 <div class="col-sm-8">
                                                 <input type="text" class="form-control" id="fblimk" name="fblink" placeholder="https://facebook.com/pagename" value="{{$sm->fblink}}">
                                                 <input type="hidden" class="form-control" id="id" name="id" value="{{$sm->id}}">
                            
                                                </div>
                                             </div>
                                             <div class="form-group">
                                              <label for="title" class="col-sm-2 control-label">Twitter Link</label>
                                              <div class="col-sm-8">
                                              <input type="text" class="form-control" id="twlink" name="twlink" placeholder="https://twitter.com/pagename" value="{{$sm->twlink}}">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                                <label for="title" class="col-sm-2 control-label">Linked in Link</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="lklink" name="lklink" placeholder="https://linkedin.com/pagename" value="{{$sm->lklink}}">
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label">Instagram Link</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inlink" name="inlink" placeholder="https://instagram.com/pagename" value="{{$sm->inlink}}">
                                                   </div>
                                                </div>
    
                                         </div>
                                         <div class="box-footer">
                                             <button type="submit" class="btn btn-info">Update</button>
                                         </div>
                                         {!!Form::close()!!}
                                     </div>
                                 </section>
                                 <script>
                                 
                                    $('#socialmedia').validate({ 
                                      rules: {
                                        inlink: 
                                            {
                                              required: true,
                                              
                                            },
                                            lklink: 
                                            {
                                              required: true,
                                              
                                            },
                                            twlink: 
                                            {
                                              required: true,
                                              
                                            },
                                            fblink: 
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
                                    
                                    $(document).on('submit','#socialmedia',function(e){
                                         e.preventDefault();
                                      //var data = $(this).serialize();
                                      if ($('#socialmedia').valid()) {
                                      $.ajax({
                                          url:"/admin/home/sociallinkupdate",
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
                                            
                                  
                                            $("#socialref").load(location.href + " #socialref");
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