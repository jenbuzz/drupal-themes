(function ($, Drupal, window, document, undefined) {

Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    var config = new shinejs.Config({
      opacity: 0.4,
      shadowRGB: new shinejs.Color(255, 255, 255),
      offset: 0.8
    });
    var shine = new Shine(document.getElementById('businesscard-title'), config);
      window.addEventListener('mousemove', function(event) {
      shine.light.position.x = event.clientX;
      shine.light.position.y = event.clientY;
      shine.draw();
    }, false);

  }
};

})(jQuery, Drupal, this, this.document);
