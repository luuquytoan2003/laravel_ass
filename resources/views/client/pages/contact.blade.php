@extends('client.layout')
@section('content')
    <main>

         <!-- breadcrumb area start -->
         @include('client.component.breadcrumb')
         <!-- breadcrumb area end -->


         <!-- contact area start -->
         <section class="tp-contact-area pb-100">
            <div class="container">
               <div class="tp-contact-inner">
                  <div class="row">
                     <div class="col-xl-9 col-lg-8">
                        <div class="tp-contact-wrapper">
                           <h3 class="tp-contact-title">Sent A Message</h3>

                           <div class="tp-contact-form">
                              <form id="contact-form" action="https://html.hixstudio.net/shofy-prv/shofy/assets/mail.php" method="POST">
                                 <div class="tp-contact-input-wrapper">
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="name" id="name" type="text" placeholder="Shahnewaz Sakil">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="name">Your Name</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="email" id="email" type="email" placeholder="shofy@mail.com">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="email">Your Email</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="subject" id="subject" type="text" placeholder="Write your subject">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="subject">Subject</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                         <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="message">Your Message</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-contact-suggetions mb-20">
                                    <div class="tp-contact-remeber">
                                       <input id="remeber" type="checkbox">
                                       <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                 </div>
                                 <div class="tp-contact-btn">
                                    <button type="submit">Send Message</button>
                                 </div>
                              </form>
                              <p class="ajax-response"></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4">
                        <div class="tp-contact-info-wrapper">
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-1.png" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <p data-info="mail"><a href="mailto:contact@shofy.com">contact@shofy.com</a></p>
                                 <p data-info="phone"><a href="tel:670-413-90-762">+670 413 90 762</a></p>
                              </div>
                           </div>
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-2.png" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <p>
                                    <a href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.6976637,-74.1197638,11z/data=!3m1!4b1!4m6!3m5!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728!16zL20vMDJfMjg2" target="_blank">
                                       84 sleepy hollow st. <br> jamaica, New York 1432
                                    </a>
                                 </p>
                              </div>
                           </div>
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-3.png" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <div class="tp-contact-social-wrapper mt-5">
                                    <h4 class="tp-contact-social-title">Find on social media</h4>

                                    <div class="tp-contact-social-icon">
                                       <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                       <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                       <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->

         <!-- map area start -->
         <section class="tp-map-area pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-map-wrapper">
                        <div class="tp-map-hotspot">
                           <span class="tp-hotspot tp-pulse-border">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="6" cy="6" r="6" fill="#821F40"/>
                              </svg>
                           </span>
                        </div>
                        <div class="tp-map-iframe">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830894612!2d-74.11976383964465!3d40.69766374865766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1678114595329!5m2!1sen!2sbd"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- map area end -->

      </main>
@endsection