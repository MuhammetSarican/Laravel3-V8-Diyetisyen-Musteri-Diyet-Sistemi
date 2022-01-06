<?php
$setting= \App\Http\Controllers\HomeController::getsetting();
?>
<div class="site-footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="footer-heading mb-4">About</h2>
                <p>{{$setting->aboutus}}</p>
                <div class="my-5 social">
                    <a href="{{$setting->facebook}}" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="{{$setting->twitter}}" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="{{$setting->instagram}}" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="{{$setting->youtube}}" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="footer-heading mb-4">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">Amazing Atmosphere</a></li>
                            <li><a href="#">Caring Staff</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="footer-heading mb-4">Helpful Link</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">Hospice Care</a></li>
                            <li><a href="#">Excellent Cuisine</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="footer-heading mb-4">Resources</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">Health Care</a></li>
                            <li><a href="#">Elderly Care</a></li>
                            <li><a href="#">Care with Love</a></li>
                            <li><a href="#">Quality Care</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p class="copyright"><small>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>{{$setting->company}} <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="{{$setting->email}}" target="_blank" >{{$setting->title}}</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div> <!-- .site-wrap -->

<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-ui.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.countdown.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('assets')}}/js/aos.js"></script>
<script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.sticky.js"></script>
<script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script>


<script src="{{asset('assets')}}/js/main.js"></script>
