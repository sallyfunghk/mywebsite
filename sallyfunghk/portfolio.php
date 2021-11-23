<?php include('layout/header.php'); ?>

<main>
    <!-- portfolio-section -->
    <section id = 'portfolio-section'>
        <div class = 'container'>
            <div class = 'row'>
                <div class = 'offset-2 col-lg-8 mx-auto' style='padding: 0px;'>
                    <div id='resume'>
                        <div class='heading'>
                            <h2><b>Resume</b></h2>
                        </div> <!-- /.heading -->

                        <div class = 'resumeContent'>
                            <div class='heading'>
                                <h3><i class="fas fa-user"></i>&nbsp;Summary</h3>
                            </div> <!-- /.heading -->
                            <ul>
                                <li style='font-size: 22px;'><b>Sally Fung</b></li>
                                <li><i>Majoring in Mobile Applications Development when I was in institute. I am a web programmer.</i></li>
                                <li><i class="fas fa-street-view"></i>&nbsp;Hong Kong</li>
                                <li><i class="fas fa-envelope"></i>&nbsp;sallyfung2018@gmail.com</li>
                                <li><i class="fas fa-globe"></i>&nbsp;https://www.sallyfunghk.com</li>
                            <ul>
                        </div> <!-- /.resumeContent -->

                        <div class = 'resumeContent'>
                            <div class='heading'>
                                <h3><i class="fas fa-briefcase"></i>&nbsp;Experience</h3>
                            </div> <!-- /.heading -->
                            <ul>
                                <li><div class='date' style='font-size: 16px;'>June 2020 - Aug 2021</div></li>
                                <li>Personal Care Worker, at a nursing home</li>
                                <li><i>Responsible for organizing documents and feeding for the elderly.</i></li>
                            </ul>
                            <ul>
                                <li><div class='date' style='font-size: 16px;'>Jun 2019 - Aug 2019</div></li>
                                <li>Health Worker, at a elderly home</li>
                                <li><i>Responsible for dispensing medicines, wound caring and nasogastric tube feeding for the elderly.</i></li>
                            </ul>
                            <ul>
                                <li><div class='date' style='font-size: 16px;'>Dec 2016 - Jun 2018</div></li>
                                <li>Clerk, at a construction company</li>
                                <li><i>Responsible for preparing contraction survey reports.</i></li>
                            </ul>
                        </div> <!-- /.resumeContent -->

                        <div class = 'resumeContent'>
                            <div class='heading'>
                                <h3><i class="fas fa-school"></i>&nbsp;Education</h3>
                            </div> <!-- /.heading -->    
                            <ul>
                                <li><div class='date' style='font-size: 16px;'>Sep 2021 - present</div></li>
                                <li>Bachelor degree (part-time)</li>
                                <li>Computing</li>
                            </ul>
                            <ul>
                                <li><div class='date' style='font-size: 16px;'>Sep 2013 - Aug 2015</div></li>
                                <li>Higher Diploma </li>
                                <li>Mobile Applications Development</li>
                            </ul>
                            <ul>
                                <li><div class='date' style='font-size: 16px;'>Sep 2007 - Aug 2013</div></li>
                                <li>Secondary School</li>
                                <li>HKDSE Full cert</li>
                            </ul>
                        </div> <!-- /.resumeContent -->

                        <div class = 'resumeContent'>
                            <div class='heading'>
                                <h3><i class="fas fa-pencil-ruler"></i>&nbsp;Skills</h3>
                            </div> <!-- /.heading -->
                            <ul>
                                <li>Experience on HTML, CSS(Bootstrap), JavaScript(jQuery)</li>
                                <li>Experience on PHP, MySQL</li>
                                <li>Basic knowledge of UI/UX design (Adobe XD)</li>
                            </ul>
                        </div> <!-- /.resumeContent -->

                        <div class='resumeContactBtn'>
                            <button class="btn" onclick="location.href='./contact.php';">Please contact me for full version resume :) </button>
                        </div> <!-- /.resumeContactBtn -->
                    </div> <!-- /#resume -->
                </div> <!-- /.col-lg-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <div class='sidebar'>
            <div class='sidebarButton'>
                <p><button id='summaryButton' title='Summary'><i class="fas fa-user"></i></button></p>
                <p><button id='experienceButton' title='Experience'><i class="fas fa-briefcase"></i></button></p>
                <p><button id='educationButton' title='Education'><i class="fas fa-school"></i></button></p>
                <p><button id='skillButton' title='Skill'><i class="fas fa-pencil-ruler"></i></button></p>
            </div><!-- /.sidebarButton -->
        </div><!-- /.sidebar -->
    </section> <!-- /#portfolio-section -->
</main>

<?php include('layout/footer.php'); ?>