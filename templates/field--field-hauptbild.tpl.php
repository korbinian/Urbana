<?php foreach ($items as $delta => $item): ?>
<!--	<?php print_r ($item); ?> -->

<!--	<?= "base" . $base_path ?> -->
  <li data-thumb="/sites/default/files/<?php print $item['#item']['filename']?>">
    <?php print render($item); ?>
  </li>
<?php endforeach; ?>
