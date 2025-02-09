@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    
    <!-- home section start -->
    <section class="home_section  p-0">
        <div class="classic-slider no-arrow">
            <div>
                <div class="home ripple-effect">
                    <img src="assets/images/tour-bg.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                </div>
            </div>
            <div>
                <div class="home ripple-effect">
                    <img src="assets/images/tour-bg1.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                </div>
            </div>
            <div>
                <div class="home ripple-effect">
                    <img src="assets/images/tour-bg.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                </div>
            </div>
        </div>
        <div class="offer-text">
            <h6>
                <span>s</span>
                <span>t</span>
                <span>a</span>
                <span>r</span>
                <span>t</span>
                <span></span>
                <span>y</span>
                <span>o</span>
                <span>u</span>
                <span>r</span>
                <span></span>
                <span>j</span>
                <span>o</span>
                <span>u</span>
                <span>n</span>
                <span>e</span>
                <span>y</span>
            </h6>
        </div>
    </section>
    <div class="error"></div>
    <!-- home section end -->


    <!-- book table section start -->
    <section class="book-table section-b-space p-0 single-table">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="table-form">
                        <form>
                            <div class="row w-100">
                                <div class="form-group col p-0">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Starting from">
                                    <img src="assets/images/icon/table-no.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="form-group col p-0">
                                    <input type="text" class="form-control" placeholder="Going to">
                                    <img src="assets/images/icon/table-no.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="col p-0">
                                    <input placeholder="During Date" id="datepicker" />
                                </div>
                            </div>
                            <a href="#" class="btn btn-rounded color1">search</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- book table section end -->


    <!-- tours section start -->
    <section class="category-sec ratio3_2 section-b-space">
        <div class="container">
            <div class="title-1 title-5">
                <span class="title-label">new offer</span>
                <h2>most popular tours</h2>
                <p>Trips, experiences, and places. All in one service.</p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="slide-3 arrow-classic">
                        <a href="#">
                            <div class="category-box">
                                <div class="img-category">
                                    <div class="side-effect"></div>
                                    <div>
                                        <img src="assets/images/tour/tour/1.jpg" alt=""
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <div class="top-bar">
                                        <span class="offer">offer</span>
                                        <h5><del>$320</del> $210</h5>
                                    </div>
                                    <div class="like-cls">
                                        <i class="fas fa-heart"><span class="effect"></span></i>
                                    </div>
                                </div>
                                <div class="content-category">
                                    <div class="top">
                                        <h3>hot air balloon</h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur est.</p>
                                    <h6>5 days | 6 nights <span> 2 person</span></h6>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="category-box">
                                <div class="img-category">
                                    <div class="side-effect"></div>
                                    <div>
                                        <img src="assets/images/tour/tour/2.jpg" alt=""
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <div class="top-bar">
                                        <span class="offer">offer</span>
                                        <h5><del>$320</del> $210</h5>
                                    </div>
                                    <div class="like-cls">
                                        <i class="fas fa-heart"><span class="effect"></span></i>
                                    </div>
                                </div>
                                <div class="content-category">
                                    <div class="top">
                                        <h3>hot air balloon</h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur est.</p>
                                    <h6>5 days | 6 nights <span> 2 person</span></h6>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="category-box">
                                <div class="img-category">
                                    <div class="side-effect"></div>
                                    <div>
                                        <img src="assets/images/tour/tour/3.jpg" alt=""
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <div class="top-bar">
                                        <span class="offer">offer</span>
                                        <h5><del>$320</del> $210</h5>
                                    </div>
                                    <div class="like-cls">
                                        <i class="fas fa-heart"><span class="effect"></span></i>
                                    </div>
                                </div>
                                <div class="content-category">
                                    <div class="top">
                                        <h3>Cool water ride</h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur est.</p>
                                    <h6>5 days | 6 nights <span> 2 person</span></h6>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="category-box">
                                <div class="img-category">
                                    <div class="side-effect"></div>
                                    <div>
                                        <img src="assets/images/tour/tour/2.jpg" alt=""
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <div class="top-bar">
                                        <span class="offer">offer</span>
                                        <h5><del>$320</del> $210</h5>
                                    </div>
                                    <div class="like-cls">
                                        <i class="fas fa-heart"><span class="effect"></span></i>
                                    </div>
                                </div>
                                <div class="content-category">
                                    <div class="top">
                                        <h3>Water fall</h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur est.</p>
                                    <h6>5 days | 6 nights <span> 2 person</span></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tours section end -->


    <!-- video section start -->
    <section class="video_section parallax-img">
        <img src="assets/images/mix/video-bg.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="video-content">
                        <div>
                            <h5>It's limited seating! <span>Hurry up!!</span></h5>
                            <h2>honeymoon <span>$500</span> </h2>
                            <p>Special honeymoon in May, Discover Thailand for 50 Customers with Discount 30%</p>
                            <div class="timer">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hour</li>
                                    <li><span id="minutes"></span>min</li>
                                    <li><span id="seconds"></span>sec</li>
                                </ul>
                            </div>
                            <div class="bottom-section">
                                <a href="#" class="btn btn-rounded btn-sm color1">buy now !!</a>
                                <div class="info-btn">
                                    <h6>7 days &nbsp; | &nbsp; 8 nights</h6>
                                </div>
                                <div class="info-btn red-info">
                                    <h6>2 person</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 order-cls">
                    <div class="video-image">
                        <div class="side-effect"></div>
                        <img src="assets/images/mix/video-image.jpg" class="img-fluid blur-up lazyload" alt="">
                        <div data-bs-toggle="modal" data-bs-target="#video" class="video-icon">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-text">
            <h6>
                <span>l</span>
                <span>i</span>
                <span>m</span>
                <span>i</span>
                <span>t</span>
                <span>e</span>
                <span>d</span>
                <span></span>
                <span>t</span>
                <span>i</span>
                <span>m</span>
                <span>e</span>
            </h6>
        </div>
    </section>
    <div class="modal fade video-modal" id="video" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <iframe src="https://www.youtube.com/embed/ezuKIzXJuz8" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- video section end -->


    <!-- package section start-->
    <section class="category-wrapper section-b-space">
        <div class="container">
            <div class="title-1 title-5">
                <span class="title-label">new offer</span>
                <h2>awesome package</h2>
                <p>Trips, experiences, and places. All in one service.</p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="slide-2 arrow-classic">
                        <div>
                            <div class="category-wrap">
                                <div class="category-img">
                                    <a href="#"><img src="assets/images/tour/tour/4.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></a>
                                    <div class="side-effect"></div>
                                </div>
                                <div class="category-content">
                                    <div>
                                        <div class="top">
                                            <a href="#">
                                                <h3>tour of shimala</h3>
                                            </a>
                                            <h6>group</h6>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem
                                            Ipsum has been the industry's since....</p>
                                        <div class="bottom">
                                            <h3><del>$240</del>$200</h3>
                                            <h6 class="coupon-code">Coupon code: <span>EDR45</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="category-wrap">
                                <div class="category-img">
                                    <a href="#"><img src="assets/images/tour/tour/5.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></a>
                                    <div class="side-effect"></div>
                                </div>
                                <div class="category-content">
                                    <div>
                                        <div class="top">
                                            <a href="#">
                                                <h3>tour of shimala</h3>
                                            </a>
                                            <h6>group</h6>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem
                                            Ipsum has been the industry's since....</p>
                                        <div class="bottom">
                                            <h3><del>$240</del>$200</h3>
                                            <h6 class="coupon-code">Coupon code: <span>EDR45</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="category-wrap">
                                <div class="category-img">
                                    <a href="#"><img src="assets/images/tour/tour/6.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></a>
                                    <div class="side-effect"></div>
                                </div>
                                <div class="category-content">
                                    <div class="top">
                                        <a href="#">
                                            <h3>tour of shimala</h3>
                                        </a>
                                        <h6>group</h6>
                                        <div class="like-cls">
                                            <i class="fas fa-heart"><span class="effect"></span></i>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem
                                        Ipsum has been the industry's ard dummy text ever since the 1500s, when an
                                        unkn....</p>
                                    <div class="bottom">
                                        <h3><del>$240</del>$200</h3>
                                        <h6 class="coupon-code">Coupon code: <span>EDR45</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- package section end-->


    <!-- full banner section start -->
    <section class="full-banner ">
        <img src="assets/images/background.jpg" alt="" class="bg-img">
        <div class="container">
            <div class="row">
                <div class="offset-xl-7 col-xl-5 col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                    <div class="banner-content">
                        <div>
                            <div class="offer-text">
                                <span class="offer">offer</span>
                                <h6>
                                    <span>l</span>
                                    <span>i</span>
                                    <span>m</span>
                                    <span>i</span>
                                    <span>t</span>
                                    <span>e</span>
                                    <span>d</span>
                                    <span></span>
                                    <span>t</span>
                                    <span>i</span>
                                    <span>m</span>
                                    <span>e</span>
                                </h6>
                            </div>
                            <h5>special <span>nature</span> tour offer</h5>
                            <h2>discount <span>20-30%</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setti ng industry. Lorem Ipsum
                                has been the of industry standard dum my text ever since the 1500s,</p>
                            <h2 class="price"><del>$600</del> $420</h2>
                            <div class="bottom-section">
                                <a href="#" class="btn btn-rounded btn-sm color1">buy now</a>
                                <div class="info-btn">
                                    <h6>7 days &nbsp; | &nbsp; 8 nights</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- full banner section end -->


    <!-- testimonial section start -->
    <section class="testimonial_section section-b-space">
        <div class="container">
            <div class="title-1 title-5">
                <span class="title-label">latest</span>
                <h2>our guests love us</h2>
                <p class="mb-0">our tourist is satisfied and give best feedback</p>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-10">
                    <div class="slide-1 arrow-classic">
                        <div>
                            <div class="testimonial">
                                <div class="top-part">
                                    <div class="img-part">
                                        <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                        <img src="assets/images/avtar/1.jpg" class="img-fluid blur-up lazyload"
                                            alt="">
                                        <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                    </div>
                                </div>
                                <div class="bottom-part">
                                    <p>Architecto aut error explicabo. Voluptatem eaque sequi qui beatae velit vero
                                        autautem. Et adipisci perferendis corporis et similique vitae consequatur.
                                        Auteveniet quam. Et ut placeat consequatur qui nihil eos quibusdam.
                                        Impedit blanditiis delectus.</p>
                                    <h3>mark enderess</h3>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial">
                                <div class="top-part">
                                    <div class="img-part">
                                        <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                        <img src="assets/images/avtar/2.jpg" class="img-fluid blur-up lazyload"
                                            alt="">
                                        <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                    </div>
                                </div>
                                <div class="bottom-part">
                                    <p>Architecto aut error explicabo. Voluptatem eaque sequi qui beatae velit vero
                                        autautem. Et adipisci perferendis corporis et similique vitae consequatur.
                                        Auteveniet quam. Et ut placeat consequatur qui nihil eos quibusdam.
                                        Impedit blanditiis delectus.</p>
                                    <h3>mark enderess</h3>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->


    <!-- gallery section start -->
    <section class="gallery-section pt-0">
        <div class="container-fluid p-0">
            <div class="row zoom-gallery m-0">

                <div class="col-2 p-0">
                    <a href="assets/images/tour/gallery/2.jpg" class="img-box">
                        <div class="gallery_box">
                            <div class="gallery-img">
                                <div class="overlay"></div>
                                <img src="assets/images/tour/gallery/2.jpg" alt=""
                                    class="img-fluid blur-up lazyload w-100">
                            </div>
                            <div class="gallery-content">
                                <h3>china town</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="view-cls"><i class="fas fa-plus"></i></div>
                        </div>
                    </a>
                    <a href="assets/images/tour/gallery/3.jpg" class="img-box">
                        <div class="gallery_box">
                            <div class="gallery-img">
                                <div class="overlay"></div>
                                <img src="assets/images/tour/gallery/3.jpg" alt=""
                                    class="img-fluid blur-up lazyload w-100">
                            </div>
                            <div class="gallery-content">
                                <h3>garden</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="view-cls"><i class="fas fa-plus"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-3 p-0">
                    <a href="assets/images/tour/gallery/4.jpg" class="img-box">
                        <div class="gallery_box">
                            <div class="gallery-img">
                                <div class="overlay"></div>
                                <img src="assets/images/tour/gallery/4.jpg" alt=""
                                    class="img-fluid blur-up lazyload w-100">
                            </div>
                            <div class="gallery-content">
                                <h3>bangkok night</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="view-cls"><i class="fas fa-plus"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0">
                    <a href="assets/images/tour/gallery/5.jpg" class="img-box">
                        <div class="gallery_box">
                            <div class="gallery-img">
                                <div class="overlay"></div>
                                <img src="assets/images/tour/gallery/5.jpg" alt=""
                                    class="img-fluid blur-up lazyload w-100">
                            </div>
                            <div class="gallery-content">
                                <h3>indian zoo</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="view-cls"><i class="fas fa-plus"></i></div>
                        </div>
                    </a>
                    <a href="assets/images/tour/gallery/6.jpg" class="img-box">
                        <div class="gallery_box">
                            <div class="gallery-img">
                                <div class="overlay"></div>
                                <img src="assets/images/tour/gallery/6.jpg" alt=""
                                    class="img-fluid blur-up lazyload w-100">
                            </div>
                            <div class="gallery-content">
                                <h3>sunset lake</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="view-cls"><i class="fas fa-plus"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-5 p-0">
                    <a href="assets/images/tour/gallery/1.jpg" class="img-box">
                        <div class="gallery_box">
                            <div class="gallery-img">
                                <div class="overlay"></div>
                                <img src="assets/images/tour/gallery/1.jpg" alt=""
                                    class="img-fluid blur-up lazyload w-100">
                            </div>
                            <div class="gallery-content">
                                <h3>span water fall</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="view-cls"><i class="fas fa-plus"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery section end -->


    <!-- service section start-->
    <section class="section-b-space">
        <div class="container">
            <div class="title-1 title-5">
                <span class="title-label">new</span>
                <h2>some good reason</h2>
                <p>Trips, experiences, and places. All in one service.</p>
            </div>
            <div class="row service-part">
                <div class="col-lg-4">
                    <div class="service-wrapper">
                        <div>
                            <h3>+120 Premium tours <i class="fas fa-heart"><span class="effect"></span></i></h3>
                            <h6>120 premium tour</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                                been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                            <div class="service-btn">
                                <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-wrapper">
                        <div>
                            <h3>+1000 Customers <i class="fas fa-heart"><span class="effect"></span></i></h3>
                            <h6>1000 customers</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                                been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                            <div class="service-btn">
                                <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-wrapper">
                        <div>
                            <h3>H24 Support <i class="fas fa-heart"><span class="effect"></span></i></h3>
                            <h6>h24 support</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                                been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                            <div class="service-btn">
                                <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->




    <!-- subscribe section start -->
    <section class="subscribe_section medium-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="subscribe-detail">
                        <div>
                            <h2>subscribe our news <span>our news</span></h2>
                            <p>Subscribe and receive our newsletters to follow the news about our fresh and fantastic
                                products</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="input-section">
                        <input type="text" class="form-control" placeholder="Enter Your Email"
                            aria-label="Recipient's username">
                        <a href="#" class="btn btn-rounded btn-sm color1">subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe section end -->
@endsection
