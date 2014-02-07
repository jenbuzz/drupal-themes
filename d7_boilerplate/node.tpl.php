<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php echo $attributes; ?>>
  <?php if (!$page): ?>
    <h2<?php echo $title_attributes; ?>><a href="<?php echo $node_url; ?>"><?php echo $title; ?></a></h2>
  <?php endif; ?>

  <div class="content"<?php echo $content_attributes; ?>>
    <?php 
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      echo render($content);
    ?>
  </div>

</div>
