@extends('app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-style.css') }}">
@stop
@section('main')
{{-- Hero --}}
    <section class="hero">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>

@stop
