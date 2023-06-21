<?= $this->extend('layouts/home') ?>


<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <div class="talk-content text-center">
                <div class="section-title text-center">
                    <span class="sp-color1">Let's Talk</span>
                    <h3><?= $title ?></h3>
                </div>
                <a href="https://wa.me/+6281211855713" class="default-btn btn-bg-two border-radius-5">Klik Di sini</a>
                <!-- <ul>
                    <li>
                        <a href="/">Beranda</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li><?= $title ?></li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="inner-shape">
        <img src="/assets-techex-demo/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<div class="contact-form-area pt-100 pb-70">
    <div class="container">
        <!-- <div class="section-title text-center">
            <h2>Let's Send Us a Message Below</h2>
        </div> -->
        <!-- <div class="row pt-45"> -->
        <!-- <div class="col-lg-4">
                <div class="contact-info mr-20">
                    <span>Info Kontak</span>
                    <h2>Hubungi kami</h2>
                    <p>Universitas Telkom atau Telkom University adalah sebuah perguruan tinggi swasta yang terletak di Bandung, Jawa Barat.</p>
                    <ul>
                        <li>
                            <div class="content">
                                <i class='bx bx-phone-call'></i>
                                <h3>Nomor Telepon</h3>
                                <a href="tel:(022) 7564108">(022) 7564108</a>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='bx bxs-map'></i>
                                <h3>Alamat</h3>
                                <span>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</span>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='bx bx-message'></i>
                                <h3>Kontak Info</h3>
                                <a href="https://telkomuniversity.ac.id" target="_blank"><span class="__cf_email__" data-cfemail="761e131a1a19360213151e130e5815191b">telkomuniversity.ac.id</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Email <span>*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Subject <span>*</span></label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">
                                        Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                    Send Message <i class='bx bx-chevron-right'></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
        <!-- </div> -->
    </div>
</div>


<!-- <div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50194.82376159623!2d-79.09792989247224!3d38.159337740034566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b4a08eb8621697%3A0xe5d6e4710a09b66e!2sStaunton%2C%20VA%2024401%2C%20USA!5e0!3m2!1sen!2sbd!4v1607173226867!5m2!1sen!2sbd"></iframe>
    </div>
</div> -->

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>