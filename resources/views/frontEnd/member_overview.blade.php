@extends('frontEnd.front_layout')
@section('mm','active')
@section('title', 'CILT | Member Overview ')
@section('frntcontent')
<!-- Section Banner Area Start-->
<section class="section-banner-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-banner-content">
                    <h3>Membership</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home-about Area End-->

<!-- membership-overview Area Start-->
<section class="core-value-area membership-overview section-padding">
    <div class="container">
        <div class="row"><div class="col-sm-12"><h2 class="section-title">{{$overview->title}}</h2></div></div>
        <div class="row">
            <div class="col-sm-12">
                <div class="core-value-content">
                <p>{!!$overview->description!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- membership-overview Area End-->

<!-- membership-grades-area Area Start-->
<section class="who-we-are-area membership-grades-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="who-img-wrap"  style="background:
                    url({{$grade->image}})">
                    <div class="who-we-img">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="who-we-content">
                    <h3>{{$grade->title}}</h3>

                    <div class="board">
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#affiliate" data-toggle="tab">{{$grade->afftitle}}</a></li>

                                <li><a href="#member" data-toggle="tab">{{$grade->memtitle}}</a></li>

                                <li><a href="#chartered-member" data-toggle="tab">{{$grade->cmtitle}}</a></li>
                                <li><a href="#chartered-fellow" data-toggle="tab">{{$grade->cftitle}}</a></li>

                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="affiliate">

                                <h3 class="head text-center">{{$grade->afftitle}}</h3>
                                <p class="narrow text-center">{!!$grade->affdescription!!} 
                                </p>
                            </div>
                            <div class="tab-pane fade" id="member">
                                <h3 class="head text-center">{{$grade->memtitle}}</h3>
                                <p class="narrow text-center">{!!$grade->memdescription!!} 
                                </p>
                            </div>
                            <div class="tab-pane fade" id="chartered-member">
                                <h3 class="head text-center">{{$grade->cmtitle}}</h3>
                                <p class="narrow text-center">{!!$grade->cmdescription!!} 
                                </p>                            </div>

                            <div class="tab-pane fade" id="chartered-fellow">
                                <h3 class="head text-center">{{$grade->cftitle}}</h3>
                                <p class="narrow text-center">{!!$grade->cfdescription!!} 
                                </p>                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- membership-grades-area Area End-->

<!-- membership-benefits Area Start-->
<section class="who-we-are-area why-join-with-us membership-benefits section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="who-we-content">
                    <h3>{{$benifits->title}}</h3>

                    <div class="who-img-wrap visible-xs membership-bene-img" style="background:
                    url({{$benifits->image}})">
                        <div class="who-we-img">
                        </div>
                    </div>
                    @php
                    $allbenifits = json_decode($benifits->description);
                    
                  @endphp
                    <div class="who-we-text">
                        @foreach($allbenifits as $ciltbenifit)
                    <p><i class="fas fa-angle-right"></i>{!!$ciltbenifit->benifit!!}</p>
                        @endforeach
                        <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="who-img-wrap" style="background:
                    url({{$benifits->image}})">
                    <div class="who-we-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- membership-benefits Area End-->

<!-- membership-code-conduct Area Start-->
<section class="who-we-are-area why-join-with-us membership-code-conduct section-padding">
    <div class="container">
            @php
            $allconducts = json_decode($conducts->description);
          @endphp
        <div class="row">
            <div class="col-sm-6 hidden-xs">
                <div class="who-img-wrap" style="background:
                    url({{$conducts->image}})">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="who-we-content">
                    <h3>{{$conducts->title}}</h3>

                    <div class="who-img-wrap visible-xs" style="background:
                    url({{$conducts->image}})">
                    </div>
                    <div class="who-we-text more">
                        @foreach($allconducts as $val)
                        <p><i class="fas fa-angle-right"></i>{!!strip_tags($val->conduct)!!}</p>
                        <!--<a href="ApplicationForm.pdf" class="cilt-button">Join Now</a>-->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- membership-code-conduct Area End-->

<!-- Good Standing Members Area Start-->
<section class="m-good-standing section-padding">
    <div class="container">
        <div class="row"><div class="col-sm-12"><h2 class="section-title">Members in Good Standing</h2></div></div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <p class="text-center">The Chartered Institute of Logistics and Transport (Bangladesh Council) || Members 2014/2015</p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Ref No.</th>
                            <th>Name</th>
                            <th>Organigation</th>
                            <th>Designation</th>
                            <th>Contact Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>E1774</td>
                            <td>MR. KARAR MAHAMUDUL HASSAN FCILTPRESIDENT</td>
                            <td>THE CHARTERED INSTITUTE OF LOGISTICS AND TRANSPORT</td>
                            <td>Chief Officer</td>
                            <td>Karar.hassan@gmail.com
                                Cell: 01727107231</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Good Standing Members Area End-->

<!-- membership-benefits Area Start-->
<section class="who-we-are-area why-join-with-us membership-fees section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="m-fees-wrap">

                    <h3 class="visible-xs">Membership Fees</h3>

                    <div class="columns">
                        <ul class="price">
                            <li class="header">For Government Service Holders only</li>
                            <li class="grey">Registration Fee</li>
                            <li>BDT {{$govtcharge->regfee}}</li>
                            <li class="grey">Annual Charge</li>
                            <li>BDT {{$govtcharge->ann11}} (1st Year)<br> <span>Total: BDT {{$govtcharge->ann12}}</span></li>
                            <li>Tk. {{$govtcharge->ann21}} (2nd Year) <br><span>Total: BDT {{$govtcharge->ann22}}</span></li>
                            <li>Affiliate BDT {{$govtcharge->ann31}}<br><span>Total: BDT {{$govtcharge->ann32}}</span></li>
                            <li class="grey"><a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Now</a></li>
                        </ul>
                    </div>

                    <div class="columns">
                        <ul class="price">
                            <li class="header">Other than Government Service Holders</li>
                            <li class="grey">Registration Fee</li>
                            <li>BDT {{$nongovtcharge->regfee}}</li>
                            <li class="grey">Annual Charge</li>
                            <li>CMILT & Above BDT {{$nongovtcharge->ann11}} <br><span>Total: BDT {{$nongovtcharge->ann12}}</span></li>
                            <li>MILT BDT {{$nongovtcharge->ann21}}<br><span>Total: BDT {{$nongovtcharge->ann22}}</span></li>
                            <li>Affiliate BDT {{$nongovtcharge->ann31}}<br><span>Total: BDT {{$nongovtcharge->ann32}}</span></li>
                            <li class="grey"><a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Join Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="who-we-content">
                    <h3 class="hidden-xs">{{$membberfee->title}}</h3>
                    <div class="who-we-text">
                        <h4>{{$membberfee->subtitle}}</h4>
                        @php
                        $allfees = json_decode($membberfee->description);
                      @endphp
                      @foreach( $allfees as $val)
                        <p><i class="fas fa-angle-right"></i> {{$val->fee}}</p>
                        @endforeach
                        <a href="frontEnd\ApplicationForm.pdf" class="cilt-button">Apply Online</a>
                        <a href="frontEnd\ApplicationForm.pdf" class="cilt-button download-form">Download Application Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
@endsection