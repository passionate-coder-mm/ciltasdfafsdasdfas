@extends('layouts.backEnd.admin_layout')
@section('title', 'CILT | Home | Main Sliders')
@section('content')
<section class="content" id="footerlogoref">
        <div class="box box-info">
             <div class="box-header with-border">
             <h3 class="box-title">Footer logo</h3>
                 <div class="box-tools pull-right">
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
             </div>
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
                  <label for="title" class="col-sm-2 control-label">Sub Title</label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$footerlogo->subtitle}}">
                 </div>
              </div>
                
                 <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
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
    $(document).ready(function () {
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
                 
      
                $("#footerlogoref").load(location.href + " #footerlogoref");
              }
              
          });
      }
  })
});
</script>
@endsection
