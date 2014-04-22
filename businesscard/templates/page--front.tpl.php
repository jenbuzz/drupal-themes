<div id="page">

  <header class="header" id="header" role="banner">
    <?php print render($page['header']); ?>
  </header>

  <div id="main">

    <div id="content" class="column" role="main">
      <div style="width: 50%; margin: 0 auto; border: 1px solid #000000; height: 300px">
        <h1 style="text-align: center">John Doe</h1>

        <div style="width: 100%; height: 204px; background: #eeeeee; text-align: center">
          <ul style="list-style: none; padding: 0;">
            <li><a href="#">about me</a></li>
            <li><a href="#">work profile</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">contact</a></li>
          </ul>
        </div>
      </div>

      <?php print render($page['content']); ?>
    </div>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
