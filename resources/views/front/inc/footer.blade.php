
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="{{ route("front.homepage") }}"> <img href="{{ asset("front/img") }}/logo.png" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <form action="{{ route("front.message.newsletter") }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="submit"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> syria/aleppo </p>
                            <p><span> Phone :</span>+963 900 000 000</p>
                            <p><span> Email : </span>test@test.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://t.me/ax_syrian" target="_blank">3bdo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script href="{{ asset("front/js") }}/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script href="{{ asset("front/js") }}/popper.min.js"></script>
    <!-- bootstrap js -->
    <script href="{{ asset("front/js") }}/bootstrap.min.js"></script>
    <!-- easing js -->
    <script href="{{ asset("front/js") }}/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script href="{{ asset("front/js") }}/swiper.min.js"></script>
    <!-- swiper js -->
    <script href="{{ asset("front/js") }}/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script href="{{ asset("front/js") }}/owl.carousel.min.js"></script>
    <script href="{{ asset("front/js") }}/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script href="{{ asset("front/js") }}/slick.min.js"></script>
    <script href="{{ asset("front/js") }}/jquery.counterup.min.js"></script>
    <script href="{{ asset("front/js") }}/waypoints.min.js"></script>
    <!-- custom js -->
    <script href="{{ asset("front/js") }}/custom.js"></script>
</body>

</html>
