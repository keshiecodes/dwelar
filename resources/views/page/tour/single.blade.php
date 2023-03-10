@extends("layout.app")
@section("content")
    <main id="content">
        <!-- Breadcrumb -->
        <div class="container">
            <nav class="py-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter mb-0 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="tour-single-v1.html#">Home</a></li>
                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="tour-single-v1.html#">Hotels</a></li>
                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="tour-single-v1.html#">London Hotels</a></li>
                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Park Avenue Baker Street London</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
        <div class="mb-4 mb-lg-8">
            <img class="img-fluid" src="{{asset("assets-open/img/1920x600/img4.jpg")}}" alt="Image">
            <div class="container">
                <div class="position-relative">
                    <div class="position-absolute right-0 mt-md-n11 mt-n9">
                        <div class="flex-horizontal-center">
                            <!-- Video -->
                            <a class="js-fancybox btn btn-white transition-3d-hover py-2 px-md-5 px-3 shadow-6 mr-1" href="javascript:;"
                               data-src="//www.youtube.com/watch?v=Vfk5VuUpJ-o"
                               data-speed="700">
                                <i class="flaticon-movie mr-md-2 font-size-18 text-primary"></i><span class="d-none d-md-inline">Video</span>
                            </a>
                            <!-- End Video -->

                            <a class="js-fancybox btn btn-white transition-3d-hover ml-2 py-2 px-md-5 px-3 shadow-6" href="javascript:;"
                               data-src="{{asset("assets-open/img/960x490/img7.jpg")}}"
                               data-fancybox="fancyboxGallery6"
                               data-caption="MyTravel in frames - image #01"
                               data-speed="700">
                                <i class="flaticon-gallery mr-md-2 font-size-18 text-primary"></i><span class="d-none d-md-inline">Gallery</span>
                            </a>

                            <img class="js-fancybox d-none" alt="Image Description"
                                 data-fancybox="fancyboxGallery6"
                                 data-src="{{asset("assets-open/img/960x490/img6.jpg")}}"
                                 data-caption="MyTravel in frames - image #02"
                                 data-speed="700">
                            <img class="js-fancybox d-none" alt="Image Description"
                                 data-caption="MyTravel in frames - image #03"
                                 data-src="{{asset("assets-open/img/960x490/img8.jpg")}}"
                                 data-fancybox="fancyboxGallery6"
                                 data-speed="700">
                            <img class="js-fancybox d-none" alt="Image Description"
                                 data-fancybox="fancyboxGallery6"
                                 data-src="{{asset("assets-open/img/960x490/img9.jpg")}}"
                                 data-caption="MyTravel in frames - image #04"
                                 data-speed="700">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class="d-block d-md-flex flex-center-between align-items-start mb-3">
                        <div class="mb-1">
                            <div class="mb-2 mb-md-0">
                                <h4 class="font-size-23 font-weight-bold mb-1 mr-3">5-Day Oahu Tour: Honolulu, Pearl Harbor, & Diamond Head</h4>
                            </div>
                            <div class="d-block d-xl-flex flex-horizontal-center">
                                <div class="d-block d-md-flex flex-horizontal-center font-size-14 text-gray-1 mb-2 mb-xl-0">
                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                    <a href="tour-single-v1.html#" class="ml-1 d-block d-md-inline"> - View on map</a>
                                    <div class="d-inline-block d-md-none">
                                        <span class="font-size-14">From</span>
                                        <span class="font-size-20 text-gray-6 font-weight-bold ml-1">??350.00</span>
                                    </div>
                                </div>
                                <div class="mr-4 mb-2 mb-md-0 flex-horizontal-center">
                                    <div class="ml-xl-3 font-size-10 letter-spacing-2">
                                            <span class="d-block green-lighter ml-1">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </span>
                                    </div>
                                    <span class="font-size-14 text-gray-1 ml-2">(1,186 Reviews)</span>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-borderless list-group-horizontal custom-social-share">
                            <li class="list-group-item px-1">
                                <a href="tour-single-v1.html#" class="height-45 width-45 border rounded border-width-2 flex-content-center">
                                    <i class="flaticon-like font-size-18 text-dark"></i>
                                </a>
                            </li>
                            <li class="list-group-item px-1">
                                <a href="tour-single-v1.html#" class="height-45 width-45 border rounded border-width-2 flex-content-center">
                                    <i class="flaticon-share font-size-18 text-dark"></i>
                                </a>
                            </li>
                            <li class="list-group-item pl-5">
                                <a href="#book_now" class="height-45 width-65 px-3 border rounded border-width-2 flex-content-center">
{{--                                    <i class="flaticon- font-size-18 text-dark"></i>--}}
                                    Book Now

                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="py-4 border-top border-bottom mb-4">
                        <ul class="list-group list-group-borderless list-group-horizontal row">
                            <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                <i class="flaticon-alarm text-primary font-size-22 mr-2 d-block"></i>
                                <div class="ml-1 text-gray-1">5 Days</div>
                            </li>
                            <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                <i class="flaticon-social text-primary font-size-22 mr-2 d-block"></i>
                                <div class="ml-1 text-gray-1">Max People : 26</div>
                            </li>
                            <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                <i class="flaticon-wifi-signal text-primary font-size-22 mr-2 d-block"></i>
                                <div class="ml-1 text-gray-1">Wifi Available</div>
                            </li>
                            <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                <i class="flaticon-month text-primary font-size-22 mr-2 d-block"></i>
                                <div class="ml-1 text-gray-1">Jan 18??? - Dec 21'</div>
                            </li>
                            <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                <i class="flaticon-user-2 text-primary font-size-22 mr-2 d-block"></i>
                                <div class="ml-1 text-gray-1">Min Age : 10+</div>
                            </li>
                            <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                <i class="flaticon-pin text-primary font-size-22 mr-2 d-block"></i>
                                <div class="ml-1 text-gray-1">Pickup: Airpot</div>
                            </li>
                        </ul>
                    </div>
                    <div class="border-bottom position-relative">
                        <h5 class="font-size-21 font-weight-bold text-dark mb-3">
                            Description
                        </h5>
                        <p class="mb-4">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        <p class="mb-4">Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Comma wild Question Marks and devious Semikoli, but the Little Blind Text didn???t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of t</p>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="font-weight-bold text-dark mb-2">Highlights</div>
                                <div class="text-gray-1">John F.K. International Airport (Google Map)</div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="font-weight-bold text-dark mb-2">Bedroom</div>
                                <div class="text-gray-1">4 Bedrooms</div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="font-weight-bold text-dark mb-2">Departure Time</div>
                                <div class="text-gray-1">3 Hours Before Flight Time</div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="font-weight-bold text-dark mb-2">Bathroom</div>
                                <div class="text-gray-1">6 Bathrooms</div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="font-weight-bold text-dark mb-3">Price Includes</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>Air fares</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>3 Nights Hotel Accomodation</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>Tour Guide</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>Entrance Fees</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>All transportation in destination location</div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="font-weight-bold text-dark mb-3">Price Excludes</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-close mr-3 font-size-12 text-primary"></i>Guide Service Fee</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-close mr-3 font-size-12 text-primary"></i>Driver Service Fee</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-close mr-3 font-size-12 text-primary"></i>Any Private Expenses</div>
                                <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-close mr-3 font-size-12 text-primary"></i>Room Service Fees</div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom py-4">
                        <h5 class="font-size-21 font-weight-bold text-dark mb-4">
                            What to Expect
                        </h5>
                        <p class="mb-3">Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="mb-3">Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <ul class="list-group list-group-borderless list-group-flush no-gutters">
                            <li class="flex-horizontal-center mb-3 text-gray-1">
                                <i class="fas fa-circle mr-3 font-size-8 text-primary"></i>
                                Ipsum Amet Mattis Pellentesque
                            </li>

                            <li class="flex-horizontal-center mb-3 text-gray-1">
                                <i class="fas fa-circle mr-3 font-size-8 text-primary"></i>
                                Ultricies Vehicula Mollis Vestibulum Fringilla
                            </li>

                            <li class="flex-horizontal-center mb-3 text-gray-1">
                                <i class="fas fa-circle mr-3 font-size-8 text-primary"></i>
                                Condimentum Sollicitudin Fusce Vestibulum Ultricies
                            </li>

                            <li class="flex-horizontal-center mb-3 text-gray-1">
                                <i class="fas fa-circle mr-3 font-size-8 text-primary"></i>
                                Sollicitudin Consectetur Quam Ligula Vehicula
                            </li>

                            <li class="flex-horizontal-center mb-3 text-gray-1">
                                <i class="fas fa-circle mr-3 font-size-8 text-primary"></i>
                                Cursus Pharetra Purus Porta Parturient
                            </li>

                            <li class="flex-horizontal-center mb-3 text-gray-1">
                                <i class="fas fa-circle mr-3 font-size-8 text-primary"></i>
                                Risus Malesuada Tellus Porta Commodo
                            </li>
                        </ul>
                    </div>
                    <div class="border-bottom py-4">
                        <h5 class="font-size-21 font-weight-bold text-dark mb-4">
                            Itinerary
                        </h5>
                        <div id="basicsAccordion1">
                            <!-- Card -->
                            <div class="card border-0 mb-3">
                                <div class="card-header border-bottom-0 p-0" id="basicsHeadingOne1">
                                    <h5 class="mb-0">
                                        <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center font-weight-bold p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseOne1" aria-expanded="true" aria-controls="basicsCollapseOne1">
                                            <div class="text-primary font-size-22 mb-3 mb-md-0 mr-3">
                                                <i class="far fa-circle"></i>
                                            </div>

                                            <div class="text-primary flex-shrink-0">Day 1 <span class="px-2">-</span> </div>
                                            <h6 class="font-weight-bold text-gray-3 text-left mb-0">Barcelona ??? Zaragoza ??? Madrid</h6>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseOne1" class="collapse show"
                                     aria-labelledby="basicsHeadingOne1"
                                     data-parent="#basicsAccordion1">
                                    <div class="card-body pl-6 pb-0 pt-0">
                                        <p class="mb-0">We???ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a ???Welcome to Switzerland??? meeting. Then we???ll take a meandering evening walk through Switzerland???s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card border-0 mb-3">
                                <div class="card-header border-bottom-0 p-0" id="basicsHeadingTwo2">
                                    <h5 class="mb-0">
                                        <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center font-weight-bold p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseTwo2" aria-expanded="false" aria-controls="basicsCollapseTwo2">
                                            <div class="text-primary font-size-22 mb-3 mb-md-0 mr-3">
                                                <i class="far fa-circle"></i>
                                            </div>

                                            <div class="text-primary flex-shrink-0">Day 2 <span class="px-2">-</span> </div>
                                            <h6 class="font-weight-bold text-gray-3 text-left mb-0">Z??rich???Biel/Bienne???Neuch??tel???Geneva</h6>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseTwo2" class="collapse"
                                     aria-labelledby="basicsHeadingTwo2"
                                     data-parent="#basicsAccordion1">
                                    <div class="card-body pl-6 pb-0 pt-0">
                                        <p class="mb-0">We???ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a ???Welcome to Switzerland??? meeting. Then we???ll take a meandering evening walk through Switzerland???s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card border-0 mb-3">
                                <div class="card-header border-bottom-0 p-0" id="basicsHeadingThree3">
                                    <h5 class="mb-0">
                                        <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center font-weight-bold p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseThree3" aria-expanded="false" aria-controls="basicsCollapseThree3">
                                            <div class="text-primary font-size-22 mb-3 mb-md-0 mr-3">
                                                <i class="far fa-circle"></i>
                                            </div>

                                            <div class="text-primary flex-shrink-0">Day 3 <span class="px-2">-</span> </div>
                                            <h6 class="font-weight-bold text-gray-3 text-left mb-0">Enchanting Engelberg</h6>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseThree3" class="collapse"
                                     aria-labelledby="basicsHeadingThree3"
                                     data-parent="#basicsAccordion1">
                                    <div class="card-body pl-6 pb-0 pt-0">
                                        <p class="mb-0">We???ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a ???Welcome to Switzerland??? meeting. Then we???ll take a meandering evening walk through Switzerland???s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card border-0 mb-3">
                                <div class="card-header border-bottom-0 p-0" id="basicsHeadingFour4">
                                    <h5 class="mb-0">
                                        <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center font-weight-bold p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseFour4" aria-expanded="false" aria-controls="basicsCollapseFour4">
                                            <div class="text-primary font-size-22 mb-3 mb-md-0 mr-3">
                                                <i class="far fa-circle"></i>
                                            </div>

                                            <div class="text-primary flex-shrink-0">Day 4 <span class="px-2">-</span> </div>
                                            <h6 class="font-weight-bold text-gray-3 text-left mb-0">Interlaken Area. Excursion to The Jungfrau Massif</h6>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseFour4" class="collapse"
                                     aria-labelledby="basicsHeadingFour4"
                                     data-parent="#basicsAccordion1">
                                    <div class="card-body pl-6 pb-0 pt-0">
                                        <p class="mb-0">We???ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a ???Welcome to Switzerland??? meeting. Then we???ll take a meandering evening walk through Switzerland???s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                    <div class="border-bottom py-4">
                        <h5 class="font-size-21 font-weight-bold text-dark mb-4">
                            Location
                        </h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7772.225184901051!2d80.28441927545006!3d13.092050163095971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d13.098645!2d80.2916092!4m5!1s0x3a526f5213f46501%3A0x56d2a4b14dba42f2!2sMadras%20High%20Court%2C%20High%20Ct%20Rd%2C%20Parry&#39;s%20Corner%2C%20George%20Town%2C%20Chennai%2C%20Tamil%20Nadu%20600108!3m2!1d13.0867057!2d80.28774949999999!5e0!3m2!1sen!2sin!4v1580358870925!5m2!1sen!2sin" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="border-bottom py-4">
                        <h5 class="font-size-21 font-weight-bold text-dark mb-4">
                            Faq
                        </h5>
                        <div id="basicsAccordion">
                            <!-- Card -->
                            <div class="card border-0 mb-4 pb-1">
                                <div class="card-header border-bottom-0 p-0" id="basicsHeadingOne">
                                    <h5 class="mb-0">
                                        <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true" aria-controls="basicsCollapseOne">
                                            <div class="border border-color-8 rounded-xs border-width-2 p-2 mb-3 mb-md-0 mr-4">
                                                <figure id="rectangle" class="minus svg-preloader">
                                                    <img class="js-svg-injector mb-0" src="{{asset("assets-open/svg/illustrations/rectangle.svg")}}" alt="SVG" data-parent="#rectangle">
                                                </figure>
                                                <figure id="plus1" class="plus svg-preloader">
                                                    <img class="js-svg-injector mb-0" src="{{asset("assets-open/svg/illustrations/plus.svg")}}" alt="SVG" data-parent="#plus1">
                                                </figure>
                                            </div>

                                            <h6 class="font-weight-bold text-gray-3 mb-0">I'm a solo mytravel, is there a single supplement?</h6>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseOne" class="collapse show"
                                     aria-labelledby="basicsHeadingOne"
                                     data-parent="#basicsAccordion">
                                    <div class="card-body pl-10 pl-md-10 pr-md-12 pt-0">
                                        <p class="mb-0 text-gray-1 text-lh-lg">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card border-0 mb-4 pb-1">
                                <div class="card-header border-bottom-0 p-0" id="basicsHeadingTwo">
                                    <h5 class="mb-0">
                                        <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                            <div class="border border-color-8 rounded-xs border-width-2 p-2 mb-3 mb-md-0 mr-4">
                                                <figure id="rectangle1" class="minus svg-preloader">
                                                    <img class="js-svg-injector mb-0" src="{{asset("assets-open/svg/illustrations/rectangle.svg")}}" alt="SVG" data-parent="#rectangle1">
                                                </figure>
                                                <figure id="plus2" class="plus svg-preloader">
                                                    <img class="js-svg-injector mb-0" src="{{asset("assets-open/svg/illustrations/plus.svg")}}" alt="SVG" data-parent="#plus2">
                                                </figure>
                                            </div>
                                            <h6 class="font-weight-bold text-gray-3 mb-0">Which currency is most widely accepted on this tour?</h6>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseTwo" class="collapse"
                                     aria-labelledby="basicsHeadingTwo"
                                     data-parent="#basicsAccordion">
                                    <div class="card-body pl-10 pl-md-10 pr-md-12 pt-0">
                                        <p class="mb-0 text-gray-1 text-lh-lg">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card border-0 mb-4 pb-1">
                                <div class="card-header border-bottom-0 p-0" id="basicsHeadingThree">
                                    <h5 class="mb-0">
                                        <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                            <div class="border border-color-8 rounded-xs border-width-2 p-2 mb-3 mb-md-0 mr-4">
                                                <figure id="rectangle2" class="minus svg-preloader">
                                                    <img class="js-svg-injector mb-0" src="{{asset("assets-open/svg/illustrations/rectangle.svg")}}" alt="SVG" data-parent="#rectangle2">
                                                </figure>
                                                <figure id="plus3" class="plus svg-preloader">
                                                    <img class="js-svg-injector mb-0" src="{{asset("assets-open/svg/illustrations/plus.svg")}}" alt="SVG" data-parent="#plus3">
                                                </figure>
                                            </div>
                                            <h6 class="font-weight-bold text-gray-3 mb-0">Should I book pre/post tour accommodation?</h6>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseThree" class="collapse"
                                     aria-labelledby="basicsHeadingThree"
                                     data-parent="#basicsAccordion">
                                    <div class="card-body pl-10 pl-md-10 pr-md-12 pt-0">
                                        <p class="mb-0 text-gray-1 text-lh-lg">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card border-0 mb-4 pb-1">
                                <div class="card-header border-bottom-0 p-0" id="basicsHeadingFour">
                                    <h5 class="mb-0">
                                        <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                            <div class="border border-color-8 rounded-xs border-width-2 p-2 mb-3 mb-md-0 mr-4">
                                                <figure id="plus4" class="plus svg-preloader">
                                                    <img class="js-svg-injector mb-0" src="{{asset("assets-open/svg/illustrations/plus.svg")}}" alt="SVG" data-parent="#plus4">
                                                </figure>
                                                <figure id="rectangle3" class="minus svg-preloader">
                                                    <img class="js-svg-injector mb-0" src="{{asset("assets-open/svg/illustrations/rectangle.svg")}}" alt="SVG" data-parent="#rectangle3">
                                                </figure>
                                            </div>
                                            <h6 class="font-weight-bold text-gray-3 mb-0">How do I edit my calendar?</h6>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseFour" class="collapse"
                                     aria-labelledby="basicsHeadingFour"
                                     data-parent="#basicsAccordion">
                                    <div class="card-body pl-10 pl-md-10 pr-md-12 pt-0">
                                        <p class="mb-0 text-gray-1 text-lh-lg">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                    <div class="border-bottom py-4">
                        <h5 class="font-size-21 font-weight-bold text-dark mb-4">
                            Average Reviews
                        </h5>
                        <div class="row">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="border rounded flex-content-center py-5 border-width-2">
                                    <div class="text-center">
                                        <h2 class="font-size-50 font-weight-bold text-primary mb-0 text-lh-sm">
                                            4.2<span class="font-size-20">/5</span>
                                        </h2>
                                        <div class="font-size-25 text-dark mb-3">Very Good</div>
                                        <div class="text-gray-1">From 40 reviews</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <h6 class="font-weight-normal text-gray-1 mb-1">
                                            Cleanliness
                                        </h6>
                                        <div class="flex-horizontal-center mr-6">
                                            <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ml-3 text-primary font-weight-bold">
                                                4.8
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="font-weight-normal text-gray-1 mb-1">
                                            Facilities
                                        </h6>
                                        <div class="flex-horizontal-center mr-6">
                                            <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ml-3 text-primary font-weight-bold">
                                                1.4
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="font-weight-normal text-gray-1 mb-1">
                                            Value for money
                                        </h6>
                                        <div class="flex-horizontal-center mr-6">
                                            <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ml-3 text-primary font-weight-bold">
                                                3.2
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="font-weight-normal text-gray-1 mb-1">
                                            Service
                                        </h6>
                                        <div class="flex-horizontal-center mr-6">
                                            <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ml-3 text-primary font-weight-bold">
                                                5.0
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="font-weight-normal text-gray-1 mb-1">
                                            Location
                                        </h6>
                                        <div class="flex-horizontal-center mr-6">
                                            <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 86%;" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ml-3 text-primary font-weight-bold">
                                                4.8
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom py-4">
                        <h5 class="font-size-21 font-weight-bold text-dark mb-8">
                            Showing 16 verified guest comments
                        </h5>
                        <div class="media flex-column flex-md-row align-items-center align-items-md-start mb-4">
                            <div class="mr-md-5">
                                <a class="d-block" href="tour-single-v1.html#">
                                    <img class="img-fluid mb-3 mb-md-0 rounded-circle" src="{{asset("assets-open/img/85x85/img1.jpg")}}" alt="Image-Description">
                                </a>
                            </div>
                            <div class="media-body text-center text-md-left">
                                <div class="mb-4">
                                    <h6 class="font-weight-bold text-gray-3">
                                        <a href="tour-single-v1.html#">Helena</a>
                                    </h6>
                                    <div class="font-weight-normal font-size-14 text-gray-9 mb-2">April 25, 2019 at 10:46 am</div>
                                    <div class="d-flex align-items-center flex-column flex-md-row mb-2">
                                        <button type="button" class="btn btn-xs btn-primary rounded-xs font-size-14 py-1 px-2 mr-2 mb-2 mb-md-0">4.6 /5 </button>
                                        <span class="font-weight-bold font-italic text-gray-3">The worst hotel ever ???</span>
                                    </div>
                                    <p class="text-lh-1dot6 mb-0 pr-lg-5">Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
                                </div>
                                <div class="review">
                                    <div class="row no-gutters justify-content-between align-items-center border border-color-8 border-width-2 rounded-xs p-3 px-md-3 py-md-2 pr-xl-5">
                                        <div class="col">
                                            <div class="font-weight-normal font-size-14 text-gray-1 mx-lg-1 my-lg-1 mb-3 mb-md-0">Was This Review...?</div>
                                        </div>
                                        <div class="col-md-6 col-lg-7 col-xl-4">
                                            <div class="d-flex justify-content-between my-lg-1">
                                                <a class="text-indigo-light" href="tour-single-v1.html#">
                                                    <i class="flaticon-like-1 font-size-15 mr-1"></i>
                                                    <span class="font-size-14 font-weight-normal">Like</span>
                                                </a>
                                                <a class="text-gray-7" href="tour-single-v1.html#">
                                                    <i class="flaticon-dislike font-size-15 mr-1"></i>
                                                    <span class="font-size-14 font-weight-normal">Dislike</span>
                                                </a>
                                                <a class="text-red-light-2" href="tour-single-v1.html#">
                                                    <i class="flaticon-like font-size-15 mr-1"></i>
                                                    <span class="font-size-14 font-weight-normal">Love</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media flex-column flex-md-row align-items-center align-items-md-start mb-0">
                            <div class="mr-md-5">
                                <a class="d-block" href="tour-single-v1.html#">
                                    <img class="img-fluid mb-3 mb-md-0 rounded-circle" src="{{asset("assets-open/img/85x85/img2.jpg")}}" alt="Image-Description">
                                </a>
                            </div>
                            <div class="media-body text-center text-md-left">
                                <div class="mb-4">
                                    <h6 class="font-weight-bold text-gray-3">
                                        <a href="tour-single-v1.html#">Ashleigh</a>
                                    </h6>
                                    <div class="font-weight-normal font-size-14 text-gray-9 mb-2">April 25, 2019 at 10:46 am</div>
                                    <div class="d-flex align-items-center flex-column flex-md-row mb-2">
                                        <button type="button" class="btn btn-xs btn-primary rounded-xs font-size-14 py-1 px-2 mr-2 mb-2 mb-md-0">4.6 /5 </button>
                                        <span class="font-weight-bold font-italic text-gray-3">Was too noisy and not suitable for business meetings.???</span>
                                    </div>
                                    <p class="text-lh-1dot6 pr-lg-5 mb-0">Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
                                </div>
                                <div class="review">
                                    <div class="row no-gutters justify-content-between align-items-center border border-color-8 border-width-2 rounded-xs p-3 px-md-3 py-md-2 pr-xl-5">
                                        <div class="col">
                                            <div class="font-weight-normal font-size-14 text-gray-1 mx-lg-1 my-lg-1 mb-3 mb-md-0">Was This Review...?</div>
                                        </div>
                                        <div class="col-md-6 col-lg-7 col-xl-4">
                                            <div class="d-flex justify-content-between my-lg-1">
                                                <a class="text-indigo-light" href="tour-single-v1.html#">
                                                    <i class="flaticon-like-1 font-size-15 mr-1"></i>
                                                    <span class="font-size-14 font-weight-normal">Like</span>
                                                </a>
                                                <a class="text-gray-7" href="tour-single-v1.html#">
                                                    <i class="flaticon-dislike font-size-15 mr-1"></i>
                                                    <span class="font-size-14 font-weight-normal">Dislike</span>
                                                </a>
                                                <a class="text-red-light-2" href="tour-single-v1.html#">
                                                    <i class="flaticon-like font-size-15 mr-1"></i>
                                                    <span class="font-size-14 font-weight-normal">Love</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-4">
                        <h5 class="font-size-21 font-weight-bold text-dark mb-6">
                            Write a Review
                        </h5>
                        <div class="row">
                            <div class="col-md-4 mb-6">
                                <h6 class="font-weight-bold text-dark mb-1">
                                    Cleanliness
                                </h6>
                                <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile text-muted"></small>
                                        <small class="far fa-smile text-muted"></small>
                                    </span>
                            </div>
                            <div class="col-md-4 mb-6">
                                <h6 class="font-weight-bold text-dark mb-1">
                                    Facilities
                                </h6>
                                <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile text-muted"></small>
                                        <small class="far fa-smile text-muted"></small>
                                    </span>
                            </div>
                            <div class="col-md-4 mb-6">
                                <h6 class="font-weight-bold text-dark mb-1">
                                    Value for money
                                </h6>
                                <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                    </span>
                            </div>
                            <div class="col-md-4 mb-6">
                                <h6 class="font-weight-bold text-dark mb-1">
                                    Service
                                </h6>
                                <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile text-muted"></small>
                                        <small class="far fa-smile text-muted"></small>
                                    </span>
                            </div>
                            <div class="col-md-4 mb-6">
                                <h6 class="font-weight-bold text-dark mb-1">
                                    Location
                                </h6>
                                <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile text-muted"></small>
                                        <small class="far fa-smile text-muted"></small>
                                    </span>
                            </div>
                        </div>
                        <form class="js-validate" novalidate="novalidate">
                            <div class="row mb-5 mb-lg-0">
                                <!-- Input -->
                                <div class="col-sm-6 mb-5">
                                    <div class="js-form-message">
                                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Input -->
                                <div class="col-sm-6 mb-5">
                                    <div class="js-form-message">
                                        <input type="email" class="form-control" name="email" placeholder="Email" aria-label="jackwayley@gmail.com" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                                <!-- End Input -->
                                <div class="col-sm-12 mb-5">
                                    <div class="js-form-message">
                                        <div class="input-group">
                                            <textarea class="form-control" rows="6" cols="77" name="text" placeholder="Comment" aria-label="Hi there, I would like to ..." required="" data-msg="Please enter a reason." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->
                                <div class="col d-flex justify-content-center justify-content-lg-start">
                                    <button type="submit" class="btn rounded-xs bg-blue-dark-1 text-white p-2 height-51 width-190 transition-3d-hover">Submit Review</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="mb-4">
                        <div class="border border-color-7 rounded mb-5">
                            <div class="border-bottom">
                                <div class="p-4">
                                    <span class="font-size-14">From</span>
                                    <span class="font-size-24 text-gray-6 font-weight-bold ml-1">??350.00</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <!-- Input -->
                                <span class="d-block text-gray-1 font-weight-normal mb-0 text-left">Date</span>
                                <div class="mb-4">
                                    <div class="border-bottom border-width-2 border-color-1">
                                        <div id="datepickerWrapperPick" class="u-datepicker input-group">
                                            <input class="js-range-datepicker w-auto height-40 font-size-16 shadow-none font-weight-bold form-control hero-form bg-transparent border-0 flatpickr-input p-0" type="text" placeholder="July 7/2019" aria-label="July 7/2019"
                                                   data-rp-wrapper="#datepickerWrapperPick"
                                                   data-rp-date-format="M d / Y"
                                                   data-rp-default-date='["Jul 7 / 2020"]'>
                                        </div>
                                        <!-- End Datepicker -->
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Input -->
                                <span class="d-block text-gray-1 font-weight-normal mb-2 text-left">Adults</span>
                                <div class="mb-4">
                                    <div class="border-bottom border-width-2 border-color-1 pb-1">
                                        <div class="js-quantity flex-center-between mb-1 text-dark font-weight-bold">
                                            <span class="d-block">Age 18+</span>
                                            <div class="flex-horizontal-center">
                                                <a class="js-minus font-size-10 text-dark" href="javascript:;">
                                                    <i class="fas fa-chevron-up"></i>
                                                </a>
                                                <input class="js-result form-control h-auto width-30 font-weight-bold font-size-16 shadow-none bg-tranparent border-0 rounded p-0 mx-1 text-center" type="text" value="2" min="01" max="100">
                                                <a class="js-plus font-size-10 text-dark" href="javascript:;">
                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Input -->
                                <span class="d-block text-gray-1 font-weight-normal mb-2 text-left">Children</span>
                                <div class="mb-4">
                                    <div class="border-bottom border-width-2 border-color-1 pb-1">
                                        <div class="js-quantity flex-center-between mb-1 text-dark font-weight-bold">
                                            <span class="d-block">Age 6-17</span>
                                            <div class="flex-horizontal-center">
                                                <a class="js-minus font-size-10 text-dark" href="javascript:;">
                                                    <i class="fas fa-chevron-up"></i>
                                                </a>
                                                <input class="js-result form-control h-auto width-30 font-weight-bold font-size-16 shadow-none bg-tranparent border-0 rounded p-0 mx-1 text-center" type="text" value="4" min="01" max="100">
                                                <a class="js-plus font-size-10 text-dark" href="javascript:;">
                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Input -->
                                <span class="d-block text-gray-1 font-weight-normal mb-2 text-left">Infant</span>
                                <div class="mb-4">
                                    <div class="border-bottom border-width-2 border-color-1 pb-1">
                                        <div class="js-quantity flex-center-between mb-1 text-dark font-weight-bold">
                                            <span class="d-block">Age 0-5</span>
                                            <div class="flex-horizontal-center">
                                                <a class="js-minus font-size-10 text-dark" href="javascript:;">
                                                    <i class="fas fa-chevron-up"></i>
                                                </a>
                                                <input class="js-result form-control h-auto width-30 font-weight-bold font-size-16 shadow-none bg-tranparent border-0 rounded p-0 mx-1 text-center" type="text" value="1" min="01" max="100">
                                                <a class="js-plus font-size-10 text-dark" href="javascript:;">
                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <div class="text-center" id="book_now">
                                    <a href="tour-booking.html" class="btn btn-primary d-flex align-items-center justify-content-center  height-60 w-100 mb-xl-0 mb-lg-1 transition-3d-hover font-weight-bold">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-color-7 rounded p-4 mb-5">
                            <h6 class="font-size-17 font-weight-bold text-gray-3 mx-1 mb-3 pb-1">Why Book With Us?</h6>
                            <div class="d-flex align-items-center mb-3">
                                <i class="flaticon-star font-size-25 text-primary mr-3 pr-1"></i>
                                <h6 class="mb-0 font-size-14 text-gray-1">
                                    <a href="tour-single-v1.html#">No-hassle best price guarantee</a>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="flaticon-support font-size-25 text-primary mr-3 pr-1"></i>
                                <h6 class="mb-0 font-size-14 text-gray-1">
                                    <a href="tour-single-v1.html#">Customer care available 24/7</a>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="flaticon-favorites-button font-size-25 text-primary mr-3 pr-1"></i>
                                <h6 class="mb-0 font-size-14 text-gray-1">
                                    <a href="tour-single-v1.html#">Hand-picked Tours &amp; Activities</a>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <i class="flaticon-airplane font-size-25 text-primary mr-3 pr-1"></i>
                                <h6 class="mb-0 font-size-14 text-gray-1">
                                    <a href="tour-single-v1.html#">Free Travel Insureance</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Cards carousel -->
            <div class="product-card-carousel-block product-card-carousel-v5">
                <div class="space-1">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mt-3">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">You might also like...</h2>
                    </div>
                    <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
                         data-slides-show="4"
                         data-slides-scroll="1"
                         data-arrows-classes="d-none d-xl-inline-block u-slick__arrow-classic v1 u-slick__arrow-classic--v1 u-slick__arrow-centered--y rounded-circle"
                         data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left shadow-5"
                         data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right shadow-5"
                         data-pagi-classes="text-center d-xl-none u-slick__pagination mt-4"
                         data-responsive='[{
                            "breakpoint": 1025,
                            "settings": {
                            "slidesToShow": 3
                            }
                            }, {
                            "breakpoint": 992,
                            "settings": {
                            "slidesToShow": 2
                            }
                            }, {
                            "breakpoint": 768,
                            "settings": {
                            "slidesToShow": 1
                            }
                            }, {
                            "breakpoint": 554,
                            "settings": {
                            "slidesToShow": 1
                            }
                            }]'>
                        <div class="js-slide mt-5">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 h-100">
                                <div class="position-relative">
                                    <a href="tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img13.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="tour-single-v1.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-3">
                                    <a href="tour-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">Mangrove Tunnel Kayak Eco <br> Tour</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-warning text-white py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">??899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide mt-5">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 h-100">
                                <div class="position-relative">
                                    <a href="tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img14.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="tour-single-v1.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-3">
                                    <a href="tour-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">Mangrove Tunnel Kayak Eco <br> Tour</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-warning text-white py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">??899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide mt-5">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 h-100">
                                <div class="position-relative">
                                    <a href="tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img15.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="tour-single-v2.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-3">
                                    <a href="tour-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">Mangrove Tunnel Kayak Eco <br> Tour</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-warning text-white py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">??899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide mt-5">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 h-100">
                                <div class="position-relative">
                                    <a href="tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img16.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="tour-single-v2.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-3">
                                    <a href="tour-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">Mangrove Tunnel Kayak Eco <br> Tour</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-warning text-white py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">??899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide mt-5">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 h-100">
                                <div class="position-relative">
                                    <a href="tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img13.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="tour-single-v1.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-3">
                                    <a href="tour-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">Mangrove Tunnel Kayak Eco <br> Tour</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-warning text-white py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">??899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide mt-5">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 h-100">
                                <div class="position-relative">
                                    <a href="tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img14.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="tour-single-v1.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-3">
                                    <a href="tour-single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">Mangrove Tunnel Kayak Eco <br> Tour</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-warning text-white py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">??899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide mt-5">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 h-100">
                                <div class="position-relative">
                                    <a href="tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("")}}../../assets-open/img/300x230/img15.jpg" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="tour-single-v2.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-3">
                                    <a href="tour-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">Mangrove Tunnel Kayak Eco <br> Tour</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-warning text-white py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">??899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide mt-5">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 h-100">
                                <div class="position-relative">
                                    <a href="tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img16.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="tour-single-v2.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-3">
                                    <a href="tour-single-v2.html" class="card-title font-size-17 font-weight-medium text-dark">Mangrove Tunnel Kayak Eco <br> Tour</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-warning text-white py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">??899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Cards carousel -->
        </div>
    </main>
@endsection
