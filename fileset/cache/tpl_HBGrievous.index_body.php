<?php

// eXtreme Styles mod cache. Generated on Sat, 19 Feb 2005 17:20:17 -0800 (time=1108862417)

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
<table width="100%" cellpadding="3" cellspacing="1" border="0">
    <tr>
       <td class="MainMenuRow" width="100%" align="left"><?php echo isset($this->vars['TOTAL_POSTS']) ? $this->vars['TOTAL_POSTS'] : $this->lang('TOTAL_POSTS'); ?>.&nbsp;&nbsp;<?php echo isset($this->vars['TOTAL_USERS_ONLINE']) ? $this->vars['TOTAL_USERS_ONLINE'] : $this->lang('TOTAL_USERS_ONLINE'); ?>.</td>
    </tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="MainMenuRow">
    <tr>
      <td width="65%" align="left"><font size="1">
      <script language="javascript" type="text/javascript">
<!--
	CFIG.writeButton();
// -->
      </script></font><a href="javascript:CFIG.cmd('collapseAll');" class="MainMenuLink">Hide Forums</a>&nbsp;|&nbsp;<a href="javascript:CFIG.cmd('expandAll');" class="MainMenuLink">Show Forums</a></td>
      <td width="5%" align="left"><font size="1">Topics</font></td>
      <td width="5%" align="left"><font size="1">Posts</font></td>
      <td width="25%" align="right"><font size="1">Last Message</font></td>
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
<table width="100%" cellpadding="3" cellspacing="0" border="0">
      <?php

$catrow_count = ( isset($this->_tpldata['catrow.']) ) ?  sizeof($this->_tpldata['catrow.']) : 0;
for ($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
 $catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
 $catrow_item['S_ROW_COUNT'] = $catrow_i;
 $catrow_item['S_NUM_ROWS'] = $catrow_count;

?>
<tr>      
      <td onclick="CFIG_slideCat('<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>', false);" title="<?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?>" width="3%" class="BoardColumn" align="left"><span class="BoardColumn"><img name="icon_sign_<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>" src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" border="0" height="15" width="15" /></span></td>
      <td width="62%" class="BoardColumn" onclick="CFIG_slideCat('<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>', false);" style="cursor:pointer;cursor:hand;"  title="<?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?>" width="3%" class="BoardColumn"><?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?></a>
      <td width="5%" class="BoardColumn" onclick="CFIG_slideCat('<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>', false);" style="cursor:pointer;cursor:hand;"  title="<?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?>" width="3%" class="BoardColumn">&nbsp;</td>
      <td width="5%" class="BoardColumn" onclick="CFIG_slideCat('<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>', false);" style="cursor:pointer;cursor:hand;"  title="<?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?>" width="3%" class="BoardColumn">&nbsp;</td>
      <td width="25%" class="BoardColumn" onclick="CFIG_slideCat('<?php echo isset($catrow_item['CAT_ID']) ? $catrow_item['CAT_ID'] : ''; ?>', false);" style="cursor:pointer;cursor:hand;"  title="<?php echo isset($catrow_item['CAT_DESC']) ? $catrow_item['CAT_DESC'] : ''; ?>" width="3%" class="BoardColumn">&nbsp;</td>
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
     <td class="BoardRowHeading" width="3%" nowrap="nowrap">&nbsp;<img src="<?php echo isset($forumrow_item['FORUM_FOLDER_IMG']) ? $forumrow_item['FORUM_FOLDER_IMG'] : ''; ?>" width="2" height="9">&nbsp;</td>
      <td width="62%" class="BoardRowBody"><a class="SubjectLink" href="<?php echo isset($forumrow_item['U_VIEWFORUM']) ? $forumrow_item['U_VIEWFORUM'] : ''; ?>"><?php echo isset($forumrow_item['FORUM_NAME']) ? $forumrow_item['FORUM_NAME'] : ''; ?></a>&nbsp;-&nbsp;<span class="ForumDescription"><?php echo isset($forumrow_item['FORUM_DESC']) ? $forumrow_item['FORUM_DESC'] : ''; ?></span></td>
      <td class="BoardRowHeading" width="5%" align="center">&nbsp;<?php echo isset($forumrow_item['TOPICS']) ? $forumrow_item['TOPICS'] : ''; ?>&nbsp;</td>
      <td class="BoardRowHeading" width="5%" align="center">&nbsp;<?php echo isset($forumrow_item['POSTS']) ? $forumrow_item['POSTS'] : ''; ?>&nbsp;</td>
      <td class="BoardRowHeading" width="25%" align="right"><span style='font-size: 9px;'><?php echo isset($forumrow_item['LAST_POST']) ? $forumrow_item['LAST_POST'] : ''; ?></span></td>
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