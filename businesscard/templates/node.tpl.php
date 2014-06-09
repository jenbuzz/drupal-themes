<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix<?php if ($is_front) { echo ' article-front button curl-top-left'; } ?>"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    </header>
  <?php endif; ?>

  <?php
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

</article>
