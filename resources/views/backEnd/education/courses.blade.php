@extends('layouts.backEnd.admin_layout')
@section('ed','active')
@section('co','active')
@section('title', 'CILT | Education | Courses')
@section('content')
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Course overview</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">Courses</a></li> 
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">Overview </a></li>
                       
        </ul>
        <div class="tab-content">
            <div id="tab1" class="tab-pane fade in active">
                {!!Form::open(['class' =>'form-horizontal','id'=>'courseform','enctype'=>'multipart/form-data'])!!}
                  <div class="box-body">
                      <h3>Courses </h3>
                      <div class="form-group">
                          <label for="title" class="col-sm-2 control-label">Title</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="title" class="col-sm-2 control-label">Description</label>
                          <div class="col-sm-8">
                              <textarea id="" name="descriptiontop" class="form-control" rows="8" ></textarea>
                        </div>
                     </div>
                      <div class="form-group">
                              <label for="title" class="col-sm-2 control-label">Course Outline</label>
                              <div class="col-sm-8">
                                  <textarea id="editor1" name="description" rows="10" cols="80"></textarea>
                            </div>
                      </div>
                      
                  
                  <div class="form-group">
                      <label for="description" class="col-sm-2 control-label">Image</label>
                      <div class="col-sm-8">
                              <input type="file" class="form-control" id="image" name="image" >
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="title" class="col-sm-2 control-label">Duration</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter title">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="title" class="col-sm-2 control-label">Fees</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="fees" name="fees" placeholder="Enter title">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="title" class="col-sm-2 control-label">Discount</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Enter title">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="title" class="col-sm-2 control-label">Start Date</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control mydatepicker" id="date" name="startdate" placeholder="Enter title">
                    </div>
                  </div>
                      
                  </div>
                  <div class="box-footer">
                      <button type="submit" class="btn btn-info">Submit</button>
                  </div>
                  {!!Form::close()!!}
                  <div class="box-body">
                          <h3>Course List</h3>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th width="15%">Title</th>
                              <th  width="40%">Description</th>
                              <th  width="20%">Photo</th>
                              <th  width="10%">Start date</th>
                              <th  width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody class='course'>
                              @foreach($courses as $val)
                                  <tr class='unqcourse{{$val->id}}'>
                                  <td>{{$val->title}}</td>      
                                  <td>{!! str_limit($val->descriptiontop, $limit = 90, $end = '..')!!}</td>                   
                                  <td><img src="{{url('/'.$val->image)}}" width="100" height="70"></td>
                                  <td>{{$val->startdate}}</td>
                                  <td>
                                  <a href="{{url('/admin/courses/editcourse/'.$val->id)}}" data-target="" class="editcourse"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                      <a class="deletecourse" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                  </td>
                                  </tr>
                                  @endforeach
                            </tbody>
                          </table>
                        </div>
                        {{-- <div class="modal fade" id="coursedModal">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Edit Course</h4>
                                  </div>
                                    <div class="modal-body">
                                      {!!Form::open(['class' =>'form-horizontal','id'=>'updatecourse','enctype'=>'multipart/form-data'])!!}
                                      <div class="box-body">
                                          <h3>Board Members</h3>
                                          <div class="form-group">
                                              <label for="title" class="col-sm-2 control-label">Title</label>
                                              <div class="col-sm-8">
                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                              <input type="text" class="form-control" id="id" name="id" placeholder="Enter title">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                                  <label for="title" class="col-sm-2 control-label">Description</label>
                                                  <div class="col-sm-8">
                                                  <textarea id="editor1" name="description" rows="10" cols="80"></textarea>                                          </div>
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
                                      <div class="form-group">
                                          <label for="title" class="col-sm-2 control-label">Duration</label>
                                          <div class="col-sm-8">
                                          <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter title">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="title" class="col-sm-2 control-label">Fees</label>
                                          <div class="col-sm-8">
                                          <input type="text" class="form-control" id="fees" name="fees" placeholder="Enter title">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="title" class="col-sm-2 control-label">Discount</label>
                                          <div class="col-sm-8">
                                          <input type="text" class="form-control" id="discount" name="discount" placeholder="Enter title">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="title" class="col-sm-2 control-label">Start Date</label>
                                          <div class="col-sm-8">
                                          <input type="text" class="form-control" id="startdate" name="startdate" placeholder="Enter title">
                                        </div>
                                      </div>
                                          
                                      </div>
                                      <div class="box-footer">
                                          <button type="submit" class="btn btn-info">Submit</button>
                                      </div>
                                      {!!Form::close()!!}
                                  </div>
                                </div>
                             </div>
                      </div>  --}}
              </div>
           
            <div id="tab2" class="tab-pane fade in ">
                {!!Form::open(['class' =>'form-horizontal','id'=>'courseoverview','enctype'=>'multipart/form-data'])!!}
                 <div class="box-body">
                       <h3>Course Overview</h3>
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
                        <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description" rows="6">{{$overview->description}}</textarea>
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
</section>
<script>
 
$('body').on('focus',".mydatepicker", function(){
 $(this).datepicker();
});
 $(function () {
    CKEDITOR.replace('editor1')

})

    $('#courseoverview').validate({ 
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
   $(document).on('submit','#courseoverview',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#courseoverview').valid()) {
    $.ajax({
        url:"/admin/courses/overviewupdate",
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




  $('#courseform').validate({ 
      rules: {
            image: 
            {
              required: true,
              
            },
            title: 
            {
              required: true,
              
            },
            fees: 
            {
              required: true,
              
            },
            description: 
            {
              required: true,
              
            },
            duration: 
            {
              required: true,
              
            },
            discount: 
            {
              required: true,
              
            },
            startdate: 
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
   

   $(document).on('submit','#courseform',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#courseform').valid()) {
    $.ajax({
    url:"{{route('ciltcourses.store')}}",
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
            
        $('#courseform').trigger('reset');
        $(".course").prepend(`<tr class="unqcourse`+data.id+`">
                    <td>`+data.title+`</td>      
                    <td>`+data.description+`</td>                   
                    <td><img src="/`+data.image+`" width="100" height="70"></td>
                    <td>`+data.startdate+`</td>   
                        <td>
                            <a href="/admin/courses/editcourse/`+data.id+`" class="editcourse"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                        <a class="deletecourse" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                        </td>
         </tr>`);
  

        }
        
    });
    }
  })
  $(document).on('click','.editcourse',function(){
      //alert(id);
    var id = $(this).data('id');
    $.get('/admin/courses/editcourse/'+id,function(data){
      var img = data.image;
      var srcimg='/'+img;
      var desc = CKEDITOR.instances.editor2.getData();
    $('#updatecourse #myImage ').attr("src", srcimg);
    $('#updatecourse').find('#id').val(data.id);
    $('#updatecourse').find('#title').val(data.title);
    $('#updatecourse').find('#editor1').val(desc);
    $('#updatecourse').find('#fees').val(data.fees);
    $('#updatecourse').find('#discount').val(data.discount);
    $('#updatecourse').find('#startdate').val(data.startdate);
    $('#updatecourse').find('#duration').val(data.duration);
    //  console.log(data);
    })
  })

  $(document).on('click','.deletecourse',function(e) {
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
            
            $.get('/admin/courses/deletecourse/'+id,function(){
                //console.log('yes');
                
            })
            
            $(this).closest('tr').hide();
            
          }
          }
      )
});
</script>
@endsection