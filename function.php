/*
* Create WordPress User Via FTP
* Placed the code at the top of the active theme functions.php file
* After placed the code, reload the site and login.
*/ Make sure remove the code block after adding user.

<?php $createuser = wp_create_user('ftpuser', 'weSD#$$aa22334', 'your@email.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?>
