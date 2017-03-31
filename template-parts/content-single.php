<?php
/**
 * The template part for displaying posts content
 *
 * @package WordPress
 * @subpackage PISBI
 * @since PISBI 1.0
 */
?>
<?php if(!is_home() && !is_category() && !is_search()) {?>
    <article id="post-<?php the_ID();?>" class="contentDiv">
        <header class="contentHeader">
            <h1 class="title">
                <span class="link"><?php echo the_title();?></span>
            </h1>
        </header>
        <div id="postContent">
            <?php the_content();?>
        </div>
    </article>
    <article class="contentDiv contentTags">
        <?php the_tags('Tags: ', '', '');?>
    </article>
    <article class="contentDiv contentComments">
        <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        ?>
    </article>
<?php }?>