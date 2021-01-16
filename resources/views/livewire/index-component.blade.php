<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="{{ asset('assets/img/devs-team.jpeg') }}" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About Us</h2>
              <h3>Team of Computer Scientist with different area of specialization</h3>
              <p>Devhood is a tech conglomerates that are purpose driven with the aim of helping and assisting brands and cooperate organizations to be digitally, globally recognized and attainable.</p>
              <p>This cohort of tech personnels believe that the world is moving and will soon launch herself into the computing age and everything will have to be done digitally.</p>
              <p>Devhood is saddled with experts in</p>
              <ul>
                <li><i class="ion-android-checkmark-circle" style="color: #D1BC00"></i> Software development</li>
                <li><i class="ion-android-checkmark-circle" style="color: #D1BC00"></i> Website Development & Design</li>
                <li><i class="ion-android-checkmark-circle" style="color: #D1BC00"></i> UI/UX Design </li>
                <li><i class="ion-android-checkmark-circle" style="color: #D1BC00"></i> Graphics Design </li>
                <li><i class="ion-android-checkmark-circle" style="color: #D1BC00"></i> Networking (CCNA, Microsoft Servers e.t.c) </li>
                <li><i class="ion-android-checkmark-circle" style="color: #D1BC00"></i> Ethical Hacking & Pen testing </li>
                <li><i class="ion-android-checkmark-circle" style="color: #D1BC00"></i>  Digital Marketing & SEO (Search Engine Optimization) </li>
              </ul>
              <p>We focus on your goals and dreams and diligently help you to achieve them all. Our experts are well experienced and are well trained to best handle your short term and long term projects. This is what Devhood is called to be.</p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-webapp">Web App</li>
              <li data-filter=".filter-graphics">Graphics & MockUp</li>
              <li data-filter=".filter-UI">UI/UX</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-webapp">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/Voters-Login.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">E-vote User login UI</a></h4>
                <p>Web App</p>
                <div>
                  <a href="{{ asset('assets/img/portfolio/Voters-Login.png') }}" data-lightbox="portfolio" data-title="E-vote login" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="http://oouevote.herokuapp.com" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-webapp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/Send-OTP-E-vote.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">E-vote Request OTP</a></h4>
                <p>Web App</p>
                <div>
                  <a href="{{ asset('assets/img/portfolio/Send-OTP-E-vote.png') }}" class="link-preview" data-lightbox="portfolio" data-title="E-vote Request OTP" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="http://oouevote.herokuapp.com" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-webapp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/OTP-E-vote.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">E-vote Enter OTP</a></h4>
                <p>Web App</p>
                <div>
                  <a href="{{ asset('assets/img/portfolio/OTP-E-vote.png') }}" class="link-preview" data-lightbox="portfolio" data-title="E-vote Enter OTP" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="http://oouevote.herokuapp.com" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-webapp">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/Active-Election-E-vote.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">E-vote Active Elections</a></h4>
                <p>Web App</p>
                <div>
                  <a href="{{ asset('assets/img/portfolio/Active-Election-E-vote.png') }}" class="link-preview" data-lightbox="portfolio" data-title="E-vote Active Elections" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="http://oouevote.herokuapp.com" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UI" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/Hifi-SMS-Teacher.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">School Management System</a></h4>
                <p>UI design</p>
                <div>
                  <a href="{{ asset('assets/img/portfolio/Hifi-SMS-Teacher.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="SMS UI" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UI" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/Hfi-SMS-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">School Management System</a></h4>
                <p>UI design</p>
                <div>
                  <a href="{{ asset('assets/img/portfolio/Hfi-SMS-1.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="SMS UI" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/devs-hood.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Logo</a></h4>
                <p>Graphics Design</p>
                <div>
                  <a href="{{ asset('assets/img/devs-hood.png') }}" class="link-preview" data-lightbox="portfolio" data-title="Graphics design" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/devshood-mockUp.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Logo MockUp</a></h4>
                <p>MockUp</p>
                <div>
                  <a href="{{ asset('assets/img/portfolio/devshood-mockUp.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="MockUp" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/devshood-hoodie.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Logo MockUp</a></h4>
                <p>MockUp</p>
                <div>
                  <a href="{{ asset('assets/img/portfolio/devshood-hoodie.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="MockUp" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="team-header">
          <h3>Team</h3>
          <p>We at DevsHood Would Like to introduce you to every one on the team</p>
        </div>

        <div class="row">

          <!-- Lanre -->
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{ asset('assets/img/lanre-devshood.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ezeche Lanre</h4>
                  <span>Software Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/lanre_sam"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-globe"></i></a>
                    <a href="https://github.com/LanreSam"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/ezeche-lanre/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Ay -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{ asset('assets/img/Ay-devshood.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ajayi Ayobami</h4>
                  <span>UI/UX Designer & UI developer</span>
                  <div class="social">
                    <a href="https://twitter.com/tumise100"><i class="fa fa-twitter"></i></a>
                    <a href="https://dribbble.com/tumise100"><i class="fa fa-dribbble"></i></a>
                    <a href="https://www.github.com/tumise100"><i class="fa fa-github"></i></a>
                    <a href="https://instagram.com/tumise100"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- samuel -->
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{ asset('assets/img/samuel-devshood.jpeg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Olalekan Samuel Lawal</h4>
                  <span>Web & Graphics Design</span>
                  <div class="social">
                    <a href="https://www.facebook.com/photo.php?fbid=1119253914918005&set=a.106484966194910&type=3"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/olalekan-lawal-7368b6202"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Dayo -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{ asset('assets/img/Dayo-Devshood.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Agbato Ifadayo</h4>
                  <span>Web Designer</span>
                  <div class="social">
                    <a href="https://www.twitter.com/agbato_dayo"><i class="fa fa-twitter"></i></a>
                    <a href="mailto:dayoagbato@gmail.com"><i class="fa fa-at"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- David -->
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{ asset('assets/img/david-devshood.jpeg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Oyekanmi David</h4>
                  <span>Fullstack Django - React Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/KingDavid_ace"><i class="fa fa-twitter"></i></a>
                    <a href="https://github.com/Dave-Ace"><i class="fa fa-github"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Ibrahim -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/Ibrahim-devshood.jpeg')  }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Olatoye Ibrahim</h4>
                  <span>Network Administrator || Ethical Hacking</span>
                  <div class="social">
                    <a href="https://www.twitter.com/dhare_toye"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/Olly.Ib"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/_cyberteck/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/olatoye-ibrahim-eniola-87567619b"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Ladi -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/Ladi-devshood.jpeg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Babayemi Oladipupo</h4>
                  <span>backend Developer</span>
                  <div class="social">
                    <a href="https://www.twitter.com/diptech_"><i class="fa fa-twitter"></i></a>
                    <a href="https://github.com/Diptech-hub"><i class="fa fa-github"></i></a>
                    <a href="http://linkedin.com/in/babayemi-oladipupo-698820189"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Kelvin -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/kelvin-devshood.jpeg')   }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Joe Kelvin</h4>
                  <span>Network Administrator & Graphics Designer</span>
                  <div class="social">
                    <a href="https://wa.link/5ke0ei"><i class="fa fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/kasai.kelvinie"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/Kasaijoe55"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/joe-kasai-a658531aa"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Tomi -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/tomi-devshood.jpeg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Okeowo Oluwatomi</h4>
                  <span>Front End developer</span>
                  <div class="social">
                    <a href="https://twitter.com/0luwat0mi?s=08"><i class="fa fa-twitter"></i></a>
                    <a href="https://github.com/Oluwat0mi"><i class="fa fa-github"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Ganiu -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/ganiu-devshood.jpeg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ganiu Adeniyi (Gantech)</h4>
                  <span>Wordpress developer & SEO Expert</span>
                  <div class="social">
                    <a href="https://wa.me/message/DG7W7RCFVSWXO1"><i class="fa fa-whatsapp"></i></a>
                    <a href="https://web.facebook.com/gantechnetworks"><i class="fa fa-facebook"></i></a>
                    <a href="https://wa.me/message/DG7W7RCFVSWXO1"><i class="fa fa-telegram"></i></a>
                    <a href="https://Gantech.com.ng"><i class="fa fa-globe"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Osijo -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/osijo-devshood.jpeg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Osijo Emamnuel</h4>
                  <span>Wordpress Developer || Content Writer</span>
                  <div class="social">
                    <a href="https://web.facebook.com/osijoemmanuel"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/osijoemmanuel/"><i class="fa fa-instagram"></i></a>
                    <a href="tel: +234 909 124 2009"><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Bola -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/bola-devshood.jpeg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bolarinwa Ogunbamowa</h4>
                  <span>Networking & Wordpress</span>
                  <div class="social">
                    <a href="tel: +234 806 787 3303"><i class="fa fa-phone"></i></a>
                    <a href="https://www.linkedin.com/mwlite/in/bolarinwa-ogunbamowo-ba59a8202"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Clinton -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/clinton-devshood.jpeg')  }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Odufuwa Clinton</h4>
                  <span>Python Developer</span>
                  <div class="social">
                    <a href="tel: +234 905 734 2812"><i class="fa fa-phone"></i></a>
                    <a href="Https://github.com/Ceejay16042"><i class="fa fa-github"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Ayomide -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/Ayomide-devshood.jpeg')  }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Obadare Ayomide</h4>
                  <span>Wordpress Developer</span>
                  <div class="social">
                    <a href="tel:+234 815 754 9848"><i class="fa fa-phone"></i></a>
                    <a href="https://www.linkedin.com/in/obadare-joshua-042041203"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Solomon -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('assets/img/solomon-devshood.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Odebisi Solomon</h4>
                  <span>Full Stack Developer</span>
                  <div class="social">
                    <a href="tel:+234 701 948 1634"><i class="fa fa-phone"></i></a>
                    <a href="https://www.linkedin.com/in/odebisi-solomon-9b44591b1"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

  </main>
