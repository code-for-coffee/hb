<?php

// eXtreme Styles mod cache. Generated on Sat, 22 Jan 2005 16:55:07 +0000 (time=1106412907)

?><script language="javascript" type="text/javascript" src="<?php echo isset($this->vars['U_CFI_JSLIB']) ? $this->vars['U_CFI_JSLIB'] : $this->lang('U_CFI_JSLIB'); ?>"></script>
<script language="javascript" type="text/javascript">
<!--

var CFIG_Version = "DHTML Collapsible Forum Index MOD v1.1.1";

var CFIG = new _CFIG('CFIG',
		['<?php echo isset($this->vars['IMG_PLUS']) ? $this->vars['IMG_PLUS'] : $this->lang('IMG_PLUS'); ?>', '<?php echo isset($this->vars['IMG_MINUS']) ? $this->vars['IMG_MINUS'] : $this->lang('IMG_MINUS'); ?>'],
		['<?php echo isset($this->vars['IMG_DW_ARROW']) ? $this->vars['IMG_DW_ARROW'] : $this->lang('IMG_DW_ARROW'); ?>', '<?php echo isset($this->vars['IMG_UP_ARROW']) ? $this->vars['IMG_UP_ARROW'] : $this->lang('IMG_UP_ARROW'); ?>'],
		['<?php echo isset($this->vars['COOKIE_PATH']) ? $this->vars['COOKIE_PATH'] : $this->lang('COOKIE_PATH'); ?>', '<?php echo isset($this->vars['COOKIE_DOMAIN']) ? $this->vars['COOKIE_DOMAIN'] : $this->lang('COOKIE_DOMAIN'); ?>', (('<?php echo isset($this->vars['COOKIE_SECURE']) ? $this->vars['COOKIE_SECURE'] : $this->lang('COOKIE_SECURE'); ?>' == '0') ? false : true)]);
	CFIG.T['cookie'] = '<?php echo isset($this->vars['CFI_COOKIE_NAME']) ? $this->vars['CFI_COOKIE_NAME'] : $this->lang('CFI_COOKIE_NAME'); ?>';
	CFIG.T['title'] = ['<?php echo isset($this->vars['L_CFI_OPTIONS']) ? $this->vars['L_CFI_OPTIONS'] : $this->lang('L_CFI_OPTIONS'); ?>', '<?php echo isset($this->vars['L_CFI_OPTIONS_EX']) ? $this->vars['L_CFI_OPTIONS_EX'] : $this->lang('L_CFI_OPTIONS_EX'); ?>'];
	CFIG.T['close'] = '<?php echo isset($this->vars['L_CFI_CLOSE']) ? $this->vars['L_CFI_CLOSE'] : $this->lang('L_CFI_CLOSE'); ?>';
	CFIG.T['delete'] = '<?php echo isset($this->vars['L_CFI_DELETE']) ? $this->vars['L_CFI_DELETE'] : $this->lang('L_CFI_DELETE'); ?>';
	CFIG.T['restore'] = '<?php echo isset($this->vars['L_CFI_RESTORE']) ? $this->vars['L_CFI_RESTORE'] : $this->lang('L_CFI_RESTORE'); ?>';
	CFIG.T['save'] = '<?php echo isset($this->vars['L_CFI_SAVE']) ? $this->vars['L_CFI_SAVE'] : $this->lang('L_CFI_SAVE'); ?>';
	CFIG.T['expand_all'] = '<?php echo isset($this->vars['L_CFI_EXPAND_ALL']) ? $this->vars['L_CFI_EXPAND_ALL'] : $this->lang('L_CFI_EXPAND_ALL'); ?>';
	CFIG.T['collapse_all'] = '<?php echo isset($this->vars['L_CFI_COLLAPSE_ALL']) ? $this->vars['L_CFI_COLLAPSE_ALL'] : $this->lang('L_CFI_COLLAPSE_ALL'); ?>';
	CFIG.T['u_index'] = '<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>';
	CFIG.allowed = true;

	if( CFIG.IsEnabled() && parseInt(CFIG.getQueryVar('c')) > 0 )
	{
		window.location.replace('<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>');
	}
// -->
</script>
<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" valign="bottom"><span class="gensmall">
	<?php

$switch_user_logged_in_count = ( isset($this->_tpldata['switch_user_logged_in.']) ) ?  sizeof($this->_tpldata['switch_user_logged_in.']) : 0;
for ($switch_user_logged_in_i = 0; $switch_user_logged_in_i < $switch_user_logged_in_count; $switch_user_logged_in_i++)
{
 $switch_user_logged_in_item = &$this->_tpldata['switch_user_logged_in.'][$switch_user_logged_in_i];
 $switch_user_logged_in_item['S_ROW_COUNT'] = $switch_user_logged_in_i;
 $switch_user_logged_in_item['S_NUM_ROWS'] = $switch_user_logged_in_count;

?>
	<?php echo isset($this->vars['LAST_VISIT_DATE']) ? $this->vars['LAST_VISIT_DATE'] : $this->lang('LAST_VISIT_DATE'); ?><br />
	<?php

} // END switch_user_logged_in

if(isset($switch_user_logged_in_item)) { unset($switch_user_logged_in_item); } 

?>
	<?php echo isset($this->vars['CURRENT_TIME']) ? $this->vars['CURRENT_TIME'] : $this->lang('CURRENT_TIME'); ?><br /></span>
<script language="javascript" type="text/javascript">
<!--
	CFIG.writeButton();
// -->
</script>
	<span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="nav"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></span></td>
	<td align="right" valign="bottom" class="gensmall">
		<?php

$switch_user_logged_in_count = ( isset($this->_tpldata['switch_user_logged_in.']) ) ?  sizeof($this->_tpldata['switch_user_logged_in.']) : 0;
for ($switch_user_logged_in_i = 0; $switch_user_logged_in_i < $switch_user_logged_in_count; $switch_user_logged_in_i++)
{
 $switch_user_logged_in_item = &$this->_tpldata['switch_user_logged_in.'][$switch_user_logged_in_i];
 $switch_user_logged_in_item['S_ROW_COUNT'] = $switch_user_logged_in_i;
 $switch_user_logged_in_item['S_NUM_ROWS'] = $switch_user_logged_in_count;

?>
		<a href="<?php echo isset($this->vars['U_SEARCH_NEW']) ? $this->vars['U_SEARCH_NEW'] : $this->lang('U_SEARCH_NEW'); ?>" class="gensmall"><?php echo isset($this->vars['L_SEARCH_NEW']) ? $this->vars['L_SEARCH_NEW'] : $this->lang('L_SEARCH_NEW'); ?></a><br /><a href="<?php echo isset($this->vars['U_SEARCH_SELF']) ? $this->vars['U_SEARCH_SELF'] : $this->lang('U_SEARCH_SELF'); ?>" class="gensmall"><?php echo isset($this->vars['L_SEARCH_SELF']) ? $this->vars['L_SEARCH_SELF'] : $this->lang('L_SEARCH_SELF'); ?></a><br />
		<?php

} // END switch_user_logged_in

if(isset($switch_user_logged_in_item)) { unset($switch_user_logged_in_item); } 

?>
		<a href="<?php echo isset($this->vars['U_SEARCH_UNANSWERED']) ? $this->vars['U_SEARCH_UNANSWERED'] : $this->lang('U_SEARCH_UNANSWERED'); ?>" class="gensmall"><?php echo isset($this->vars['L_SEARCH_UNANSWERED']) ? $this->vars['L_SEARCH_UNANSWERED'] : $this->lang('L_SEARCH_UNANSWERED'); ?></a></td>
  </tr>
</table>
<script language="javascript" type="text/javascript">
<!--
	CFIG.writePanel();

<?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ?  sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
CFIG.C['cat_<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>'] = new _CFIC('<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>', '<?php echo isset($catrow_item['DISPLAY']) ? $catrow_item['DISPLAY'] : ''; ?>');
<?php

$forumrow_count = ( isset($catrow_item['forumrow.']) ) ? sizeof($catrow_item['forumrow.']) : 0;
for ($forumrow_i = 0; $forumrow_i < $forumrow_count; $forumrow_i++)
{
 $forumrow_item = &$catrow_item['forumrow.'][$forumrow_i];
 $forumrow_item['S_ROW_COUNT'] = $forumrow_i;
 $forumrow_item['S_NUM_ROWS'] = $forumrow_count;

?>
if( CFIG.C['cat_<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>'] ) CFIG.C['cat_<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>'].add('forum_<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>');
<?php

} // END forumrow

if(isset($forumrow_item)) { unset($forumrow_item); } 

?>
<?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>

function CFIG_slideCat(cat_id, isLink)
{
	if( CFIG && CFIG.currentStep <= 0 )
	{
		if( CFIG.IsEnabled() && CFIG.C['cat_'+cat_id] )
		{
			if( isLink ) return false;
			CFIG.createQueue();
			CFIG.slideForums(cat_id);
			CFIG.execQueue();
			CFIG.saveIndexState(CFIG.T['cookie']);
			return false;	// omit the default action of the link.
		}
		if( !isLink )
		{
			var u_index = CFIG.T['u_index'];
			u_index += ( u_index.indexOf('?') > 0 ? '&' : '?' ) + 'c=' + parseInt(cat_id);
			window.location.replace(u_index);
			return false;
		}
	}
	return true;	// let the link do its job.
}
function CFIG_onLoad()
{
	if( CFIG_oldOnLoad )
	{
		CFIG_oldOnLoad();
		CFIG_oldOnLoad = null;
	}
	if( CFIG && CFIG.IsEnabled() )
	{
		CFIG.restoreIndexState(CFIG.T['cookie']);
	}
}
var CFIG_oldOnLoad = window.onload;
window.onload = CFIG_onLoad;
// -->
</script>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr> 
	<th colspan="2" class="thCornerL" height="25" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?>&nbsp;</th>
	<th width="50" class="thTop" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?>&nbsp;</th>
	<th width="50" class="thTop" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?>&nbsp;</th>
	<th class="thCornerR" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_LASTPOST']) ? $this->vars['L_LASTPOST'] : $this->lang('L_LASTPOST'); ?>&nbsp;</th>
  </tr>
  <?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ?  sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
  <tr onclick="CFIG_slideCat('<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>', false);" style="cursor:pointer;cursor:hand;"  title="<?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?>"> 
	<td class="catLeft" colspan="2" height="28">&nbsp;&nbsp;<img name="icon_sign_<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>" src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" border="0" />&nbsp;&nbsp;<span class="cattitle"><a href="<?php echo isset($catrow_item['U_VIEWCAT']) ? $catrow_item['U_VIEWCAT'] : ''; ?>" onclick="return CFIG_slideCat('<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>', true);" onfocus="this.blur();" class="cattitle"><?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?></a></span></td>
        <td class="rowpic" colspan="3" align="right">&nbsp;</td>
  </tr>
  <?php

$forumrow_count = ( isset($catrow_item['forumrow.']) ) ? sizeof($catrow_item['forumrow.']) : 0;
for ($forumrow_i = 0; $forumrow_i < $forumrow_count; $forumrow_i++)
{
 $forumrow_item = &$catrow_item['forumrow.'][$forumrow_i];
 $forumrow_item['S_ROW_COUNT'] = $forumrow_i;
 $forumrow_item['S_NUM_ROWS'] = $forumrow_count;

?>
  <tr id="forum_<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>_<?php echo isset($forumrow_item['FORUM_ID']) ? $forumrow_item['FORUM_ID'] : ''; ?>" style="display:<?php echo isset($forumrow_item['DISPLAY']) ? $forumrow_item['DISPLAY'] : ''; ?>;"> 
	<td class="row1" align="center" valign="middle" height="50"><img src="<?php echo isset($forumrow_item['FORUM_FOLDER_IMG']) ? $forumrow_item['FORUM_FOLDER_IMG'] : ''; ?>" width="46" height="25" alt="<?php echo isset($forumrow_item['L_FORUM_FOLDER_ALT']) ? $forumrow_item['L_FORUM_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($forumrow_item['L_FORUM_FOLDER_ALT']) ? $forumrow_item['L_FORUM_FOLDER_ALT'] : ''; ?>" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="<?php echo isset($forumrow_item['U_VIEWFORUM']) ? $forumrow_item['U_VIEWFORUM'] : ''; ?>" class="forumlink"><?php echo isset($forumrow_item['FORUM_NAME']) ? $forumrow_item['FORUM_NAME'] : ''; ?></a><br />
	  </span> <span class="genmed"><?php echo isset($forumrow_item['FORUM_DESC']) ? $forumrow_item['FORUM_DESC'] : ''; ?><br />
	  </span><span class="gensmall"><?php echo isset($forumrow_item['L_MODERATOR']) ? $forumrow_item['L_MODERATOR'] : ''; ?> <?php echo isset($forumrow_item['MODERATORS']) ? $forumrow_item['MODERATORS'] : ''; ?></span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall"><?php echo isset($forumrow_item['TOPICS']) ? $forumrow_item['TOPICS'] : ''; ?></span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall"><?php echo isset($forumrow_item['POSTS']) ? $forumrow_item['POSTS'] : ''; ?></span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><?php echo isset($forumrow_item['LAST_POST']) ? $forumrow_item['LAST_POST'] : ''; ?></span></td>
  </tr>
  <?php

} // END forumrow

if(isset($forumrow_item)) { unset($forumrow_item); } 

?>
  <?php

} // END catrow

if(isset($catrow_item)) { unset($catrow_item); } 

?>
</table>

<table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
  <tr> 
	<td align="left"><span class="gensmall"><a href="<?php echo isset($this->vars['U_MARK_READ']) ? $this->vars['U_MARK_READ'] : $this->lang('U_MARK_READ'); ?>" class="gensmall"><?php echo isset($this->vars['L_MARK_FORUMS_READ']) ? $this->vars['L_MARK_FORUMS_READ'] : $this->lang('L_MARK_FORUMS_READ'); ?></a></span></td>
	<td align="right"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
  </tr>
</table>

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr> 
	<td class="catHead" colspan="2" height="28"><span class="cattitle"><a href="<?php echo isset($this->vars['U_VIEWONLINE']) ? $this->vars['U_VIEWONLINE'] : $this->lang('U_VIEWONLINE'); ?>" class="cattitle"><?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?></a></span></td>
  </tr>
  <tr> 
	<td class="row1" align="center" valign="middle" rowspan="2"><img src="templates/subSilver/images/whosonline.gif" alt="<?php echo isset($this->vars['L_WHO_IS_ONLINE']) ? $this->vars['L_WHO_IS_ONLINE'] : $this->lang('L_WHO_IS_ONLINE'); ?>" /></td>
	<td class="row1" align="left" width="100%"><span class="gensmall"><?php echo isset($this->vars['TOTAL_POSTS']) ? $this->vars['TOTAL_POSTS'] : $this->lang('TOTAL_POSTS'); ?><br /><?php echo isset($this->vars['TOTAL_USERS']) ? $this->vars['TOTAL_USERS'] : $this->lang('TOTAL_USERS'); ?><br /><?php echo isset($this->vars['NEWEST_USER']) ? $this->vars['NEWEST_USER'] : $this->lang('NEWEST_USER'); ?></span>
	</td>
  </tr>
  <tr> 
	<td class="row1" align="left"><span class="gensmall"><?php echo isset($this->vars['TOTAL_USERS_ONLINE']) ? $this->vars['TOTAL_USERS_ONLINE'] : $this->lang('TOTAL_USERS_ONLINE'); ?> &nbsp; [ <?php echo isset($this->vars['L_WHOSONLINE_ADMIN']) ? $this->vars['L_WHOSONLINE_ADMIN'] : $this->lang('L_WHOSONLINE_ADMIN'); ?> ] &nbsp; [ <?php echo isset($this->vars['L_WHOSONLINE_MOD']) ? $this->vars['L_WHOSONLINE_MOD'] : $this->lang('L_WHOSONLINE_MOD'); ?> ]<br /><?php echo isset($this->vars['RECORD_USERS']) ? $this->vars['RECORD_USERS'] : $this->lang('RECORD_USERS'); ?><br /><?php echo isset($this->vars['LOGGED_IN_USER_LIST']) ? $this->vars['LOGGED_IN_USER_LIST'] : $this->lang('LOGGED_IN_USER_LIST'); ?></span></td>
  </tr>
</table>

<table width="100%" cellpadding="1" cellspacing="1" border="0">
<tr>
	<td align="left" valign="top"><span class="gensmall"><?php echo isset($this->vars['L_ONLINE_EXPLAIN']) ? $this->vars['L_ONLINE_EXPLAIN'] : $this->lang('L_ONLINE_EXPLAIN'); ?></span></td>
</tr>
</table>

<?php

$switch_user_logged_out_count = ( isset($this->_tpldata['switch_user_logged_out.']) ) ?  sizeof($this->_tpldata['switch_user_logged_out.']) : 0;
for ($switch_user_logged_out_i = 0; $switch_user_logged_out_i < $switch_user_logged_out_count; $switch_user_logged_out_i++)
{
 $switch_user_logged_out_item = &$this->_tpldata['switch_user_logged_out.'][$switch_user_logged_out_i];
 $switch_user_logged_out_item['S_ROW_COUNT'] = $switch_user_logged_out_i;
 $switch_user_logged_out_item['S_NUM_ROWS'] = $switch_user_logged_out_count;

?>
<form method="post" action="<?php echo isset($this->vars['S_LOGIN_ACTION']) ? $this->vars['S_LOGIN_ACTION'] : $this->lang('S_LOGIN_ACTION'); ?>">
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
	  <td class="catHead" height="28"><a name="login"></a><span class="cattitle"><?php echo isset($this->vars['L_LOGIN_LOGOUT']) ? $this->vars['L_LOGIN_LOGOUT'] : $this->lang('L_LOGIN_LOGOUT'); ?></span></td>
	</tr>
	<tr> 
	  <td class="row1" align="center" valign="middle" height="28"><span class="gensmall"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>: 
		<input class="post" type="text" name="username" size="10" />
		&nbsp;&nbsp;&nbsp;<?php echo isset($this->vars['L_PASSWORD']) ? $this->vars['L_PASSWORD'] : $this->lang('L_PASSWORD'); ?>: 
		<input class="post" type="password" name="password" size="10" maxlength="32" />
		&nbsp;&nbsp; &nbsp;&nbsp;<?php echo isset($this->vars['L_AUTO_LOGIN']) ? $this->vars['L_AUTO_LOGIN'] : $this->lang('L_AUTO_LOGIN'); ?> 
		<input class="text" type="checkbox" name="autologin" />
		&nbsp;&nbsp;&nbsp; 
		<input type="submit" class="mainoption" name="login" value="<?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?>" />
		</span> </td>
	</tr>
  </table>
</form>
<?php

} // END switch_user_logged_out

if(isset($switch_user_logged_out_item)) { unset($switch_user_logged_out_item); } 

?>

<br clear="all" />

<table cellspacing="3" border="0" align="center" cellpadding="0">
  <tr> 
	<td width="20" align="center"><img src="templates/subSilver/images/folder_new_big.gif" alt="<?php echo isset($this->vars['L_NEW_POSTS']) ? $this->vars['L_NEW_POSTS'] : $this->lang('L_NEW_POSTS'); ?>"/></td>
	<td><span class="gensmall"><?php echo isset($this->vars['L_NEW_POSTS']) ? $this->vars['L_NEW_POSTS'] : $this->lang('L_NEW_POSTS'); ?></span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="templates/subSilver/images/folder_big.gif" alt="<?php echo isset($this->vars['L_NO_NEW_POSTS']) ? $this->vars['L_NO_NEW_POSTS'] : $this->lang('L_NO_NEW_POSTS'); ?>" /></td>
	<td><span class="gensmall"><?php echo isset($this->vars['L_NO_NEW_POSTS']) ? $this->vars['L_NO_NEW_POSTS'] : $this->lang('L_NO_NEW_POSTS'); ?></span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="templates/subSilver/images/folder_locked_big.gif" alt="<?php echo isset($this->vars['L_FORUM_LOCKED']) ? $this->vars['L_FORUM_LOCKED'] : $this->lang('L_FORUM_LOCKED'); ?>" /></td>
	<td><span class="gensmall"><?php echo isset($this->vars['L_FORUM_LOCKED']) ? $this->vars['L_FORUM_LOCKED'] : $this->lang('L_FORUM_LOCKED'); ?></span></td>
  </tr>
</table>
