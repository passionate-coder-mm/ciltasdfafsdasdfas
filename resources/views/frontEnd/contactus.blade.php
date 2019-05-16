@extends('frontEnd.front_layout')
@section('co','active')
@section('title', 'CILT |Contact_us ')
@section('frntcontent')
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>Contact with us </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .error{
            color:red;
        }
    </style>
    <!-- home-about Area End-->
    
    <!-- contact-page-area Start-->
    <section class="contact-page-area section-padding">
        <div class="maap-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8854.962036227964!2d90.38869515353018!3d23.745429942764286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82ded544d2f7b670!2sMHK+Terminal!5e0!3m2!1sen!2sbd!4v1522669312722" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 contact-part-all">
                    <div class="">
                        <div class="col-sm-6">
                            <div class="contact-address-area">
                                <h3>Our Location</h3>
                                <address>
                                    <h4>Dhaka Office:</h4>
                                    {!!$officeInfo->bdofficeinfo!!}
                                    {{-- <p> Transport & Logistics Hub
    
                                        MHK Terminal (4th floor),
    
                                        Kawran Bazar, Dhaka-1000,
    
                                        Bangladesh
                                    </p>
                                    <p>Email: <a href="mailto:info@cilt.org.bd">info@cilt.org.bd</a></p>
                                    <p>Tel: <a href="tel: +88028311665"> +88028311665</a></p>
                                    <p>Fax: <a href="tel: +88029346835"> +88029346835</a></p> --}}
                                </address>
    
                                <address>
                                    <h4>Chittagong Office:</h4>
                                    {!!$officeInfo->ctofficeinfo!!}

                                    {{-- <p> HBFC Building (5th Floor)
    
                                        1/D Agrabad Commercial Area
    
                                        Chittagong-4100,
    
                                        Bangladesh
                                    </p>
                                    <p>Email: <a href="mailto:info@cilt.org.bd">info@cilt.org.bd</a></p>
                                    <p>Tel: <a href="tel: +880312513640"> +880312513640</a></p>
                                    <p>Fax: <a href="tel: +88031728262"> +88031728262</a></p> --}}
                                </address>
                                <p class="opening-hours"><span>Opening Hours:</span> Monday to Friday 9am to 5pm</p>
    
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-form-area">
                                <h3>Send us a Message</h3>
                                <br>
                                @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                         <p style="color: red">{{$error}} </p>
                                    @endforeach
                                @else
                                <h3 align="center" style="color: green">
                                    <?php
                                    $message = Session::get('success');
                                    if(isset($message)){
                                        echo $message;
                                        Session::put('success','');
                                    }
                                    ?>
                                </h3>
                                @endif
                            <form action="{{url('/contactmessage')}}" method="post">
                                @csrf
                                {{-- {!!Form::open(['class' =>'form-horizontal','id'=>'contactus','enctype'=>'multipart/form-data'])!!} --}}
                                    <input type="text" name="name" placeholder=" Your Name">
                                    <input type="email"  name="email" placeholder="Type your Email">
                                    <input type="text" name="subject" placeholder="Subject">
                                    <textarea name="message" placeholder="Write your message" style="height:100px"></textarea>
                                   
                                    <div class="text-center"><input class="cilt-button" type="submit" value="Submit Now"></div>
                                    @captcha
                                </form>
                                    {{-- {!!Form::close()!!} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
//         $('#contactus').validate({ 
//       rules: {
           
//             name: 
//             {
//               required: true,
              
//             },
//             email: 
//             {
//               required: true,
              
//             },
//             subjct: 
//             {
//               required: true,
              
//             },
//             message: 
//             {
//               required: true,
              
//             },

            
//       },
      
//       highlight: function(element) {
//           $(element).parent().addClass('has-error');
//       },
//       unhighlight: function(element) {
//           $(element).parent().removeClass('has-error');
//       },
//    });
   $(document).on('submit','#contactus',function(e){
          e.preventDefault();
          //alert('hi');
          var data = $(this).serialize();
         
           $.ajax({
              url:"{{route('contact.store')}}",
              method:"POST",
            data:data,
            dataType:'JSON',
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
                  toastr.success('Thanks for your message');
                 
      
                $("#contactus").trigger('reset');
              }
              
          });
      
  })
    </script>
    
@endsection