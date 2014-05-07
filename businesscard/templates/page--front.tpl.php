<div id="page">

  <div id="main">

    <div id="content" class="column" role="main">
      <div class="businesscard">
        <div class="businesscard-content">
          <h1>Hi, I'm John Doe</h1>

          <div class="businesscard-menu">
            <ul>
              <li onclick="document.location.href='#about'"><a href="#about">about</a></li>
              <li onclick="document.location.href='#work'"><a href="#work">work profile</a></li>
              <li onclick="document.location.href='#portfolio'"><a href="#portfolio">portfolio</a></li>
              <li onclick="document.location.href='#contact'"><a href="#contact">contact</a></li>
              <li onclick="document.location.href='#articles'"><a href="#articles">articles</a></li>
            </ul>
          </div>
          <div class="businesscard-intro">
            Hire me!
            <br />
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
          </div>
        </div>
      </div>

      <div id="about" class="contentbox" style="background: #00CC00">
        <div>
          <h2>about</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="work" class="contentbox" style="background: #FF9900">
        <div>
          <h2>work</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="portfolio" class="contentbox" style="background: #00FFFF">
        <div>
          <h2>portfolio</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="contact" class="contentbox" style="background: #FFFF00">
        <div>
          <h2>contact</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="articles" class="articles-container">
        <?php print render($page['content']); ?>
      </div>
    </div>

  </div>

  <?php //print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
