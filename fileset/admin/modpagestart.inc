<?php

/*modpagestart.inc by BigJim */ 

define('IN_ADMIN', true); 

$phpbb_root_path = './../'; 
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
   header("Location: " . append_sid("../login.$phpEx")); 
} 
else if ( ( $userdata['user_level'] != MOD ) && ( $userdata['user_level'] != ADMIN ) )
{ 
   message_die(GENERAL_MESSAGE, $lang['Not_admin']); 
} 

if ( !$no_page_header ) 
{ 
   // Not including the pageheader can be neccesarry if META tags are 
   // needed in the calling script. 
   include('page_header_admin.'.$phpEx); 
} 

?>