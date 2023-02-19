@extends('front.layout')

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Course Details</h2>
                            <p>HomePage<span>/</span>Courses<span>/</span>{{ $course->cat->name }}<span>/</span>{{ $course->name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{ asset('uploads/courses/' . $course->img) }}" alt="">
                    </div>
                    <div class="content_wrapper py-5">
                        {!! $course->desc !!}
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span class="color">{{ $course->trianer->name }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course Fee </p>
                                    <span>${{ $course->price }}</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <div class="my-5">
                        <form class="form-contact contact_form" action="{{ route("front.message.enroll") }}" method="post" id="contactForm"
                            novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                            placeholder='Enter your name'>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'"
                                            placeholder='Enter email address'>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="spec" id="subject" type="text"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your speciality'"
                                            placeholder='Enter your speciality'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm btn_1">Enroll</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->
@endsection
