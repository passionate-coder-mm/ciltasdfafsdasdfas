@extends('layouts.backEnd.admin_layout')
@section('ed','active')
@section('dw','active')
@section('title', 'CILT | Education | Download')
@section('content')
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Download Center</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">Download Top</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">Download Bottom</a></li>
                       
        </ul>
        <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active ">
                        {!!Form::open(['class' =>'form-horizontal','id'=>'downloadtop','enctype'=>'multipart/form-data'])!!}
                        <div id="downloadtopref">
                         <div class="box-body">
                               <h3>Download Overview</h3>
                             <div class="form-group">
                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                 <div class="col-sm-8">
                                 <input type="text" class="form-control" id="title" name="title" value="{{$download->title}}">
                                 <input type="hidden" class="form-control" id="id" name="id" value="{{$download->id}}">
                
                                </div>
                             </div>
                            
                             <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-8">
                                    <textarea id="editor1" name="description" rows="10" cols="80">{{$download->description}}</textarea>
                                {{-- <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description" rows="6">{{$download->description}}</textarea> --}}
                                </div>
                            </div>
                             
                         </div>
                         <div class="box-footer">
                             <button type="submit" class="btn btn-info">Update</button>
                         </div>
                        </div>
                         {!!Form::close()!!}
                       
                        <script>
                             $(function () {
                                    CKEDITOR.replace('editor1')

                                })
                              $('#downloadtop').validate({ 
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
                                $(document).on('submit','#downloadtop',function(e){
                                    e.preventDefault();
                                        //var data = $(this).serialize();
                                    if ($('#downloadtop').valid()) {
                                    $.ajax({
                                        url:"/admin/courses/downloadtop",
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
                                        // $("#downloadtopref").load(location.href + " #downloadtopref");
                                        }
                                        
                                    });
                                    }
                                })
                         </script>
                </div>
                <div id="tab2" class="tab-pane fade in ">
                        {!!Form::open(['class' =>'form-horizontal','id'=>'download','enctype'=>'multipart/form-data'])!!}
                    <div class="box-body">
                        <h3>Board Members</h3>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title (3)</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter name">
                          </div>
                        </div>
                    
                     <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description (20)</label>
                        <div class="col-sm-8">
                        <textarea type="text" class="form-control" id="description"  name="description" placeholder="Enter  Description" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Pdf File Upload</label>
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
                        <h3>Download List</h3>
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th width="20%">Title</th>
                            <th width="40%">description</th>
                            <th width="30%">File Name</th>
                            <th width="10%">Action</th>
                          </tr>
                          </thead>
                          <tbody class='download'>
                            @foreach($alldownload as $val)
                                <tr class='unqdownload{{$val->id}}'>
                                <td>{{$val->title}}</td>      
                                <td>{{$val->description}}</td>                   
                                <td>{{$val->image}}</td>
                                    <td>
                                     <a data-id ="{{$val->id}}" data-toggle="modal" data-target="#downloadModal" class="editdownload"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                    <a class="deletedownload" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                    </td>
                                    </tr>
                                @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="modal fade" id="downloadModal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Download</h4>
                              </div>
                                <div class="modal-body">
                                      {!!Form::open(['class' =>'form-horizontal','id'=>'downloadupdate','enctype'=>'multipart/form-data'])!!}
                                      <div class="box-body">
                                          <h3>Download</h3>
                                          <div class="form-group">
                                              <label for="title" class="col-sm-2 control-label">Title</label>
                                              <div class="col-sm-8">
                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter name">
                                              <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter name">
                                            </div>
                                          </div>
                                      
                                       <div class="form-group">
                                          <label for="description" class="col-sm-2 control-label">Description</label>
                                          <div class="col-sm-8">
                                          <textarea type="text" class="form-control" id="description"  name="description" placeholder="Enter  Description" rows="6"></textarea>
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
                                              <div class="col-md-8">
                                                  <input type="text" class="form-control" id="myImage"  readonly>
                                                  {{-- <img  class="img-responsive" width="100" height="50" src="" alt=""> --}}
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
                           $('#download').validate({ 
                                rules: {
                                        image: 
                                        {
                                        required: true,
                                        
                                        },
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

                            $('#downloadupdate').validate({ 
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
                            $(document).on('submit','#download',function(e){
                                e.preventDefault();
                                    //var data = $(this).serialize();
                                if ($('#download').valid()) {
                                $.ajax({
                                    url:"/admin/courses/storedownload",
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
                                        
                                    $('#download').trigger('reset');
                                    $(".download").prepend(`<tr class="unqdownload`+data.id+`">
                                                <td>`+data.title+`</td>      
                                                <td>`+data.description+`</td>                   
                                                <td>`+data.image+`</td>
                                                    <td>
                                                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#downloadModal" class="editdownload"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                    <a class="deletedownload" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                    </td>
                                    </tr>`);
                            

                                    }
                                    
                                });
                                }
                            })
                            $(document).on('click','.editdownload',function(){
                                //alert(id);
                                var id = $(this).data('id');
                                $.get('/admin/courses/editdownload/'+id,function(data){
                                // var img = data.image;
                                // var srcimg='/'+img;
                                $('#downloadupdate #myImage ').val(data.image);
                                $('#downloadupdate').find('#id').val(data.id);
                                $('#downloadupdate').find('#title').val(data.title);
                                $('#downloadupdate').find('#description').val(data.description);
                                // console.log(data);
                                })
                            })
                            $(document).on('submit','#downloadupdate',function(e){
                                e.preventDefault();
                                    //var data = $(this).serialize();
                                    if ($('#downloadupdate').valid()) {
                                    $.ajax({
                                        url:"/admin/courses/updateDownload",
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
                                            $('.unqdownload'+data.id).replaceWith(`<tr class="unqdownload`+data.id+`">
                                                <td>`+data.title+`</td>      
                                                <td>`+data.description+`</td>                   
                                                <td>`+data.image+`</td>
                                                    <td>
                                                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#downloadModal" class="editdownload"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                                    <a class="deletedownload" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                                    </td>
                                    </tr>`);    
                                            setTimeout(function() {$('#downloadModal').modal('hide');}, 1500);
                                
                                            $('#downloadupdate').trigger('reset');
                                        }
                                        
                                    });
                                }
                            })
                            $(document).on('click','.deletedownload',function(e) {
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
                                        
                                        $.get('/admin/courses/deletedownload/'+id,function(){
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