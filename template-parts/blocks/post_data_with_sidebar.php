<?php

/**
 * Post Data With Sidebar Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'post_data_with_sidebar-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'post_data_with_sidebar';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

global $post;
$show_post_data = get_field('show_post_data');
$show_share = get_field('show_share');
$short_content = get_field('short_content');
$image = get_field('image');
$content = get_field('content');
$sidebarcontent = get_field('sidebarcontent');
$enable_more_like_this = get_field('enable_more_like_this');
$enable_sidebar = get_field('enable_sidebar');
$current_post = $post->ID;
$title = get_the_title($current_post);
$coauthors = get_coauthors($current_post);
$date = get_the_date('j F Y', $current_post);
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php if ($enable_sidebar == 1) : ?>with_sidebar<?php endif; ?>">
    <div class="container">
        <div class="post_data_with_sidebar_inner">
            <div class="post_data_with_sidebar_left">
                <?php if ($show_post_data == 1) : ?>
                    <div class="authors_date_event_meta">
                        <div class="authors_date_event_meta__inner">
                            <div class="authors_date_event_meta__wrapper">
                                <div class="category_list">
                                    <?php
                                    $cat_name = 'category';
                                    $categories = get_the_terms($post->ID, $cat_name);
                                    foreach ($categories as $category) {
                                        if ($category->parent) { ?>
                                            <div class="category_list_item"><?php echo $category->name; ?></div>
                                    <?php }
                                    }
                                    ?>
                                </div>
                                <h1 class="heading h1">
                                    <?php echo $title; ?>
                                </h1>
                                <div class="authors_list">
                                    <div class="authors_list_image">
                                        <?php foreach ($coauthors as $coauthor) { ?>
                                            <div class="authors_list_image_item"><?php echo get_avatar($coauthor->user_email); ?></div>
                                        <?php } ?>
                                    </div>
                                    <div class="authors_list_name">
                                        <?php foreach ($coauthors as $coauthor) { ?>
                                            <div class="authors_list_name_item"><?php echo $coauthor->display_name; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="date"><?php echo $date; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($show_share == 1) : ?>
                    <div class="click_to_share">
                        <div class="click_to_share__inner">
                            <div class="click_to_share__wrapper">
                                <h6><?php echo "SHARE NOW"; ?></h6>
                                <div class="share_section">
                                    <div data-network="twitter" class="st-custom-button">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#1D0E49" />
                                            <path d="M26.3553 16.7407C26.3653 16.8826 26.3653 17.0251 26.3653 17.167C26.3653 21.502 23.0659 26.497 17.0356 26.497C15.1778 26.497 13.4519 25.9588 12 25.0251C12.2641 25.0554 12.5178 25.0657 12.7919 25.0657C14.3247 25.0657 15.7359 24.5476 16.8628 23.6645C16.1786 23.6519 15.5154 23.426 14.9658 23.0182C14.4161 22.6105 14.0076 22.0413 13.7972 21.3901C14.002 21.4224 14.2089 21.4393 14.4162 21.4407C14.7106 21.4407 15.005 21.4001 15.2791 21.3291C14.5366 21.1789 13.8691 20.7762 13.3898 20.1896C12.9106 19.603 12.6492 18.8685 12.65 18.111V18.0704C13.1044 18.324 13.6122 18.4666 14.1322 18.4866C13.6821 18.1873 13.3131 17.7813 13.058 17.3049C12.8029 16.8284 12.6696 16.2962 12.67 15.7557C12.67 15.1466 12.8325 14.5882 13.1169 14.101C13.9405 15.1148 14.9681 15.9441 16.1328 16.5352C17.2976 17.1263 18.5736 17.466 19.8781 17.5323C19.8275 17.2885 19.7969 17.0351 19.7969 16.7813C19.7969 14.9741 21.2587 13.502 23.0763 13.502C24.02 13.502 24.8731 13.8979 25.4722 14.5376C26.2066 14.3962 26.9108 14.1282 27.5534 13.7457C27.3089 14.5036 26.7962 15.1461 26.1116 15.5529C26.7716 15.4816 27.4113 15.2988 28 15.0451C27.5511 15.6988 26.995 16.272 26.3553 16.7407Z" fill="white" />
                                        </svg>
                                    </div>
                                    <div data-network="facebook" class="st-custom-button">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#1D0E49" />
                                            <path d="M27.9839 12.8978V27.0982C27.9839 27.5864 27.5884 27.9784 27.1037 27.9784H23.0342V21.7993H25.1082L25.4182 19.3904H23.0307V17.851C23.0307 17.1525 23.2231 16.6786 24.2244 16.6786H25.5002V14.5227C25.2792 14.4942 24.5238 14.4265 23.64 14.4265C21.8013 14.4265 20.5398 15.549 20.5398 17.6122V19.3904H18.4587V21.7993H20.5398V27.9819H12.8997C12.4151 27.9819 12.0195 27.5864 12.0195 27.1018V12.8978C12.0195 12.4131 12.4151 12.0176 12.8997 12.0176H27.1002C27.5884 12.0176 27.9839 12.4131 27.9839 12.8978Z" fill="white" />
                                        </svg>
                                    </div>
                                    <div data-network="linkedin" class="st-custom-button">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#1D0E49" />
                                            <g clip-path="url(#clip0)">
                                                <path d="M15.724 17.1465H12.512C12.3694 17.1465 12.2539 17.262 12.2539 17.4045V27.7234C12.2539 27.866 12.3694 27.9815 12.512 27.9815H15.724C15.8666 27.9815 15.9821 27.866 15.9821 27.7234V17.4045C15.9821 17.262 15.8666 17.1465 15.724 17.1465Z" fill="white" />
                                                <path d="M14.1195 12.0176C12.9508 12.0176 12 12.9674 12 14.1348C12 15.3027 12.9508 16.2529 14.1195 16.2529C15.2873 16.2529 16.2374 15.3027 16.2374 14.1348C16.2374 12.9674 15.2873 12.0176 14.1195 12.0176Z" fill="white" />
                                                <path d="M23.8987 16.8906C22.6087 16.8906 21.655 17.4452 21.0766 18.0753V17.4052C21.0766 17.2627 20.9611 17.1471 20.8185 17.1471H17.7424C17.5999 17.1471 17.4844 17.2627 17.4844 17.4052V27.724C17.4844 27.8666 17.5999 27.9821 17.7424 27.9821H20.9474C21.09 27.9821 21.2055 27.8666 21.2055 27.724V22.6186C21.2055 20.8982 21.6728 20.2279 22.8721 20.2279C24.1782 20.2279 24.282 21.3024 24.282 22.7071V27.7241C24.282 27.8666 24.3975 27.9821 24.5401 27.9821H27.7463C27.8888 27.9821 28.0043 27.8666 28.0043 27.7241V22.064C28.0043 19.5058 27.5165 16.8906 23.8987 16.8906Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="16" height="16" fill="white" transform="translate(12 12)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($short_content) : ?>
                    <div class="short_content"><?php echo $short_content; ?></div>
                <?php endif; ?>
                <?php if ($enable_sidebar == 1) : ?>
                    <div class="post_data_with_sidebar_right mobile">
                    
                        <?php if (have_rows('sidebar_article', 'option')) : ?>
                            <?php while (have_rows('sidebar_article', 'option')) : the_row();
                                $background_image = get_sub_field('background_image', 'option');
                                $title = get_sub_field('title', 'option');
                                $text = get_sub_field('text', 'option');
                                $link = get_sub_field('button', 'option');
                                $hide_button = get_sub_field('hide_button', 'option');
                            ?>
                                <div class="sidebar_article" <?php if ($background_image) { ?> style="background-image: url(<?php echo $background_image; ?>)" <?php } ?>>
                                    <?php if ($link && !empty($hide_button)) :
                                        $link_url = $link['url'] ? $link['url'] : "javascript:void(0)";
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                        <a class="clickable_btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"></a>
                                    <?php endif; ?>
                                    <?php if ($title) : ?>
                                        <h3 class="heading h3"><?php echo $title; ?></h3>
                                    <?php endif; ?>
                                    <?php if ($text) : ?>
                                        <div class="text"><?php echo $text; ?></div>
                                    <?php endif; ?>
                                    <?php if ($link && empty($hide_button)) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'] ? $link['title'] : "Read More";
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                        <a class="btn white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if ($image) : ?>
                    <div class="image" style="background-image: url(<?php echo $image['url']; ?>);">
                        <a href="<?php echo $image['url']; ?>" data-lity><img src="<?php echo get_template_directory_uri(); ?>/dist/images/692-351.png" alt="<?php echo $image['alt']; ?>" /></a>
                    </div>
                <?php endif; ?>
                <?php if ($content) : ?>
                    <div class="content"><?php echo $content; ?></div>
                <?php endif; ?>
                <?php if ($enable_more_like_this == 1) : ?>
                    <?php
                    $next_args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'order' => 'DESC',
                        'orderby' => 'ID',
                        'post__not_in' => array($post->ID)
                    );
                    $next_the_query = new WP_Query($next_args);
                    if ($next_the_query->have_posts()) { ?>
                        <div class="more_posts">
                            <div class="more_title">
                                <h3><?php echo "More like this"; ?></h3>
                            </div>
                            <div class="more_posts_list">
                                <?php while ($next_the_query->have_posts()) {
                                    $next_the_query->the_post();
                                    $id = $post->ID;
                                    $title = get_the_title($id);
                                    $link = get_permalink($id);
                                    $excerpt = get_field('short_description', $id);
                                    $image = get_the_post_thumbnail_url($id, 'full');
                                    $date = get_the_date('j F Y', $id);
                                ?>
                                    <div class="more_posts_list__item">
                                        <div class="more_posts_list_image">
                                            <div class="image" style="background-image: url(<?php echo $image; ?>);">
                                                <a href="<?php echo $link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/140-140.png" alt="Image" /></a>
                                            </div>
                                        </div>
                                        <div class="more_posts_list__details">
                                            <h4 class="more_posts_list_heading"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h4>
                                            <div class="excerpt">
                                                <?php echo $excerpt; ?>
                                            </div>
                                            <div class="post_date"><?php echo $date; ?></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php
                    }
                    wp_reset_postdata();
                        ?>
                        </div>
                    <?php endif; ?>
            </div>
            <?php if ($enable_sidebar == 1) : ?>
                <div class="post_data_with_sidebar_right">
                <?php if ( get_field('sidebarcontent') ) {
                        echo do_shortcode( get_field('sidebarcontent') );
                    } ?>
                    

                    
                    
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5a1d025263750b0012e6bac3&product=custom-share-buttons' async='async'></script>