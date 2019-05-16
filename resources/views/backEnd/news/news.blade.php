@extends('layouts.backEnd.admin_layout')
@section('nw','active')
@section('title', 'CILT | News')
@section('content')
<section class="content" id="footerlogoref">
        <div class="box box-info">
             <div class="box-header with-border">
             <h3 class="box-title">News</h3>
                 <div class="box-tools pull-right">
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
             </div>
             </div>
             {!!Form::open(['class' =>'form-horizontal','id'=>'newsform','enctype'=>'multipart/form-data'])!!}
             <div class="box-body">
                 <div class="form-group">
                     <label for="title" class="col-sm-2 control-label">Title</label>
                     <div class="col-sm-8">
                     <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">

                    </div>
                 </div>
                 <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-8">
                    <textarea type="text" class="form-control"  name="description" placeholder="Enter  Description" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control mydatepicker" id="date" name="date" placeholder="Enter title">

                   </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Image (850X380)</label>
                    <div class="col-sm-8">
                    <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>
                 
             </div>
             <div class="box-footer">
                 <button type="submit" class="btn btn-info">Create</button>
             </div>
             {!!Form::close()!!}
         </div>
     </section>
     <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">News  List</h3>
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
                    <th width="45%">Description</th>
                    <th width="20%">Photo</th>
                    <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody class="newsAppend">
                    @foreach($newsList as $news)
                   <tr class='unqnews{{$news->id}}'>
                      <td>{{$news->title}}</td>
                      <td>{!! str_limit($news->description, $limit =70, $end = '..')!!}</td>
                     
                    <td><img src="{{url('/'.$news->image)}}" width="100" height="70"></td>
                      <td>
                        <a data-id ="{{$news->id}}" data-toggle="modal" data-target="#newsmodal" class="editnews"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                        <a class="deletenews" data-id ="{{$news->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
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
      <div class="modal fade" id="newsmodal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit News Info</h4>
            </div>
              <div class="modal-body">
                  {!!Form::open(['class' => 'form-horizontal','id'=>'updatenews','enctype'=>'multipart/form-data'])!!}
                  <div class="box-body">
                      <div class="form-group">
                          <label for="title" class="col-sm-2 control-label">Title</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter Image Title">
                          <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter Image Title">

                          </div>
                      </div>
                     
                      <div class="form-group">
                         <label for="description" class="col-sm-2 control-label"> Description</label>
                         <div class="col-sm-8">
                         <textarea type="text" class="form-control"  name="description" id="description" placeholder="Enter Image Description" rows="10"></textarea>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control mydatepicker" id="date" name="date" placeholder="Enter title">
                      </div>
                    </div>
                     
                     <div class="form-group">
                         <label for="title" class="col-sm-2 control-label">Image (850X380)</label>
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
  $('body').on('focus',".mydatepicker", function(){
 $(this).datepicker();
});
    $(document).ready(function () {
    $('#newsform').validate({ 
      rules: {
            title: 
            {
              required: true,
              
            },
            date: 
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
              
            },
      },
      
      highlight: function(element) {
          $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
          $(element).parent().removeClass('has-error');
      },
    });
  
  $(document).on('submit','#newsform',function(e){
    e.preventDefault();
          //var data = $(this).serialize();
          if ($('#newsform').valid()) {
           $.ajax({
              url:"{{route('news.store')}}",
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
                $('.newsAppend').prepend(`<tr class='unqnews`+data.id+`'>
                      <td>`+data.title+`</td>
                      <td>`+data.description+`</td>
                     
                    <td><img src="/`+data.image+`" width="100" height="70"></td>
                      <td>
                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#newsmodal" class="editnews"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                        <a class="deletenews" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                      </td>
                    </tr>`); 
      
                $("#newsform").trigger('reset');;
              }
              
          });
      }
  })
});
$(document).on('click','.editnews',function(){
    var id = $(this).data('id');
    $.get('/admin/ciltnews/editnews/'+id,function(data){
      var img = data.image;
      var srcimg='/'+img;
      $('#updatenews #myImage ').attr("src", srcimg);
      $('#updatenews').find('#title').val(data.title);
      $('#updatenews').find('#id').val(data.id);
      $('#updatenews').find('#description').val(data.description);
      $('#updatenews').find('#date').val(data.date);

      // console.log(data);
    })
  })
  $('#updatenews').validate({ 
      rules: {
            title: 
            {
              required: true,
              
            },
            date: 
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

  $(document).on('submit','#updatenews',function(e){
    e.preventDefault();
          //var data = $(this).serialize();
          if ($('#updatenews').valid()) {
           $.ajax({
              url:"/admin/ciltnews/updatenews",
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
                 $('.unqnews'+data.id).replaceWith(`<tr class='unqnews`+data.id+`'>
                      <td>`+data.title+`</td>
                      <td>`+data.description+`</td>
                     
                    <td><img src="/`+data.image+`" width="100" height="70"></td>
                      <td>
                        <a data-id ="`+data.id+`" data-toggle="modal" data-target="#newsmodal" class="editnews"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                        <a class="deletenews" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                      </td>
                    </tr>`);    
                setTimeout(function() {$('#newsmodal').modal('hide');}, 1500);
      
                $('#updatenews').trigger('reset');
              }
              
          });
      }
  })
  $(document).on('click','.deletenews',function(e) {
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
            
            $.get('/admin/ciltnews/deletenews/'+id,function(){
                //console.log('yes');
                
            })
            
            $(this).closest('tr').hide();
            
          }
          }
      )
});
</script>
@endsection
