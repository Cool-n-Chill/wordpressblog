<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head() ?>

</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-menu">
            <div class="header__burger">
                <i class="bi-list"></i>
            </div>
            <nav class="header__menu">
                <ul class="header__list">
                    <li>
                        <a href="" class="header__link">Home</a>
                    </li>
                    <li>
                        <a href="" class="header__link">Blog</a>
                    </li>
                    <li>
                        <a href="" class="header__link">About</a>
                    </li>
                    <li>
                        <a href="" class="header__link">Contact</a>
                    </li>
                </ul>
                <div class="menu__social-and-search">
                    <a href="" class="social__link"><i class="bi-rss"></i></a>
                    <a href="" class="social__link"><i class="bi-twitter"></i></a>
                    <a href="" class="social__link"><i class="bi-github"></i></a>
                    <a href="" class="social__link"><i class="bi-facebook"></i></a>
                    <i class="bi-search"></i>
                </div>
                <button class="menu__close"><i class="bi bi-x-lg"></i></button>
            </nav>
            <div class="header__logo">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" alt="" class="logo">
                <span class="logo-text">blog</span>
            </div>
            <div class="header__social-and-search">
                <a href="" class="social__link"><i class="bi-rss"></i></a>
                <a href="" class="social__link"><i class="bi-twitter"></i></a>
                <a href="" class="social__link"><i class="bi-github"></i></a>
                <a href="" class="social__link"><i class="bi-facebook"></i></a>
                <i class="bi-search"></i>
            </div>
        </div>
    </div>
</header>
<main class="content">
    <section class="content__slider">
        <div class="container">
            <div class="slider">
                <div class="slide">
                    <div class="slide__text col-5 offset-1">
                        <p class="slide__subtitle">Latest News</p>
                        <h2 class="slide__title">bodybuilding best for you health</h2
                        ></div>
                </div>
                <div class="slide">
                    <div class="slide__text col-5 offset-1">
                        <p class="slide__subtitle">Latest News</p>
                        <h2 class="slide__title">bodybuilding best for you health</h2
                        ></div>
                </div>
                <div class="slide">
                    <div class="slide__text col-5 offset-1">
                        <p class="slide__subtitle">Latest News</p>
                        <h2 class="slide__title">bodybuilding best for you health</h2
                        ></div>
                </div>
            </div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <div class="form__block">
                <form action="#">
                    <h3 class="form__title">signup to newsletter</h3>
                    <input type="text" placeholder="Your name">
                    <input type="email" placeholder="Your email address">
                    <button type="submit">subscribe now</button>
                </form>
            </div>
        </div>
    </section>
    <section class="posts">
        <div class="container">
            <div class="row">
                <div class="posts__column col-lg-3">
                    <div class="post">
                        <div class="post__content">
                            <div class="post__icon"><i class="bi bi-pencil-fill"></i></div>
                            <span class="post__category">travelling</span>
                            <h3 class="post__title">travel best adventure</h3>
                            <span class="post__date">january 16, 2016</span>
                            <p class="post__text">Lorem ipsum doloirs sit amet, csatetur adipisicin, sed does eiusmod tehampor incididunt uts laboasre et dolhvaliqua. Ut enim  vem, nostrasuaations ullamco labiosi ut saaliquip exoi asea comoodo Disco choice is the have great work.</p>
                            <span class="post__more">read more</span>
                        </div>
                        <div class="post__footer">
                            <div class="post__comment">
                                <i class="bi bi-chat-text comment__icon"></i>
                                <span class="post__comments">no comment</span>
                            </div>
                            <div class="post__social">
                                <i class="bi bi-twitch"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="post post-empty"></div>
                    <div class="post post-background">
                        <div class="post__content">
                            <span class="post__category">travelling</span>
                            <h3 class="post__title">travel best adventure</h3>
                            <span class="post__date">january 25, 2016</span>
                            <p class="post__text">Lorem ipsum doloirs sit amet, csatetur adipisicin, sed does eiusmod tehampor incididunt uts laboasre et dolhvaliqua. Ut enim  vem, nostrasuaations ullamco labiosi ut saaliquip exoi asea comoodo Disco choice is the have great work.</p>
                            <span class="post__more">read more</span>
                        </div>
                    </div>
                </div>
                <div class="posts__column col-lg-3">
                    <div class="post post-image">
                        <div class="post__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-image.png" alt="post-image">
                        </div>
                        <div class="post__content">
                            <div class="post__icon"><i class="bi bi-image"></i></div>
                            <span class="post__category">travelling</span>
                            <h3 class="post__title">standart image post</h3>
                            <span class="post__date">january 25, 2016</span>
                            <span class="post__more">read more</span>
                        </div>
                        <div class="post__footer">
                            <div class="post__comment">
                                <i class="bi bi-chat-text comment__icon"></i>
                                <span class="post__comments">06 comment</span>
                            </div>
                            <div class="post__social">
                                <i class="bi bi-twitch"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="post post-quote">
                        <div class="post__content">
                            <div class="post__icon light-icon"><i class="bi bi-chat-quote"></i></div>
                            <p class="post__quote">As per Lorm ipsum dolor sitamet,
                                consectetur adipisicing elits, sed do Now eiusmod tempor havei ut labores et dolore magna aliqusa. Ut wenim ad minim veniam, quis
                                its a snostrud now is the ullamco
                                aliquip ex ea commodo .</p>
                            <span class="post__quote-author">natalia alexy</span>
                        </div>
                    </div>
                    <div class="post post-video">
                        <div class="post__video">
                            <iframe src="https://www.youtube.com/embed/F4we73GHH9k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="post__content">
                            <div class="post__icon"><i class="bi bi-image"></i></div>
                            <span class="post__category">travelling</span>
                            <h3 class="post__title">travel best adventure</h3>
                            <span class="post__date">january 16, 2016</span>
                            <p class="post__text">A CONAN staffer is learning the rules of the in  road, with a little help from Look out, fellow drivers!</p>
                            <span class="post__more">read more</span>
                        </div>
                        <div class="post__footer">
                            <div class="post__comment">
                                <i class="bi bi-chat-text comment__icon"></i>
                                <span class="post__comments">06 comment</span>
                            </div>
                            <div class="post__social">
                                <i class="bi bi-twitch"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-github"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="posts__column col-lg-3">
                    <div class="post">
                        <div class="post__content">
                            <div class="post__icon"><i class="bi bi-pencil-fill"></i></div>
                            <span class="post__category">fashion</span>
                            <h3 class="post__title">simple post style</h3>
                            <span class="post__date">january 02, 2016</span>
                            <p class="post__text">Lorem ipsum doloirs sit amet, csatetur adipisicin, sed does eiusmod tehampor choice is the have great work.</p>
                            <span class="post__more">read more</span>
                        </div>
                        <div class="post__footer">
                            <div class="post__comment">
                                <i class="bi bi-chat-text comment__icon"></i>
                                <span class="post__comments">no comment</span>
                            </div>
                            <div class="post__social">
                                <i class="bi bi-twitch"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="post post-gallery">
                        <div class="post__gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-image.png" alt="post-image">
                        </div>
                        <div class="post__content">
                            <div class="post__icon"><i class="bi bi-image"></i></div>
                            <span class="post__category">travelling</span>
                            <h3 class="post__title">standart image post</h3>
                            <span class="post__date">january 25, 2016</span>
                            <span class="post__more">read more</span>
                        </div>
                        <div class="post__footer">
                            <div class="post__comment">
                                <i class="bi bi-chat-text comment__icon"></i>
                                <span class="post__comments">06 comment</span>
                            </div>
                            <div class="post__social">
                                <i class="bi bi-twitch"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="post post-link">
                        <div class="post__content">
                            <div class="post__icon light-icon"><i class="bi bi-link-45deg"></i></div>
                            <a href="#" class="post__link">http://www.abcdomainname.com/ screen/discovery</a>
                        </div>
                    </div>
                    <div class="post post-quote">
                        <div class="post__content">
                            <div class="post__icon light-icon"><i class="bi bi-chat-quote"></i></div>
                            <p class="post__quote">As per Lorm ipsum dolor sitamet,
                                consectetur adipisicing elits, sed do Now eiusmod tempor havei ut labores et dolore magna aliqusa. Ut wenim ad minim veniam, quis
                                its a snostrud now is the ullamco
                                aliquip ex ea commodo .</p>
                            <span class="post__quote-author">natalia alexy</span>
                        </div>
                    </div>
                </div>
                <div class="posts__column col-lg-3">
                    <div class="post post-empty"></div>
                    <div class="post">
                        <div class="post__content">
                            <div class="post__icon"><i class="bi bi-pencil-fill"></i></div>
                            <span class="post__category">lifestyle</span>
                            <h3 class="post__title">without image post</h3>
                            <span class="post__date">january 16, 2016</span>
                            <p class="post__text">Lorem ipsum doloirs sit amet, csatetur adipisicin, sed does eiusmod tehampor incididunt uts laboasre et dolhvaliqua. Ut enim  vem, nostrasuaations ullamco labiosi ut saaliquip exoi asea comoodo Disco choice is the have great work.</p>
                            <span class="post__more">read more</span>
                        </div>
                        <div class="post__footer">
                            <div class="post__comment">
                                <i class="bi bi-chat-text comment__icon"></i>
                                <span class="post__comments">no comment</span>
                            </div>
                            <div class="post__social">
                                <i class="bi bi-twitch"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="post post-audio">
                        <div class="post__content">
                            <div class="post__icon"><i class="bi bi-music-note-beamed"></i></div>
                            <span class="post__category">audio music</span>
                            <h3 class="post__title">best audio player post</h3>
                            <span class="post__date">december 29, 2015</span>
                        </div>
                        <div class="post__audio">
                            <button class="post__player">
                                <i class="bi bi-play-fill"></i>
                                <i class="bi bi-pause-fill hidden"></i>
                            </button>
                            <audio id="sound" src="https://html5book.ru/examples/media/track.mp3" preload="auto" controls></audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer__column">
                <h4 class="footer__title">about blog</h4>
                <p class="footer__text">Lorem ipsum dolor sit amet, conser adipisicing  esse cillum dolore nulla pariatur.</p>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/footer-sign.png" alt="" class="footer__image">
            </div>
            <div class="col-md-3 footer__column">
                <h4 class="footer__title">latest tweets</h4>
                <div class="footer__twitter">
                    <div class="twit">
                        <div class="twit__icon"><i class="bi bi-twitter"></i></div>
                        <div class="twit__text">
                            <span class="twit__author">@Twitter@magicalrebekah</span>
                            <p class="twit__text">Developer Advocate @heyval isaiyou knows the very well is about things.</p>
                        </div>
                    </div>
                    <div class="twit">
                        <div class="twit__icon"><i class="bi bi-twitter"></i></div>
                        <div class="twit__text">
                            <span class="twit__author">@Twitter@magicalrebekah</span>
                            <p class="twit__text">Developer Advocate hav a great work this knows the very well is about things.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 footer__column">
                <div class="footer__instagram">
                    <h4 class="footer__title">follow me instagram</h4>
                    <div class="instagram__block">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-image.png" alt="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-image.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-image.png" alt="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-image.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-image.png" alt="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-image.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 footer__column">
                <h4 class="footer__title">latest comments</h4>
                <div class="footer__comments">
                    <div class="comment">
                        <span class="comment__author">From Alex :</span>
                        <p class="comment__text">Developer Advocate @heyval isaiyou know the very well is talking about things .</p>
                    </div>
                    <div class="comment">
                        <span class="comment__author">From John Doe :</span>
                        <p class="comment__text">Developer Advocate @heyval isaiyou know the very well is talking about things .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <span>@2015 copyright .all right reserved by awesome theme   |   terms policy   |   disclaimer</span>
    </div>
</footer>

<?php wp_footer() ?>

</body>
</html>