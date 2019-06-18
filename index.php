<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <?php wp_head(); ?>
    
</head>

<body>
    <header>
        <div class="header__logo">
            <?php the_custom_logo( $blog_id ); ?>
            <p>mycompany</p>
        </div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="#">HOME</a>
                <a href="#">ABOUT</a>
                <a href="#">SERVICES</a>
                <a href="#">PORTFOLIO</a>
                <a href="#">TESTIMONIALS</a>
                <a href="#">CONTACT</a>
                <a href="#" id="menu" class="icon">&#9776</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="main__welcome wow fadeInUp">
            <h1><?php the_field('main_title') ?> <span class="mycompany"><?php the_field('main_span') ?></span></h1>
            <p>We are a digital agency with <span class="bld">years of experience</span> and with <span class="bld">extraordinary
                    people</span></p>
        </div>
        <div class="wrapper wow fadeInUp">
            <div class="main__about">
                <div class="about__left">
                    <img class="mw-100" src="<?php bloginfo('template_url'); ?>/assets/img/mac.png" alt="mac">
                </div>
                <div class="about__right">
                    <h2>Some words <span class="bld">about us</span> </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam
                        quis, at asperiores minus ad eaque maxime possimus .</p>
                    <ul>
                        <li><span class="bld">Mission</span> - We deliver uniqueness and quality</li>
                        <li><span class="bld">Skills</span> - Delivering fast and excellent results</li>
                        <li><span class="bld">Clients</span> - Satisfied clients thanks to our experience</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main__team wow fadeInUp">
            <div class="wrapper">
                <h2>OUR TEAM</h2>
                <div class="line"></div>
                <div class="team__cards">
                    <div class="card">
                        <div class="photo"></div>
                        <h4 class="name">Vlad Ivanov</h4>
                        <p class="position">Designer</p>
                        <p class="about__position">Do not seek to change what has come before. Seek to create that
                            whick has not.</p>
                    </div>
                    <div class="card">
                        <div class="photo"></div>
                        <h4 class="name">Vlad Ivanov</h4>
                        <p class="position">Designer</p>
                        <p class="about__position">Do not seek to change what has come before. Seek to create that
                            whick has not.</p>
                    </div>
                    <div class="card">
                        <div class="photo"></div>
                        <h4 class="name">Vlad Ivanov</h4>
                        <p class="position">Designer</p>
                        <p class="about__position">Do not seek to change what has come before. Seek to create that
                            whick has not.</p>
                    </div>
                    <div class="card">
                        <div class="photo"></div>
                        <h4 class="name">Vlad Ivanov</h4>
                        <p class="position">Designer</p>
                        <p class="about__position">Do not seek to change what has come before. Seek to create that
                            whick has not.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__services wow fadeInUp">
            <div class="wrapper">
                <h2>OUR SERVICES</h2>
                <div class="line"></div>
                <p><i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo labore sed vel sit numquam
                        praesentium soluta quae eos corrupti distinctio earum, autem eveniet aperiam repudiandae
                        inventore dicta, tempora ullam error ducimus, ipsum mollitia perspiciatis quam laudantium
                        doloribus? Non in laudantium maiores eaque hic accusamus, facere aliquam fugiat, voluptate quis
                        ut.</i></p>
                <div class="services__cards">
                    <div class="services__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Form1.png" alt="web design">
                        <h4>WEB DESIGN</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cum accusamus molestias, animi
                            earum at.</p>
                    </div>
                    <div class="services__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/mabileapps.png" alt="mobile apps">
                        <h4>MOBILE APPS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cum accusamus molestias, animi
                            earum at.</p>
                    </div>
                    <div class="services__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photography.png" alt="photography">
                        <h4>PHOTOGRAPHY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cum accusamus molestias, animi
                            earum at.</p>
                    </div>
                    <div class="services__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/marketing.png" alt="marekting">
                        <h4>MARKETING</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cum accusamus molestias, animi
                            earum at.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__clients wow fadeInUp">
            <div class="wrapper">
                <h2>SOME OF <span class="bld"> OUR CLIENTS</span></h2>
                <div class="line"></div>
                <div class="clients">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/chanel.png" alt="chanel">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/zara.png" alt="zara">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/guerlain.png" alt="guerlain">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/lancome.png" alt="lancome">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/lacoste.png" alt="lacost">
                </div>
            </div>
        </div>
        <div class="wrapper main__work wow fadeInUp">
            <h2>TAKE A LOOK AT <span class="bld">OUR WORK</span> </h2>
            <div class="line"></div>
            <p><i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, adipisci accusantium magni fugiat,
                    illum voluptatum nemo, modi blanditiis ea voluptatibus neque ipsum! Vero veniam ullam aliquid
                    voluptatibus dolore dignissimos labore impedit officia tenetur corporis! Ad.</i></p>
            <div class="gallery">
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/1.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/1.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/1.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/1.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/2.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/2.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/2.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/2.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/3.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/3.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/3.png)"></figure>
                <figure class="gallery__item" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/3.png)"></figure>
            </div>
        </div>

        <div class="main__testimonials wow fadeInUp">
            <div class="wrapper">
                <h2><span class="bld"> OUR CLIENTS'</span> TESTIMONIALS</h2>
                <div class="line"></div>
                <p class="upp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia porro commodi molestiae,
                    doloremque ipsam minima? Ipsa veritatis, voluptate aut ipsam, possimus beatae autem illo dolorum
                    suscipit dicta est eius placeat?</p>
                <p class="ceo">Dean Martin, CEO Acme Inc.</p>
            </div>
        </div>
        <section class="contact__form wow fadeInUp">
            <div class="contact__wrapper">
                <h2>CONTACT US</h2>
                <div class="line"></div>
                <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit officia hic dolore unde aliquid
                        vero, iusto, dolorem voluptatem at voluptate pariatur eos suscipit id eaque accusantium nam
                        itaque quia mollitia!</i></p>


                  <!-- <?php echo do_shortcode('[contact-form-7 id="22" title="Контактная форма 1"]'); ?>      -->
                <form action="#" name="newform" method="post">
                    <div class="form__inputs">
                        <div>
                            <p>Name <span class="red">*</span></p>
                            <input type="text">
                        </div>
                        <div>
                            <p>E-mail address <span class="red">*</span></p>
                            <input type="email">
                        </div>

                    </div>
                    <p>Message <span class="red">*</span></p>
                    <textarea name="text"></textarea>
                    <div class="button__block">
                        <input type="submit" value="SEND">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="wow fadeInUp">
        <div class="wrapper">
            <div class="social">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/twitter.png" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/google.png" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/linkedin.png" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dribbble.png" alt="">
            </div>
        </div>
    </footer>





    <?php wp_footer(); ?>
    <script src="assets/wow.min.js"></script>
    <script src="assets/script.js"></script>
</body>

</html>