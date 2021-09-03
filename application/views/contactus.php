<section class="page-title section-big">
    <div class="container">
        <h2>Contact Us</h2>
        <p><a href="<?php echo base_url(); ?>">Home</a> / Contact Us</p>
    </div>
</section>
<section id="contact" class="contact-area section-big">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="br-bottom">Get in Touch</h3>
                <p>Want to know more about our products and solutions? Please fill up the contact us form and we will get back to you within 24 hours.</p>
                <br>
                <h3 class="br-bottom">Office Location - 1</h3>
                <div class="address-box clearfix">
                    <i class="fa fa-map-marker"></i>
                    <p><?php echo $address1; ?></p>
                </div>
                <div class="address-box clearfix">
                    <i class="fa fa-send"></i>
                    <p><?php echo $emailadd1; ?></p>
                </div>

                <br>

                <h3 class="br-bottom">Office Location - 2</h3>
                <div class="address-box clearfix">
                    <i class="fa fa-map-marker"></i>
                    <p><?php echo $address2; ?></p>
                </div>
                <div class="address-box clearfix">
                    <i class="fa fa-send"></i>
                    <p><?php echo $emailadd2; ?></p>
                </div>

                <br>

                <h3 class="br-bottom">Office Location - 3</h3>
                <div class="address-box clearfix">
                    <i class="fa fa-map-marker"></i>
                    <p><?php echo $address3; ?></p>
                </div>

                <div class="address-box clearfix">
                    <i class="fa fa-send"></i>
                    <p><?php echo $emailadd3; ?></p>
                </div>
                <br>
                <h3 class="br-bottom">Business Hours</h3>
                <div class="address-box clearfix">
                    <i class="fa fa-clock-o"></i>
                    <p>Monday - Saturday 9:30am to 6:00pm</p>
                </div>
                <div class="address-box clearfix">
                    <i class="fa fa-clock-o"></i>
                    <p>Sunday - Closed</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form">
                    <h3 class="br-bottom">Contact Us</h3>
                    <form id="contactusForm" name="contactusForm" method="post">
                        <input type="text" name="name" class="form-control" id="txtname" placeholder="Name*">
                        <input type="number" name="mobileno" class="form-control" id="txtmobileno" placeholder="Phone Number*">
                        <input type="email" name="email" class="form-control" id="txtemail" placeholder="Email*">
                        <input type="text" name="subject" class="form-control" id="txtsubject" placeholder="Subject*">
                        <textarea rows="5" name="message" class="form-control" id="txtmessage" placeholder="Message*"></textarea>
                        <div class="g-recaptcha" data-sitekey="6Lf7Yj4UAAAAAEvR5_YSefMWje0njp2wUndywcdA"></div>
                        <div class="actions mtop">
                            <input type="submit" value="Send" name="submit" id="contactSubmit" class="btn" title="Submit Your Message!">
                        </div>
                    </form>
                    <div id="form-messages"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="gmap-area">
    <div id="map" style="height: 400px; width: 100%;">
    </div>
