<?php foreach ($items as $delta => $item): ?>
<!--	<?php print_r ($item); ?> -->

<!--	<?= "base" . $base_path ?> -->
  <li data-thumb="/sites/default/files/<?php print $item['#item']['filename']?>">
    <a href="/sites/default/files/<?php print $item['#item']['filename']?>" class="colorbox">
        <?php print render($item); ?>
    </a>
  </li>
<?php endforeach; ?>
