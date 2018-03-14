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

    <div class="debug">
        <label><input type="checkbox"> Debug</label>
    </div>
    <div class="parallax">
        <div id="group1" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="title">
                    <?php $image_attr = csm_get_image_attr( 1748 ); ?> 
                    <img src="<?php echo $image_attr[0]; ?>" 
                         srcset="<<?php echo $image_attr[1]; ?>"
                         sizes="<?php echo $image_attr[2]; ?>"
                         alt="<?php echo $image_attr[3]; ?>"
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
    
<?php
get_footer( 'home' );