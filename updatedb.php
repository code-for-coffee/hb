<?php
/***************************************************************************
 *                               updatedb.php
 * 
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

define('IN_PHPBB', true);
$phpbb_root_path = './';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//


if( !$userdata['session_logged_in'] )
{
   $header_location = ( @preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE')) ) ? 'Refresh: 0; URL=' : 'Location: ';
   header($header_location . append_sid('login.'.$phpEx.'?redirect=db_update.'.$phpEx, true));
   exit;
}

if( $userdata['user_level'] != ADMIN )
{
   message_die(GENERAL_MESSAGE, 'You are not authorised to access this page');
}


$page_title = 'Updating the database';
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

echo '<table width="100%" cellspacing="1" cellpadding="2" border="0" class="forumline">';
echo '<tr><th>Updating the database</th></tr><tr><td><span class="genmed"><ul type="circle">';


$sql = array();
$sql[] = "CREATE TABLE " . $table_prefix . "buddies (user_id mediumint(8) unsigned NOT NULL default '0', buddy_id mediumint(8) unsigned NOT NULL default '0') TYPE=MyISAM;";
$sql[] = "ALTER TABLE " . $table_prefix . "ranks ADD tag_close VARCHAR(255) NOT NULL AFTER rank_image;";
$sql[] = "ALTER TABLE " . $table_prefix . "ranks ADD tag_open VARCHAR(255) NOT NULL AFTER rank_image;";

for( $i = 0; $i < count($sql); $i++ )
{
   if( !$result = $db->sql_query ($sql[$i]) )
   {
      $error = $db->sql_error();

      echo '<li>' . $sql[$i] . '<br /> +++ <font color="#FF0000"><b>Error:</b></font> ' . $error['message'] . '</li><br />';
   }
   else
   {
      echo '<li>' . $sql[$i] . '<br /> +++ <font color="#00AA00"><b>Successfull</b></font></li><br />';
   }
}


echo '</ul></span></td></tr><tr><td class="catBottom" height="28">&nbsp;</td></tr>';
echo '<tr><th>End</th></tr><tr><td><span class="genmed">Installation is now finished. Please be sure to delete this file now.<br /></span></td></tr>';
echo '<tr><td class="catBottom" height="28" align="center"><span class="genmed"><a href="' . append_sid("index.$phpEx") . '">Have a nice day</a></span></td></table>';

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>
