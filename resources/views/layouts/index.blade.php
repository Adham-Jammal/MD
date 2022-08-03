@extends('app')
@php
$lang = ucfirst(LaravelLocalization::getCurrentLocale());
$lang2 = LaravelLocalization::getCurrentLocale();

@endphp

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mainpage-' . $lang2 . '.css') }}">
@stop



@section('meta')
    <title>{{__("main-page.Aqarat")}}</title>
@stop

@section('js')
    {{-- JS SCRIPTS --}}
@stop


@section('main')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-text-content">
                    {{-- <h1>أوج للعقارات</h1> --}}
                    <img src="{{ asset('img/awg-'.$lang.'.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000">
                    <div data-aos="zoom-in" data-aos-duration="1000">
                        <p>{{ $data['desc_header_' . $lang] }}</p>
                    </div>

                </div>
                <div class="col-md-6 hero-image-content">
                    <img src="{{ asset('img/hero-image.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000">
                </div>
            </div>
        </div>
        <img src="{{ asset('img/group.png') }}" alt="" id="group">
        <span id="header_style"></span>
        <span id="header_style_gray"></span>
    </section>
    <section class="message-vision">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image-content">
                    <img src="{{ asset('img/vision-message.png') }}" alt="">
                </div>
                <div class="col-md-6 text-content">
                    <div class="our-vision" data-aos="fade-up" data-aos-duration="1000">
                        <div class="top-marks quotation-marks">
                            <img src="{{ asset('img/quotation-mark.png') }}" alt="">
                            <img src="{{ asset('img/quotation-mark.png') }}" alt="">
                        </div>
                        <h3>#{{ __('main-page.vision') }}</h3>
                        <p>
                            {{ $data['royaa_desc_' . $lang] }}
                        </p>
                        <div class="bottom-marks quotation-marks">
                            <img src="{{ asset('img/quotation-mark.png') }}" alt="">
                            <img src="{{ asset('img/quotation-mark.png') }}" alt="">
                        </div>
                    </div>
                    <div class="our-message" data-aos="fade-down" data-aos-duration="1000">
                        <div class="top-marks quotation-marks">
                            <img src="{{ asset('img/quotation-mark.png') }}" alt="">
                            <img src="{{ asset('img/quotation-mark.png') }}" alt="">
                        </div>
                        <h3>#{{ __('main-page.message') }}</h3>
                        <p>
                            {{ $data['message_des_' . $lang] }}
                        </p>
                        <div class="bottom-marks quotation-marks">
                            <img src="{{ asset('img/quotation-mark.png') }}" alt="">
                            <img src="{{ asset('img/quotation-mark.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="goals">
        <div class="container">
            <h2 class="goals-title">{{ __('main-page.goals') }}</h2>
            <div class="goals-content">


                @foreach ($goals as $item)
                    <div class="goal" data-aos="zoom-out" data-aos-duration="1000">
                        <div class="icon">
                            <img src="{{ Voyager::image($item->image) }}">
                        </div>
                        <p>
                            {{ $item['goal_' . $lang] }}
                        </p>
                    </div>
                @endforeach



            </div>
        </div>

    </section>
    <section class="our-services">
        <h2 data-aos="fade-up" data-aos-duration="1000">{{ __('main-page.services') }}</h2>
        <div class="services-description" data-aos="zoom-in" data-aos-duration="1500">
            <p>
                {{ $data['service_des_' . $lang] }}

            </p>
        </div>

        <div class="services-images">
            <div class="service" data-aos="zoom-in" data-aos-duration="500">
                <span class="service-title">{{ __('main-page.service1') }}</span>
                <img src="{{ asset('img/service1.png') }}" alt="">
            </div>
            <div class="service" data-aos="zoom-in" data-aos-duration="1000">
                <span class="service-title">{{ __('main-page.service2') }}</span>
                <img src="{{ asset('img/service2.png') }}" alt="">
            </div>
            <div class="service" data-aos="zoom-in" data-aos-duration="1500">
                <span class="service-title">{{ __('main-page.service3') }}</span>
                <img src="{{ asset('img/service3.png') }}" alt="">
            </div>
            <div class="service" data-aos="zoom-in" data-aos-duration="2000">
                <span class="service-title">{{ __('main-page.service4') }}</span>

                <img src="{{ asset('img/service4.png') }}" alt="">
            </div>
        </div>
    </section>
    {{-- Success Partners --}}
    <section class="success-partners" data-aos="fade-up" data-aos-duration="1000">
        <h2> {{ __('main-page.success') }}</h2>
        <div class="success-partners-imgaes">
            @foreach ($success as $item)
                <img src="{{ Voyager::image($item->image) }}" alt="{{ $item['name_' . $lang] }}">
            @endforeach
        </div>
    </section>
    @include('layouts.form')
@stop
