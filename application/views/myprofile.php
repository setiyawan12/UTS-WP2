<!--==========================================
                  PRE-LOADER
===========================================-->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="box-holder animated bounceInDown">
                    <span class="load-box"><span class="box-inner"></span></span>
                </div>
                <!-- NAME & STATUS -->
                <div class="text-holder text-center">
                    <h2>Yayang Setiyawan</h2>
                    <h6>Software Engineer & Freelancer</h6>
                </div>
            </div>
        </div>
    </div>

    <!--==========================================
                    HEADER
===========================================-->
    <header id="home">
        <nav id="theMenu" class="menu">

            <!--MENU-->
            <div id="menu-options" class="menu-wrap">

                <!--PERSONAL LOGO-->
                <div class="logo-flat">
                    <img alt="personal-logo" class="img-responsive" src="<?php base_url()?>assets/flatrica/images/1.png">
                </div>
                <br>

                <!--OPTIONS-->
                <a href="#home"><i class="title-icon fa fa-user"></i>Home</a>
                <a href="#education"><i class="title-icon fa fa-graduation-cap"></i>Pendidkan</a>
                <a href="#skills"><i class="title-icon fa fa-sliders"></i>Skills</a>
                <a href="#experience"><i class="title-icon fa fa-suitcase"></i>Pengalaman</a>
                <a href="#portfolios"><i class="title-icon fa fa-archive"></i>Portfolios</a>
                <a href="#interest"><i class="title-icon fa fa-heart"></i>Interest</a>
                <a href="#blog"><i class="title-icon fa fa-pencil-square"></i>Blog</a>
                <a href="#contact"><i class="title-icon fa fa-envelope"></i>Contact</a>
                <a href="<?= base_url('Anggota');?>"><i class="fas fa-arrow-left"></i>Back</a>
            </div>

            <!-- MENU BUTTON -->
                <div class="toggle-normal">
            <div id="menuToggle">
                    <i class="material-icons top-bar">remove</i>
                    <i class="material-icons middle-bar">remove</i>
                    <i class="material-icons bottom-bar">remove</i>
                </div>
            </div>
        </nav>

        <!--HEADER BACKGROUND-->
        <div class="header-background section"></div>

    </header>


    <!--==========================================
                   V-CARD
    <div id="v-card-holder" class="section">
===========================================-->
<div id="v-card-holder" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <!-- V-CARD -->
                    <div id="v-card" class="card">

                        <!-- PROFILE PICTURE -->
                        <div id="profile" class="right">
                            <img alt="profile-image" class="img-responsive" src="<?php base_url()?>assets/flatrica/images/profile.jpg">
                            <div class="slant"></div>

                            <div class="btn-floating btn-large add-btn"><i class="material-icons">add</i></div>
                        </div>
                        <div class="card-content">
                            <div class="info-headings">
                                <h4 class="text-uppercase left">Yayang Setiyawan</h4>
                                <h6 class="text-capitalize left">Software Engineer & UI/UX Expert</h6>
                            </div>

                            <!-- CONTACT INFO -->
                            <div class="infos">
                                <ul class="profile-list">
                                    <li class="clearfix">
                                        <span class="title"><i class="material-icons">email</i></span>
                                        <span class="content">yayangsetiyawan0@gmail.com</span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="title"><i class="material-icons">language</i></span>
                                        <span class="content">yayangsetiyawan.com</span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="title"><i class="fa fa-github" aria-hidden="true"></i></span>
                                        <span class="content">setiyawan12</span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="title"><i class="material-icons">phone</i></span>
                                        <span class="content">+152 25634 254 846</span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="title"><i class="material-icons">place</i></span>
                                        <span class="content">Jl.Projosumarto-02</span>
                                    </li>

                                </ul>
                            </div>

                            <!--LINKS-->
                            <div class="links">
                                <!-- FACEBOOK-->
                                <a href="#" id="first_one" class="social btn-floating indigo"><i
                                        class="fa fa-facebook"></i></a>
                                <!-- TWITTER-->
                                <a href="#" class="social  btn-floating blue"><i class="fa fa-twitter"></i></a>
                                <!-- GOOGLE+-->
                                <a href="#" class="social  btn-floating red"><i class="fa fa-google-plus"></i></a>
                                <!-- LINKEDIN-->
                                <a href="#" class="social  btn-floating blue darken-3"><i
                                        class="fa fa-linkedin"></i></a>
                                <!-- RSS-->
                                <a href="#" class="social  btn-floating orange darken-3"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <!--==========================================
                   EDUCATION
===========================================-->
    <section id="education" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><img src="<?php base_url()?>assets/flatrica/images/icons/book.png" alt="demo">Pendidikan</h4>
            </div>

            <div id="timeline-education">

                <!-- FIRST TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot">
                        <h6>P</h6>
                    </div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">Pendidikan Persiapan</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>SD Negeri 02 Mindaka</small>
                                </h6>
                                <h6>
                                    <small>Jan 1997 - Mar 2000</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                            Saya menyelesaikan pendidikan persiapan saya dari institusi bergengsi ini. Saya berhasil menyelesaikan semua kredit tanpa ada kejatuhan dan mendapat nilai A.
                            </p>
                            <!-- BUTTON TRIGGER MODAL -->
                            <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-1">
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SECOND TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot">
                        <h6>S</h6>
                    </div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">SMP</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>RedStreet College</small>
                                </h6>
                                <h6>
                                    <small>Jan 2000 - Mar 2005</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                            menyelesaikan gelar sekolah menengah saya dari institusi bergengsi ini. Saya berhasil menyelesaikan sebagian peraturan dan mendapat nilai B secara keseluruhan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- THIRD TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot">
                        <h6>S</h6>
                    </div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">SMA</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>Down Street College</small>
                                </h6>
                                <h6>
                                    <small>Jan 2006 - Mar 2008</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                            menyelesaikan gelar sekolah menengah saya dari institusi bergengsi ini. Saya berhasil menyelesaikan sebagian peraturan dan mendapat nilai B secara keseluruhan.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- FOURTH TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot">
                    <h6>C</h6>
                    <i class="fa fa-graduation-cap"></i></div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">College</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>Oxford University</small>
                                </h6>
                                <h6>
                                    <small>Jan 2009 - Mar 2010</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                                I completed this degree from this prestigious institution.
                                I successful completed all the credits without any fallout and got A grade overall.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==========================================
                   SKILLS
===========================================-->
    <section id="skills" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><img src="<?php base_url()?>assets/flatrica/images/icons/mixer.png" alt="demo">Skills</h4>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="skills-card" class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <!-- FIRST SKILL SECTION -->
                                    <div class="skills-title">
                                        <h6 class="text-center">Professional</h6>
                                    </div>
                                    <!-- FIRST SKILL BAR -->
                                    <div class="skillbar" data-percent="90%">
                                        <div class="skillbar-title"><span>PYTHON</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">90%</div>
                                    </div>
                                    <!-- SECOND SKILL BAR  -->
                                    <div class="skillbar" data-percent="90%">
                                        <div class="skillbar-title"><span>KOTLIN</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">90%</div>
                                    </div>
                                    <!-- THIRD SKILL BAR  -->
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title"><span>HTML</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                    <!-- FOURTH SKILL BAR  -->
                                    <div class="skillbar" data-percent="68%">
                                        <div class="skillbar-title"><span>PHP</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">68%</div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <!-- SECOND SKILL SECTION -->
                                    <div class="skills-title">
                                        <h6 class="text-center">Personal</h6>
                                    </div>
                                    <!-- FIRST SKILL BAR -->
                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-title"><span>Communication</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                    <!-- SECOND SKILL BAR  -->
                                    <div class="skillbar" data-percent="60%">
                                        <div class="skillbar-title"><span>Teamwork</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">60%</div>
                                    </div>
                                    <!-- THIRD SKILL BAR  -->
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title"><span>Creativity</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                    <!-- FOURTH SKILL BAR  -->
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title"><span>Dedication</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <!-- THIRD SKILL SECTION -->
                                    <div class="skills-title">
                                        <h6 class="text-center">Software</h6>
                                    </div>
                                    <!-- FIRST SKILL BAR -->
                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-title"><span>Android Studio</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                    <!-- SECOND SKILL BAR  -->
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title"><span>Intelij Idea</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                    <!-- THIRD SKILL BAR  -->
                                    <div class="skillbar" data-percent="60%">
                                        <div class="skillbar-title"><span>Visual Studio COde</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">60%</div>
                                    </div>
                                    <!-- FOURTH SKILL BAR  -->
                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-title"><span>Dev Console</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==========================================
                   EXPERIENCE
===========================================-->
    <section id="experience" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><img src="<?php base_url()?>assets/flatrica/images/icons/layers.png" alt="demo">Pengalaman</h4>
            </div>

            <div id="timeline-experience">

                <!-- FIRST TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot">
                        <h6>D</h6>
                    </div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">Drag Race</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>RulerSoft</small>
                                </h6>
                                <h6>
                                    <small>Jan 2010 - Mar 2012</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                                I started my designing carrier here, spent tow years learning and working
                                in various designing aspects..
                            </p>
                            <!-- BUTTON TRIGGER MODAL -->
                            <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-4">
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SECOND TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot">
                        <h6>S</h6>
                    </div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">Seamolec</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>Micro IT</small>
                                </h6>
                                <h6>
                                    <small>Jan 2012 - Mar 2014</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                                I started my frontend carrier here, spent tow years learning and working
                                in various frontend aspects. I worked on about 40+ projects local and online.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- THIRD TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot">
                        <h6>U</h6>
                    </div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">Wiyata os</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>Libra IT Solutions</small>
                                </h6>
                                <h6>
                                    <small>Jan 2014 - Mar 2015</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                                I started my expertise carrier here, spent tow years learning and working
                                in various UX/UI aspects. I worked on about 70+ projects local and online.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- FOURTH TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot">
                        <h6>S</h6>
                    </div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">Senior Developer</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>WebStyle Technologies</small>
                                </h6>
                                <h6>
                                    <small>Jan 2016 - Continue..</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                                I recently joined here, currently working on various development
                                aspects. I already worked on about..
                            </p>
                            <!-- BUTTON TRIGGER MODAL -->
                            <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-5">
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================================
                  MODALS
===========================================-->
    <section>
        <!--MODAL ONE-->
        <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <!--MODAL HEADER-->
                    <div class="modal-header  text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h4 class="modal-title" id="myModalLabel-1">GRADUATION AT ASHTON UNI</h4>
                        <h6>
                            <small>Jan 2014 - Mar 2015</small>
                        </h6>
                    </div>
                    <!--MODAL BODY-->
                    <div class="modal-body">
                        <img class="img-responsive" alt="graduation" src="<?php base_url()?>assets/flatrica/images/timeline/demo-gra.jpg">
                        <p>
                            I have learned a great many things from participating in varsity football.
                            It has changed my entire outlook on and attitude toward life. Before my
                            freshman year at [high-school], I was shy, had low self-esteem and turned
                            away from seemingly impossible challenges. Football has altered all of these
                            qualities. On the first day of freshman practice, the team warmed up with a
                            game of touch football. The players were split up and the game began. However,
                            during the game, I noticed that I didn't run as hard as I could, nor did I try
                            to evade my defender and get open. The fact of the matter is that I really did
                            not want to be thrown the ball. I didn't want to be the one at fault if I dropped
                            the ball and the play didn't succeed. I did not want the responsibility of helping
                            the team because I was too afraid of making a mistake. That aspect of my character
                            led the first years of my high school life. All the while, I went to practice.
                        </p>
                    </div>
                    <!--MODAL FOOTER-->
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!--MODAL TWO-->
        <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <!--MODAL HEADER-->
                    <div class="modal-header  text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h4 class="modal-title" id="myModalLabel-2">EDUCATION AT Y</h4>
                        <h6>
                            <small>Jan 2014 - Mar 2015</small>
                        </h6>
                    </div>
                    <!--MODAL BODY-->
                    <div class="modal-body">
                        <p>
                            I have learned a great many things from participating in varsity football.
                            It has changed my entire outlook on and attitude toward life. Before my
                            freshman year at [high-school], I was shy, had low self-esteem and turned
                            away from seemingly impossible challenges. Football has altered all of these
                            qualities. On the first day of freshman practice, the team warmed up with a
                            game of touch football. The players were split up and the game began. However,
                        </p>
                    </div>
                    <!--MODAL FOOTER-->
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!--MODAL THREE-->
        <div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-3">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <!--MODAL HEADER-->
                    <div class="modal-header  text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h4 class="modal-title" id="myModalLabel-3">EDUCATION AT Z</h4>
                        <h6>
                            <small>Jan 2014 - Mar 2015</small>
                        </h6>
                    </div>
                    <!--MODAL BODY-->
                    <div class="modal-body">
                        <img class="img-responsive" alt="graduation" src="<?php base_url()?>assets/flatrica/images/timeline/demo-gra.jpg">
                        <p>
                            I have learned a great many things from participating in varsity football.
                            It has changed my entire outlook on and attitude toward life. Before my
                            freshman year at [high-school], I was shy, had low self-esteem and turned
                            away from seemingly impossible challenges. Football has altered all of these
                            qualities. On the first day of freshman practice, the team warmed up with a
                            game of touch football. The players were split up and the game began. However,
                        </p>
                    </div>
                    <!--MODAL FOOTER-->
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!--MODAL FOUR-->
        <div class="modal fade" id="myModal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-4">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <!--MODAL HEADER-->
                    <div class="modal-header  text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h4 class="modal-title" id="myModalLabel-4">EXPERIENCE AT Z</h4>
                        <h6>
                            <small>Jan 2014 - Mar 2015</small>
                        </h6>
                    </div>
                    <!--MODAL BODY-->
                    <div class="modal-body">
                        <p>
                            I have learned a great many things from participating in varsity football.
                            It has changed my entire outlook on and attitude toward life. Before my
                            freshman year at [high-school], I was shy, had low self-esteem and turned
                            away from seemingly impossible challenges. Football has altered all of these
                            qualities. On the first day of freshman practice, the team warmed up with a
                            game of touch football. The players were split up and the game began. However,
                        </p>
                    </div>
                    <!--MODAL FOOTER-->
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!--MODAL FIVE-->
        <div class="modal fade" id="myModal-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-5">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <!--MODAL HEADER-->
                    <div class="modal-header  text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h4 class="modal-title" id="myModalLabel-5">EXPERIENCE AT M</h4>
                        <h6>
                            <small>Jan 2014 - Mar 2015</small>
                        </h6>
                    </div>
                    <!--MODAL BODY-->
                    <div class="modal-body">
                        <p>
                            I have learned a great many things from participating in varsity football.
                            It has changed my entire outlook on and attitude toward life. Before my
                            freshman year at [high-school], I was shy, had low self-esteem and turned
                            away from seemingly impossible challenges. Football has altered all of these
                            qualities. On the first day of freshman practice, the team warmed up with a
                            game of touch football. The players were split up and the game began. However,
                        </p>
                    </div>
                    <!--MODAL FOOTER-->
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================================
                  PORTFOLIOS
===========================================-->
<section id="portfolios" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><img src="<?php base_url()?>assets/flatrica/images/icons/safe.png" alt="demo">Portfolios</h4>
            </div>
            <div id="portfolios-card" class="row">

                <!--OPTIONS-->
                <ul class="nav nav-tabs">
                    <!--ALL CATEGORIES-->
                    <li class="active waves-effect list-shuffle"><a id="all-sample" class="active" href="#all"
                            data-toggle="tab">ALL</a>
                        <!--CATEGORIES-->
                    <li class="waves-effect list-shuffle"><a class="cate" href="#a" data-toggle="tab">LOGO</a></li>
                    <li class="waves-effect list-shuffle"><a class="cate" href="#b" data-toggle="tab">DRIBBLE</a></li>
                    <li class="waves-effect list-shuffle"><a class="cate" href="#c" data-toggle="tab">WEBSITES</a></li>
                </ul>

                <!--CATEGORIES CONTENT-->
                <div class="tab-content">

                    <!--All CATEGORIES-->
                    <div id="all"></div>

                    <!--CATEGORY 1-->
                    <div id="a">

                        <!--CATEGORY CONTENT ONE BIG-->
                        <div class="col-md-4 col-sm-12 col-xs-12 grid big inLeft">
                            <figure class="port-effect-scale">
                                <img src="<?php base_url()?>assets/flatrica/images/profile.jpg" class="img-responsive1" alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Lightbox <span> IMAGE</span></h2>
                                    <p>Two Hover Effect For Portfolio Grid Blocks. Its Scale</p>
                                    <a href="images/portfolios/big-1.jpg" class="popup-image"
                                        data-effect="mfp-3d-unfold">View
                                        more</a>
                                </figcaption>
                            </figure>
                        </div>

                        <!--CATEGORY CONTENT TWO SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                            <figure class="port-effect-scale">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-1.jpg" class="img-responsive1"
                                    alt="portfolio-demo" />
                                <figcaption>
                                    <h2><i class="fa fa-play-circle" aria-hidden="true"></i>Lightbox <span> Video</span>
                                    </h2>
                                    <p>I designed this for a client for his cafe.</p>
                                    <a class="popup-vimeo" href="https://vimeo.com/45830194">View more</a>
                                </figcaption>
                            </figure>
                        </div>

                        <!--CATEGORY CONTENT THREE SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-2.jpg" class="img-responsive1"
                                    alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Lightbox <span> IMAGE</span></h2>
                                    <p>Two Hover Effect For Portfolio Grid Blocks. Its Up</p>
                                    <a href="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-2.jpg" class="popup-image"
                                        data-effect="mfp-move-horizontal">View more</a>
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                    <!--CATEGORY 2-->
                    <div id="b">

                        <!--CATEGORY CONTENT ONE BIG-->
                        <div class="col-md-4 col-sm-12 col-xs-12 grid big inRight">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/big-2.jpg" class="img-responsive1" alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Lightbox <span> IMAGE</span></h2>
                                    <p>Effect also available for Lightbox Image Check The Doc</p>
                                    <a href="images/portfolios/big-2.jpg" class="popup-image"
                                        data-effect="mfp-move-from-top">View more</a>
                                </figcaption>
                            </figure>
                        </div>

                        <!--CATEGORY CONTENT TWO SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                            <figure class="port-effect-scale">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-3.jpg" class="img-responsive1"
                                    alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Lightbox <span> IMAGE</span></h2>
                                    <p>Used latest material design to make this sample</p>
                                    <a href="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-3.jpg" class="popup-image"
                                        data-effect="mfp-3d-unfold">View more</a>
                                </figcaption>
                            </figure>
                        </div>


                        <!--CATEGORY CONTENT THREE SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-4.jpg" class="img-responsive1"
                                    alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Lightbox <span> IMAGE</span></h2>
                                    <p>I designed this for a client for his cafe.</p>
                                    <a href="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-4.jpg" class="popup-image"
                                        data-effect="mfp-with-fade">View more</a>
                                </figcaption>
                            </figure>
                        </div>

                    </div>

                    <!--CATEGORY 3-->
                    <div id="c">
                        <!--CATEGORY CONTENT ONE SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/big-1.jpg" class="img-responsive1" alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Single <span> PAGE</span></h2>
                                    <p>Showcase Your Portfolio in Details on a Single Page</p>
                                    <a href="single-portfolio.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <!--CATEGORY CONTENT TWO SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/big-2.jpg" class="img-responsive1" alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Single <span> PAGE</span></h2>
                                    <p>Showcase Your Portfolio in Details on a Single Page</p>
                                    <a href="single-portfolio.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <!--CATEGORY CONTENT THREE SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-1.jpg" class="img-responsive1"
                                    alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Single <span> PAGE</span></h2>
                                    <p>Showcase Your Portfolio in Details on a Single Page</p>
                                    <a href="single-portfolio.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>

                        <!--CATEGORY CONTENT FOUR SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-2.jpg" class="img-responsive1"
                                    alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Single <span> PAGE</span></h2>
                                    <p>Showcase Your Portfolio in Details on a Single Page</p>
                                    <a href="single-portfolio.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <!--CATEGORY CONTENT FIVE SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-3.jpg" class="img-responsive1"
                                    alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Single <span> PAGE</span></h2>
                                    <p>Showcase Your Portfolio in Details on a Single Page</p>
                                    <a href="single-portfolio.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <!--CATEGORY CONTENT SIX SMALL-->
                        <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                            <figure class="port-effect-up">
                                <img src="<?php base_url()?>assets/flatrica/images/portfolios/portfolio-4.jpg" class="img-responsive1s"
                                    alt="portfolio-demo" />
                                <figcaption>
                                    <h2>Single <span> PAGE</span></h2>
                                    <p>Showcase Your Portfolio in Details on a Single Page</p>
                                    <a href="single-portfolio.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <!--PORTFOLIOS ADD GALLERY BUTTON-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button id="add-more" class="center-block btn-large waves-effect"><i id="port-add-icon"
                                class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==========================================
                   INTEREST
===========================================-->
    <section id="interest" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><img src="<?php base_url()?>assets/flatrica/images/icons/heart.png" alt="demo">Interest</h4>
            </div>

            <div id="interest-card" class="card">
                <!--INTEREST TEXT-->
                <div class="card-content">
                    <p>
                        First of all I love music, country music is my favorite. Love watching
                        football, movies and playing games with my buddies. I spend quite a lot of time
                        in traveling and photography, these keeps me fresh for working environment.
                        I also spend time volunteering at the Red Cross in London, UK each month.
                    </p>
                </div>

                <!--INTEREST ICONS-->
                <div class="row no-gutters">

                    <!--INTEREST ICON ONE-->
                    <div class="col-md-2 col-sm-4 col-xs-6  box text-center">
                        <div class="interest-icon">
                            <i class="fa fa-music"></i>
                            <span>Music</span>
                        </div>
                    </div>
                    <!--INTEREST ICON TWO-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon-even">
                            <i class="fa fa-gamepad"></i>
                            <span>Gaming</span>
                        </div>
                    </div>
                    <!--INTEREST ICON THREE-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon">
                            <i class="fa fa-camera"></i>
                            <span>Photography</span>
                        </div>
                    </div>
                    <!--INTEREST ICON FOUR-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon-even">
                            <i class="fa fa-bed"></i>
                            <span>Rebahan</span>
                        </div>
                    </div>
                    <!--INTEREST ICON FIVE-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon">
                            <i class="fa fa-plane"></i>
                            <span>Traveling</span>
                        </div>
                    </div>
                    <!--INTEREST ICON SIX-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon-even">
                            <i class="fa fa-film"></i>
                            <span>Movies</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--==========================================

    <!--==========================================
             PRICING TABLE
===========================================-->


    <!--==========================================
             BLOG
===========================================-->
    <section id="blog" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><img src="<?php base_url()?>assets/flatrica/images/icons/post-it.png" alt="demo">Blog</h4>
            </div>
            <div id="blog-card" class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <!--BLOG ODD-->
                        <div class="blog odd">
                            <!--IMAGE-->
                            <div class="image">
                                <img alt="blog-image" src="<?php base_url()?>assets/flatrica/images/blog/blog-2.png" />
                                <div class="image-overlay">
                                    <div class="comments">
                                        <i class="fa fa-user"></i> John Doe
                                        <i class="fa fa-clock-o"></i>
                                        <time datetime="2045-08-16">August 7, 2020</time>
                                        <i class="fa fa-comments"></i> 168
                                    </div>
                                </div>
                            </div>
                            <!--DETAILS-->
                            <div class="content">
                                <ol class="breadcrumb">
                                    <li><a href="#">Frontend</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li class="active">Material</li>
                                </ol>
                                <h6>Material Design</h6>
                                <p>
                                    Web design encompasses many different skills and disciplines in the production
                                    of websites.Web design include web graphic design, interface design etc.
                                </p>
                                <a class="forward" href="<?php base_url()?>assets/flatrica/single-blog.html">Read More</a>
                            </div>
                        </div>
                        <!--BLOG EVEN-->
                        <div class="blog even">
                            <!--IMAGE-->
                            <div class="image">
                                <img alt="blog-image" src="<?php base_url()?>assets/flatrica/images/blog/blog-1.png" />
                                <div class="image-overlay">
                                    <div class="comments">
                                        <i class="fa fa-user"></i> John Doe
                                        <i class="fa fa-clock-o"></i>
                                        <time datetime="2045-08-16">August 7, 2020</time>
                                        <i class="fa fa-comments"></i> 168
                                    </div>
                                </div>
                            </div>
                            <!--DETAILS-->
                            <div class="content">
                                <ol class="breadcrumb">
                                    <li><a href="#">Backend</a></li>
                                    <li><a href="#">Dev</a></li>
                                    <li class="active">Shortcuts</li>
                                </ol>
                                <h6>Development Shortcut</h6>
                                <p>
                                    Web development is a broad term for the work involved in developing a web site
                                    for the Internet or an intranet. Now lets get a bit deeper in this topic
                                </p>
                                <a class="forward" href="<?php base_url()?>assets/flatrica/single-blog.html">Read More</a>
                            </div>
                        </div>
                        <!--BLOG ODD-->
                        <div class="blog odd">
                            <!--IMAGE-->
                            <div class="image">
                                <img alt="blog-image" src="<?php base_url()?>assets/flatrica/images/blog/blog-3.png" />
                                <div class="image-overlay">
                                    <div class="comments">
                                        <i class="fa fa-user"></i> John Doe
                                        <i class="fa fa-clock-o"></i>
                                        <time datetime="2045-08-16">August 7, 2020</time>
                                        <i class="fa fa-comments"></i> 168
                                    </div>
                                </div>
                            </div>
                            <!--DETAILS-->
                            <div class="content">
                                <ol class="breadcrumb">
                                    <li><a href="#">Frontend</a></li>
                                    <li><a href="#">Specs</a></li>
                                    <li class="active">UI</li>
                                </ol>
                                <h6>A Good UI</h6>
                                <p>
                                    The user interface (UI), in the industrial design field of human–machine
                                    interaction, is the space where interactions between humans and machines occur.
                                </p>
                                <a class="forward" href="<?php base_url()?>assets/flatrica/single-blog.html">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================================
                  CONTACT
===========================================-->
    <section id="contact" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><img src="<?php base_url()?>assets/flatrica/images/icons/envelope.png" alt="demo">Contact</h4>
            </div>
            <div class="row">
                <div id="contact-card" class="col-md-5 col-sm-12 col-xs-12">
                    <!-- CONTACT FORM -->
                    <div class="card">
                        <div class="card-content">
                            <form id="contact-form" name="c-form">
                                <!-- NAME -->
                                <div class="input-field">
                                    <input id="first_name" type="text" class="validate" name="first_name" required>
                                    <label for="first_name">Name</label>
                                </div>
                                <!--SUBJECT-->
                                <div class="input-field">
                                    <input id="sub" type="text" class="validate" name="sub">
                                    <label for="sub">Subject</label>
                                </div>
                                <!--EMAIL-->
                                <div class="input-field">
                                    <input id="email" type="email" class="validate" name="email" required>
                                    <label for="email">Email</label>
                                </div>
                                <!--MESSAGE-->
                                <div class="input-field">
                                    <textarea id="textarea1" class="materialize-textarea" name="message"
                                        required></textarea>
                                    <label for="textarea1">Message</label>
                                </div>
                                <!-- SEND BUTTON -->
                                <div class="contact-send">
                                    <button id="submit" name="contactSubmit" type="submit" value="Submit"
                                        class="btn waves-effect">Send
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!--FORM LOADER-->
                        <div id="form-loader" class="progress is-hidden">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <!-- CONTACT MAP -->
                    <div id="map-card" class="card">
                        <!-- MAP -->
                        <div id="myMap"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==========================================
                     SCROLL TO TOP
===========================================-->
    <div id="scroll-top">
        <div id="scrollup"><i class="fa fa-angle-up"></i></div>
    </div>

