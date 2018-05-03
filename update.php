<?php

if (isset($_POST['action'])) {
  switch ($_POST['action']) {
    case 'version':
      echo '1.1';
      break;
    case 'info':
      $obj = new stdClass();
      $obj->slug = 'plugin.php';
      $obj->plugin_name = 'plugin.php';
      $obj->new_version = '1.1';
      $obj->requires = '3.0';
      $obj->tested = '3.3.1';
      $obj->downloaded = 12540;
      $obj->last_updated = '2012-01-12';
      $obj->sections = array(
        'description' => 'The new version of the Auto-Update plugin',
        'another_section' => 'This is another section',
        'changelog' => 'Some new features'
      );
      $obj->download_link = 'http://localhost/update.php';
      echo serialize($obj);
    case 'license':
      echo 'false';
      break;
  }
} else {
    header('Cache-Control: public');
    header('Content-Description: File Transfer');
    header('Content-Type: application/zip');
    readfile('update.zip');
}
