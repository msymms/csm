<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package SCSDesigns_CSM
 */
if (!function_exists('scsdesigns_csm_posted_on')) :

    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function scsdesigns_csm_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf($time_string, esc_attr(get_the_date('c')), esc_html(get_the_date()), esc_attr(get_the_modified_date('c')), esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
                /* translators: %s: post date. */
                esc_html_x('Posted on %s', 'post date', 'scsdesigns-csm'), '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
    }

endif;

if (!function_exists('scsdesigns_csm_posted_by')) :

    /**
     * Prints HTML with meta information for the current author.
     */
    function scsdesigns_csm_posted_by() {
        $byline = sprintf(
                /* translators: %s: post author. */
                esc_html_x('by %s', 'post author', 'scsdesigns-csm'), '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
    }

endif;

if (!function_exists('scsdesigns_csm_entry_footer')) :

    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function scsdesigns_csm_entry_footer() {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(', ', 'scsdesigns-csm'));
            if ($categories_list) {
                /* translators: 1: list of categories. */
                printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'scsdesigns-csm') . '</span>', $categories_list); // WPCS: XSS OK.
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'scsdesigns-csm'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                printf('<span class="tags-links">' . esc_html__(' Tagged %1$s', 'scsdesigns-csm') . '</span>', $tags_list); // WPCS: XSS OK.
            }
        }

        if (!is_single() && !post_password_required() && ( comments_open() || get_comments_number() )) {
            echo '<span class="comments-link">';
            comments_popup_link(
                    sprintf(
                            wp_kses(
                                    /* translators: %s: post title */
                                    __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'scsdesigns-csm'), array(
                'span' => array(
                    'class' => array(),
                ),
                                    )
                            ), get_the_title()
                    )
            );
            echo '</span>';
        }

        edit_post_link(
                sprintf(
                        wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Edit <span class="screen-reader-text">%s</span>', 'scsdesigns-csm'), array(
            'span' => array(
                'class' => array(),
            ),
                                )
                        ), get_the_title()
                ), '<span class="edit-link">', '</span>'
        );
    }

endif;

if (!function_exists('scsdesigns_csm_post_thumbnail')) :

    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function scsdesigns_csm_post_thumbnail($post_id = '') {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
            ?>

            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

        <?php else : ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                <?php
                /*
                 *   Altered the original the_post_thumbnail to retrieve the alt
                 *   text instead of the post title.  MS 04.07.2018
                 */

                $image_id = get_post_thumbnail_id($post_id);

                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                if (empty($image_alt)) {

                    $image_alt = the_title_attributethe_title_attribute(array(
                        'echo' => false,
                    ));
                }
                /*
                 * the_post_thumbnail('medium', array(
                 *  'alt' => $image_alt));
                 */

                $image_attr = csm_get_image_attr( $image_id );
                
                $image = '<img src="' . $image_attr[0][0] . '"';
                $image .= ' srcset="'; // open srcset
                $image .= $image_attr[1] . '"'; // close srcset
                $image .= ' class="wp-post-image"';
                $image .= ' alt="' . $image_alt . '">';
                
               
                echo $image;
                
                return $image;
                ?>


            </a>

        <?php
        endif; // End is_singular().
    }
















endif;
