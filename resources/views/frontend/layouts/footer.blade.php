
<div class="container-fluid footer">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12 offset-sm-3 offset-md-0">
                        <div class="footerLogo">

                            <p>Lorem Ipsum</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6  col-12">
                        <h5>QUICK LINKS</h5>
                        <ul class="footer-links">
                            <li><a href="">Lorem Ipsum</a></li>
                            <li><a href="">Lorem Ipsum</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6  col-12">
                        <h5>CONTACT US </h5>
                        <ul class="footer-links">
                            <li>
                                <a href="#"><img src="{{ asset('/frontend/images/Icons/phone.png')}}" class="img-fluid"> 1234567890</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/frontend/images/Icons/email.png')}}" class="img-fluid emailIcon"> admin@quiz.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row disclaimer">
                    <div class="col-md-12">
                        <div class="GoldenLine"></div>
                        <h5 class="text-center">Lorem Ipsum</h5>
                        <p class="text-center">Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
                    </div>
                </div>
                <div class="row disclaimerLinks">
                    <div class="col-md-6 col-sm-6 col-8">
                        <a href="">FAQ's</a>
                        <a href="">Terms and Conditions</a>
                        <a href="">Privacy Disclaimer</a>
                    </div>
                    <div class="col-md-6 col-sm-6  col-4 text-right">&copy; 2021</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" id="servicesModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="bg-image">
                <div class="modal-body">
                    <div>
                        <h3>Depression</h3>
                        <p class="p1"></p>
                        <p class="p2"></p>
                        <ul></ul>
                        <p class="p3"></p>
                        <a href="" id="quiz_link"><button type="button" class="btn btn-deepBlue">Lets Answer</button></a>
                    </div>
                </div>
                <div class="modal-footer">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/frontend/datetimepicker-master/jquery.js')}}"></script>
<script src="{{asset('/frontend/datetimepicker-master/build/jquery.datetimepicker.full.min.js')}}"></script>
<script src="{{asset('/frontend/js/myscript.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datetimepicker3').datetimepicker({
            hours12:true,
            allowTimes:['10:00','11:00','12:00','01:00','02:00','03:00','04:00','05:00']
        });

        // $('.items').slick({
        //     //     slidesToShow: 3,
        //     //   slidesToScroll: 1,
        //     //   autoplay: true,
        //     //   autoplaySpeed: 2000,
        //     autoplay: true,
        //     arrows: false,
        //     variableWidth: true,
        //     centerMode: true,
        //     infinite: true,
        //     dots: false,
        //     autoplaySpeed: 0,
        //     speed: 8000,
        //     cssEase: 'linear',
        //     accessibility: false,
        //     draggable: false,
        //     pauseOnFocus: true,
        //     pauseOnHover: true,
        //     useTransform: false,
        //     slidesToShow: 2,
        //     slidesToScroll: 0.1,
        //     responsive: [{
        //         breakpoint: 767,
        //         settings: {
        //             arrows: false,
        //             centerMode: true,
        //             speed: 1000,
        //             autoplaySpeed: 1000,
        //             cssEase: 'ease-in-out',
        //             draggable: false,
        //             pauseOnFocus: true,
        //             pauseOnHover: true,
        //             useTransform: true,
        //         }
        //     }, ]
        // });
    });
</script>
<script>
    var Height = window.innerHeight;
    $("#menu").css('height', Height + "px");
</script>
