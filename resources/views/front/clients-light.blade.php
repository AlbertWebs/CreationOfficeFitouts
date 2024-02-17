    <!--client-section-->
    <div class="ttm-row client-section mt_115 res-991-mt-45 ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row text-center">
                <div class="col-md-12">
                    <!-- slick_slider -->
                    <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>
                        <?php $Client = DB::table('clients')->get(); ?>
                        @foreach ($Client as $client)
                        <div class="col-lg-12">
                            <div class="client-box">
                                <div class="client-thumbnail">
                                    <img width="178" height="70" style="border:2px solid #999" class="img-fluid" src="{{url('/')}}/uploads/clients/{{$client->image}}" alt="{{$client->name}}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- ttm-client end -->
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!--client-section-->

