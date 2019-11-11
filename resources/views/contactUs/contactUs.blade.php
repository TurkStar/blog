@extends('layouts.app')
@section('content')

    <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark">
        <div class="container">
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title">Love to Hear From You</h1>
                </div>
            </div>
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                        literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                        College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                        and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum
                        comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                        Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
                        1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original
                        form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

                    <div class="find-widget">
                        Company:  <a href="https://hostriver.ro">HostRiver</a>
                    </div>
                    <div class="find-widget">
                        Address: <a href="#">4435 Berkshire Circle Knoxville</a>
                    </div>
                    <div class="find-widget">
                        Phone:  <a href="#">+ 879-890-9767</a>
                    </div>

                    <div class="find-widget">
                        Website:  <a href="https://uny.ro">www.uny.ro</a>
                    </div>
                    <div class="find-widget">
                        Program: <a href="#">Mon to Sat: 09:30 AM - 10.30 PM</a>
                    </div>
                </div>
                <!-- contact form -->
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                    <form action="/contactUs" class="shake" role="form" method="POST" id="contactForm" name="contact-form" data-toggle="validator">
                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            <div>{{ $errors->first('name') }}</div>
                        </div>
                        <!-- email -->
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                            <div>{{ $errors->first('email') }}</div>
                        </div>
                        <!-- Subject -->
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" class="form-control">
                            <div>{{ $errors->first('subject') }}</div>
                        </div>
                        <!-- Message -->
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control">
                            {{ old('message') }}
                            </textarea>
                            <div>{{ $errors->first('message') }}</div>
                        </div>
                        <!-- Form Submit -->

                            @csrf
                        <button class="btn btn-primary" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>


                    </form>
                </div>
            </div>
        </div>

@endsection
