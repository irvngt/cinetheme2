<?php  

//https://codex.wordpress.org/Dashboard_Widgets_API
//https://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
//https://codex.wordpress.org/Administration_Screens
//https://codex.wordpress.org/Adding_Administration_Menus

  function cinetheme_add_editor_styles()
  {
    global $google_fonts;
    add_editor_style($google_fonts);
    add_editor_style('css/custom_properties.css');
    add_editor_style('css/custom_editor_style.css');
  }
  add_action('admin_init', 'cinetheme_add_editor_styles');


  function cinetheme_user_contactmethods($data_user)
  {
    $data_user['facebook'] =__('Facebook','cinetheme');
    $data_user['twitter'] =__('Twitter','cinetheme');

    return $data_user;
  }
  add_filter('user_contactmethods', 'cinetheme_user_contactmethods');

?>