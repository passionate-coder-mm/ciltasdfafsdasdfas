@extends('layouts.backEnd.admin_layout')
@section('title', 'CILT | Home | Main Sliders')
@section('content')
<section class="content" id="contentid">
        <div class="box box-info">
             <div class="box-header with-border">
             <h3 class="box-title">Clti Bangladesh Bottom</h3>
                 <div class="box-tools pull-right">
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
             </div>
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
    $(document).ready(function () {
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
  });
  $(document).ready(function () {
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

      console.log(data);
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
@endsection
