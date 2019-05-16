@extends('layouts.backEnd.admin_layout')
@section('ed','active')
@section('co','active')
@section('title', 'CILT | Home | Main Sliders')
@section('content')
<section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
          
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
            </div>
      {!!Form::open(['class' =>'form-horizontal','id'=>'updatecourse','enctype'=>'multipart/form-data'])!!}
        <div class="box-body">
            <h3>Edit Course</h3>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="title" name="title" value="{{$boardmembers->title}}">
                <input type="hidden" class="form-control" id="id" name="id" value="{{$boardmembers->id}}">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-8">
                   <textarea id="" name="descriptiontop" class="form-control"  rows="8">{{$boardmembers->descriptiontop}}</textarea>      
                </div>
          </div>
            <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Course Outline</label>
                    <div class="col-sm-8">
                    <textarea id="editor1" name="description" rows="10" cols="80">{{$boardmembers->description}}</textarea>    
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
            <img id="myImage" class="img-responsive" width="100" height="50" src="{{url('/'.$boardmembers->image)}}" alt="">
            </div>
            </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Duration</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="duration" name="duration" value="{{$boardmembers->duration}}">
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Fees</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="fees" name="fees" value="{{$boardmembers->fees}}">
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Discount</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="discount" name="discount" value="{{$boardmembers->discount}}">
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Start Date</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="startdate" name="startdate" value="{{$boardmembers->startdate}}">
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
     $(function () {
    CKEDITOR.replace('editor1')
     });
     $('#updatecourse').validate({ 
      rules: {
    
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
 $(document).on('submit','#updatecourse',function(e){
    e.preventDefault();
          //var data = $(this).serialize();
          if ($('#updatecourse').valid()) {
           $.ajax({
              url:"/admin/courses/updatecourse",
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
                 
                setTimeout(function() {window.location.href = "/admin/courses/ciltcourses";}, 2000);
      
              }
              
          });
      }
  })
</script>
@endsection