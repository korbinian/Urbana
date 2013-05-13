<?php foreach ($items as $delta => $item): ?>
  <li data-thumb="<?php print render($item); ?>">
    <?php print render($item); ?>
  </li>
<?php endforeach; ?>
