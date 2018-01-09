<?php
$data = require 'data.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cantus</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="http://allfont.ru/allfont.css?fonts=droid-sans" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <nav class="nav-bar">
        <ul>
            <?php
            foreach ($data ['mainMenu'] as $menuItem) {
                ?>
                <li class="main-nav-items"><a
                            href="<?php echo $menuItem['url']; ?>"><?php echo $menuItem['title']; ?></a></li>
                <?php
            }
            ?>
        </ul>
        <a class="logo" href="#"><img src="<?php echo $data['siteLogo']; ?>" alt="logo"></a>
        <ul class="social-network">
            <?php
            foreach ($data ['socialLinks'] as $socialLinkItem) {
                ?>
                <li class="social-network-list">
                    <a href="<?php echo $socialLinkItem['url']; ?>">
                        <i class="fa <?php echo $socialLinkItem['class']; ?>"></i>
                        <span class="number"><?php echo $socialLinkItem['count']; ?></span>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
        <a class="ticket-buy button" href="<?php echo $data['buttonBuy']['url']; ?>">
            <?php echo $data['buttonBuy']['title']; ?>
        </a>
    </nav>
    <div class="main-slider">
        <ul class="slides">
            <?php
            foreach ($data ['mainSlider'] as $mainSliderItem) {
                ?>
                <li class="<?php echo $mainSliderItem['class']; ?>">
                    <div class="main-banner">
                        <div class="headline">
                            <h1><?php echo $mainSliderItem['title']; ?><span
                                        class="decorative-text"><?php echo $mainSliderItem['spanTitle']; ?></span></h1>
                            <a class="discover-more button"
                               href="<?php echo $mainSliderItem['url']; ?>"><?php echo $mainSliderItem['buttonTitle']; ?></a>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</header>


<main class="container">
    <section class="our-members">
        <h2><?php echo $data['introducingMembers']['heading']; ?><span
                    class="decorative-text"><?php echo $data['introducingMembers']['spanHeading']; ?></span></h2>
        <ul class="small-button-list custom-controls-container">
            <?php
            foreach ($data['introducingMembers']['sliderSwitch'] as $switchItem) {
                ?>
                <li class="small-button custom-navigation">
                    <a href="<?php echo $switchItem['url']; ?>" class="<?php echo $switchItem['class']; ?>">
                        <i class="fa <?php echo $switchItem['iconClass']; ?>" aria-hidden="true"></i>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
        <div class="members flexslider">
            <ul class="members-list autoplay slides">
                <?php
                foreach ($data['introducingMembers']['members'] as $membersItem) {
                    ?>
                    <li class="person slide-person">
                        <div class="member">
                            <h4><?php echo $membersItem['name']; ?></h4>
                            <span><?php echo $membersItem['part']; ?></span>
                            <ul class="social-person">
                                <?php
                                foreach ($membersItem['socialList'] as $membersSocialItem) {
                                    ?>
                                    <li class="social-person-list">
                                        <a href="<?php echo $membersSocialItem['url']; ?>">
                                            <i class="fa <?php echo $membersSocialItem['class']; ?>"
                                               aria-hidden="true"></i><span
                                                    class="quantity"><?php echo $membersSocialItem['count']; ?></span>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <img class="member-photo" src="<?php echo $membersItem['imgSRC']; ?>"
                             alt="<?php echo $membersItem['imgALT']; ?>">
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </section>


    <section class="concert">
        <div class="decorate-line">
            <h2><?php echo $data['concert']['heading']; ?><span
                        class="decorative-text"><?php echo $data['concert']['spanHeading']; ?></span></h2>
            <div class="poster">
                <img src="<?php echo $data['concert']['srcImage']; ?>"
                     alt="<?php echo $data['concert']['altImage']; ?>">
                <span class="over-poster"><?php echo $data['concert']['day']; ?>
                    <span><?php echo $data['concert']['month']; ?></span></span>
            </div>
            <div class="poster-description">
                <h3><?php echo $data['concert']['concertTitle']; ?></h3>
                <table>
                    <?php
                    foreach ($data['concert']['poster'] as $posterValue) {
                        ?>
                        <tr class="clearfix">
                            <td><?php echo $posterValue['notice']; ?>
                                <span><?php echo $posterValue['punctuation']; ?></span>
                            </td>
                            <td><?php echo $posterValue['value']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a class="ticket-buy button"
                   href="<?php echo $data['concert']['urlButton']; ?>"><?php echo $data['concert']['buttonTitle']; ?></a>
            </div>
        </div>
    </section>

    <section class="videos">
        <h2><?php echo $data['videos']['heading']; ?>
            <span class="decorative-text"><?php echo $data['videos']['spanHeading']; ?></span>
        </h2>
        <div class="video">
            <div id="videoslider">
                <ul class="small-button-list custom-controls-container">
                    <?php
                    foreach ($data['videos']['sliderSwitch'] as $switchVideo) {
                        ?>
                        <li class="small-button custom-navigation">
                            <a href="<?php echo $switchVideo['url']; ?>" class="<?php echo $switchVideo['class']; ?>">
                                <i class="fa <?php echo $switchVideo['iconClass']; ?>" aria-hidden="true"></i>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <ul class="slides">
                    <?php
                    foreach ($data['videos']['videoSlide'] as $videoItem) {
                        ?>
                        <li>
                            <iframe width="370" height="290"
                                    src="<?php echo $videoItem['src']; ?>"
                                    frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="founder">
        <div class="history">
            <h3><?php echo $data['founder']['heading']; ?></h3>
            <p><?php echo $data['founder']['descriptionYear']; ?>
                <span><?php echo $data['founder']['cantusSpan']; ?></span>
                <?php echo $data['founder']['descriptionText']; ?>
            </p>
            <a href="<?php echo $data['founder']['learnButton']['src']; ?>" class="learn-more button"
               id="<?php echo $data['founder']['learnButton']['id']; ?>">
                <?php echo $data['founder']['learnButton']['title']; ?>
            </a>
            <div class="popup">
                <div class="popup-content">
                    <?php
                    foreach ($data['founder']['popup'] as $textParagraph) {
                        ?>
                        <p><?php echo $textParagraph['text']; ?></p>
                        <?php
                    }
                    ?>
                    <a href="<?php echo $data['founder']['closeButton']['src']; ?>" class="close-popup button"
                       id="<?php echo $data['founder']['closeButton']['id']; ?>">
                        <?php echo $data['founder']['closeButton']['title']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="songs">
        <h2><?php echo $data['songs']['heading']; ?>
            <span class="decorative-text"><?php echo $data['songs']['spanHeading']; ?></span>
        </h2>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allowtransparency="allowtransparency"
                src="<?php echo $data['songs']['srcIframe']; ?>">
        </iframe>
        <ol class="music-list">
            <?php
            foreach ($data['songs']['music'] as $musicItem) {
                ?>
                <li><a href="<?php echo $musicItem['url']; ?>"><?php echo $musicItem['songs']; ?></a></li>
                <?php
            }
            ?>
        </ol>
    </section>

    <section class="insta">
        <h2><?php echo $data['instaPhoto']['heading']; ?>
            <span class="decorative-text"><?php echo $data['instaPhoto']['spanHeading']; ?></span>
        </h2>
        <ul>
            <?php
            foreach ($data['instaPhoto']['photo'] as $photoItem) {
                ?>
                <li><a href="<?php echo $photoItem['url']; ?>">
                        <img src="<?php echo $photoItem['src']; ?>" alt="">
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </section>

    <section class="download">
        <div class="info">
            <h3><?php echo $data['download']['heading']; ?></h3>
            <p><?php echo $data['download']['text']; ?></p>
            <ul class="app">
                <?php
                foreach ($data['download']['app'] as $appItem) {
                    ?>
                    <li><a href="<?php echo $appItem['url']; ?>">
                            <img src="<?php echo $appItem['src']; ?>" alt="<?php echo $appItem['alt']; ?>">
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="form-conteiner">
            <form class="subscribe" action="#" name="about" method="post">
                <ul class="clearfix">
                    <li class="form-email">
                        <input class="form-input" type="email" name="email" placeholder="subscribe newsletter">
                    </li>
                    <li class="form-button">
                        <button class="button-form" type="submit">
                            <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                        </button>
                    </li>
                </ul>
            </form>
        </div>
        <ul class="foot-nav">
            <?php
            foreach ($data['footMenu'] as $footMenuItem) {
                ?>
                <li class="<?php echo $footMenuItem['class']; ?>">
                    <a href="<?php echo $footMenuItem['url']; ?>"><?php echo $footMenuItem['title']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
        <p><?php echo $data['copyright']['copy']; ?>
            <span><?php echo $data['copyright']['spanCantus']; ?></span>
            <?php echo $data['copyright']['afterSpan']; ?>
        </p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="flexslider/jquery.flexslider-min.js"></script>
<script src="source-js/main.js"></script>
<script src="js/main.js"></script>
</body>
</html>