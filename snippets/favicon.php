<?php if ($favicon = site()->favicon()->toFile()) : ?>
  <link rel="shortcut icon" href="<?= $favicon->url() ?>">
<?php endif ?>