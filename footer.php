<footer id="rodape">
    <?php if (has_nav_menu('social')) {?>
    <nav id="socialMenu">
        <?php
            wp_nav_menu(array(
                    'theme_location' => 'social',
                    'container' => 'none',
                    'menu_class'     => 'menuUl'
                )
            );
        ?>
    </nav>
    <?php }?>
    <div class="siteInfo">
        <span id="spanInfo"><?php bloginfo('name');?> - Todos os direitos reservados. &copy;</span>
    </div> 
</footer>
<?php wp_footer();?>
<?php
?>
</body>
</html>