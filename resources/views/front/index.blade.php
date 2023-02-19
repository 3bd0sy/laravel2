@extends('front.layout')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Every child yearns to learn</h5>
                            <h1>Making Your Childs
                                World Better</h1>
                            <p>Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales
                                his void unto last session for bite. Set have great you'll male grass yielding yielding
                                man</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>Set have great you male grass yielding an yielding first their you're
                            have called the abundantly fruit were man </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Better Future</h4>
                            <p>Set have great you male grasses yielding yielding first their to
                                called deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Qualified Trainers</h4>
                            <p>Set have great you male grasses yielding yielding first their to called
                                deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Job Oppurtunity</h4>
                            <p>Set have great you male grasses yielding yielding first their to called deep
                                abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $courses_count }}</span>
                        <h4>Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $students_count }}</span>
                        <h4>Students</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $trianers_count }}</span>
                        <h4>trianers</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $c)
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                            <img href="{{ asset('uplaods/courses/' . $c->img) }}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="{{ route("front.cat",$c->cat->id) }}" class="btn_4">{{ $c->cat->name }}</a>
                                <h4>${{ $c->price }}</h4>
                                <a href="{{ route("front.show",[$c->cat->id,$c->id]) }}"><h3>{{ $c->name }}</h3></a>
                                <p>{{ $c->small_desc }}</p>
                                <div class="author_info">
                                    <div class="author_img">
                                        <img href="{{ asset('uplaods/trianers/' . $c->trianer->img) }}" alt="">
                                        <div class="author_info_text">
                                            <p>Conduct by:</p>
                                            <h5>{{ $c->trianer->name }}</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::review_part start::-->
    <section class="testimonial_part padding_top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach ($tests as $t)
                            <div class="testimonial_slider">jhfshdgfjhsgd
                                <div class="row">
                                    <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p>{{ $t->desc }}</p>
                                            <h4>{{ $t->name }}</h4>
                                            @if ($t->spec != null)
                                                <h5> {{ $t->spec }}</h5>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-2 col-sm-4">
                                        <div class="testimonial_slider_img">
                                            <img href="{{ asset('uploads/tests/' . $t->img) }}" alt="#">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->
@endsection
