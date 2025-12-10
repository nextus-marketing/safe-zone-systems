@extends('layouts.frontend')
@section('title') Safe Zone Systems | Professional CCTV Installation & 24/7 Security Solutions
 @endsection
@section('content')
<style>
    @media (max-width: 1399px) {
    .error-content {
        margin: 50px 0 1px;
    }
}
</style>
<main class="site-content">
                <!-- ==================== -->
                <!-- slider-wrapper start -->
                <div class="slider-wrapper">
                    <div id="mainSlider" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#mainSlider" data-slide-to="1"></li>
                            <li data-target="#mainSlider" data-slide-to="2"></li>
                        </ol>
                        <!-- /.carousel-indicators -->

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="item-inner" style="background-image: url(/frontend/my-img/banner.jpg);">
                                    <div class="container h-100">
                                        <div class="row h-100 align-items-center">
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="slider-content">
                                                    <h1 data-animation="animate__animated animate__fadeInUp animD-1">Secure Your Home, Protect Your Family</h1>
                                                    <p data-animation="animate__animated animate__fadeInUp animD-2">Experience peace of mind with cutting-edge security solutions tailored for your unique needs. Protect what matters most with Safe Zone Systems.</p>
                                                    <a href="tel:+18476795062" data-animation="animate__animated animate__fadeInUp animD-3" class="theme-btn">Connect Now<i class="icofont-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scroling-lines">
                                            <span>
                                                <span data-parallax='{"y":750, "smoothness":45}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":-550, "smoothness":55}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":250, "smoothness":65}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":650, "smoothness":25}'></span>
                                            </span>
                                            <span>
                                                <span data-parallax='{"y":-450, "smoothness":45}'></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-wrapper end -->
                <!-- ================== -->

                <!-- ===================== -->
                <!-- feature-section start -->
                <!-- <div class="feature-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="section-header text-center overflow-hidden wow animate__animated animate__slow animate__fadeInUp">
                                    <h2>Pioneering Modern Home Security</h2>
                                    <p>Discover how our local expertise and innovative solutions work together to create a safer home environment for our community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-carousel">
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-money-bag"></i>
                                    <span>Affordable Rates</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-live-support"></i>
                                    <span>24/7 Support</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-chart-histogram-alt"></i>
                                    <span>Different Range</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-man-in-glasses"></i>
                                    <span>Experts & Staff</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-checked"></i>
                                    <span>Trustworthy</span>
                                </a>
                            </div>
                            <div class="feature-single">
                                <a>
                                    <i class="icofont-download"></i>
                                    <span>Online Backup</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- feature-section end -->
                <!-- =================== -->

                <!-- =================== -->
                <!-- about-section start -->
                <div class="about-section" id="about">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <h2>Dedicated to Your Security Needs</h2>
                                    </br>
                                    <p>
                                    Safe Zone Systems has been at the forefront of home security since its inception, offering advanced surveillance and protection solutions backed by years of expertise.
                                    </br>
                                    </br>
                                    We pride ourselves on customer satisfaction and building tailored solutions that enhance safety and security for families and businesses alike.
                                    </p>
                                    <a href="tel:+18476795062" class="theme-btn">Contact Us <i class="icofont-double-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="intro-gallery">
                                <div class="tab-content" id="img-gallery">
                                    <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab-02">
                                        <figure style="border-radius: 12px; overflow: hidden; margin: 0;">
                                            <img src="/frontend/my-img/who-we-are.jpg" alt="Gallery Image" style="width:100%; height:auto;">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about-section end -->
                <!-- ================= -->

                <!-- ===================== -->
                <!-- service-section start -->
                <div class="service-section">
                    <div class="container-xl">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="section-header text-center wow animate__animated animate__slow animate__fadeInUp">
                                    <h2>Why Choose Us?</h2>
                                    <p>Discover the unique advantages of partnering with Safe Zone Systems for all your security needs, from installation to ongoing support.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-area">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="service-single">
                                        <figure>
                                            <a href="#0">
                                                <img src="/frontend/my-img/solution.jpg" alt="Service Thumb" 
                                                style="width:278px; height:324px; object-fit:cover;"/>
                                            </a>
                                        </figure>
                                        <div class="service-card">
                                            <h2><a href="#0" class="tdu-hover">Comprehensive Solutions</a></h2>
                                            <p>Our tailored security systems integrate seamlessly into your lifestyle, providing comprehensive protection that adapts to your unique needs and preferences.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-single">
                                        <figure>
                                            <a href="#0">
                                               <img src="/frontend/my-img/advance.jpg" 
                                                    alt="Service Thumb" 
                                                    style="width:278px; height:324px; object-fit:cover;" />
                                            </a>
                                        </figure>
                                        <div class="service-card">
                                            <h2><a href="#0" class="tdu-hover">Advanced Technology</a></h2>
                                            <p>Utilizing cutting-edge technology, our surveillance systems offer 24/7 monitoring, high-definition video, and smart features to keep you informed and secure.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="service-single">
                                        <figure>
                                            <a href="#0">
                                                <img src="/frontend/my-img/expert-support.jpg" alt="Service Thumb" 
                                                style="width:278px; height:324px; object-fit:cover;"/>
                                            </a>
                                        </figure>
                                        <div class="service-card">
                                            <h2><a href="#0" class="tdu-hover">Expert Support</a></h2>
                                            <p>With professional installation and ongoing support, our team ensures that your security systems operate effectively, providing peace of mind every single day.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-single">
                                        <figure>
                                            <a href="#0">
                                                <img src="/frontend/my-img/reliable-peace.jpg" alt="Service Thumb" 
                                                style="width:278px; height:324px; object-fit:cover;"/>
                                            </a>
                                        </figure>
                                        <div class="service-card">
                                            <h2><a href="#0" class="tdu-hover">Reliable Peace of Mind</a></h2>
                                            <p>Stay protected around the clock with dependable monitoring and instant alerts that keep you aware and in control.
                                            </br>
                                            </br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="tel:+18476795062" class="theme-btn">Call Now <i class="icofont-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- service-section end -->
                <!-- =================== -->

                <div class="footer-top">
                    <div class="container overflow-hidden">
                        <div class="call-to-action wow animate__animated animate__slow animate__slideInUp">
                            <h2>Secure Your Home Today</h2>
                            <a href="tel:+18476795062" class="theme-btn">Call for Support <i class="icofont-double-right"></i></a>
                        </div>
                    </div>
                </div>
                 
<div class="counter-section py-5" style="background-color: #e6f7f7;">
    <div class="container-xl">
        <div class="row text-center">
            <!-- Counter 1 -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <div class="counter-box p-3" style="background-color:#ffffff; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.05);">
                    <h2 class="counter" data-target="5000" style="font-size:2rem; color:#21b4a6;">0+</h2>
                    <h5 style="margin-top:0.5rem; font-weight:600;">Lives Transformed</h5>
                </div>
            </div>

            <!-- Counter 2 -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <div class="counter-box p-3" style="background-color:#ffffff; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.05);">
                    <h2 class="counter" data-target="10000" style="font-size:2rem; color:#21b4a6;">0+</h2>
                    <h5 style="margin-top:0.5rem; font-weight:600;">Meals Distributed</h5>
                </div>
            </div>

            <!-- Counter 3 -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <div class="counter-box p-3" style="background-color:#ffffff; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.05);">
                    <h2 class="counter" data-target="500" style="font-size:2rem; color:#21b4a6;">0+</h2>
                    <h5 style="margin-top:0.5rem; font-weight:600;">Students Sponsored</h5>
                </div>
            </div>

            <!-- Counter 4 -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <div class="counter-box p-3" style="background-color:#ffffff; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.05);">
                    <h2 class="counter" data-target="200" style="font-size:2rem; color:#21b4a6;">0+</h2>
                    <h5 style="margin-top:0.5rem; font-weight:600;">Homes Built</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS for counter animation -->
<script>
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace(/\D/g,''); // remove non-digits
            const increment = target / 200; // adjust speed

            if (count < target) {
                counter.innerText = Math.ceil(count + increment).toLocaleString() + '+';
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target.toLocaleString() + '+';
            }
        };
        updateCount();
    });
}

// Detect if counters are in viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
}

let countersAnimated = false;
window.addEventListener('scroll', () => {
    const counterSection = document.querySelector('.counter-section');
    if (!countersAnimated && isInViewport(counterSection)) {
        animateCounters();
        countersAnimated = true;
    }
});
</script>


                <!-- ======================= -->
                <!-- testimony-section start -->
                <div class="testimony-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="section-header text-center wow animate__animated animate__slow animate__fadeInUp">
                                    <h2>What Our Clients Say</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimony-area">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="review-buttons">
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                                <figure class="wow animate__animated animate__fadeInBottomRight">
                                                    <a href="#" data-review="1" class="review-btn active">
                                                        <img src="/frontend/assets/img/testimony/01.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-4 offset-4">
                                                <figure class="wow animate__animated animate__fadeInBottomLeft">
                                                    <a href="#" data-review="2" class="review-btn">
                                                        <img src="/frontend/assets/img/testimony/02.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-4 offset-4">
                                                <figure>
                                                    <a href="#" data-review="3" class="review-btn">
                                                        <img src="/frontend/assets/img/testimony/03.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-4">
                                                <figure class="wow animate__animated animate__fadeInTopRight">
                                                    <a href="#" data-review="4" class="review-btn">
                                                        <img src="/frontend/assets/img/testimony/04.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-4 offset-4">
                                                <figure class="wow animate__animated animate__fadeInTopLeft">
                                                    <a href="#" data-review="5" class="review-btn">
                                                        <img src="/frontend/assets/img/testimony/05.jpg" alt="Reviewed by" />
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="testimony-content">
                                        <div class="review-single active">
                                            <div class="review-inner overflow-hidden">
                                                <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                Safe Zone Systems transformed my home security with a comprehensive system. Their team was professional and caring, guiding me through every step. I finally feel safe in my home!
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/01.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Emily Johnson</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single">
                                            <div class="review-inner overflow-hidden">
                                                 <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                 I am extremely satisfied with the commercial security solution installed by Safe Zone Systems. Their attention to detail and advanced technology have kept my business and employees safe.
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/02.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Mark Thompson</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single">
                                            <div class="review-inner overflow-hidden">
                                                 <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                  Safe Zone Systems gave us the perfect combination of technology and peace of mind. Their monitoring features are incredibly user-friendly, and support is always responsive.
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/03.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Daniel Carter</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single">
                                            <div class="review-inner overflow-hidden">
                                                 <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                 Exceptional service and truly reliable systems. The installation team was quick, respectful, and made sure I understood everything clearly. My home finally feels protected 24/7.
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/04.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Ariana Lewis</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-single">
                                            <div class="review-inner overflow-hidden">
                                                 <img src="/frontend/my-img/testimonals.png" alt="Quote" class="animate__animated animate__fadeInUp animate__slow"  style="width:60px; height:44px; object-fit:contain;" />
                                                <p class="animate__animated animate__fadeInLeft">
                                                 I love how seamlessly everything works. From smart cameras to motion alerts, the setup has been flawless. I highly recommend them to anyone looking for long-term security.
                                                </p>
                                                <div class="reviewer d-flex align-items-center animate__animated animate__fadeInLeft animate__slow">
                                                    <img src="/frontend/assets/img/testimony/05.jpg" alt="Reviewed By" />
                                                    <div class="reviewed-by">
                                                        <h3>Natalie Gomez</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimony-section end -->

      <div class="partners-section error-content" style=" background:#c9921e; background-image:url('/frontend/assets/img/bg/04.jpg'); background-size:cover; background-position:center; background-repeat:no-repeat;" id="contact">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                
                <div class="section-header text-white wow animate__animated animate__slow animate__fadeInUp">
                    <h2 style="font-size:40px; font-weight:700;">
                     Take the First Step to Safety
                    </h2>
                    <p style="font-size:18px; margin-top:15px;">
                       Contact us for a personalized security assessment today.
                    </p>
                </div>

                <!-- Center Button -->
                <div>
                    <a href="tel:+18476795062">
                       Speak With an Expert <i class="icofont-double-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>


                <!-- ===================== -->
            </main>
            
@endsection