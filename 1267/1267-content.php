<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1267">

    <div class="top">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/photo-coffee-6.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/coffe-house.jpg" alt="">
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- Swiper JS -->
        <script src="./js/swiper.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    </div>
    <div class="container">
        <div class="contact">
            <div class="row">
                <div class="wrapper">
                    <div class="col-sm-3 text-center contact-col con-col">
                        <span class="icon shortcode theme">
                            <i class="fas fa-hamburger"></i>
                        </span>
                        <h3 class="title">Contact</h3>
                        <h5 class="phone">+359 562 958</h5>
                        <p>
                            Via Stella, 22, 41121
                            <br> Modena MO, Italy
                        </p>
                        <p>
                            <span class="large-icon"><i class="fa fa-tripadvisor" aria-hidden="true"></i></span>
                        </p>
                        <p class="icon-group">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </p>
                    </div>
                    <div class="col-sm-6 contact-form">
                        <div class="contact-form-inner">
                            <ul class="list-inline text-center tabNav" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#book" role="tab" data-toggle="tab">Book</a>
                                </li>
                                <li role="presentation">
                                    <a href="#write" role="tab" data-toggle="tab">Write</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="book">
                                    <div class="form form-book text-center">
                                        <form class="form-content">
                                            <div class="form-header">
                                                <h3 class="form-title">Make a Reservation</h3>
                                                <p>For further questions, please call</p>
                                            </div>
                                            <!-- form-header -->
                                            <div class="inline-group row">
                                                <div class="field date">
                                                    <!-- add class error show error -->
                                                    <label>Date</label>
                                                    <input id="datepicker" type="text" placeholder="Select Date" />
                                                    <div class="error-mes">This is a required field.</div>
                                                </div>
                                                <div class="field time">
                                                    <!-- add class error show error -->
                                                    <label>Time</label>
                                                    <select>
                                                        <option>1:00am</option>
                                                        <option>2:00am</option>
                                                        <option>3:00am</option>
                                                        <option>4:00am</option>
                                                        <option>5:00am</option>
                                                        <option>6:00am</option>
                                                        <option>7:00am</option>
                                                        <option>8:00am</option>
                                                        <option>9:00am</option>
                                                        <option>10:00am</option>
                                                        <option>11:00am</option>
                                                        <option>12:00am</option>
                                                        <option>1:00pm</option>
                                                        <option>2:00pm</option>
                                                        <option>3:00pm</option>
                                                        <option>4:00pm</option>
                                                        <option>5:00pm</option>
                                                        <option>6:00pm</option>
                                                        <option>7:00pm</option>
                                                        <option>8:00pm</option>
                                                        <option>9:00pm</option>
                                                        <option>10:00pm</option>
                                                        <option>11:00pm</option>
                                                        <option>12:00pm</option>
                                                    </select>
                                                    <div class="error-mes">This is a required field.</div>
                                                </div>

                                                <div class="field size">
                                                    <label>Party size</label>
                                                    <input type="text" value="1" />
                                                    <div class="error-mes">This is a required field.</div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Your name </label>
                                                <input type="text" placeholder="Your Name" />
                                                <div class="error-mes">This is a required field.</div>
                                            </div>
                                            <div class="field">
                                                <label>EMAIL ADDRESS </label>
                                                <input type="text" placeholder="Email Address" />
                                                <div class="error-mes">This is a required field.</div>
                                            </div>
                                            <input class="btn-form" type="button" value="Reserve Now" />
                                        </form>
                                        <!-- end form-content -->
                                    </div>
                                    <!-- end form -->
                                </div>
                                <!-- end #book -->
                                <div role="tabpanel" class="tab-pane" id="write">
                                    <div class="form">
                                        <form class="form-content">
                                            <div class="form-header">
                                                <h3 class="form-title">Do you have any Questions?</h3>
                                                <p>Fields marked with an
                                                    <span class="req-symbol">*</span> are required</p>
                                            </div>
                                            <!-- form-header -->
                                            <div class="inline-group row">
                                                <div class="field required col-sm-4">
                                                    <!-- add class error show error -->
                                                    <label>Name</label>
                                                    <input type="text" />
                                                    <div class="error-mes error-mes1">This is a required field.</div>
                                                </div>
                                                <div class="field required col-sm-4">
                                                    <!-- add class error show error -->
                                                    <label>Email</label>
                                                    <input type="email" />
                                                    <div class="error-mes error-mes1">This is a required field.</div>
                                                </div>
                                                <div class="field col-sm-4">
                                                    <label>Phone</label>
                                                    <input type="tel" />
                                                </div>
                                            </div>
                                            <div class="field required">
                                                <label>Message </label>
                                                <textarea></textarea>
                                                <div class="error-mes error-mes1">This is a required field.</div>
                                            </div>
                                            <input class="btn-form" type="button" value="Send" />
                                        </form>
                                        <!-- end form-content -->
                                    </div>
                                    <!-- end form -->
                                </div>
                                <!-- end #write -->
                            </div>
                            <!-- end tab-content -->
                        </div>
                        <!-- end contact-form-inner -->
                    </div>
                    <div class="col-sm-3 text-center contact-col time-col">
                        <span class="icon shortcode theme">
                            <i class="fas fa-utensils"></i>
                        </span>
                        <h3 class="title">Time</h3>
                        <h5>Weekdays</h5>
                        <p>07:00am – 11:00pm</p>
                        <p>.</p>
                        <h5>Weekends</h5>
                        <p>9:00am – 12:00pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <div class="wrap-map">
        <script
            src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDwaeroZWoFDb7a6nXtexnqA-mwgBqoeYM'></script>
        <div class="app">
            <div id='gmap_canvas'></div>

        </div>

        <a href='http://maps-generator.com/'>add google map</a>
        <script
            src='https://embedmaps.com/google-maps-authorization/script.js?id=87f441691c59e42c1f8984d69e623db8714cf424'></script>
        <script src="<?php echo $url_path ?>/js/jsmap.js"></script>


    </div>



</div>
<!-- end map -->

<!-- end type-15 -->