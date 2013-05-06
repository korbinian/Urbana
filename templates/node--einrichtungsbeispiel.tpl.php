<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <div class="content" <?php print $content_attributes; ?>>
        
        <?php if ($view_mode == 'teaser'): ?>

        <div class="flexslider">
            <ul class="slides">
                <li><?php print render($content['field_hauptbild']); ?></li>
            </ul>
        </div>


        <?php print render($content['field_beispielnummer']); ?>
        
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
        <h1 <?php print $title_attributes; ?>>
            <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
        </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php print render($content); ?>

        <?php endif; ?>
    
        


        <?php if ($view_mode == 'full'): ?>
        
        <ul class="node-navigation">
            <li class="next"><?php print pn_node($node, 'n'); ?></li>
            <li class="prev"><?php print pn_node($node, 'p'); ?></li>
        </ul> 

        <div class="einrichtungsbeispiel-main">
            <div class="flexslider">
                <ul class="slides">
                    <?php print render($content['field_hauptbild']); ?>
                </ul>
            </div>
            
            <div class="beispielnummer">
                <small>
                    <?php print render($content['field_beispielnummer']); ?>
                </small>
            </div>
            
            
        </div>

        <div class="einrichtungsbeispiel-details">
            <div class="spalte1">
                <?php print render($content['field_spalte_1']); ?>
            </div>
            <div class="spalte2">
                <?php print render($content['field_spalte_2']); ?>
            </div>
            <div class="wohnbereich">
                <?php print render($content['field_wohnbereich']); ?>
            </div>
            <div class="stil">
                <?php print render($content['field_stil']); ?>
            </div>
        </div>
        
        <div id="tab-container" class="tab-container">
                <ul class='tabs'>
                    <li class='tab'><a href="#tab-1">Ausstattung</a></li>
                    <li class='tab'><a href="#tab-2">Material</a></li>
                    <li class='tab'><a href="#tab-3">Besonderheiten</a></li>
                </ul>
                <div id="tab-1" class="tab-pane">
                    <h2>Ausstattung</h2>
                    <?php print render($content['field_ausstattung']); ?>
                </div>
                <div id="tab-2" class="tab-pane">
                    <h2>Material</h2>
                    <?php print render($content['field_materialien']); ?>
                </div>
                <div id="tab-3" class="tab-pane">
                    <h2>Besonderheiten</h2>
                    <?php print render($content['field_besonderheiten']); ?>
                </div>
            </div> 
            
        
        <?php endif; ?>

    </div>
</div>
