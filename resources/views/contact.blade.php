@extends('app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-style.css') }}">
@stop
@section('main')
          {{-- Contact --}}
          <section class="contact-form" id="contact_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 map"  data-aos="zoom-in" data-aos-duration="1000">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14500.067433669716!2d46.6826688!3d24.6919472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9bb82f20e03be9e9!2sHamad%20Tower!5e0!3m2!1sen!2s!4v1665963428398!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-5 form"  data-aos="zoom-out" data-aos-duration="1000">
                        <h2>Contact us</h2>
                        <p>We are here for you.You can always contact us by filling the contact form</p>
                        <form action="#">
                            <input type="text" name="name" id="name" placeholder="Full Name">
                            <input type="email" name="email" id="email" placeholder="Email">
                            <input type="number" name="space" id="space" placeholder="space">
                            <select name="type" id="">
                                <option value="residential">residential</option>
                                <option value="commercial">commercial</option>
                            </select>
                            <input type="number" name="phone" id="number" placeholder="phone">
                            <input type="text" name="Notes" id="Notes" placeholder="Notes">
                            <input type="submit" name="submit" id="submit" value="Send">

                        </form>
                    </div>
                </div>
            </div>
        </section>
@stop
