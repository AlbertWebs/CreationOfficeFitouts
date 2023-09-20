@extends('front.master')

@section('content')
@foreach ($Portfolio as $port)



<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Interior Work</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="breadcrumb-wrapper-inner">
                                <span>
                                    <a title="Go to Delmont." href="index-2.html" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span>Interior Work</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--site-main start-->
<div class="site-main">


    <!-- project-single-section -->
    <section class="ttm-row project-single-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-top-image">
                        <div class="ttm-pf-single-content-wrapper">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper">
                                <img width="1200" height="800" class="img-fluid" src="{{url('/')}}/uploads/portfolios/{{$port->image_one}}" alt="portfolio-img">
                            </div><!-- ttm_single_image-wrapper end -->
                            <div class="ttm-pf-single-detail-box ttm-bgcolor-darkgrey ttm-textcolor-white">
                                <h2 class="ttm-pf-detailbox-title">Project Details:</h2>
                                <ul class="ttm-pf-detailbox-list">
                                    <li>
                                        <div class="ttm-pf-data-title">Project</div>
                                        <div class="ttm-pf-data-details">{{$port->title}}</div>
                                    </li>
                                    <li>
                                        <div class="ttm-pf-data-title">Clients</div>
                                        <div class="ttm-pf-data-details">{{$port->client}}</div>
                                    </li>
                                    <li>
                                        <div class="ttm-pf-data-title">Location</div>
                                        <div class="ttm-pf-data-details">Nairobi, Kenya</div>
                                    </li>
                                    <li>
                                        <div class="ttm-pf-data-title">Project Year</div>
                                        <div class="ttm-pf-data-details">--</div>
                                    </li>
                                </ul>
                                <div class="ttm-single-pf-footer">
                                    <div class="ttm-social-share-wrapper">
                                        <div class="ttm-social-share-title">Share Media:</div>
                                        <div class="ttm-social-share-links">
                                            <ul class="social-icons square">
                                                <li class="social-facebook">
                                                    <a href="https://www.facebook.com/creationltd"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li class="social-twitter">
                                                    <a href="https://twitter.com/creationoffice1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li class="social-instagram">
                                                    <a href="https://www.instagram.com/creation_office_fitout/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                                <li class="social-linkedin">
                                                    <a href="https://www.linkedin.com/company/creation-office-fitouts/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-pf-single-content-area">
                            <h2>{{$port->title}}</h2>

                            <div class="row mt-25 mb-30">
                                @if($port->image_two == null OR $port->image_two == 0)

                                @else
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="ttm_single_image-wrapper mt-15 mb-15 res-991-mt-20">
                                        <img width="580" height="610" class="img-fluid" src="{{url('/')}}/uploads/portfolios/{{$port->image_two}}" alt="project-01">
                                    </div>
                                </div>
                                @endif
                                @if($port->image_three == null OR $port->image_three == 0)

                                @else
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="ttm_single_image-wrapper mt-15 mb-15 res-991-mt-20">
                                        <img width="580" height="610" class="img-fluid" src="{{url('/')}}/uploads/portfolios/{{$port->image_three}}" alt="project-02">
                                    </div>
                                </div>
                                @endif
                                @if($port->image_four == null OR $port->image_four == 0)

                                @else
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="ttm_single_image-wrapper mt-15 mb-15 res-991-mt-20">
                                        <img width="580" height="610" class="img-fluid" src="{{url('/')}}/uploads/portfolios/{{$port->image_four}}" alt="project-03">
                                    </div>
                                </div>
                                @endif

                                @if($port->image_five == null OR $port->image_five == 0)

                                @else
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="ttm_single_image-wrapper mt-15 mb-15 res-991-mt-20">
                                        <img width="580" height="610" class="img-fluid" src="{{url('/')}}/uploads/portfolios/{{$port->image_five}}" alt="project-01">
                                    </div>
                                </div>
                                @endif

                                @if($port->image_six == null OR $port->image_six == 0)

                                @else
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="ttm_single_image-wrapper mt-15 mb-15 res-991-mt-20">
                                        <img width="580" height="610" class="img-fluid" src="{{url('/')}}/uploads/portfolios/{{$port->image_six}}" alt="project-02">
                                    </div>
                                </div>
                                @endif

                                @if($port->image_seven == null OR $port->image_seven == 0)

                                @else
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="ttm_single_image-wrapper mt-15 mb-15 res-991-mt-20">
                                        <img width="580" height="610" class="img-fluid" src="{{url('/')}}/uploads/portfolios/{{$port->image_seven}}" alt="project-03">
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="ttm-horizontal_sep width-100 mt-25 mb-25 res-991-mt-15"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style6">
                                        {{-- <div class="featured-icon icon-with-bg-shape">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon flaticon-stairs"></i>
                                            </div>
                                        </div> --}}
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Our people make us unique</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>
                                                    From trusted expertise to emerging talent, Creation's Team have the drive to succeed and a genuine approach that delivers exceptional results for our clients and the communities we serve.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style6">
                                        {{-- <div class="featured-icon icon-with-bg-shape">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon flaticon-windows"></i>
                                            </div>
                                        </div> --}}
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>We have ambition built on deep expertise</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>
                                                    We are ambitious to be the best we can be, individually and collectively.<br>

                                                    Our plans for growth are built on a foundation of collective expertise that few can match.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style6">
                                        {{-- <div class="featured-icon icon-with-bg-shape">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon flaticon-interior-design"></i>
                                            </div>
                                        </div> --}}
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Relationships define our success</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We are a business that builds strong relationships forged on trust and reliability.

                                                    We make ourselves easy to do business with and follow through on our promises.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ttm-nextprev-bottom-nav d-flex justify-content-between">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-squar ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-grey" href="#">Previous</a>
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-squar ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-grey" href="#">Next</a>
                                    </div>
                                </div>
                            </div><!-- row end-->
                        </div>
                        <?php $Portfolio = DB::table('portfolios')->inRandomOrder()->limit('3')->orderBy('id','DESC')->get(); ?>

                        <div class="ttm-pf-single-related-wrapper mb_15">
                            <h2>Related Projects</h2>
                            <div class="row">
                                @foreach ($Portfolio as $item)
                                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                                    <!-- featured-imagebox-portfolio -->
                                    <div class="featured-imagebox featured-imagebox-portfolio style3">
                                        <!-- featured-thumbnail -->
                                        <div class="featured-thumbnail">
                                            <img width="610" height="750" class="img-fluid" src="{{url('/')}}/uploads/portfolios/{{$item->image}}" alt="image">
                                        </div>
                                        <!-- featured-thumbnail end-->
                                        <div class="featured-content-inner">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3><a href="{{url('/')}}/portfolio/{{$item->slung}}">{{$item->title}}</a></h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>
                                                        Our impact is measured not just in the quality of the project delivered but in the longer-term impact on the environment, communities and people.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ttm-footer">
                                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="{{url('/')}}/portfolio/{{$item->slung}}">Read More<i class="ti ti-plus"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- featured-imagebox-portfolio end-->
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-single-section end -->


</div><!--site-main end-->
@endforeach



@endsection
