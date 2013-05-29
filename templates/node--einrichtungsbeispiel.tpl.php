<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <div class="content" <?php print $content_attributes; ?>>
        
        <?php if ($view_mode == 'teaser'): ?>


        
        <?php print render($content['field_hauptbild'][0]); ?>

        <?php print render($content['field_beispielnummer']); ?>
        
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
        <h1 <?php print $title_attributes; ?>>
            <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
        </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>


        <?php endif; ?>
    
        
        <?php if ($view_mode == 'full'): ?>
        
        <ul class="node-navigation top">
            <li class="next"><?php print pn_node($node, 'n'); ?></li>
            <li class="prev"><?php print pn_node($node, 'p'); ?></li>
        </ul> 

        <div class="einrichtungsbeispiel-main">
            <div class="flexslider flexslider-hauptbild">
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
            <div class="preis">
                <?php print render($content['field_preisgruppe']); ?>
            </div>
        </div>
        
        <div id="tab-container" class="tab-container">
                <ul class='tabs'>
                    <li class='tab'><a href="#tab-1">Materialien / Oberflächen</a></li>
                    <li class='tab'><a href="#tab-2">Produkte</a></li>
                    <li class='tab'><a href="#tab-3">technische Besonderheiten</a></li>
                    <li class='tab'><a href="#tab-4">optionale Ausstattung</a></li>
                    <li class='tab'><a href="#tab-5">Planzeichnungen</a></li>
                </ul>
                <div id="tab-1" class="tab-pane">
                    <h2>Materialien / Oberflächen</h2>
                    <p>Das Beispiel ist dargestellt in</p>
                    <?php print render($content['field_materialien']); ?>
                    <a href="/content/farben_und_hoelzer" class="more-wood">
                        <div>Weitere Farben / Hölzer </div>
                        <img src="/sites/default/files/bilder/41.jpg">
                    </a>
                </div>
                <div id="tab-2" class="tab-pane">
                    <h2>Produkte</h2>
                    <?php print render($content['field_produkte']); ?>
                </div>
                <div id="tab-3" class="tab-pane">
                    <h2>technische Besonderheiten</h2>
                    <?php print render($content['field_besonderheiten']); ?>
                </div>
                <div id="tab-4" class="tab-pane">
                    <h2>optionale Ausstattung</h2>
                    <?php print render($content['field_ausstattung']); ?>
                </div>
                <div id="tab-5" class="tab-pane">
                    <h2>Planzeichnungen</h2>
                    <?php print render($content['field_planzeichnung']); ?>
                </div>
        </div> 
        
        <ul class="node-navigation bottom">
            <li class="next"><?php print pn_node($node, 'n'); ?></li>
            <li class="prev"><?php print pn_node($node, 'p'); ?></li>
        </ul>
            
        
        <?php endif; ?>

    </div>
</div>
