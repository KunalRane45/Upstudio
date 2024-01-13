<?php include('header.php'); ?>

 <section class="pages-title-area contact-title-page">
            <!-- pages title -->
            <div class="slider-table">
                <div class="slider-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2>Find <span>us</span></h2>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.pages title -->

            
        <!-- ======= Page Title Area End ======= -->

        <!-- ======= Contact Area Start ======= -->
        <section class="contact-area bg-trans contact-page-area">
            

            <!-- map area-->
            <div class="google-map-area">
                <!-- map -->
                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.5114820744498!2d72.88572711421283!3d19.085204656644205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c78cf532c1ad%3A0x7f3adcca8ee3e06f!2sPhoenix%20Paragon%20Plaza!5e0!3m2!1sen!2sin!4v1646822980047!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                <!-- /.map -->
                <div class="address">
                    
                    <!-- heading -->
                    <div class="heading">
                        <h2>contact info</h2>
                    </div>
                    <!-- /.heading -->
                    <div class="address-info">
                        <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"> </i>  (+91) 98203 05770</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>022 46016904</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>Mujib@upstudiodesign.co.in/ Design@upstudiodesign.co.in</li>
                            <li><i class="fa fa-home" aria-hidden="true"></i><span>2B-19,2nd Floor, Phoenix Paragaon Plaza,Phoenix Marketcity Kurla,LBS road Kurla west Mumbai-400070.</span></li>
                        </ul>
                        <div class="share">
                            <a href="https://www.facebook.com/upstudiodesign.co.in" target="_blank"><i class="fab fa-instagram" ></i></a>
                                <a href="https://www.instagram.com/upstudiodesign2019/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/company/upstudiodesign2019" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://in.pinterest.com/upstudiodesign/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.youtube.com/channel/UC33AtT8bn67f7uTOfJ6Rnpw" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.map area -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!-- heading -->
                        <div class="heading text-center contact-heading">
                            <h2><span>Get In Touch</span></h2>
                        </div>
                        <!-- /.heading -->
                        <div class="contact-form bg-trans">
                            <form id="contact-form" action="action.php" method="post" role="form">
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder=" Email*" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <input id="form_phone" type="text" name="phone" class="form-control" placeholder="phone*" required="required" data-error="Phone number is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <input id="form_subject" type="subject" name="subject" class="form-control" placeholder="subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <!-- <textarea class="form-control" name="message" data-gramm="true" spellcheck="false" data-gramm_editor="true" placeholder="Message" required="required"></textarea> -->
                                            <textarea id="form_message" name="msg" class="form-control" data-gramm="true" spellcheck="false" data-gramm_editor="true" placeholder="Message for me *" required data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <input type="submit" class="btn btn-success btn-send" name="submit" value="Send message">
                                        <!-- <input type="submit" class="btn btn-success btn-send" value="Send message"> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

<?php include('footer.php'); ?>