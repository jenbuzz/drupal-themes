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
