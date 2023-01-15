@extends("layout.app")
@section("content")
    <main id="content">
        <div class="bg-primary-darken py-4">
            <div class="container">
                <!-- Search Jobs Form -->
                <div class="card border-0 bg-transparent">
                    <div class="card-body px-0 pt-0 pb-1">
                        <form class="js-validate">
                            <div class="row d-block nav-select-1 d-lg-flex align-items-end">
                                <div class="col-sm-12 col-lg-3dot6 col-xl-3dot7 mb-4 mb-lg-0 ">
                                    <span class="d-block text-primary-lighten font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                    <div class="flex-horizontal-center border-bottom border-width-2">
                                        <i class="flaticon-pin-1 text-white"></i>
                                        <!-- Select -->
                                        <select class="js-select selectpicker dropdown-select tab-dropdown flex-grow-1 bg-transparent border-0 pl-0 d-flex align-items-center text-white font-weight-semi-bold" title="Where are you going?"
                                                data-style="bg-transparent text-white"
                                                data-live-search="true"
                                                data-searchbox-classes="input-group-sm">
                                            <option class="border-bottom border-color-1" value="project1" data-content='
                                                    <span class="d-flex align-items-center">
                                                        <span class="font-size-16">London, United Kingdom</span>
                                                    </span>'>
                                                London, United Kingdom
                                            </option>
                                            <option class="border-bottom border-color-1" value="project2" data-content='
                                                    <span class="d-flex align-items-center">
                                                        <span class="font-size-16">New York, United States</span>
                                                    </span>'>
                                                New York, United States
                                            </option>
                                            <option  class="border-bottom border-color-1" value="project3" data-content='
                                                    <span class="d-flex align-items-center">
                                                        <span class="font-size-16">New South Wales, Australia</span>
                                                    </span>'>
                                                New South Wales, Australia
                                            </option>
                                            <option class="border-bottom border-color-1" value="project4" data-content='
                                                    <span class="d-flex align-items-center">
                                                        <span class="font-size-16">Istanbul, Turkey</span>
                                                    </span>'>
                                                Istanbul, Turkey
                                            </option>
                                            <option class="" value="project4" data-content='
                                                    <span class="d-flex align-items-center">
                                                        <span class="font-size-16">Reykjavík, Iceland</span>
                                                    </span>'>
                                                Reykjavík, Iceland
                                            </option>
                                        </select>
                                        <!-- End Select -->
                                    </div>
                                </div>

                                <div class="col-sm-12 col-lg-3dot7 col-xl-3dot6 mb-4 mb-lg-0 ">
                                    <!-- Input -->
                                    <span class="d-block text-primary-lighten text-left font-weight-normal mb-0">Check In - Out</span>
                                    <div class="border-bottom border-width-2 border-color-1">
                                        <div id="datepickerWrapperFromOne" class="u-datepicker input-group">
                                            <div class="input-group-prepend">
                                                    <span class="d-flex align-items-center mr-2">
                                                      <i class="flaticon-calendar text-white font-weight-semi-bold"></i>
                                                    </span>
                                            </div>
                                            <input class="js-range-datepicker text-white font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                                   data-rp-wrapper="#datepickerWrapperFromOne"
                                                   data-rp-type="range"
                                                   data-rp-date-format="M d / Y"
                                                   data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                        </div>
                                        <!-- End Datepicker -->
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="col-sm-12 col-lg-2dot8 mb-4 mb-lg-0 dropdown-custom dropdown-custom_white">
                                    <!-- Input -->
                                    <span class="d-block text-primary-lighten text-left font-weight-normal mb-0">Rooms and Guests</span>
                                    <a id="basicDropdownClickInvoker" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2 text-lh-1dot7" href="javascript:;" role="button"
                                       aria-controls="basicDropdownClick"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       data-unfold-event="click"
                                       data-unfold-target="#basicDropdownClick"
                                       data-unfold-type="css-animation"
                                       data-unfold-duration="300"
                                       data-unfold-delay="300"
                                       data-unfold-hide-on-scroll="true"
                                       data-unfold-animation-in="slideInUp"
                                       data-unfold-animation-out="fadeOut">
                                        <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-white font-weight-semi-bold"></i>
                                        <span class="font-size-16 font-weight-semi-bold text-white">2 Rooms - 3 Guests</span>
                                    </a>
                                    <div id="basicDropdownClick" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker">
                                        <div class="w-100 py-2 px-3 mb-3">
                                            <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                <div class="d-flex">
                                                    <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                    <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                    <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 py-2 px-3 mb-3">
                                            <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                <div class="d-flex">
                                                    <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                    <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                    <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 py-2 px-3">
                                            <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                <div class="d-flex">
                                                    <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                    <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                    <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 text-right py-1 pr-5">
                                            <a class="text-primary font-weight-semi-bold font-size-16" href="{{asset("hotel_singles")}}#">Done</a>
                                        </div>
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="col-sm-12 col-lg align-self-lg-end text-md-right">
                                    <button type="submit" class="btn btn-primary w-100 border-radius-3 mb-xl-0 mb-lg-0 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                </div>
                            </div>
                            <!-- End Checkbox -->
                        </form>
                    </div>
                </div>
                <!-- End Search Jobs Form -->
            </div>
        </div>
        <!-- Breadcrumb -->
        <div class="border-bottom mb-7">
            <div class="container">
                <nav class="py-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter mb-0 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{asset("hotel_singles")}}#">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{asset("hotel_singles")}}#">Hotels</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{asset("hotel_singles")}}#">London Hotels</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Park Avenue Baker Street London</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class="d-block d-md-flex flex-center-between align-items-start mb-2">
                        <div class="mb-3">
                            <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap mb-2">
                                <li class="border border-brown bg-brown rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                    <span class="font-weight-normal text-white font-size-14">Newly renovated</span>
                                </li>
                                <li class="border border-maroon bg-maroon rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                    <span class="font-weight-normal font-size-14 text-white">Free Wi-Fi</span>
                                </li>
                            </ul>
                            <div class="d-block d-md-flex flex-horizontal-center mb-2 mb-md-0">
                                <h4 class="font-size-23 font-weight-bold mb-1">Park Avenue Baker Street London</h4>
                                <div class="ml-3 font-size-10 letter-spacing-2">
                                        <span class="d-block green-lighter ml-1">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </span>
                                </div>
                            </div>
                            <div class="d-block d-md-flex flex-horizontal-center font-size-14 text-gray-1">
                                <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                <a href="{{asset("hotel_singles")}}#" class="ml-1 d-block d-md-inline"> - View on map</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="mb-4">
                        <div class="flex-center-between">
                            <div class="flex-horizontal-center mr-2">
                                <div class="badge-primary rounded-xs px-1">
                                    <span class="badge font-size-19 px-2 py-2 mb-0 text-lh-inherit">4.6 /5 </span>
                                </div>

                                <div class="ml-2 text-lh-1">
                                    <div class="ml-1">
                                        <h4 class="text-primary font-size-17 font-weight-bold mb-0">Excellent</h4>
                                        <span class="text-gray-1 font-size-14">(1,186 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="ml-n1 list-group list-group-borderless list-group-horizontal custom-social-share">
                                <li class="list-group-item px-1 py-0">
                                    <a href="{{asset("hotel_singles")}}#" class="height-45 width-45 border rounded border-width-2 flex-content-center">
                                        <i class="flaticon-like font-size-18 text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-group-item px-1 py-0">
                                    <a href="{{asset("hotel_singles")}}#" class="height-45 width-45 border rounded border-width-2 flex-content-center">
                                        <i class="flaticon-share font-size-18 text-dark"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="pb-4 mb-2">
                        <div class="row mx-n1">
                            <div class="col-lg-8 col-xl-9 mb-1 mb-lg-0 px-0 px-lg-1">
                                <a class="js-fancybox u-media-viewer" href="javascript:;"
                                   data-src="{{asset("assets-open/img/960x490/img7.jpg")}}"
                                   data-fancybox="fancyboxGallery6"
                                   data-caption="Mytravel in frames - image #01"
                                   data-speed="700">
                                    <img class="img-fluid border-radius-3 min-height-458" src="{{asset("assets-open/img/960x490/img7.jpg")}}" alt="Image Description">

                                    <span class="u-media-viewer__container">
                                            <span class="u-media-viewer__icon">
                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                            </span>
                                        </span>
                                </a>
                            </div>
                            <div class="col-lg-4 col-xl-3 px-0">
                                <a class="js-fancybox u-media-viewer pb-1" href="javascript:;"
                                   data-src="{{asset("assets-open/img/960x490/img8.jpg")}}"
                                   data-fancybox="fancyboxGallery6"
                                   data-caption="Mytravel in frames - image #02"
                                   data-speed="700">
                                    <img class="img-fluid border-radius-3 min-height-150" src="{{asset("assets-open/img/960x490/img8.jpg")}}" alt="Image Description">

                                    <span class="u-media-viewer__container">
                                            <span class="u-media-viewer__icon">
                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                            </span>
                                        </span>
                                </a>
                                <a class="js-fancybox u-media-viewer pb-1" href="javascript:;"
                                   data-src="{{asset("")}}../../assets-open/img/960x490/img9.jpg"
                                   data-fancybox="fancyboxGallery6"
                                   data-caption="Mytravel in frames - image #03"
                                   data-speed="700">
                                    <img class="img-fluid border-radius-3 min-height-150" src="{{asset("assets-open/img/960x490/img9.jpg")}}" alt="Image Description">

                                    <span class="u-media-viewer__container">
                                            <span class="u-media-viewer__icon">
                                                <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                            </span>
                                        </span>
                                </a>
                                <a class="js-fancybox u-media-viewer u-media-viewer__dark" href="javascript:;"
                                   data-src="{{asset("")}}../../assets-open/img/960x490/img10.jpg"
                                   data-fancybox="fancyboxGallery6"
                                   data-caption="Mytravel in frames - image #43"
                                   data-speed="700">
                                    <img class="img-fluid border-radius-3 min-height-150" src="{{asset("assets-open/img/960x490/img10.jpg")}}" alt="Image Description">

                                    <span class="u-media-viewer__container z-index-2 w-100">
                                            <span class="u-media-viewer__icon u-media-viewer__icon--active w-100  bg-transparent">
                                                <span class="u-media-viewer__icon-inner font-size-14">SEE ALL PHOTOS</span>
                                            </span>
                                        </span>
                                </a>

                                <img class="js-fancybox d-none" alt="Image Description"
                                     data-fancybox="fancyboxGallery6"
                                     data-src="{{asset("assets-open/img/960x490/img11.jpg")}}"
                                     data-caption="Mytravel in frames - image #05"
                                     data-speed="700">
                                <img class="js-fancybox d-none" alt="Image Description"
                                     data-caption="Mytravel in frames - image #06"
                                     data-src="{{asset("assets-open/img/960x490/img12.jpg")}}"
                                     data-fancybox="fancyboxGallery6"
                                     data-speed="700">
                                <img class="js-fancybox d-none" alt="Image Description"
                                     data-fancybox="fancyboxGallery6"
                                     data-src="{{asset("assets-open/img/960x490/img10.jpg")}}"
                                     data-caption="Mytravel in frames - image #07"
                                     data-speed="700">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="border border-color-7 rounded px-4 pt-4 pb-3 mb-5">
                        <div class="px-2 pt-2">
                            <a href="https://goo.gl/maps/kCVqYkjHX3XvoC4B9" class="d-inline-block border rounded mb-4 overflow-hidden">
                                <img class="img-fluid" src="{{asset("assets-open/img/240x170/img1.jpg")}}" alt="Image-Description">
                            </a>
                            <div class="flex-horizontal-center mb-4 mt-1">
                                <div class="border-primary border rounded-xs px-3 text-lh-1dot7 py-1">
                                    <span class="font-size-21 font-weight-bold px-1 mb-0 text-lh-inherit text-primary">4.5</span>
                                </div>

                                <div class="ml-2 text-lh-1">
                                    <div class="ml-1">
                                        <h4 class="text-primary font-size-17 font-weight-bold mb-0">Exceptional</h4>
                                        <span class="text-gray-1 font-size-14">Location rating score</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="flaticon-placeholder-1 font-size-25 text-primary mr-3 pr-1"></i>
                                <h6 class="mb-0 font-size-14 text-gray-1">
                                    <a href="{{asset("hotel_singles")}}#">Better than 99% of properties in London</a>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="flaticon-medal font-size-25 text-primary mr-3 pr-1"></i>
                                <h6 class="mb-0 font-size-14 text-gray-1">
                                    <a href="{{asset("hotel_singles")}}#">Exceptional location - Inside city center</a>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="flaticon-home font-size-25 text-primary mr-3 pr-1"></i>
                                <h6 class="mb-0 font-size-14 text-gray-1">
                                    <a href="{{asset("hotel_singles")}}#">Popular neighborhood</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom position-relative">
                <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark">
                    Description
                </h5>
                <p>The 4-star Park Central Hotel offers comfort and convenience whether you're on business or holiday in New York (NY). Featuring a complete list of amenities, guests will find their stay at the property a comfortable one. Service-minded staff will welcome and guide you at the Park Central Hotel. Air conditioning, heating, desk, alarm clock, iPod docking station can be found in selected guestrooms. The hotel offers various recreational opportunities. Park Central Hotel combines warm hospitality with a lovely ambiance to make your stay in New York (NY) unforgettable.</p>

                <div class="collapse" id="collapseLinkExample">
                    <p>Once inside the historic palace located on the Right Bank of the Seine, see unmissable and iconic sights Once inside the historic palace located on the Right Bank of the Seine, see unmissable and iconic sights such as the Mona Lisa and Venus de Milo. Discover masterpieces of the Renaissance and ancient Egyptian relics, along with paintings from the 13th to 20th centuries, prints from the Royal Collection, and much more such as the Mona Lisa and Venus de Milo. Discover masterpieces of the Renaissance and ancient Egyptian relics, along with paintings from the 13th to 20th centuries, prints from the Royal Collection, and much more.</p>
                </div>

                <a class="link-collapse link-collapse-custom gradient-overlay-half mb-5 d-inline-block border-bottom border-primary" data-toggle="collapse" href="#collapseLinkExample" role="button" aria-expanded="false" aria-controls="collapseLinkExample">
                    <span class="link-collapse__default font-size-14">View More <i class="flaticon-down-chevron font-size-10 ml-1"></i></span>
                    <span class="link-collapse__active font-size-14">View Less <i class="flaticon-arrow font-size-10 ml-1"></i></span>
                </a>
            </div>
            <div class="border-bottom py-4">
                <h5 id="scroll-amenities" class="font-size-21 font-weight-bold text-dark mb-4">
                    Select Your Room
                </h5>
                <div class="card border-color-7 mb-5 overflow-hidden">
                    <div class="position-absolute top-0 right-0 mr-md-1 mt-md-1">
                        <div class="border border-brown bg-brown rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-2 mt-2">
                            <span class="font-weight-normal text-white font-size-14">Today's best offer</span>
                        </div>
                    </div>
                    <div class="product-item__outer w-100">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-xl-3dot5">
                                <div class="pt-5 pb-md-5 pl-4 pr-4 pl-md-5 pr-md-2 pr-xl-2">
                                    <div class="product-item__header mt-2 mt-md-0">
                                        <div class="position-relative">
                                            <img class="img-fluid rounded-sm" src="{{asset("assets-open/img/200x154/img1.jpg")}}" alt="Image Description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-7 col-lg-7 col-xl-5 flex-horizontal-center pl-xl-0">
                                <div class="w-100 position-relative m-4 m-md-0">
                                    <a href="hotel-booking.html" class="mb-2 d-inline-block">
                                        <span class="font-weight-bold font-size-17 text-dark text-dark">Deluxe Twin Room</span>
                                    </a>
                                    <div class="mt-1 pt-2">
                                        <div class="d-flex mb-1">
                                            <div class="ml-0">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-wifi-signal font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            Free Wi-Fi
                                                        </div>
                                                    </li>
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-plans font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            15 m²
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ml-7">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-bed-1 font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            2 single beds
                                                        </div>
                                                    </li>
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-bathtub font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            Shower and bathtub
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <a href="{{asset("hotel_singles")}}#" class="text-underline font-size-14">Room photos and details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-3dot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                <div class="flex-content-center border-xl-left py-xl-5 ml-4 ml-xl-0 justify-content-start justify-content-xl-center">
                                    <div class="text-center my-xl-1">
                                        <div class="mb-2 pb-1">
                                            <span class="font-size-14">From </span>
                                            <span class="font-weight-bold font-size-22 ml-1"> £899.00</span>
                                            <span class="font-size-14"> / night</span>
                                        </div>
                                        <a href="hotel-booking.html" class="btn btn-outline-primary border-radius-3 border-width-2 px-4 font-weight-bold min-width-200 py-2 text-lh-lg">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-color-7 mb-5 overflow-hidden">
                    <div class="position-absolute top-0 right-0 mr-md-1 mt-md-1">
                        <div class="border border-maroon bg-maroon rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-2 mt-2">
                            <span class="font-weight-normal text-white font-size-14">Save 13% Today</span>
                        </div>
                    </div>
                    <div class="product-item__outer w-100">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-xl-3dot5">
                                <div class="pt-5 pb-md-5 pl-4 pr-4 pl-md-5 pr-md-2 pr-xl-2">
                                    <div class="product-item__header mt-2 mt-md-0">
                                        <div class="position-relative">
                                            <img class="img-fluid rounded-sm" src="{{asset("assets-open/img/200x154/img2.jpg")}}" alt="Image Description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-7 col-lg-7 col-xl-5 flex-horizontal-center pl-xl-0">
                                <div class="w-100 position-relative m-4 m-md-0">
                                    <a href="hotel-booking.html" class="mb-2 d-inline-block">
                                        <span class="font-weight-bold font-size-17 text-dark text-dark">Deluxe Gold Twin Room</span>
                                    </a>
                                    <div class="mt-1 pt-2">
                                        <div class="d-flex mb-1">
                                            <div class="ml-0">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-wifi-signal font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            Free Wi-Fi
                                                        </div>
                                                    </li>
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-plans font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            15 m²
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ml-7">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-bed-1 font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            2 single beds
                                                        </div>
                                                    </li>
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-bathtub font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            Shower and bathtub
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <a href="{{asset("hotel_singles")}}#" class="text-underline font-size-14">Room photos and details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-3dot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                <div class="flex-content-center border-xl-left py-xl-5 ml-4 ml-xl-0 justify-content-start justify-content-xl-center">
                                    <div class="text-center my-xl-1">
                                        <div class="mb-2 pb-1">
                                            <span class="font-size-14">From </span>
                                            <span class="font-weight-bold font-size-22 ml-1"> £480.00</span>
                                            <span class="font-size-14"> / night</span>
                                        </div>
                                        <a href="hotel-booking.html" class="btn btn-outline-primary border-radius-3 border-width-2 px-4 font-weight-bold min-width-200 py-2 text-lh-lg">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-color-7 mb-5 overflow-hidden">
                    <div class="product-item__outer w-100">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-xl-3dot5">
                                <div class="pt-5 pb-md-5 pl-4 pr-4 pl-md-5 pr-md-2 pr-xl-2">
                                    <div class="product-item__header mt-2 mt-md-0">
                                        <div class="position-relative">
                                            <img class="img-fluid rounded-sm" src="{{asset("assets-open/img/200x154/img3.jpg")}}" alt="Image Description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-7 col-lg-7 col-xl-5 flex-horizontal-center pl-xl-0">
                                <div class="w-100 position-relative m-4 m-md-0">
                                    <a href="hotel-booking.html" class="mb-2 d-inline-block">
                                        <span class="font-weight-bold font-size-17 text-dark text-dark">Rock Royalty Queen Room</span>
                                    </a>
                                    <div class="mt-1 pt-2">
                                        <div class="d-flex mb-1">
                                            <div class="ml-0">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-wifi-signal font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            Free Wi-Fi
                                                        </div>
                                                    </li>
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-plans font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            15 m²
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ml-7">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-bed-1 font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            2 single beds
                                                        </div>
                                                    </li>
                                                    <li class="media mb-3 text-gray-1">
                                                        <small class="mr-2">
                                                            <small class="flaticon-bathtub font-size-17 text-primary"></small>
                                                        </small>
                                                        <div class="media-body font-size-1 ml-1">
                                                            Shower and bathtub
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <a href="{{asset("hotel_singles")}}#" class="text-underline font-size-14">Room photos and details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-3dot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                <div class="flex-content-center border-xl-left py-xl-5 ml-4 ml-xl-0 justify-content-start justify-content-xl-center">
                                    <div class="text-center my-xl-1">
                                        <div class="mb-2 pb-1">
                                            <span class="font-size-14">From </span>
                                            <span class="font-weight-bold font-size-22 ml-1"> £999.00</span>
                                            <span class="font-size-14"> / night</span>
                                        </div>
                                        <a href="hotel-booking.html" class="btn btn-outline-primary border-radius-3 border-width-2 px-4 font-weight-bold min-width-200 py-2 text-lh-lg">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 id="scroll-amenities" class="font-size-21 font-weight-bold text-dark mb-4">
                    Amenities
                </h5>
                <ul class="list-group list-group-borderless list-group-horizontal list-group-flush no-gutters row">
                    <li class="col-md-4 list-group-item"><i class="flaticon-wifi-signal mr-3 text-primary font-size-24"></i>Wifi</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-alarm mr-3 text-primary font-size-24"></i>Wake-up call</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-bathrobe mr-3 text-primary font-size-24"></i>Bathrobes</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-weightlifting mr-3 text-primary font-size-24"></i>Fitness center</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-phone-call mr-3 text-primary font-size-24"></i>Telephone</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-folded-towel mr-3 text-primary font-size-24"></i>Dry cleaning</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-wine-glass mr-3 text-primary font-size-24"></i>Mini bar</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-hair-dryer mr-3 text-primary font-size-24"></i>Hair dryer</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-desk-chair mr-3 text-primary font-size-24"></i>High chair</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-hamburger mr-3 text-primary font-size-24"></i>Restaurant</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-air-conditioner mr-3 text-primary font-size-24"></i>Air Conditioning</li>
                    <li class="col-md-4 list-group-item"><i class="flaticon-slippers mr-3 text-primary font-size-24"></i>Slippers</li>
                </ul>
            </div>
            <div class="border-bottom py-4 position-relative">
                <h5 id="scroll-specifications" class="font-size-21 font-weight-bold text-dark mb-4">
                    Nearest Essentials
                </h5>
                <ul class="list-group list-group-borderless list-group-horizontal list-group-flush no-gutters row">
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Airports</div>
                        <div class="text-gray-1">London City Airport (LCY)</div>
                        <div class="text-primary mb-2">14.4 km</div>
                        <div class="text-gray-1">Heathrow Airport (LHR)</div>
                        <div class="text-primary">21.2 km</div>
                    </li>
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Public transportation</div>
                        <div class="text-gray-1">Marble Arch Tube Station</div>
                        <div class="text-primary mb-2">40 m</div>
                        <div class="text-gray-1">Baker Street Tube Station</div>
                        <div class="text-primary">9 m</div>
                    </li>
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Hospital or clinic</div>
                        <div class="text-gray-1">The Wellington Hospital</div>
                        <div class="text-primary">2.1 km</div>
                    </li>
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Horsepower (hp)</div>
                        <div class="text-gray-1">200</div>
                    </li>
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Transmission</div>
                        <div class="text-gray-1">Manual</div>
                    </li>
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Condition</div>
                        <div class="text-gray-1">New</div>
                    </li>
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Drive</div>
                        <div class="text-gray-1">Rear</div>
                    </li>
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Warranty</div>
                        <div class="text-gray-1">Yes</div>
                    </li>
                    <li class="col-md-4 mb-5 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-1">Hospital or clinic</div>
                        <div class="text-gray-1">The Wellington Hospital</div>
                        <div class="text-primary">2.1 km</div>
                    </li>
                </ul>
                <div class="collapse" id="collapseLinkExample2">
                    <ul class="list-group list-group-borderless list-group-horizontal list-group-flush no-gutters row">
                        <li class="col-md-4 mb-5 list-group-item py-0">
                            <div class="font-weight-bold text-dark mb-1">Airports</div>
                            <div class="text-gray-1">London City Airport (LCY)</div>
                            <div class="text-primary mb-2">14.4 km</div>
                            <div class="text-gray-1">Heathrow Airport (LHR)</div>
                            <div class="text-primary">21.2 km</div>
                        </li>
                        <li class="col-md-4 mb-5 list-group-item py-0">
                            <div class="font-weight-bold text-dark mb-1">Public transportation</div>
                            <div class="text-gray-1">Marble Arch Tube Station</div>
                            <div class="text-primary mb-2">40 m</div>
                            <div class="text-gray-1">Baker Street Tube Station</div>
                            <div class="text-primary">9 m</div>
                        </li>
                        <li class="col-md-4 mb-5 list-group-item py-0">
                            <div class="font-weight-bold text-dark mb-1">Shopping</div>
                            <div class="text-gray-1">Harrods</div>
                            <div class="text-primary">1.5 km</div>
                        </li>
                    </ul>
                </div>

                <a class="link-collapse link-collapse-custom gradient-overlay-half mb-5 d-inline-block border-bottom border-primary" data-toggle="collapse" href="#collapseLinkExample2" role="button" aria-expanded="false" aria-controls="collapseLinkExample2">
                    <span class="link-collapse__default font-size-14">View More <i class="flaticon-down-chevron font-size-10 ml-1"></i></span>
                    <span class="link-collapse__active font-size-14">View Less <i class="flaticon-arrow font-size-10 ml-1"></i></span>
                </a>
            </div>
            <div class="border-bottom py-4 position-relative">
                <h5 id="scroll-specifications" class="font-size-21 font-weight-bold text-dark mb-4">
                    What's Nearby
                </h5>
                <ul class="list-group list-group-borderless list-group-horizontal list-group-flush no-gutters row">
                    <li class="col-md-4 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-2">Popular landmarks</div>
                        <div class="text-gray-1 mb-2 pt-1">Buckingham Palace - 1.84 km</div>
                        <div class="text-gray-1 mb-2 pt-1">St. James's Park - 2.09 km</div>
                        <div class="text-gray-1 mb-2 pt-1">British Museum - 2.32 km</div>
                        <div class="text-gray-1 mb-2 pt-1">Westminster Abbey - 2.65 km</div>
                        <div class="text-gray-1 mb-2 pt-1">Houses of Parliament - 2.78 km</div>
                        <div class="text-gray-1 mb-2 pt-1">Camden Market - 3.31 km</div>
                        <div class="text-gray-1 mb-2 pt-1">Tower Bridge - 5.85 km</div>
                        <div class="text-gray-1 mb-2 pt-1">Tower of London - 5.76 km</div>
                    </li>
                    <li class="col-md-4 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-2">Nearby landmarks</div>
                        <div class="text-gray-1 mb-2 pt-1">Marble Arch Tube Station - 40 m</div>
                        <div class="text-gray-1 mb-2 pt-1">Still Water Horse Head Statue - 70 m</div>
                        <div class="text-gray-1 mb-2 pt-1">Marble Arch - 80 m</div>
                        <div class="text-gray-1 mb-2 pt-1">Tyburn Tree - 140 m</div>
                        <div class="text-gray-1 mb-2 pt-1">Speakers’ Corner - 160 m</div>
                        <div class="text-gray-1 mb-2 pt-1">Homemade London - 220 m</div>
                        <div class="text-gray-1 mb-2 pt-1">Salt Whisky Bar - 240 m</div>
                        <div class="text-gray-1 mb-2 pt-1">Clarks - 280 m</div>
                    </li>
                </ul>
                <div class="collapse" id="collapseLinkExample3">
                    <ul class="list-group list-group-borderless list-group-horizontal list-group-flush no-gutters row">
                        <li class="col-md-4 mb-2 list-group-item py-0">
                            <div class="text-gray-1 mb-2 pt-1">Buckingham Palace - 1.84 km</div>
                            <div class="text-gray-1 mb-2 pt-1">St. James's Park - 2.09 km</div>
                            <div class="text-gray-1 mb-2 pt-1">British Museum - 2.32 km</div>
                        </li>
                        <li class="col-md-4 mb-2 list-group-item py-0">
                            <div class="text-gray-1 mb-2 pt-1">Marble Arch Tube Station - 40 m</div>
                            <div class="text-gray-1 mb-2 pt-1">Still Water Horse Head Statue - 70 m</div>
                            <div class="text-gray-1 mb-2 pt-1">Marble Arch - 80 m</div>
                        </li>
                    </ul>
                </div>

                <a class="link-collapse link-collapse-custom gradient-overlay-half mb-5 d-inline-block border-bottom border-primary" data-toggle="collapse" href="#collapseLinkExample3" role="button" aria-expanded="false" aria-controls="collapseLinkExample3">
                    <span class="link-collapse__default font-size-14">View More <i class="flaticon-down-chevron font-size-10 ml-1"></i></span>
                    <span class="link-collapse__active font-size-14">View Less <i class="flaticon-arrow font-size-10 ml-1"></i></span>
                </a>
            </div>
            <div class="border-bottom py-4 position-relative">
                <h5 id="scroll-specifications" class="font-size-21 font-weight-bold text-dark mb-4">
                    House Rules
                </h5>
                <ul class="list-group list-group-borderless list-group-horizontal list-group-flush no-gutters row">
                    <li class="col-md-4 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-2">Check-in/Check-out</div>
                        <div class="text-gray-1 mb-2 pt-1">Check-in from: 15:00</div>
                        <div class="text-gray-1 mb-4 pt-1">Check-out until: 11:00</div>
                        <div class="font-weight-bold text-dark mb-2">Getting around</div>
                        <div class="text-gray-1 mb-4 pt-1">Distance from city center: 0 km</div>
                        <div class="font-weight-bold text-dark mb-2">The property</div>
                        <div class="text-gray-1 mb-2 pt-1">Number of floors: 8</div>
                        <div class="text-gray-1 mb-2 pt-1">Number of rooms : 998</div>
                        <div class="text-gray-1 mb-4 pt-1">Most recent renovation: 2019</div>
                    </li>
                    </li>
                    <li class="col-md-4 list-group-item py-0">
                        <div class="font-weight-bold text-dark mb-2">Extras</div>
                        <div class="text-gray-1 mb-2 pt-1">Breakfast charge (unless included in room price): 20 GBP</div>
                        <div class="text-gray-1 mb-4 pt-1">Still Water Horse Head Statue - 70 m</div>
                        <div class="font-weight-bold text-dark mb-2">The property</div>
                        <div class="text-gray-1 mb-2 pt-1">Number of floors: 8</div>
                        <div class="text-gray-1 mb-2 pt-1">Number of rooms : 998</div>
                        <div class="text-gray-1 mb-2 pt-1">Most recent renovation: 2019</div>
                    </li>
                </ul>
                <div class="collapse" id="collapseLinkExample4">
                    <ul class="list-group list-group-borderless list-group-horizontal list-group-flush no-gutters row">
                        <li class="col-md-4 list-group-item py-0">
                            <div class="font-weight-bold text-dark mb-2">Check-in/Check-out</div>
                            <div class="text-gray-1 mb-2 pt-1">Check-in from: 15:00</div>
                            <div class="text-gray-1 mb-4 pt-1">Check-out until: 11:00</div>
                            <div class="font-weight-bold text-dark mb-2">Getting around</div>
                            <div class="text-gray-1 mb-2 pt-1">Distance from city center: 0 km</div>
                        </li>
                        <li class="col-md-4 list-group-item py-0">
                            <div class="font-weight-bold text-dark mb-2">Extras</div>
                            <div class="text-gray-1 mb-2 pt-1">Breakfast charge (unless included in room price): 20 GBP</div>
                            <div class="text-gray-1 mb-4 pt-1">Still Water Horse Head Statue - 70 m</div>
                            <div class="font-weight-bold text-dark mb-2">The property</div>
                            <div class="text-gray-1 mb-2 pt-1">Number of floors: 8</div>
                            <div class="text-gray-1 mb-2 pt-1">Number of rooms : 998</div>
                            <div class="text-gray-1 mb-4 pt-1">Most recent renovation: 2019</div>
                        </li>
                    </ul>
                </div>

                <a class="link-collapse link-collapse-custom gradient-overlay-half mb-5 d-inline-block border-bottom border-primary" data-toggle="collapse" href="#collapseLinkExample4" role="button" aria-expanded="false" aria-controls="collapseLinkExample4">
                    <span class="link-collapse__default font-size-14">View More <i class="flaticon-down-chevron font-size-10 ml-1"></i></span>
                    <span class="link-collapse__active font-size-14">View Less <i class="flaticon-arrow font-size-10 ml-1"></i></span>
                </a>
            </div>
            <div class="border-bottom py-4">
                <h5 id="scroll-reviews" class="font-size-21 font-weight-bold text-dark mb-4">
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
                                        <div class="progress-bar rounded-pill" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <a class="d-block" href="{{asset("hotel_singles")}}#">
                            <img class="img-fluid mb-3 mb-md-0 rounded-circle" src="{{asset("assets-open/img/85x85/img1.jpg")}}" alt="Image-Description">
                        </a>
                    </div>
                    <div class="media-body text-center text-md-left">
                        <div class="mb-4">
                            <h6 class="font-weight-bold text-gray-3">
                                <a href="{{asset("hotel_singles")}}#">Helena</a>
                            </h6>
                            <div class="font-weight-normal font-size-14 text-gray-9 mb-2">April 25, 2019 at 10:46 am</div>
                            <div class="d-flex align-items-center flex-column flex-md-row mb-2">
                                <button type="button" class="btn btn-xs btn-primary rounded-xs font-size-14 py-1 px-2 mr-2 mb-2 mb-md-0">4.6 /5 </button>
                                <span class="font-weight-bold font-italic text-gray-3">The worst hotel ever ”</span>
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
                                        <a class="text-indigo-light" href="{{asset("hotel_singles")}}#">
                                            <i class="flaticon-like-1 font-size-15 mr-1"></i>
                                            <span class="font-size-14 font-weight-normal">Like</span>
                                        </a>
                                        <a class="text-gray-7" href="{{asset("hotel_singles")}}#">
                                            <i class="flaticon-dislike font-size-15 mr-1"></i>
                                            <span class="font-size-14 font-weight-normal">Dislike</span>
                                        </a>
                                        <a class="text-red-light-2" href="{{asset("hotel_singles")}}#">
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
                        <a class="d-block" href="{{asset("hotel_singles")}}#">
                            <img class="img-fluid mb-3 mb-md-0 rounded-circle" src="{{asset("assets-open/img/85x85/img2.jpg")}}" alt="Image-Description">
                        </a>
                    </div>
                    <div class="media-body text-center text-md-left">
                        <div class="mb-4">
                            <h6 class="font-weight-bold text-gray-3">
                                <a href="{{asset("hotel_singles")}}#">Ashleigh</a>
                            </h6>
                            <div class="font-weight-normal font-size-14 text-gray-9 mb-2">April 25, 2019 at 10:46 am</div>
                            <div class="d-flex align-items-center flex-column flex-md-row mb-2">
                                <button type="button" class="btn btn-xs btn-primary rounded-xs font-size-14 py-1 px-2 mr-2 mb-2 mb-md-0">4.6 /5 </button>
                                <span class="font-weight-bold font-italic text-gray-3">Was too noisy and not suitable for business meetings.”</span>
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
                                        <a class="text-indigo-light" href="{{asset("hotel_singles")}}#">
                                            <i class="flaticon-like-1 font-size-15 mr-1"></i>
                                            <span class="font-size-14 font-weight-normal">Like</span>
                                        </a>
                                        <a class="text-gray-7" href="{{asset("hotel_singles")}}#">
                                            <i class="flaticon-dislike font-size-15 mr-1"></i>
                                            <span class="font-size-14 font-weight-normal">Dislike</span>
                                        </a>
                                        <a class="text-red-light-2" href="{{asset("hotel_singles")}}#">
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

            <!-- Product Cards Ratings With carousel -->
            <div class="product-card-block product-card-v3">
                <div class="space-1">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-4">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">Hotel Nearby</h2>
                    </div>
                    <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
                         data-slides-show="4"
                         data-slides-scroll="1"
                         data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v1 u-slick__arrow-classic--v1 u-slick__arrow-centered--y rounded-circle"
                         data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                         data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                         data-pagi-classes="d-lg-none text-center u-slick__pagination mt-4"
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
                        <div class="js-slide py-3">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 mt-2">
                                <div class="position-relative">
                                    <a href="{{asset("hotel_singles")}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img9.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="{{asset("hotel_singles")}}" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pt-2 pb-3">
                                    <div class="mb-2">
                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                            <div class="green-lighter">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset("hotel_singles")}}" class="card-title font-size-17 font-weight-medium text-dark">Empire Prestige Causeway Bay</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">£899.00</span>
                                        <span class="font-size-14 text-gray-1"> / night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide py-3">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 mt-2">
                                <div class="position-relative">
                                    <a href="{{asset("hotel_singles")}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img10.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="{{asset("hotel_singles")}}" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pt-2 pb-3">
                                    <div class="mb-2">
                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                            <div class="green-lighter">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset("hotel_singles")}}" class="card-title font-size-17 font-weight-medium text-dark">Park Avenue Baker Street London</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">£899.00</span>
                                        <span class="font-size-14 text-gray-1"> / night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide py-3">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 mt-2">
                                <div class="position-relative">
                                    <a href="{{asset("hotel_singles")}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img12.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="{{asset("hotel_singles")}}" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pt-2 pb-3">
                                    <div class="mb-2">
                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                            <div class="green-lighter">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset("hotel_singles")}}" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">£899.00</span>
                                        <span class="font-size-14 text-gray-1"> / night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide py-3">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 mt-2">
                                <div class="position-relative">
                                    <a href="{{asset("hotel_singles")}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img11.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="{{asset("hotel_singles")}}" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pt-2 pb-3">
                                    <div class="mb-2">
                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                            <div class="green-lighter">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset("hotel_singles")}}" class="card-title font-size-17 font-weight-medium text-dark">New York Marriott Downtown</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">£899.00</span>
                                        <span class="font-size-14 text-gray-1"> / night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide py-3">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 mt-2">
                                <div class="position-relative">
                                    <a href="{{asset("hotel_singles")}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("")}}../../assets-open/img/300x230/img9.jpg" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="{{asset("hotel_singles")}}" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pt-2 pb-3">
                                    <div class="mb-2">
                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                            <div class="green-lighter">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset("hotel_singles")}}" class="card-title font-size-17 font-weight-medium text-dark">Empire Prestige Causeway Bay</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">£899.00</span>
                                        <span class="font-size-14 text-gray-1"> / night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide py-3">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 mt-2">
                                <div class="position-relative">
                                    <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel/single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img12.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel/single-v1.html" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pt-2 pb-3">
                                    <div class="mb-2">
                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                            <div class="green-lighter">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel/single-v1.html" class="card-title font-size-17 font-weight-medium text-dark">New Road Hotel</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">£899.00</span>
                                        <span class="font-size-14 text-gray-1"> / night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide py-3">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 mt-2">
                                <div class="position-relative">
                                    <a href="{{asset("hotel_singles")}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img9.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="{{asset("hotel_singles")}}" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pt-2 pb-3">
                                    <div class="mb-2">
                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                            <div class="green-lighter">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset("hotel_singles")}}" class="card-title font-size-17 font-weight-medium text-dark">Empire Prestige Causeway Bay</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">£899.00</span>
                                        <span class="font-size-14 text-gray-1"> / night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide py-3">
                            <div class="card transition-3d-hover shadow-hover-2 w-100 mt-2">
                                <div class="position-relative">
                                    <a href="{{asset("hotel_singles")}}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                        <img class="card-img-top" src="{{asset("assets-open/img/300x230/img11.jpg")}}" alt="Image Description">
                                    </a>
                                    <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                        <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                            <span class="flaticon-heart-1 font-size-20"></span>
                                        </button>
                                    </div>
                                    <div class="position-absolute bottom-0 left-0 right-0">
                                        <div class="px-4 pb-3">
                                            <a href="{{asset("hotel_singles")}}" class="d-block">
                                                <div class="d-flex align-items-center font-size-14 text-white">
                                                    <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pt-2 pb-3">
                                    <div class="mb-2">
                                        <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                            <div class="green-lighter">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset("hotel_singles")}}" class="card-title font-size-17 font-weight-medium text-dark">New York Marriott Downtown</a>
                                    <div class="mt-2 mb-3">
                                        <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                        <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                    </div>
                                    <div class="mb-0">
                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                        <span class="font-weight-bold">£899.00</span>
                                        <span class="font-size-14 text-gray-1"> / night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Cards Ratings With carousel -->
        </div>
    </main>
@endsection
