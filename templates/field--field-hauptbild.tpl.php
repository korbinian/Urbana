<?php foreach ($items as $delta => $item): ?>
<!--	<?php print_r ($item); ?> -->

<!--	<?= "base" . $base_path ?> -->
  <li data-thumb="<?php print file_create_url($item['#item']['uri'])?>">
    <a href="<?php print file_create_url($item['#item']['uri']) ?>" class="colorbox">

       <!-- blaaa <img src="/sites/default/files/<?php print file_create_url($item['#item']['uri'])?>" alt="" />	 -->
       <?php print render($item); ?> 
    </a>
  </li>
<?php endforeach; ?>
