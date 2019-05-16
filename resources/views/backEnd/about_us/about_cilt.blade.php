@extends('layouts.backEnd.admin_layout')
@section('about','active')
@section('cilt-active','active')
@section('title', 'CILT |About |Cilt')
@section('content')
<section class="content" >
    
    <div class="box box-info">
         <div class="box-header with-border">
         <h3 class="box-title">About Cilt</h3>
             <div class="box-tools pull-right">
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
             <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
         </div>
         </div>
         <ul class="nav nav-tabs">
            <li class="active commonlitabforcash"><a data-toggle="tab" href="#tab1">Corevalues </a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab2">Who we are?</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab3">What We Do?</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab4">Why should You Join us</a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab5">Partners </a></li>
            <li class="commonlitabforcash"><a data-toggle="tab" href="#tab6">Our History</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab1" class="tab-pane fade in active">
             {!!Form::open(['class' =>'form-horizontal','id'=>'corevalueform','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
                    <h3>Core Values</h3>
                  <div class="form-group">
                      <label for="title" class="col-sm-2 control-label">Title</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="title" name="title" value="{{$coreValues->title}}">
                      <input type="hidden" class="form-control" id="id" name="id" value="{{$coreValues->id}}">
     
                     </div>
                  </div>
                 
                  <div class="form-group">
                     <label for="description" class="col-sm-2 control-label">Description (38)</label>
                     <div class="col-sm-8">
                     <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description" rows="6">{{$coreValues->description}}</textarea>
                     </div>
                 </div>
                  
              </div>
              <div class="box-footer">
                  <button type="submit" class="btn btn-info">Update</button>
              </div>
              {!!Form::close()!!}
             
            </div>
            <div id="tab2" class="tab-pane fade">
                    {!!Form::open(['class' =>'form-horizontal','id'=>'whoweare','enctype'=>'multipart/form-data'])!!}
                    <div id='refreshtab2'>
                    <div class="box-body">
                          <h3>Who We are</h3>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" value="{{$abtWhoweare->title}}">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$abtWhoweare->id}}">
           
                           </div>
                        </div>
                       
                        <div class="form-group">
                           <label for="description" class="col-sm-2 control-label">Description (85)</label>
                           <div class="col-sm-8">
                           <textarea type="text" class="form-control"  name="description" placeholder="Enter Image Description" rows="6">{{$abtWhoweare->description}}</textarea>
                           </div>
                       </div>

                       <div class="form-group">
                            <label for="title" class="col-sm-2 control-label"></label>
                            <div class="col-md-10">
                            <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$abtWhoweare->image)}}" alt="">
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
                </div>
                    {!!Form::close()!!}
            </div>
            <div id="tab3" class="tab-pane fade">
                    {!!Form::open(['class' =>'form-horizontal','id'=>'whatdo','enctype'=>'multipart/form-data'])!!}
                    <div class="box-body">
                        <h3>What We Do?</h3>
                        <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"  >               
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
                        <button type="submit" class="btn btn-info">Create</button>
                    </div>
                    {!!Form::close()!!}
                    <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tbody class='whatappend'>
                                @foreach($Whatdo as $val)
                                    <tr class='unqwhatdo{{$val->id}}'>
                                    <td>{{$val->title}}</td>                         
                                    <td><img src="{{url('/'.$val->image)}}" width="100" height="70"></td>
                                        <td>
                                            <a data-id ="{{$val->id}}" data-toggle="modal" data-target="#whatdoupdate" class="editwhatdo"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                        <a class="deletewhatdo" data-id ="{{$val->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                        </td>
                                        </tr>
                                    @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade" id="whatdoupdate">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Edit What We do</h4>
                                    </div>
                                      <div class="modal-body">
                                          {!!Form::open(['class' => 'form-horizontal','id'=>'updatewhatdo','enctype'=>'multipart/form-data'])!!}
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
                                                  <input type="hidden" class="form-control" id="id" name="id">
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
            <div id="tab4" class="tab-pane fade">
                    @php
                    $description = json_decode($whyJoin->description);
                      $i = 0;
                    @endphp
                    {!!Form::open(['class' =>'form-horizontal','id'=>'whyjoin','enctype'=>'multipart/form-data'])!!}
                    <div id='refreshtab4'>
                    <div class="box-body">
                          <h3>Why should you join us?</h3>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" value="{{$whyJoin->title}}">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$whyJoin->id}}">
           
                           </div>
                        </div>
                        <div class="form-group">
                                <label for="title" class="col-sm-2 control-label"></label>
                                <div class="col-md-10">
                                <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$whyJoin->image)}}" alt="">
                                </div>
                              </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Description</label>
                            <div class="list col-sm-8 " data-index_no="1000">
                                <div class="itemWrapper">
                                    <table class="table table-bordered moreTable">
                                        <tr>
                                            <th width="5%">Serial No</th>
                                            <th width="40%">description</th>
                                            <th width="15%">Option</th>
                                        </tr>
                                         @foreach($description as $val)
                                         <?php $i++ ?>
                                            <tr class="item_tr single_list">
                                                <td class="day_no">{{$i}}</td>
                                            <td><textarea class="form-control" id="pro_description" name="program[{{$i}}][description]">{{$val->description}}</textarea><br></td>
                                                {{-- <input type="hidden" name="program[0][day]" class="form-control dayval" value="1"> --}}
                                                <td><span class="remove" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <span  class="add_more" style="background: #28d19c;
                                                                            padding: 8px 21px;
                                                                            color: #fff;
                                                                            border-radius: 8%;text-decoration: none; margin-bottom: 10px;cursor:pointer;">+</span><br><br>
                                </div>
                            </div>
                        </div>     
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </div>
                    {!!Form::close()!!}            
                </div>
                <div id="tab5" class="tab-pane fade in">
                {!!Form::open(['class' =>'form-horizontal','id'=>'partner','enctype'=>'multipart/form-data'])!!}
                    <div class="box-body">
                        <h3>Partners</h3>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Image (150X114)</label>
                            <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">Create</button>
                    </div>
                    {!!Form::close()!!}
                    <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>Created at</th>
                                <th>Photo</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tbody class="partnerappend">
                                @foreach($partners as $partner)
                               <tr class='unqpartner{{$partner->id}}'>
                               <td>{{$partner->created_at}}</td>                         
                               <td><img src="{{url('/'.$partner->image)}}" width="100" height="70"></td>
                                  <td>
                                    <a data-id ="{{$partner->id}}" data-toggle="modal" data-target="#partnerupdate" class="editpartner"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                                  <a class="delepartner" data-id ="{{$partner->id}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                                  </td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade" id="partnerupdate">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Edit Partners</h4>
                                    </div>
                                      <div class="modal-body">
                                          {!!Form::open(['class' => 'form-horizontal','id'=>'updatepartner','enctype'=>'multipart/form-data'])!!}
                                          <div class="box-body">
                                             <div class="form-group">
                                                 <label for="title" class="col-sm-2 control-label">Image (150X114)</label>
                                                 <div class="col-sm-8">
                                                  <input type="file" class="form-control" id="image" name="image">
                                                  <input type="hidden" class="form-control" id="id" name="id">
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
                 <div id="tab6" class="tab-pane fade">
                        @php
                          $history = json_decode($ourhistory->history);
                          $i = 0;
                        @endphp
                        {!!Form::open(['class' =>'form-horizontal','id'=>'history','enctype'=>'multipart/form-data'])!!}
                        <div id='refreshtab6'>
                        <div class="box-body">
                              <h3>Our History</h3>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title" value="{{$ourhistory->title}}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$ourhistory->id}}">
               
                               </div>
                            </div>
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label"></label>
                                    <div class="col-md-10">
                                    <img id="myImage" class="img-responsive" width="200" height="100" src="{{url('/'.$ourhistory->image)}}" alt="">
                                    </div>
                                  </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Image (600X500)</label>
                                <div class="col-sm-8">
                                <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Description</label>
                                <div class="historylist col-sm-8 " data-index_no="2000">
                                    <div class="itemWrapperhistory">
                                        <table class="table table-bordered moreTablehistory">
                                            <tr>
                                                <th width="5%">Serial No</th>
                                                <th width="20%">Year</th>
                                                <th width="40%">History</th>
                                                <th width="5%">Option</th>
                                            </tr>
                                             @foreach($history as $val)
                                             <?php $i++ ?>
                                                <tr class="item_tr single_list">
                                                <td><input type="text" class="form-control" value="{{$i}}"></td>
                                                 <td><input type="text" name="program[{{$i}}][year]" class="form-control" value="{{$val->year}}"></td>
                                                <td><textarea class="form-control" id="pro_description" name="program[{{$i}}][cltihistory]">{{$val->cltihistory}}</textarea><br></td>
                                                    {{-- <input type="hidden" name="program[0][day]" class="form-control dayval" value="1"> --}}
                                                    <td><span class="removehistory" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <span  class="add_morehistory" style="background: #28d19c;
                                                                                padding: 8px 21px;
                                                                                color: #fff;
                                                                                border-radius: 8%;text-decoration: none; margin-bottom: 10px;cursor:pointer;">+</span><br><br>
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </div>
                        {!!Form::close()!!}            
                    </div>
          </div>
        </div>

     </div>
 </section>
<script>
 $(document).on('click', '.add_morehistory', function () {
     //alert('hi');
    var index = $('.historylist').data('index_no');
    $('.historylist').data('index_no', index + 1);
    var html = $('.itemWrapperhistory .item_tr:last').clone().find('.form-control').each(function () {
        this.name = this.name.replace(/\d+/, index+1);
        this.id = this.id.replace(/\d+/, index+1);
        this.value = '';
    }).end();
    $('.moreTablehistory').append(html);
    var rowCount = $('.moreTable tr').length;
    $(this).closest('.itemWrapperhistory').find('.item_tr:last').find('.day_no').html(rowCount-1);
    $(this).closest('.itemWrapperhistory').find('.item_tr:last').find('.dayval').val(rowCount-1);
});
$(document).on('click', '.removehistory', function () {
    var obj=$(this);
    var count= $('.single_list').length;
    alert(count);
    if(count > 1) {
        if(obj.closest('.single_list').is($(this).closest('.itemWrapperhistory').find('.single_list:last'))){
            obj.closest('.single_list').remove();
        }else{
            alert('You can only remove the last one!');
        }
    }
});
$(document).on('click', '.add_more', function () {
    var index = $('.list').data('index_no');
    $('.list').data('index_no', index + 1);
    var html = $('.itemWrapper .item_tr:last').clone().find('.form-control').each(function () {
        this.name = this.name.replace(/\d+/, index+1);
        this.id = this.id.replace(/\d+/, index+1);
        this.value = '';
    }).end();
    $('.moreTable').append(html);
    var rowCount = $('.moreTable tr').length;
    $(this).closest('.itemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
    $(this).closest('.itemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
});
$(document).on('click', '.remove', function () {
    var obj=$(this);
    var count= $('.single_list').length;
    // alert(count);
    if(count > 1) {
        if(obj.closest('.single_list').is($(this).closest('.itemWrapper').find('.single_list:last'))){
            obj.closest('.single_list').remove();
        }else{
            alert('You can only remove the last one!');
        }
    }
});
$('#history').validate({ 
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
   $(document).on('submit','#history',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#whoweare').valid()) {
    $.ajax({
        url:"/admin/aboutus/updatehistory",
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
            

        $("#refreshtab6").load(location.href + " #refreshtab6");
        }
        
    });
    }
  })

$(document).on('submit','#whyjoin',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#whoweare').valid()) {
    $.ajax({
        url:"/admin/aboutus/whyjoin",
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
            

        $("#refreshtab4").load(location.href + " #refreshtab4");
        }
        
    });
    }
  })
 $(document).ready(function () {
    $('#partner').validate({ 
      rules: {
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
   $('#whatdo').validate({ 
      rules: {
            image: 
            {
              required: true,
              
            },
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
   $('#updatewhatdo').validate({ 
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
   $(document).on('submit','#whatdo',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#whatdo').valid()) {
    $.ajax({
        url:"/admin/aboutus/createwhattodo",
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
            
        $('#whatdo').trigger('reset');
        $(".whatappend").prepend(`<tr class="unqwhatdo`+data.id+`"><td>`+data.title+`</td><td><img src="/`+data.image+`" width="100" height="70"></td><td><a data-id ="`+data.id+`" data-toggle="modal" data-target="#whatdoupdate" class="editwhatdo"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                          <a class="deletewhatdo" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                    </td></tr>`);
  

        }
        
    });
    }
  })
  $(document).on('click','.editwhatdo',function(){
    var id = $(this).data('id');
    $.get('/admin/aboutus/editwhatwedo/'+id,function(data){
      var img = data.image;
      var srcimg='/'+img;
      $('#updatewhatdo #myImage ').attr("src", srcimg);
      $('#updatewhatdo').find('#id').val(data.id);
      $('#updatewhatdo').find('#title').val(data.title);

      // console.log(data);
    })
  })
  $(document).on('submit','#updatewhatdo',function(e){
    e.preventDefault();
          //var data = $(this).serialize();
          if ($('#updatewhatdo').valid()) {
           $.ajax({
              url:"/admin/aboutus/updatewhattodo",
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
                 $('.unqwhatdo'+data.id).replaceWith(`<tr class="unqwhatdo`+data.id+`"><td>`+data.title+`</td><td><img src="/`+data.image+`" width="100" height="70"></td><td><a data-id ="`+data.id+`" data-toggle="modal" data-target="#whatdoupdate" class="editwhatdo"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                          <a class="deletewhatdo" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                    </td></tr>`);    
                setTimeout(function() {$('#whatdoupdate').modal('hide');}, 1500);
      
                $('#updatewhatdo').trigger('reset');
              }
              
          });
      }
  })
  $(document).on('click','.deletewhatdo',function(e) {
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
            
            $.get('/admin/aboutus/deletewhatwedo/'+id,function(){
                //console.log('yes');
                
            })
            
            $(this).closest('tr').hide();
            
          }
          }
      )
});
   $(document).on('submit','#partner',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#partner').valid()) {
    $.ajax({
        url:"/admin/aboutus/createpartner",
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
        $('.partnerappend').prepend(`<tr class='unqpartner`+data.id+`'>
                       <td>`+data.created_at+`</td>                         
                       <td><img src="/`+data.image+`" width="100" height="70"></td> 
                          <td>
                            <a data-id ="`+data.id+`" data-toggle="modal" data-target="#partnerupdate" class="editpartner"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                          <a class="delepartner" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                          </td>
                        </tr>`);          
                $('#partner').trigger('reset');
            

        }
        
    });
    }
  })
  $(document).on('click','.editpartner',function(){
    var id = $(this).data('id');
    $.get('/admin/aboutus/editpartner/'+id,function(data){
      var img = data.image;
      var srcimg='/'+img;
      $('#updatepartner #myImage ').attr("src", srcimg);
      $('#updatepartner').find('#id').val(data.id);
      // console.log(data);
    })
  })
  
  $(document).on('submit','#updatepartner',function(e){
    e.preventDefault();
          //var data = $(this).serialize();
          if ($('#updatepartner').valid()) {
           $.ajax({
              url:"/admin/aboutus/updatepartner",
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
                 $('.unqpartner'+data.id).replaceWith(`<tr class='unqpartner`+data.id+`'>
                       <td>`+data.created_at+`</td>                         
                       <td><img src="/`+data.image+`" width="100" height="70"></td> 
                          <td>
                            <a data-id ="`+data.id+`" data-toggle="modal" data-target="#partnerupdate" class="editpartner"><span class="glyphicon glyphicon-edit btn btn-primary btn-sm"></span></a>
                          <a class="delepartner" data-id ="`+data.id+`"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
                          </td>
                        </tr>`);    
                setTimeout(function() {$('#partnerupdate').modal('hide');}, 1500);
      
                $('#updatepartner').trigger('reset');
              }
              
          });
      }
  })

  $(document).on('click','.delepartner',function(e) {
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
            
            $.get('/admin/aboutus/deletepartner/'+id,function(){
                //console.log('yes');
                
            })
            
            $(this).closest('tr').hide();
            
          }
          }
      )
});
    $('#corevalueform').validate({ 
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

$('#whoweare').validate({ 
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

$(document).on('submit','#whoweare',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#whoweare').valid()) {
    $.ajax({
        url:"/admin/aboutus/whoweareupdate",
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
            

        $("#refreshtab2").load(location.href + " #refreshtab2");
        }
        
    });
    }
  })
$(document).on('submit','#corevalueform',function(e){
    e.preventDefault();
        //var data = $(this).serialize();
    if ($('#corevalueform').valid()) {
    $.ajax({
        url:"/admin/aboutus/corevalueupdate",
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
});
</script>
@endsection