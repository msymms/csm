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

<?php get_header( 'home' ); ?>

<!--    <div class="debug">
        <label><input type="checkbox"> Debug</label>
    </div>-->
    <div class="parallax">
        <div id="group1" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="parallax_image">
                    <?php $image_attr_gr1 = csm_get_image_attr( 1762 ); ?> 
                    <img src="<?php echo $image_attr_gr1[0][0]; ?>" 
                         srcset="<?php echo $image_attr_gr1[1]; ?>"
                         alt="<?php echo $image_attr_gr1[3]; ?>"
                         class="back-image" />
                </div>
                <div class="welcome-title">
                    <p class="welcome-title-line-one">Preach the Gospel.</p>
                    <p class="welcome-title-line-two">Change the World.</p>
                </div>
            </div>
        </div>
        <div id="group2" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="welcome-title">Clever tag line</div>
            </div>
            <div class="parallax__layer parallax__layer--back">
                <div class="parallax_image">
                    <?php $image_attr_gr2 = csm_get_image_attr( 1746 ); ?> 
                    <img src="<?php echo $image_attr_gr2[0][0]; ?>" 
                         srcset="<?php echo $image_attr_gr2[1]; ?>"
                         alt="<?php echo $image_attr_gr2[3]; ?>"
                         class="back-image" />
                </div>
            </div>
        </div>
        <div id="group3" class="menu_group">
<!--            <div class="parallax__layer parallax__layer--fore">
                <div class="parallax_image">Foreground Layer</div>
            </div>-->
            <div class="parallax__layer parallax__layer--base">
                <div class="front__menu-images">
                    <a href="archive.php"> 
                        <?php $image_attr_gr3 = csm_get_image_attr( 1765 ); ?> 
                        <img type="image"
                             src="<?php echo $image_attr_gr3[0][0]; ?>" 
                             srcset="<?php echo $image_attr_gr3[1]; ?>"
                             alt="<?php echo $image_attr_gr3[3]; ?>"
                            class="front__menu-image"/>
                    </a>
                     <a href="archive.php">
                        <?php $image_attr_gr3a = csm_get_image_attr( 1763 ); ?> 
                        <img src="<?php echo $image_attr_gr3a[0][0]; ?>" 
                             srcset="<?php echo $image_attr_gr3a[1]; ?>"
                             alt="<?php echo $image_attr_gr3a[3]; ?>"
                             class="front__menu-image"/>
                     </a>
                     <a href="archive.php">
                        <?php $image_attr_gr3b = csm_get_image_attr( 1764 ); ?> 
                        <img src="<?php echo $image_attr_gr3b[0][0]; ?>" 
                             srcset="<?php echo $image_attr_gr3b[1]; ?>"
                             alt="<?php echo $image_attr_gr3b[3]; ?>"
                             class="front__menu-image"/>
                     </a>
                    </div>
            </div>
        </div>
<!--       <div id="group4" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="parallax_image">Base Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--back">
                <div class="parallax_image">Background Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--deep">
                <div class="parallax_image">Deep Background Layer</div>
            </div>
        </div>-->
        <div id="group5" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
               <div class="welcome-title">Spread the Word</div>
            </div>
            <div class="parallax__layer parallax__layer--base">
                 <div class="parallax_image">
                    <?php $image_attr_gr5 = csm_get_image_attr( 1761 ); ?> 
                    <img src="<?php echo $image_attr_gr5[0][0]; ?>" 
                         srcset="<?php echo $image_attr_gr5[1]; ?>"
                         alt="<?php echo $image_attr_gr5[3]; ?>"
                         class="back-image" />
                </div>
            </div>
        </div>
<!--        <div id="group6" class="parallax__group">
            <div class="parallax__layer parallax__layer--back">
                <div class="parallax_image">Background Layer</div>
            </div>
            <div class="parallax__layer parallax__layer--base">
                <div class="parallax_image">Base Layer</div>
            </div>
        </div>-->
    
<?php
get_footer( 'home' );