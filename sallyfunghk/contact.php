<?php 
include('layout/header.php'); 
?>

<main>
    <!-- contact-section -->
    <section id = 'contact-section'>
        <div class = 'container'>
            <div class = 'row'>
                <div class = 'offset-2 col-lg-8 mx-auto'>
                    <div id = 'contactForm' class='fadeIn'>
                        <div class='heading'>
                            <h2><b>Contact Me</b></h2>
                        </div> <!-- /.heading -->
                        <p>
                            Please contact me via below form, or <a href = 'mailto:sallyfung2018@gmail.com' style="color: #489dff; text-decoration: none;">email me</a>. :)
                        </p>
                        <form autocomplete="off">
                            <input 
                                type = 'text'
                                id='name'
                                class='field'
                                placeholder = 'Name (required)' 
                                name='name' 
                                required />
                            <input 
                                type = 'email' 
                                id='email'
                                class='field'
                                placeholder = ' Email (required)' 
                                name='email' 
                                required />
                            <textarea 
                                id='message'
                                class='field'
                                rows='10' 
                                placeholder = 'Message (required)' 
                                name='message' 
                                required></textarea>
                            <p><input type = 'submit' value = 'Submit' id = 'submitContact' class='btn' />
                            <input type = 'reset' value = 'Reset' id = 'retContact' class='btnAlt' />
                            </p>
                        </form>
                    </div> <!-- /#contactForm -->
                </div> <!-- /.col-lg-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /#contact-section -->
</main>

<?php include('layout/footer.php'); ?>