<div id="page">

  <header class="header" id="header" role="banner">
    <?php print render($page['header']); ?>
  </header>

  <div id="main">

    <div id="content" class="column" role="main">
      <div style="width: 50%; margin: 0 auto; border: 1px solid #000000; height: 300px; margin-bottom: 20px;">
        <h1 style="text-align: center">John Doe</h1>

        <div style="width: 100%; height: 204px; background: #eeeeee; text-align: center">
          <ul style="list-style: none; padding: 0;">
            <li><a href="#about">about</a></li>
            <li><a href="#work">work profile</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#contact">contact</a></li>
          </ul>
        </div>
      </div>

      <div id="about" style="width: 100%; background: #00CC00">
        <div style="width: 50%; margin: 0 auto; text-align: center; padding-bottom: 5px;">
          <h2>about</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="work" style="width: 100%; background: #FF9900">
        <div style="width: 50%; margin: 0 auto; text-align: center; padding-bottom: 5px;">
          <h2>work</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="portfolio" style="width: 100%; background: #00FFFF">
        <div style="width: 50%; margin: 0 auto; text-align: center; padding-bottom: 5px;">
          <h2>portfolio</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="contact" style="width: 100%; background: #FFFF00">
        <div style="width: 50%; margin: 0 auto; text-align: center; padding-bottom: 5px;">
          <h2>contact</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <?php print render($page['content']); ?>
    </div>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
