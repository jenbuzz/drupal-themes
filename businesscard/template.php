<?php

function businesscard_form_alter(&$form, &$form_state, $form_id) {
    
  if (strstr($form_id, 'user_login')) {
    $form['name']['#attributes']['class'][] = 'form-login-input';
    $form['name']['#description'] = false;
    $form['pass']['#attributes']['class'][] = 'form-login-input';
    $form['pass']['#description'] = false;
    $form['actions']['submit']['#attributes']['class'][] = 'form-login-submit';
  }
    
}

function businesscard_links__system_main_menu($variables) {
  $classes = '';
  foreach ($variables['attributes']['class'] as $class) {
    $classes.= $class.' ';
  }
  if ($classes!=='') {
    $classes = ' class="'.$classes.'"';
  }
  $html = "<div>";
  $html.= "  <ul".$classes.">";
  foreach ($variables['links'] as $link) {
    $path = isset($link['path']) ? $link['path'] : '/';

    $link['attributes']['class'] = 'button glow';

    $html.= "<li>".l($link['title'], $path, $link)."</li>";
  }
  $html.= "  </ul>\n";
  $html.= "</div>\n";

  return $html;
}

function businesscard_breadcrumb($variables) {
  $seperator = ' &gt; ';

  $html = '';

  if (isset($variables['breadcrumb']) && !empty($variables['breadcrumb'])) {
    foreach ($variables['breadcrumb'] AS $breadcrumb) {
      $html.= '<li>' . $breadcrumb . $seperator . '</li>';
    }
  }

  return $html;
}
