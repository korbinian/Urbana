<header class="site-header">
    <div class="row">
        
        <div class="branding">
            <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>">
            </a>
            <?php endif; ?>
            
            <?php if ($site_name || $site_slogan): ?>
            <div class="site-title-and-tagline">
                <?php if ($site_name): ?>
                <h1 class="site-title">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                        <?php print $site_name; ?>
                    </a>
                </h1>
                <?php endif; ?>
                <?php if ($site_slogan): ?>
                <p class="site-tagline">
                    <?php print $site_slogan; ?>
                </p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="call-to-action">
            <?php print render($page['header']); ?>
        </div>
    </div>
</header>

<nav class="site-nav">
    <div class="row">
        <div class="nav-main">
            <?php if ($page['navigation'] || $main_menu): ?>
            <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
            'id' => 'main-menu',
            'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
            ),
            )); ?>
            <?php print render($page['navigation']); ?>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="site-main">
    <div class="row">
        <div class="site-content">
            <?php print $breadcrumb; ?>
            <!--<?php print $messages; ?>-->
            <!--<?php print $feed_icons; ?>-->
            
            <div class="col-left">
                <article>                
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?>
                    <h1 class="page-title">
                        <?php print $title; ?>
                    </h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php print render($page['content']); ?>
                </article> 
            </div>
            
            <div class="col-right">
                <img src="<?php print $base_path; ?>sites/default/files/blume.png" alt="" class="flower">
                <article>
                    <?php print render($page['front-aside']); ?>
                </article>
            </div>

        </div>
        
        <aside class="sidebar">
            <?php print render($page['sidebar']); ?>
        </aside>
        
        <div class="sub">
        <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
        <?php endif; ?>
        <?php if ($tabs = render($tabs)): ?>
                <?php print $tabs; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="row">
        <div class="site-info">
            <?php print render($page['footer-top']); ?>
        </div>
        <div class="footer-first">
            <?php print render($page['footer-first']); ?>
        </div>
        <div class="footer-second">
            <?php print render($page['footer-second']); ?>
        </div>
        <div class="footer-third">
            <?php print render($page['footer-third']); ?>
        </div>
    </div>
</footer>

