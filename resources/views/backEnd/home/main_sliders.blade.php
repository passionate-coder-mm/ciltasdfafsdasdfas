@extends('layouts.backEnd.admin_layout')
@section('title', 'CILT | Home | Main Sliders')
@section('content')
  <section class="content">
      <div class="box box-info">
           <div class="box-header with-border">
           <h3 class="box-title">Home Slider</h3>
               <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
           </div>
           </div>
           {!!Form::open(['class' => 'form-horizontal','id'=>'mainsliderform','enctype'=>'multipart/form-data'])!!}
           <div class="box-body">
               <div class="form-group">
                   <label for="title" class="col-sm-2 control-label">Title</label>
                   <div class="col-sm-8">
                   <input type="text" class="form-control" id="title" name="title" placeholder="Enter Image Title">
                   </div>
               </div>
              
               <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Image Description</label>
                  <div class="col-sm-8">
                  <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description"></textarea>
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
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Image Title">
                            <input type="hidden" class="form-control" id="sliderid" name="sliderid" placeholder="Enter Image Title">

                            </div>
                        </div>
                       
                        <div class="form-group">
                           <label for="description" class="col-sm-2 control-label"> Description</label>
                           <div class="col-sm-8">
                           <textarea type="text" class="form-control"  name="description" id="description" placeholder="Enter Image Description"></textarea>
                           </div>
                       </div>
                       
                       <div class="form-group">
                           <label for="title" class="col-sm-2 control-label">Image</label>
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

      console.log(data);
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
@endsection