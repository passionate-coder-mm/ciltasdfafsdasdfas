@extends('layouts.backEnd.admin_layout')
@section('board-active','active')
@section('about','active')
@section('title', 'CILT | About | Board Cilt')
@section('content')
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">About Cilt Board</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">President Message </a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">Board Members</a></li>            
        </ul>
        <div class="tab-content">
         <div id="tab1" class="tab-pane fade in active">
                {!!Form::open(['class' =>'form-horizontal','id'=>'message','enctype'=>'multipart/form-data'])!!}
                <div class="box-body">
                      <h3>President Message</h3>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="{{$presidentMsg->name}}">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$presidentMsg->id}}">
       
                       </div>
                    </div>
                    <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" value="{{$presidentMsg->title}}">
           
                           </div>
                    </div>
                   
                    <div class="form-group">
                       <label for="description" class="col-sm-2 control-label">Message (130)</label>
                       <div class="col-sm-8">
                       <textarea type="text" class="form-control"  name="message" placeholder="Enter Image Description" rows="10">{{$presidentMsg->message}}</textarea>
                       </div>
                   </div>
                   <div class="form-group">
                        <label for="title" class="col-sm-2 control-label"></label>
                        <div class="col-md-10">
                        <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$presidentMsg->image)}}" alt="">
                        </div>
                      </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Image (height 294)</label>
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

         <div id="tab2" class="tab-pane fade in">
          {!!Form::open(['class' =>'form-horizontal','id'=>'boardmember','enctype'=>'multipart/form-data'])!!}
            <div class="box-body">
                <h3>Board Members</h3>
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
                <label for="description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-8">
                <textarea type="text" class="form-control" id="description"  name="description" placeholder="Enter  Description" rows="6"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Image (186X220)</label>
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
                    <h3>Board Members List</h3>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Photo</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody class='board'>
                        @foreach($boardmembers as $val)
                            <tr class='unqboard{{$val->id}}'>
                            <td>{{$val->name}}</td>      
                            <td>{{$val->designation}}</td>                   
                            <td><img src="{{url('/'.$val->image)}}" width="100" height="70"></td>
                                <td>
                                    <a data-id ="{{$val->id}}" data-toggle="modal" data-target="#boardModal" class="editboard"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                <a class="deleteboard" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                </td>
                                </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                  <div class="modal fade" id="boardModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Edit Boardmember</h4>
                            </div>
                              <div class="modal-body">
                                    {!!Form::open(['class' =>'form-horizontal','id'=>'boardmemberupdate','enctype'=>'multipart/form-data'])!!}
                                    <div class="box-body">
                                        <h3>Board Members</h3>
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
                                        <label for="description" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-8">
                                        <textarea type="text" class="form-control" id="description"  name="description" placeholder="Enter  Description" rows="8"></textarea>
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
        </div>
        </div>
    </div>
</section>
<script>
    $('#boardmember').validate({ 
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
   $('#boardmemberupdate').validate({ 
      rules: {
           
            name: 
            {
              required: true,
              
            },
            designation: 
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
   $('#message').validate({ 
      rules: {
           
            name: 
            {
              required: true,
              
            },
            title: 
            {
              required: true,
              
            },
            message: 
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
   $(document).on('submit','#message',function(e){
    e.preventDefault();
          //var data = $(this).serialize();
          if ($('#message').valid()) {
           $.ajax({
              url:"/admin/ciltboard/updatepresedentmsg",
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
                 
      
                $("#tab1").load(location.href + " #tab1");
              }
              
          });
      }
  })
   $(document).on('submit','#boardmember',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#boardmember').valid()) {
    $.ajax({
        url:"/admin/ciltboard/storeboardmember",
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
            
        $('#boardmember').trigger('reset');
        $(".board").prepend(`<tr class="unqboard`+data.id+`">
                    <td>`+data.name+`</td>      
                    <td>`+data.designation+`</td>                   
                    <td><img src="/`+data.image+`" width="100" height="70"></td>
                        <td>
                            <a data-id ="`+data.id+`" data-toggle="modal" data-target="#boardModal" class="editboard"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                        <a class="deleteboard" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                        </td>
         </tr>`);
  

        }
        
    });
    }
  })
  $(document).on('click','.editboard',function(){
      //alert(id);
    var id = $(this).data('id');
    $.get('/admin/ciltboard/editmyBoard/'+id,function(data){
      var img = data.image;
      var srcimg='/'+img;
      $('#boardmemberupdate #myImage ').attr("src", srcimg);
      $('#boardmemberupdate').find('#id').val(data.id);
      $('#boardmemberupdate').find('#name').val(data.name);
      $('#boardmemberupdate').find('#designation').val(data.designation);
     $('#boardmemberupdate').find('#description').val(data.description);
    // console.log(data);
    })
  })
  $(document).on('submit','#boardmemberupdate',function(e){
    e.preventDefault();
          //var data = $(this).serialize();
          if ($('#boardmemberupdate').valid()) {
           $.ajax({
              url:"/admin/ciltboard/updateboardmember",
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
                 $('.unqboard'+data.id).replaceWith(`<tr class="unqboard`+data.id+`">
                    <td>`+data.name+`</td>      
                    <td>`+data.designation+`</td>                   
                    <td><img src="/`+data.image+`" width="100" height="70"></td>
                        <td>
                            <a data-id ="`+data.id+`" data-toggle="modal" data-target="#boardModal" class="editboard"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                        <a class="deleteboard" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                        </td>
         </tr>`);    
                setTimeout(function() {$('#boardModal').modal('hide');}, 1500);
      
                $('#boardmemberupdate').trigger('reset');
              }
              
          });
      }
  })
  $(document).on('click','.deleteboard',function(e) {
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
            
            $.get('/admin/ciltboard/deletemember/'+id,function(){
                //console.log('yes');
                
            })
            
            $(this).closest('tr').hide();
            
          }
          }
      )
});
</script>
@endsection