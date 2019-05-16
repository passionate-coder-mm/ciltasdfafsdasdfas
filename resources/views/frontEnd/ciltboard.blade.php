@extends('frontEnd.front_layout')
@section('ab','active')
@section('title', 'CILT | Our Board ')
@section('frntcontent')
<section class="section-banner-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-banner-content">
                        <h3>About CILT - Our Board</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about Area End-->
    
    <!-- Our Team Members Area Start-->
    <section class="about-partner-area team-members-area section-padding">
        <div class="container">
            <div class="row chairman-m-area">
                <div class="col-sm-4">
                    <div class="chairman-img">
                        <img src="{{$presidentMsg->image}}" alt="President Imag">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="chairman-message">
                        <h3>{{$presidentMsg->title}}</h3>
                        <p>
                            <i class="fas fa-quote-left"></i>{{$presidentMsg->message}} </p>
                        <h4 class="president-name">- {{$presidentMsg->name}}</h4>
                    </div>
                </div>
            </div>
            <div class="row"><div class="col-sm-12"><h2 class="section-title">Our Board</h2></div></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-partner-box">
                        @foreach($boardmembers as $member)
                        <div class="single-partner">
                            <img src="{{$member->image}}" alt="partner-img">
                            <div class="team-contact">
                                <h4>{{$member->name}}</h4>
                                <h5>{{$member->designation}}</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info bioinfo" data-toggle="modal" data-id="{{$member->id}}" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div>
                      @endforeach
                        <!-- Modal  One Start-->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of <span class="name"><span></h4>
                                    </div>
                                    <div class="modal-body">
                                        <img id="myimg" src="" alt="helen">
                                        <p class="bio"></p>
                                    </div>
                                </div>
    
                            </div>
                        </div>
<script>
$(document).on('click','.bioinfo',function(){
    var id =$(this).data('id');
    $.get('ciltboardsingleinfo/'+id,function(data){
    var img = data.image;
      var srcimg='/'+img;
      $('#myModal #myimg ').attr("src", srcimg);
      $('#myModal .name').text(data.name);
      $('#myModal .bio').text(data.description);

      console.log(data);
    })
})
</script>
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        {{-- <!-- Modal  One Start-->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        <!-- Modal  One Start-->
                        {{-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        <!-- Modal  One Start-->
                        {{-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        <!-- Modal  One Start-->
                        {{-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        <!-- Modal  One Start-->
                        {{-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        <!-- Modal  One Start-->
                        {{-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        <!-- Modal  One Start-->
                        {{-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        <!-- Modal  One Start-->
                        {{-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                        {{-- <div class="single-partner">
                            <img src="img/about-img/t-1-helen.jpg" alt="partner-img">
                            <div class="team-contact">
                                <h4>Helen Noble FCILT</h4>
                                <h5>Finance Manager</h5>
                                <!--<span><i class="fas fa-envelope"></i><a href="mailto:helen@ciltbd.com">helen@ciltbd.com</a></span>-->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Full Bio</button>
                            </div>
                        </div> --}}
    
                        <!-- Modal  One Start-->
                        {{-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Full Bio Of HELEN NOBLE FCILT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/about-img/t-1-helen.jpg" alt="helen">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur corporis debitis ea enim est et exercitationem hic impedit incidunt ipsam magni mollitia nemo nihil non odio odit quas quia quibusdam quisquam repellendus saepe sed tempora totam, voluptatum? Aliquam animi aperiam beatae cum cupiditate dolore dolorem fugit in, incidunt laborum libero minima natus necessitatibus nemo nobis nulla officia officiis, optio perferendis provident quibusdam quisquam repellat sed sint sunt suscipit temporibus velit. A consequuntur eveniet excepturi magnam nesciunt officia quod! Adipisci aspernatur, corporis, dolorem enim explicabo facere incidunt laboriosam quia ratione repudiandae ut voluptatum! Architecto atque aut ex libero mollitia veritatis!</p>
                                    </div>
                                </div>
    
                            </div>
                        </div> --}}
                        <!-- Modal  One End-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection