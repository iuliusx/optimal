@extends('layouts.layout', ['title'=>"Uk building company"])

@section('content')
<main class="page-header-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="title-hr"></div>
            </div>
            <div class="col-md-8 col-lg-6"><h1>Enjoy Coffee With Us</h1></div>
        </div>
    </div>
</main>

<div class="content">
    <div id="map" class="map"></div>
    <div class="page-inner">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-info">
                            <div class="title-hr"></div>
                            <div class="info-title">Keep in touch</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row-contact row">
                            <div class="col-contact col-lg-6">
                                <h3 class="contact-title contact-top">London, <span>United Kingdom</span></h3>
                                <p class="contact-address text-muted"><strong>16 Swallow Close, Chafford Hundred, Grays, RM16 6RH.</strong></p>
                                <p class="contact-row"><strong class="text-dark">Email:</strong> info@optimalbuilders.co.uk</p>
                                <p class="contact-row"><strong class="text-dark">Whatsapp:</strong>  (+44) 790 40 27 817</p>
                            </div>
                            <div class="col-contact col-lg-6">
                                <p class="contact-top"><strong class="text-muted">Call directly:</strong></p>
                                <p class="phone-lg text-dark"> (+44) 790 40 27 817</p>
                                <p class="text-muted"><strong class="text-dark">Work Hours</strong><br>
                                    Monday - Friday : 08h00 - 17h30<br>
                                    Saturday: 08h00 - 12h00, Sunday off work</p>
                                <div class="text-muted"><strong class="text-dark">Follow us</strong><br>
                                    <div class="contact-social social-list">
                                        <a href="" class="icon ion-social-twitter"></a>
                                        <a href="" class="icon ion-social-facebook"></a>
                                        <a href="" class="icon ion-social-googleplus"></a>
                                        <a href="" class="icon ion-social-linkedin"></a>
                                        <a href="" class="icon ion-social-dribbble-outline"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-message section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-info">
                            <div class="title-hr"></div>
                            <div class="info-title">You need help</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="js-form">
                            <div class="row">
                                <div class="form-group col-sm-6 col-lg-4">
                                    <input class="input-gray" type="text" name="name" required placeholder="Name*">
                                </div>
                                <div class="form-group col-sm-6 col-lg-4">
                                    <input class="input-gray" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-sm-12 col-lg-4">
                                    <input class="input-gray" type="text" name="subject" placeholder="Subject (Optinal)">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea class="input-gray" name="message"  required  placeholder="Message*"></textarea>
                                </div>
                                <div class="col-sm-12"><button type="submit" class="btn-upper btn-yellow btn">Send Message</button></div>
                            </div>
                            <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                            <div class="error-message">We're sorry, but something went wrong</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
