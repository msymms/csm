<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SCSDesigns_CSM
 * 
 * This may end up being the footer for all pages but for now just the home page.
 * MS - 3.11.2018
 * 
 *
 *  */

?>

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
    </div><!-- parallax -->
</div> <!-- content --->
    <script>
        var debugInput = document.querySelector("input");

        function updateDebugState() {
            document.body.classList.toggle('debug-on', debugInput.checked);
        }
        debugInput.addEventListener("click", updateDebugState);
        updateDebugState();
    </script>
<?php wp_footer(); ?>    
</body>
</html>
