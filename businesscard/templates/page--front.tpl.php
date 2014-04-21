<div id="page">

  <header class="header" id="header" role="banner">
    <?php print render($page['header']); ?>
  </header>

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['content']); ?>
    </div>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
