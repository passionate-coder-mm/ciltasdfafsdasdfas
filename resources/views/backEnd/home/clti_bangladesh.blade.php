@extends('layouts.backEnd.admin_layout')
@section('title', 'CILT | Home | Main Sliders')
@section('content')
<section class="content" id="contentid">
        <div class="box box-info">
             <div class="box-header with-border">
             <h3 class="box-title">Clti Bangladesh</h3>
                 <div class="box-tools pull-right">
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
             </div>
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
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-8">
                    <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description">{{$ciltbangladesh_info->description}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                        <label for="title" class="col-sm-2 control-label"></label>
                        <div class="col-md-10">
                        <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$ciltbangladesh_info->image)}}" alt="">
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
               console.log(data);
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
@endsection
