@extends('front.layout')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>HomePage<span>/</span>Courses<span>/</span>{{ $cat->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

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
                <div class="col-sm-6 col-lg-4 mb-5">
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
                <div class="w-100 mb-5">
                    {!! $courses->render() !!}
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    @endsection
    {{-- @extends('front.inc.footer') --}}
