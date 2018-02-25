<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SCSDesigns_CSM
 */

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Motivating Believers</title>
    <meta name="description" content="Demonstration of grouping content in pure CSS parallax scrolling website">
    <?php wp_head(); ?>
</head>
<body>

    <div class="debug">
        <label><input type="checkbox"> Debug</label>
    </div>
    <div class="parallax">
        <div id="group1" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="title"><img src="http://via.placeholder.com/3000X2000" class="back-image" alt=""></div>
                <div class="welcome-title">
                    <p class="welcome-title-line-one">Preach the Gospel.</p>
                    <p class="welcome-title-line-two">Change the World.</p>
                </div>
            </div>
        </div>
        <div id="group2" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="title">Base Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--back">
                <div class="title">Background Layer</div>
            </div>
        </div>
        <div id="group3" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
                <div class="title">Foreground Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--base">
                <div class="title">Base Layer</div>
            </div>
        </div>
        <div id="group4" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="title">Base Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--back">
                <div class="title">Background Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--deep">
                <div class="title">Deep Background Layer</div>
            </div>
        </div>
        <div id="group5" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
                <div class="title">Foreground Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--base">
                <div class="title">Base Layer</div>
            </div>
        </div>
        <div id="group6" class="parallax__group">
            <div class="parallax__layer parallax__layer--back">
                <div class="title">Background Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--base">
                <div class="title">Base Layer</div>
            </div>
        </div>
        <div class="footer__group">
           <div class="parallax__layer parallax__layer--base">
 <!--  MOVE INTO FOOTER.PHP ---->
            <footer class="footer">
                <div class="custom-logo">
                    <img src="http://via.placeholder.com/50x50" alt="">
                </div>
                <div class="footer-navigation">
                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#">Home</a></li>
                        <li class="footer-menu-item"><a href="#">Blog</a></li>
                        <li class="footer-menu-item"><a href="#">Podcasts</a></li>
                        <li class="footer-menu-item"><a href="#">About</a>
                            <ul class="child-menu">
                                <li class="child-menu-item"><a href="#">Bio</a></li>
                                <li class="child-menu-item"><a href="#">Statement of Faith</a></li>
                                <li class="child-menu-item"><a href="#">Contact</a></li>
                            </ul>
                        </li>
                        <li class="footer-menu-item"><a href="#">Schedule</a></li>
                    </ul>
                </div>
            </footer>
            </div>
        </div>
    </div>
    <script>
        var debugInput = document.querySelector("input");

        function updateDebugState() {
            document.body.classList.toggle('debug-on', debugInput.checked);
        }
        debugInput.addEventListener("click", updateDebugState);
        updateDebugState();
    </script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-10812217-1', 'auto');
        ga('send', 'pageview');
    </script>
    
    <!-- MOVE TO FOOTER.PHP -------------->

</body>

</html>
