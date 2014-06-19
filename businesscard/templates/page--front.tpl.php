<div id="page">

  <div id="main">

    <div id="content" class="column" role="main">
      <div class="businesscard">
        <div class="businesscard-content">
          <h1 id="businesscard-title">Hi, I'm John Doe</h1>
          <div class="businesscard-menu">
            <ul>
              <li onclick="document.location.href='#about'"><a class="button glow" href="#about">about</a></li>
              <li onclick="document.location.href='#work'"><a class="button glow" href="#work">work profile</a></li>
              <li onclick="document.location.href='#portfolio'"><a class="button glow" href="#portfolio">portfolio</a></li>
              <li onclick="document.location.href='#contact'"><a class="button glow" href="#contact">contact</a></li>
              <li onclick="document.location.href='#articles'"><a class="button glow" href="#articles">articles</a></li>
            </ul>
          </div>
          <div class="businesscard-intro">
            Hire me!
            <br />
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
          </div>
        </div>
      </div>

      <div id="about" class="contentbox" style="background: #FF4136; color: #FFFFFF;">
        <div>
          <h2>about <a href="#page"><span class="fa fa-level-up"></span></a></h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="work" class="contentbox" style="background: #85144B; color: #FFFFFF;">
        <div>
          <h2>work profile <a href="#page"><span class="fa fa-level-up"></span></a></h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="portfolio" class="contentbox" style="background: #001F3F; color: #FFFFFF;">
        <div>
          <h2>portfolio <a href="#page"><span class="fa fa-level-up"></span></a></h2>
          <ul>
              <li><a href="#"><img src="sites/all/themes/businesscard/images/portfolio1.png" /></a></li>
              <li><a href="#"><img src="sites/all/themes/businesscard/images/portfolio2.png" /></a></li>
            </ul>
        </div>
      </div>

      <div id="contact" class="contentbox" style="background: #B10BC9; color: #FFFFFF;">
        <div>
          <h2>contact <a href="#page"><span class="fa fa-level-up"></span></a></h2>
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
