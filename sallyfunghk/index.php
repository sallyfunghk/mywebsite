<?php include('layout/header.php'); ?>

<main>
    <!-- home-section -->
    <section id = 'home-section'>
        <div class = 'jumbotron'>
        </div> <!-- /.jumbotron -->
        <div class = 'container'>
            <div class='row'>
                <div class = 'col-md-12'>
                    <div class='fadeIn'>
                        <div class = 'intro'>
                            <h6><span style="color: #FFFFFF">Hi there,</span></h6>
                            <h2><span style="color: #FFFFFF">I'm a </span><span style="color: #FBDC98; font-weight: bold">Web Programmer</span></h2>
                            <h2 style="color: #FBDC98; font-weight: bold">Sally Fung</h2>
                            <h5><span style="color: #FFFFFF">from Hong Kong</span></h5>
                            <a href='about.php' type='button' class='btnAlt'>Know more about me</a>
                            <a href='https://github.com/sallyfunghk/mywebsite/tree/main/sallyfunghk' target="_blank" type='button' class='btn'>View Source Code</a>
                        </div> <!-- /.intro -->
                    </div> <!-- /.fadeIn -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /#home-section -->
    <section id="personality-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>My personality</h1>
                </div> <!-- /.col-md-12 -->
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="personality-card">
                        <div class="personality-heading">
                            <p>Detail-minded</p>
                        </div>
                        <div class="personality-icon">
                            <i class="fas fa-pen-nib"></i>
                        </div>
                        <div class="personality-content">
                            <p>I pay close attention to small particulars when working on a task or project. This is useful for debugging and testing.</p>
                        </div>
                    </div>
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="personality-card">
                        <div class="personality-heading">
                            <p>Responsible</p>
                        </div>
                        <div class="personality-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="personality-content">
                            <p>When I faced a challenge or uncertainty, I will first report to my supervisor for further instruction. Try the best to finish all the tasks on time.</p>
                        </div>
                    </div>
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="personality-card">
                        <div class="personality-heading">
                            <p>Willing to learn</p>
                        </div>
                        <div class="personality-icon">
                            <i class="fab fa-leanpub"></i>
                        </div>
                        <div class="personality-content">
                            <p>I wish to learn new knowledge and technology. I don't want to stay in one state, wish to keep update myself.</p>
                        </div>
                    </div>
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /#personality-section -->
</main>

<?php include('layout/footer.php'); ?>
