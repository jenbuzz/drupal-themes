<style>
  article h2 a {
    color: #222222;
    text-decoration: none;
  }
  article h2 a:hover {
    text-decoration: underline;
  }
</style>

<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?> style="width: 50%; margin: 0 auto;">

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
