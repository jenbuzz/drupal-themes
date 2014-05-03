<div id="page">

  <div id="main">

    <div id="content" class="column" role="main">
      <div style="width: 100%; height: 100%; background: url('sites/all/themes/businesscard/images/profile.png') no-repeat center top #F2F2F2; background-size: 250px 250px">
        <div style="position:absolute; top: 50%; left: 50%; margin-left: -25%; margin-top: -150px; width: 50%; border: 1px solid #000000; height: 300px; margin-bottom: 20px; background: #F2F2F2; box-shadow: 5px 5px rgba(0, 0, 0, 0.2); overflow: hidden;">
          <h1 style="text-align: center; color: #555555;">Hi, I'm John Doe</h1>

          <style>
          .businesscard-menu ul li {
            height: 40px;
            background: #F2F2F2;
            cursor: pointer;
            padding-left: 10px;
            border-bottom: 1px solid #DDDDDD;
            margin-right: 20px;
          }
          .businesscard-menu ul li:hover {
            background: #EEEEEE;
          }
          .businesscard-menu ul li a {
            color: #555555;
            text-decoration: none;
          }
          .businesscard-menu ul li:hover a {
            color: #222222;
          }
          </style>

          <div class="businesscard-menu" style="width: 20%; min-width:150px; height: 100%; text-align: left; float: left">
            <ul style="list-style: none; padding: 0; margin: 0;">
              <li onclick="document.location.href='#about'"><a href="#about">about</a></li>
              <li onclick="document.location.href='#work'"><a href="#work">work profile</a></li>
              <li onclick="document.location.href='#portfolio'"><a href="#portfolio">portfolio</a></li>
              <li onclick="document.location.href='#contact'"><a href="#contact">contact</a></li>
            </ul>
          </div>
          <div style="float: left; width: 70%; color: #555555;">
            Hire me!
            <br />
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
          </div>
        </div>
      </div>

      <div id="about" style="width: 100%; height: 100%; background: #00CC00">
        <div style="width: 50%; margin: 0 auto; text-align: center; padding-bottom: 5px;">
          <h2>about</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="work" style="width: 100%; height: 100%; background: #FF9900">
        <div style="width: 50%; margin: 0 auto; text-align: center; padding-bottom: 5px;">
          <h2>work</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="portfolio" style="width: 100%; height: 100%; background: #00FFFF">
        <div style="width: 50%; margin: 0 auto; text-align: center; padding-bottom: 5px;">
          <h2>portfolio</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div id="contact" style="width: 100%; height: 100%; background: #FFFF00">
        <div style="width: 50%; margin: 0 auto; text-align: center; padding-bottom: 5px;">
          <h2>contact</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <?php print render($page['content']); ?>
    </div>

  </div>

  <?php //print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
