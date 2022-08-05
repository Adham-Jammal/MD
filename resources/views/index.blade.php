@extends('app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-style.css') }}">
@stop
@section('main')
    {{-- Hero --}}
    <section class="hero">
        <div class="container">
            <div class="content">
                <h2>We dedicate <img src="{{ asset('img/red-circle.png') }}" class="red-circle" alt=""></h2>
                <h2 class="with-text">to you <span> We want to touch the brilliance with a hand of innovation in harmony with the quality of your life.
                    </span></h2>
                <h2>a world of luxury mixed </h2>
                <h2>with beauty and creativity</h2>
            </div>
            <p class="mobile-text">Because We have Advanced insights into Consumer Behavior, Brand Awareness, innovation Opportunities. </p>
        </div>
        <svg class="circle-svg" viewBox="0 0 100 100">
            <path
                d="M72.3 27.41 C 74.53166666666667 29.97 78.22 33.70666666666666 79.59 36.82 80.96000000000001 39.93333333333334 80.10833333333333 42.79666666666667 80.52 46.09 80.93166666666666 49.38333333333334 82.13666666666667 53.36 82.06 56.58 81.98333333333333 59.8 81.79 62.346666666666664 80.06 65.41 78.33 68.47333333333333 74.51833333333335 72.82333333333332 71.68 74.96 68.84166666666667 77.09666666666666 65.95 76.95666666666668 63.03 78.23 60.11 79.50333333333333 57.364999999999995 81.62166666666667 54.16 82.6 50.955 83.57833333333332 46.968333333333334 84.47333333333333 43.8 84.1 40.63166666666666 83.72666666666666 37.946666666666665 82.13666666666667 35.15 80.36 32.35333333333333 78.58333333333333 29.301666666666666 76.33666666666666 27.02 73.44 24.738333333333333 70.54333333333334 22.775000000000002 66.185 21.46 62.98 20.145 59.775 19.988333333333333 57.33 19.13 54.21 18.271666666666665 51.09 16.044999999999998 47.78333333333333 16.31 44.26 16.575 40.736666666666665 18.796666666666667 36.21333333333333 20.72 33.07 22.64333333333333 29.926666666666666 25.378333333333334 27.341666666666665 27.85 25.4 30.32166666666667 23.458333333333332 32.541666666666664 22.683333333333334 35.55 21.42 38.55833333333333 20.15666666666667 42.42 18.196666666666665 45.9 17.82 49.379999999999995 17.443333333333335 53.04666666666667 18.553333333333335 56.43 19.16 59.81333333333333 19.766666666666666 63.55500000000001 20.085 66.2 21.46 68.845 22.835 70.06833333333333 24.85 72.3 27.41z">
            </path>
        </svg>
        <svg class="line-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" width="100%" height="100%" viewBox="0 0 789.5 238.9"
            style="fill:none;stroke:#ff0217;stroke-width:2;">
            <path class="path-1"
                d="M1.6,160.2c0,0,17.2-27.5,26.4-45.8s26.9-58.2,26.9-58.2s7.7-7.3,8.8-12.9c1.1-5.6-0.4-11.5,5.3-17.4  S86,8.1,93.9,5.7s11-3.1,18.5-2.8s23.3-1.6,37.1-1.9s70.6,8.7,78.4,8.6c7.8-0.1,23.6,3.7,29.6,3.9s32.5,1.9,42.8,2.4  s19.7,3.2,32.5,6.8s20.6,4,34.2,5.9s17.2,2.9,22.7,5.4s18.4,10,33.9,10.6s53.8,2.8,74.2,4.7c20.4,1.9,31.8,4.5,40.8,4.2  c8.9-0.3,32.3-5.1,42.5-5s44.6,3.5,53.5,2.8s54.3-9.3,63.1-10.2s18.7-2.5,20.8-3.5s8.6-9.7,10.2-8.8s2.9,4.7,4.2,9.8s4.7,9.4,5,16.6  s2.4,39.1,2.4,39.1s1.1,23.2,3,31.7s7.2,23.5,7.4,26.6s0,7,0,7s2.2-0.2,1.9,1.2s-2.8,9.7-2.8,9.7s-5.7-4.3-13.1-2.5  c-7.4,1.8-9,4.4-12.3,8.8c-3.3,4.4-4.1,9.2-29.3,9.3s-36.5-0.6-65.6,2.1c-29.1,2.6-37.1,2.2-53.4,8.1c-16.3,5.9-27.5,12.6-50.6,10.3  c-23.2-2.3-18.9-4.3-37-2.8s-57.7,5.9-78.8,7s-54.6,3.3-67.8,1.1s-46-3.6-59.5-3.4s-45.2-6.4-66.6-10s-31.3-4.1-36.2-5.1  c-4.9-0.9-22.1-8.6-38.6-13.5s-48.7-5.3-56.6-6.7s-13.2-5.5-18.2-5.8c-5-0.3-21.5,0.4-34.6-1.5C18.4,163.9,1.6,160.2,1.6,160.2z">
            </path>
            <path class="path-2"
                d="M39.7,55.9L39.7,55.9c0,0,10.8,5.3,16.5,2.8S66,46.1,74.4,44.2c8.5-1.9,18.5-0.4,50-2  c31.6-1.6,47.8,1.5,68.1-4.3S230.2,24,245,23.1c14.9-0.9,42.8,5.9,58.5,4.7s29-5.2,61.4-5.5s63.2-4.2,76.6-0.5s58.4,3.2,73.4,4.7  c15,1.5,46.8,7.1,59.8,12.1s29.7,3.1,40.4,6.7C625.8,49,647,62.7,672.3,65c25.3,2.3,30.4,2.1,40,4.9s21.5,0,37,2.7s31,5,36.4,6.5  s1.3,3.7,1.3,3.7s-35,60.2-40.9,77.9s-18.5,23.9-19.5,31.1c-0.9,7.2-0.5,11.1-4.9,16.4c-4.5,5.3-16.6,24.1-35.4,26.6  c-18.8,2.5-52.2,3.9-63.2,2.5s-45.2-7.7-59.7-8.8c-14.5-1-29.4-6.1-55.4-6.4s-64.9-16.6-83-17.5s-29.9-6.6-40.5-12.6  c-10.5-6-29.6-3.2-45.1-4.5c-15.5-1.2-57.3-4.7-77.1-8.1s-36.6,0-51,0s-27.7-4.4-51.4-3.2s-50.5,9.3-65.9,11s-27.8-0.2-31.5,5.6  c-3.8,5.8-4.8,9.7-7.3-0.2c-2.6-9.9-8.9-40.8-7.5-57.4s0.7-25.5-3.3-39.9S39.7,55.9,39.7,55.9z">
            </path>
        </svg>
        <a href="#about" id="scroll">Scroll</a>
    </section>
    <section id="about" class="about">
        <div class="container">
            <h2 class="about-title">About</h2>
            <div class="row">
                <div class="column col-md-5">
                    <div class="content">
                        <h4>ABOUT US</h4>
                        <p>A Saudi team and Saudi experience is empowered and strong your ambition is our ambition, you
                            handed us the idea and the way to get your project out on us. </p>
                        <p>We were created to go alongside you by designing and building the brand, managing social media,
                            services and designs, to be the perfect ally for the digital transformation you aspire to.
                        </p>
                    </div>

                </div>
                <div class="column col-6 col-md-3">
                    <div class="content">
                        <h4>Services</h4>
                        <ul>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Naming</li>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Brand building</li>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Brand design</li>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Logo design </li>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Packaging </li>
                        </ul>
                    </div>

                </div>
                <div class="column col-6 col-md-4  ">
                    <div class="content">
                        <h4>Services</h4>
                        <ul>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Design of marketing publications </li>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Design and management of social media sites
                            </li>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Digital Product Design (UX/UI) </li>
                            <li> <i class="fas fa-long-arrow-alt-right"></i>Web design and programming </li>
                            <li> <i class="fas fa-long-arrow-alt-right"></i> Print designs </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="works" class="works">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <h2>ORDER OUR FULL WORKS VIA: </h2>
                        <a href="#">hla@pulpstudio.co<span class="arrow"><svg class="circle-svg" viewBox="0 0 100 100">
                            <path d="M72.3 27.41 C 74.53166666666667 29.97 78.22 33.70666666666666 79.59 36.82 80.96000000000001 39.93333333333334 80.10833333333333 42.79666666666667 80.52 46.09 80.93166666666666 49.38333333333334 82.13666666666667 53.36 82.06 56.58 81.98333333333333 59.8 81.79 62.346666666666664 80.06 65.41 78.33 68.47333333333333 74.51833333333335 72.82333333333332 71.68 74.96 68.84166666666667 77.09666666666666 65.95 76.95666666666668 63.03 78.23 60.11 79.50333333333333 57.364999999999995 81.62166666666667 54.16 82.6 50.955 83.57833333333332 46.968333333333334 84.47333333333333 43.8 84.1 40.63166666666666 83.72666666666666 37.946666666666665 82.13666666666667 35.15 80.36 32.35333333333333 78.58333333333333 29.301666666666666 76.33666666666666 27.02 73.44 24.738333333333333 70.54333333333334 22.775000000000002 66.185 21.46 62.98 20.145 59.775 19.988333333333333 57.33 19.13 54.21 18.271666666666665 51.09 16.044999999999998 47.78333333333333 16.31 44.26 16.575 40.736666666666665 18.796666666666667 36.21333333333333 20.72 33.07 22.64333333333333 29.926666666666666 25.378333333333334 27.341666666666665 27.85 25.4 30.32166666666667 23.458333333333332 32.541666666666664 22.683333333333334 35.55 21.42 38.55833333333333 20.15666666666667 42.42 18.196666666666665 45.9 17.82 49.379999999999995 17.443333333333335 53.04666666666667 18.553333333333335 56.43 19.16 59.81333333333333 19.766666666666666 63.55500000000001 20.085 66.2 21.46 68.845 22.835 70.06833333333333 24.85 72.3 27.41z">
                            </path>
                        </svg>&#10230;</span></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <p>SELECTED WORK</p>
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/works-image-1.jpg') }}" alt="works-image">
            <img src="{{ asset('img/works-image-2.jpg') }}" alt="works-image">
            <img src="{{ asset('img/works-image-3.png') }}" alt="works-image">
            <img src="{{ asset('img/works-image-4.png') }}" alt="works-image">
            <img src="{{ asset('img/works-image-5.png') }}" alt="works-image">
        </div>
    </section>
    {{-- advantages --}}
    <section id="advantages" class="advantages">
        <div class="container">
            <h2>OUR ADVANTAGES </h2>
            <div class="row">
                <div class="col-md-6 image-content">
                    <img src="{{ asset('img/advantages.png') }}" alt="advantages-image">
                </div>
                <div class="col-md-6 text-content">
                    <ul>
                        <li>A creative studio in your hands. </li>
                        <li>Accumulated expertise adds to your business more excellence. </li>
                        <li>Our thoughts are not the same, they are born every moment. </li>
                        <li>We don’t set limits on commitment and consistency in staying with you. </li>
                    </ul>
                    <a href="#">VIEW MORE<span class="arrow"><svg class="circle-svg" viewBox="0 0 100 100">
                        <path d="M72.3 27.41 C 74.53166666666667 29.97 78.22 33.70666666666666 79.59 36.82 80.96000000000001 39.93333333333334 80.10833333333333 42.79666666666667 80.52 46.09 80.93166666666666 49.38333333333334 82.13666666666667 53.36 82.06 56.58 81.98333333333333 59.8 81.79 62.346666666666664 80.06 65.41 78.33 68.47333333333333 74.51833333333335 72.82333333333332 71.68 74.96 68.84166666666667 77.09666666666666 65.95 76.95666666666668 63.03 78.23 60.11 79.50333333333333 57.364999999999995 81.62166666666667 54.16 82.6 50.955 83.57833333333332 46.968333333333334 84.47333333333333 43.8 84.1 40.63166666666666 83.72666666666666 37.946666666666665 82.13666666666667 35.15 80.36 32.35333333333333 78.58333333333333 29.301666666666666 76.33666666666666 27.02 73.44 24.738333333333333 70.54333333333334 22.775000000000002 66.185 21.46 62.98 20.145 59.775 19.988333333333333 57.33 19.13 54.21 18.271666666666665 51.09 16.044999999999998 47.78333333333333 16.31 44.26 16.575 40.736666666666665 18.796666666666667 36.21333333333333 20.72 33.07 22.64333333333333 29.926666666666666 25.378333333333334 27.341666666666665 27.85 25.4 30.32166666666667 23.458333333333332 32.541666666666664 22.683333333333334 35.55 21.42 38.55833333333333 20.15666666666667 42.42 18.196666666666665 45.9 17.82 49.379999999999995 17.443333333333335 53.04666666666667 18.553333333333335 56.43 19.16 59.81333333333333 19.766666666666666 63.55500000000001 20.085 66.2 21.46 68.845 22.835 70.06833333333333 24.85 72.3 27.41z">
                        </path>
                    </svg>&#10230;</span></a>
                </div>
            </div>
        </div>
    </section>
    <section id="partners" class="mission">
        <div class="container">
            <h2>OUR Mission</h2>
            <div class="slider owl-carousel owl-drag owl-theme">
                <div class="slide">
                    <p>Partner success in making your brand brighter and modern in the digital world.</p>
                </div>
                <div class="slide">
                    <p>Attract customer attention of all kinds, and build a new style that can reach the public to make the
                        most of your project, through our digital services and our renewable methodology.</p>
                </div>
            </div>
        </div>
        <span>”</span>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="images">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
                <img src="{{ asset('img/gallery-image-1.jpg') }}" alt="galeery-image">
            </div>
            <div class="single-image">
                <img src="{{ asset('img/gallery-image.png') }}" alt="galeery-image">
            </div>
        </div>
    </section>
@stop
