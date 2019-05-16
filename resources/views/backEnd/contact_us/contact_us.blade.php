@extends('layouts.backEnd.admin_layout')
@section('con','active')

@section('title', 'CILT | Contact Us')
@section('content')
<section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title">Contact Info</h3>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
            </div>
            <ul class="nav nav-tabs">
                    <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">Office Info </a></li>
                    <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">Contct Message</a></li> 
                    <li class="commonlitabforcash"><a data-toggle="tab" href="#tab3">Subscribed Email</a></li>            
           
                </ul>
          <div class="tab-content">
            <div id="tab1" class="tab-pane fade in active">
            {!!Form::open(['class' =>'form-horizontal','id'=>'officeinfo','enctype'=>'multipart/form-data'])!!}
                <div class="box-body">
                      <h3>Office Address</h3>
                    <div class="form-group">
                        {{-- <label for="title" class="col-sm-2 control-label">Name</label> --}}
                        <div class="col-sm-8">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$officeInfo->id}}">
       
                       </div>
                    </div>
                   
                    <div class="form-group">
                       <label for="description" class="col-sm-2 control-label">Dhaka Office Address</label>
                       <div class="col-sm-8">
                       <textarea type="text" class="form-control" id="bdofficeinfo"  name="bdofficeinfo" placeholder="Enter Image Description" rows="6">{{$officeInfo->bdofficeinfo}}</textarea>
                       </div>
                   </div>
                   <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Chittagonj office Address</label>
                        <div class="col-sm-8">
                        <textarea type="text" class="form-control" id="ctofficeinfo"  name="ctofficeinfo" placeholder="Enter Image Description" rows="6">{{$officeInfo->ctofficeinfo}}</textarea>
                        </div>
                    </div>
              
                    
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
                {!!Form::close()!!}
            </div>
            <div id="tab2" class="tab-pane fade in">
                    <div class="box-body">
                            <h3>Contact Message List</h3>
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th width="15%">Name</th>
                                <th width="15%">Email</th>
                                <th width="20%">Subject</th>
                                <th width="50%">Message</th>
                              </tr>
                              </thead>
                              <tbody>
                                @foreach($message as $val)
                                    <tr>
                                    <td>{{$val->name}}</td>      
                                    <td>{{$val->email}}</td>                   
                                    <td>{{$val->subject}}</td>
                                    <td>{{$val->message}}</td>
                                    </tr>
                                    @endforeach
                              </tbody>
                            </table>
                          </div>
            </div>
            <div id="tab3" class="tab-pane fade in">
                    <div class="box-body">
                            <h3>Subscribed Email list</h3>
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th width="15%">Serial</th>
                                <th width="30%">Email</th>
                                <th width="30%">Subscribed Date</th>
                                
                              </tr>
                              </thead>
                              <tbody>
                                @foreach($subscribe as $val)
                                    <tr>
                                    <td>{{$loop->index + 1}}</td>      
                                    <td>{{$val->email}}</td>                   
                                    <td>{{$val->created_at}}</td>
                                    </tr>
                                    @endforeach
                              </tbody>
                            </table>
                          </div>
            </div>
        </div>
</section>
<script>
    $(function () {
    CKEDITOR.replace('bdofficeinfo')
    CKEDITOR.replace('ctofficeinfo')
    });
    
    $(document).on('submit','#officeinfo',function(e){
    e.preventDefault();
          //var data = $(this).serialize();
          if ($('#officeinfo').valid()) {
           $.ajax({
              url:"{{route('contactus.store')}}",
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
                 
      
                // $("#tab1").load(location.href + " #tab1");
              }
              
          });
      }
  })
</script>
@endsection