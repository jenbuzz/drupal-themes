<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <header>
    <h1<?php print $title_attributes; ?>>
      <?php if (!$page): ?>
      <a href="<?php print $node_url; ?>">
      <?php endif; ?>
        <?php print $title; ?>
      <?php if (!$page): ?>
      </a>
      <?php endif; ?>
    </h1>
  </header>

  <div class="content"<?php print $content_attributes; ?>>
    <?php 
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      print render($content);
    ?>
  </div>
</article>
