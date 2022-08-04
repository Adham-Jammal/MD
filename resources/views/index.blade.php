@extends('app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-style.css') }}">
@stop
@section('main')
    {{-- Hero --}}
    <section class="hero">
        <div class="container">
            <div class="content">
                <h2>WE ARE A</h2>
                <h2 class="with-text">Digital <span>Because We have Advanced insights
                    into Consumer Behavior,
                    Brand Awareness, innovation
                    Opportunities.
                </span></h2>
                <h2>Creative</h2>
                <h2>Studio</h2>
            </div>
        </div>
    </section>
    <section class="about">
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
                <div class="column col-md-3">
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
                <div class="column col-md-4 ">
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
    <section class="works">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <h2>ORDER OUR FULL WORKS VIA: </h2>
                        <a href="#">hla@pulpstudio.co<span class="arrow">&#10230;</span></a>
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
    <section class="advantages">
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
                    <a href="#">VIEW MORE<span class="arrow">&#10230;</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="mission">
        <div class="container">
            <h2>OUR Mission</h2>
            <div class="slider owl-carousel owl-drag owl-theme">
                <div class="slide">
                    <p>Partner success in making your brand brighter and modern in the digital world.</p>
                </div>
                <div class="slide">
                    <p>Attract customer attention of all kinds, and build a new style that can reach the public to make the most of your project, through our digital services and our renewable methodology.</p>
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
