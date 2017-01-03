<?php
    $currentLink = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>";/>
	<meta name="description" content="<?php bloginfo('description');?>"/>
    <meta name="keywords" content="Igreja Batista, Igreja, Batista, Jesus, Cristo, Jesus Cristo, Deus, Graça, Evangelho, Bíblia"/>

    <meta property="og:site_name" content="<?php bloginfo('name');?>"/>
    <meta property="og:title" content="<?php bloginfo('name');?>"/>
    <meta property="og:description" content="<?php bloginfo('description');?>"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri() . '/screenshot.png';?>"/>
    <meta property="og:url" content="<?php echo $currentLink;?>"/>
    
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="<?php bloginfo('name');?>">
    <meta name="twitter:description" content="<?php bloginfo('description');?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() . '/screenshot.png';?>">
    <meta name="twitter:url" content="<?php echo $currentLink;?>">
    
    <meta itemprop="name" content="<?php bloginfo('name');?>">
    <meta itemprop="description" content="<?php bloginfo('description');?>">
    <meta itemprop="image" content="<?php echo get_template_directory_uri() . '/screenshot.png';?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/style.css';?>"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url');?>"/>
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url');?>"/>
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url');?>"/>

    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header id="cabecalho">
    <?php
        $homeLink = get_option('home') . "/";

        if($currentLink == $homeLink) {
            $homeMenu = 'homeLinkActive';
        }
        else {
            $homeMenu = 'homeLink';
        }
    ?>
    <div id="siteLogo">
        <h1 id="siteName"><a href="<?php echo get_option('home');?>"><?php bloginfo('name');?></a></h1>
    </div>
</header>
<?php if (has_nav_menu('primary')) {?>
    <input type="checkbox" id="toggleMenuInput"/>
    <label for="toggleMenuInput" id="toggleMenu"></label>
    <div id="menuContainer">
        <nav id="menu" class="menu">
            <span id="<?php echo $homeMenu;?>"><a href="<?php echo get_option('home');?>"></a></span>
            <?php
                wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'menuUl',
                        'container' => false
                    )
                );
                get_search_form();
            ?>
        </nav>
    </div>
    <?php } else {?>
    <div id="menuContainer">
        <nav id="menu" class="menu">
            <span id="<?php echo $homeMenu;?>"><a href="<?php echo get_option('home');?>"></a></span>
        </nav>
    </div>
<?php }?>