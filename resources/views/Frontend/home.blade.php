@extends('layouts.frontend')

@php
    $phone = '+18888552919';
    $phoneLabel = '+1 (888) 855-2919';
@endphp

@section('title')
    Buy Car Parts - Quality Used OEM Auto Parts, Engines & Transmissions
@endsection

@section('content')
    <!-- Start Home6 Banner section -->
    <div class="home6-banner-area">
        <div class="container-fluid">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="banner-content">
                        <span>Trusted Auto Parts Supplier</span>
                        <h1>Quality Used Car Parts & OEM Assemblies</h1>
                        <p>Find tested replacement engines, transmissions, suspension, electrical, and body components for nearly every make and model at unbeatable prices.</p>
                        <div class="banner-content-bottom">
                            <a href="tel:{{ $phone }}" class="primary-btn7">
                                <svg width="24" height="15" viewBox="0 0 24 15" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917ZM17.9912 10.3929C17.9912 9.97691 18.1545 9.57795 18.4453 9.2838C18.7361 8.98965 19.1306 8.82439 19.5418 8.82439C19.9531 8.82439 20.3475 8.98965 20.6383 9.2838C20.9291 9.57795 21.0925 9.97691 21.0925 10.3929C21.0925 10.8089 20.9291 11.2079 20.6383 11.502C20.3475 11.7962 19.9531 11.9614 19.5418 11.9614C19.1306 11.9614 18.7361 11.7962 18.4453 11.502C18.1545 11.2079 17.9912 10.8089 17.9912 10.3929ZM7.91196 8.82439C7.5007 8.82439 7.10629 8.98965 6.81549 9.2838C6.52468 9.57795 6.36131 9.97691 6.36131 10.3929C6.36131 10.8089 6.52468 11.2079 6.81549 11.502C7.10629 11.7962 7.5007 11.9614 7.91196 11.9614C8.32322 11.9614 8.71763 11.7962 9.00843 11.502C9.29923 11.2079 9.46261 10.8089 9.46261 10.3929C9.46261 9.97691 9.29923 9.57795 9.00843 9.2838C8.71763 8.98965 8.32322 8.82439 7.91196 8.82439Z">
                                    </path>
                                    <path
                                        d="M0 5.09873C0 4.99473 0.0408428 4.89499 0.113543 4.82146C0.186244 4.74792 0.284847 4.7066 0.387662 4.7066H4.74886C4.85167 4.7066 4.95027 4.74792 5.02297 4.82146C5.09567 4.89499 5.13652 4.99473 5.13652 5.09873C5.13652 5.20273 5.09567 5.30247 5.02297 5.37601C4.95027 5.44955 4.85167 5.49086 4.74886 5.49086H0.387662C0.284847 5.49086 0.186244 5.44955 0.113543 5.37601C0.0408428 5.30247 0 5.20273 0 5.09873ZM15.6836 5.60575C15.7563 5.67929 15.7971 5.77901 15.7971 5.88299C15.7971 5.98697 15.7563 6.08669 15.6836 6.16022L15.6532 6.19101C15.2897 6.55865 14.7968 6.76522 14.2828 6.76528H8.14089C8.03808 6.76528 7.93948 6.72397 7.86678 6.65043C7.79408 6.57689 7.75323 6.47715 7.75323 6.37315C7.75323 6.26915 7.79408 6.16941 7.86678 6.09587C7.93948 6.02234 8.03808 5.98102 8.14089 5.98102H14.2826C14.4354 5.98104 14.5866 5.95063 14.7277 5.89152C14.8688 5.83241 14.997 5.74577 15.105 5.63654L15.1355 5.60575C15.2082 5.53224 15.3068 5.49094 15.4096 5.49094C15.5123 5.49094 15.6109 5.53224 15.6836 5.60575ZM8.52856 14.6079C8.52856 14.5039 8.5694 14.4041 8.6421 14.3306C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3306C10.9106 14.4041 10.9514 14.5039 10.9514 14.6079C10.9514 14.7118 10.9106 14.8116 10.8379 14.8851C10.7652 14.9587 10.6666 15 10.5638 15H8.91622C8.8134 15 8.7148 14.9587 8.6421 14.8851C8.5694 14.8116 8.52856 14.7118 8.52856 14.6079ZM11.2422 14.6079C11.2422 14.5039 11.283 14.4041 11.3557 14.3306C11.4284 14.257 11.527 14.2157 11.6298 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3306C16.3379 14.4041 16.3787 14.5039 16.3787 14.6079C16.3787 14.7118 16.3379 14.8116 16.2652 14.8851C16.1925 14.9587 16.0939 15 15.991 15H11.6298C11.527 15 11.4284 14.9587 11.3557 14.8851C11.283 14.8116 11.2422 14.7118 11.2422 14.6079Z">
                                    </path>
                                </svg>
                                Call Now: {{ $phoneLabel }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex justify-content-lg-end">
                    <div class="banner-img-group">
                        <div class="top-img-group">
                            <div class="top-left-card">
                                <div class="icon">
                                    <img src="/frontend/assets/img/home6/icon/banner-icon.svg" alt="">
                                </div>
                                <div class="content">
                                    <h4>50,000+</h4>
                                    <span>Tested Parts</span>
                                </div>
                            </div>
                            <div class="top-right-img">
                                <img src="/frontend/assets/engine.webp" alt="Car Engine Replacement">
                            </div>
                        </div>

                        <div class="bottom-img-group">
                            <div class="bottom-left-img">
                                <img src="/frontend/assets/transmission.jpeg" alt="Car Transmission Parts">
                            </div>
                            <div class="bottom-right-img">
                                <img src="/frontend/assets/car-ac.jpg" alt="Car AC Compressor & Suspension">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home6 Banner section -->

    <!-- Start Product Page Section -->
    <div class="product-page py-5">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="show-item-and-filte">
                        <p>Showing <strong>Popular Replacement</strong> car parts</p>
                    </div>
                </div>
            </div>
            <div class="row g-xl-4 gy-5">
                <div class="col-xl-3">
                    <div class="product-sidebar">
                        <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Product Category</h6>
                                <div class="checkbox-container">
                                    <ul class="wp-block-categoris-cloud">
                                        <li><a href="/engine-parts" class="active"><span>Engine Parts</span> <span class="number-of-categoris">(15)</span></a></li>
                                        <li><a href="/transmission-parts" class="active"><span>Transmission Parts</span> <span class="number-of-categoris">(07)</span> </a></li>
                                        <li><a href="/suspension-parts" class="active"><span>Suspension Parts</span> <span class="number-of-categoris">(11)</span></a></li>
                                        <li><a href="/electrical-parts" class="active"><span>Electrical Parts</span> <span class="number-of-categoris">(12)</span></a></li>
                                        <li><a href="/exterior-parts" class="active"><span>Exterior Parts</span> <span class="number-of-categoris">(09)</span></a></li>
                                        <li><a href="/interior-parts" class="active"><span>Interior Parts</span> <span class="number-of-categoris">(07)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Contact CTA Box Start -->
                        <div class="product-widget mb-20">
                            <div class="parts-help-box">
                                <div class="parts-help-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h5>Need Help Finding a Part?</h5>
                                <p>
                                    Not sure which part fits your vehicle? Our team of specialists is here to verify exact compatibility.
                                </p>
                                <a href="tel:{{ $phone }}" class="parts-call-btn">
                                    <i class="bi bi-telephone-fill"></i>
                                    {{ $phoneLabel }}
                                </a>
                                <a href="mailto:buycarparts@gmail.com" class="parts-email-btn">
                                    <i class="bi bi-envelope-fill"></i>
                                    Email Us
                                </a>
                                <div class="parts-help-note">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Guaranteed Exact Vehicle Fitment
                                </div>
                            </div>
                        </div>
                        <!-- Contact CTA Box End -->

                        <div class="product-widget">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Recent Products</h6>
                                <ul class="recent-product-list">
                                    <li class="recent-product">
                                        <div class="product-img">
                                            <a href="/interior-parts/car-steering">
                                                <img src="/frontend/assets/Main/sterring_wheel.jpg" alt="Steering Wheel Assembly">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6><a href="/interior-parts/car-steering">Replacement Steering Wheel Assembly</a></h6>
                                        </div>
                                    </li>

                                    <li class="recent-product">
                                        <div class="product-img">
                                            <a href="/suspension-parts/power-steering-pump">
                                                <img src="/frontend/assets/Main/power_steering_pump.jpg" alt="Power Steering Pump">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6><a href="/suspension-parts/power-steering-pump">Power Steering Pump Replacement</a></h6>
                                        </div>
                                    </li>

                                    <li class="recent-product">
                                        <div class="product-img">
                                            <a href="/electrical-parts/ignition-switch">
                                                <img src="/frontend/assets/Main/ignition_switch.jpg" alt="Ignition Switch">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6><a href="/electrical-parts/ignition-switch">Automotive Ignition Switch</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9">
                    <div class="row g-4 mb-40">
                        <!-- Product 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/engine-parts/car-engine">
                                        <img src="/frontend/assets/Main/engine.jpg" alt="Car Engine">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/engine-parts/car-engine">Car Engine</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/engine-parts/engine-mount">
                                        <img src="/frontend/assets/Main/engine-mount.jpg" alt="Engine Mount">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/engine-parts/engine-mount">Engine Mount</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/suspension-parts/brake-caliper-rotors">
                                        <img src="/frontend/assets/Main/braker_caliper.jpg" alt="Brake Caliper & Rotors">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/suspension-parts/brake-caliper-rotors">Brake Caliper & Rotors</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/electrical-parts/instrument-cluster">
                                        <img src="/frontend/assets/Main/car_instrument.jpg" alt="Instrument Cluster">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/electrical-parts/instrument-cluster">Instrument Cluster</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/transmission-parts/transmission">
                                        <img src="/frontend/assets/Main/transmission.jpg" alt="Transmission">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/transmission-parts/transmission">Transmission</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/transmission-parts/drive-shaft">
                                        <img src="/frontend/assets/Main/drive_shaft.webp" alt="Drive Shaft">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/transmission-parts/drive-shaft">Drive Shaft</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 7 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/engine-parts/cylinder-head">
                                        <img src="/frontend/assets/Main/cylinder_head.jpg" alt="Cylinder Head">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/engine-parts/cylinder-head">Cylinder Head</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 8 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/engine-parts/fuel-pump">
                                        <img src="/frontend/assets/Main/fuel_pump.jpg" alt="Fuel Pump">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/engine-parts/fuel-pump">Fuel Pump</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 9 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/suspension-parts/shock-absorber">
                                        <img src="/frontend/assets/Main/shock_absorber.jpg" alt="Shock Absorber">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                                    </div>
                                    <div class="star">
                                        <ul>
                                            <li class="active"><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h6><a href="/suspension-parts/shock-absorber">Shock Absorber</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Page Section -->

    <!-- Start Why Choose section -->
    <div class="why-choose-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title-2 text-center">
                        <h2>Why Choose Buy Car Parts</h2>
                        <p>Your reliable source for tested, high-quality replacement parts with guaranteed vehicle fitment.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-50 g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="/frontend/assets/img/home1/icon/affordable.svg" alt="">
                            </div>
                            <h5><span>Affordable</span> Pricing</h5>
                        </div>
                        <p>Save up to 60% compared to new dealership replacement costs while getting genuine OEM fit and performance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="/frontend/assets/img/home1/icon/guarantee.svg" alt="">
                            </div>
                            <h5>Thoroughly <span>Tested</span></h5>
                        </div>
                        <p>Every engine, transmission, pump, and electrical unit undergoes multi-point inspection before leaving our warehouse.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="/frontend/assets/img/home1/icon/warranty.svg" alt="">
                            </div>
                            <h5>Warranty <span>Protection</span></h5>
                        </div>
                        <p>We stand behind the durability of our parts with warranty coverage and dedicated after-sale specialist support.</p>
                    </div>
                </div>
            </div>
            <div class="our-activetis">
                <div class="row justify-content-center g-lg-4 gy-5">
                    <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-lg-start justify-content-sm-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="single-activiti">
                            <div class="icon">
                                <img src="/frontend/assets/img/home1/icon/av-car.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">50</h5>
                                    <span>K+</span>
                                </div>
                                <p>Parts In Stock</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-sm-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="single-activiti">
                            <div class="icon">
                                <img src="/frontend/assets/img/home1/icon/sold-car.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">40</h5>
                                    <span>K+</span>
                                </div>
                                <p>Orders Shipped</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-sm-center wow fadeInUp" data-wow-delay="400ms">
                        <div class="single-activiti">
                            <div class="icon">
                                <img src="/frontend/assets/img/home1/icon/use-car.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">200</h5>
                                    <span>+</span>
                                </div>
                                <p>Makes & Models</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-sm-6 d-flex justify-content-lg-end justify-content-sm-center wow fadeInUp" data-wow-delay="500ms">
                        <div class="single-activiti">
                            <div class="icon">
                                <img src="/frontend/assets/img/home1/icon/happy-customar.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">98.5</h5>
                                    <span>%</span>
                                </div>
                                <p>Customer Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="trustpilot-review">
                        <strong>Excellent!</strong>
                        <img src="/frontend/assets/img/home1/icon/trustpilot-star2.svg" alt="">
                        <p>5.0 Rating out of <strong>5.0</strong> based on <strong>12,400+</strong> reviews</p>
                        <img src="/frontend/assets/img/home1/icon/trustpilot-logo.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose section -->

    <!-- Start Brands Section -->
    <div class="toprated-used-cars mb-100" id="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h4 class="text-center">Explore Car Parts by Brand</h4>
                    </div>
                    <div class="brand-list mt-10">
                        <ul>
                            <li><a href="tel:{{ $phone }}">Acura Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Audi Parts</a></li>
                            <li><a href="tel:{{ $phone }}">BMW Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Chevrolet Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Dodge Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Ford Parts</a></li>
                            <li><a href="tel:{{ $phone }}">GMC Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Honda Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Hyundai Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Infiniti Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Jeep Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Kia Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Lexus Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Mazda Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Mercedes Benz Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Nissan Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Subaru Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Tesla Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Toyota Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Volkswagen Parts</a></li>
                            <li><a href="tel:{{ $phone }}">Volvo Parts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brands Section -->

    <!-- Start Fitment Assistance Banner Section -->
    <div class="recommended-car-section">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-lg-8 d-flex align-items-lg-end justify-content-center">
                    <div class="recommended-left">
                        <div class="section-title1 wow fadeInUp" data-wow-delay="200ms">
                            <span>Expert Fitment Assistance</span>
                            <h2>Not Sure Which Part Fits Your Vehicle?</h2>
                        </div>
                        <div class="think-img wow zoomIn" data-wow-delay="400ms">
                            <img src="/frontend/assets/img/home1/recommended-img.png" alt="Auto Parts Specialist Assistance">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-lg-end justify-content-center">
                    <div class="recommended-right wow fadeInUp" data-wow-delay="300ms">
                        <p>Share your vehicle's VIN, engine size, and year with our specialists. We'll cross-reference OEM parts catalogs to find your exact match in minutes.</p>
                        <a class="primary-btn2" href="tel:{{ $phone }}">Call An Expert: {{ $phoneLabel }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fitment Assistance Banner Section -->

    <!-- Start Testimonial Section -->
    <div class="customar-feedback-area style-2 py-5">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2>What Our Customers Are Saying</h2>
                        <p>Verified reviews from vehicle owners, mechanics, and auto repair shops nationwide.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-100">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-left">
                        <a href="tel:{{ $phone }}" class="trustpilot">
                            <h5>Excellent!</h5>
                            <img class="star" src="/frontend/assets/img/home1/icon/trustpilot-star3.svg" alt="">
                        </a>
                        <a href="tel:{{ $phone }}" class="google">
                            <img class="logo" src="/frontend/assets/img/home1/icon/google3.svg" alt="">
                            <div class="star">
                                <ul>
                                    <li class="active"><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li class=""><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <span>Based On <strong>1,448</strong> Reviews</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-right">
                        <div class="swiper customer-feedback-slider mb-40">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Engine Runs Like New!</span>
                                            </div>
                                            <div class="logo">
                                                <img src="/frontend/assets/img/home1/icon/google3.svg" alt="">
                                            </div>
                                        </div>
                                        <p>"Ordered a replacement engine for my Silverado. Delivery was swift, compression tested high across all cylinders, and installation went smoothly. Saved over $2,000!"</p>
                                        <div class="author-name">
                                            <h6>David Miller</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                 <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Flawless Transmission</span>
                                            </div>
                                             <div class="logo">
                                                <img src="/frontend/assets/img/home1/icon/google3.svg" alt="">
                                            </div>
                                        </div>
                                        <p>"The transmission arrived right on schedule. Exact VIN match, clean fluid channels, and shifts like factory new. Their phone support was remarkably helpful."</p>
                                        <div class="author-name">
                                            <h6>Marcus Turner</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li class=""><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Great Fit & Savings</span>
                                            </div>
                                            <div class="logo">
                                                <img src="/frontend/assets/img/home1/icon/google3.svg" alt="">
                                            </div>
                                        </div>
                                        <p>"Needed an OEM power steering pump and suspension control arms. The parts arrived clean, intact, and worked perfectly. Excellent value for money!"</p>
                                        <div class="author-name">
                                            <h6>Robert Jenkins</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <img src="/frontend/assets/img/home1/icon/trustpilot-star.svg" alt="">
                                                <span>Verified Fitment</span>
                                            </div>
                                            <div class="logo">
                                                <img src="/frontend/assets/img/home1/icon/trustpilot-log3.svg" alt="">
                                            </div>
                                        </div>
                                        <p>"Called their team before ordering to verify my vehicle trim. They confirmed the exact part number within 2 minutes. Fast shipping and solid warranty coverage."</p>
                                        <div class="author-name">
                                            <h6>Amanda Cooper</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 divider">
                                <div class="slider-btn-group style-2 justify-content-md-between justify-content-center">
                                    <div class="slider-btn prev-4 d-md-flex d-none">
                                        <svg width="11" height="19" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                        </svg>
                                    </div>
                                    <div class="view-btn-area">
                                        <p>Thousands of 5-Star Reviews Nationwide</p>
                                        <a class="view-btn" href="tel:{{ $phone }}">Call For Part Quotes</a>
                                    </div>
                                    <div class="slider-btn next-4 d-md-flex d-none">
                                        <svg width="11" height="19" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Section -->

    <!-- Start Blog / Auto Advice Section -->
    <div class="news-section five six pb-90 pt-90">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h2>Auto Maintenance & Parts Advice</h2>
                        <p>Helpful tips, fitment guides, and maintenance insights from our automotive experts.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="/engine-parts"><img src="/frontend/assets/rack-1.jpg" alt="Engine and Transmission Compatibility Guide"></a>
                        </div>
                        <div class="content">
                            <h6><a href="/engine-parts">How to Verify Engine & Transmission Compatibility by VIN</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="/suspension-parts"><img src="/frontend/assets/rack-2.webp" alt="Signs of Worn Steering and Suspension"></a>
                        </div>
                        <div class="content">
                            <h6><a href="/suspension-parts">Top Signs Your Suspension & Steering Rack Need Replacement</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="/electrical-parts"><img src="/frontend/assets/rack-3.jpg" alt="Choosing Quality Tested OEM Auto Parts"></a>
                        </div>
                        <div class="content">
                            <h6><a href="/electrical-parts">OEM vs Aftermarket Used Parts: Maximizing Longevity & Savings</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog / Auto Advice Section -->
@endsection