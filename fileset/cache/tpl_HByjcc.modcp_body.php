<?php

// eXtreme Styles mod cache. Generated on Sat, 19 Feb 2005 13:19:18 -0800 (time=1108847958)

?>
<form method="post" action="<?php echo isset($this->vars['S_MODCP_ACTION']) ? $this->vars['S_MODCP_ACTION'] : $this->lang('S_MODCP_ACTION'); ?>">
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" class="BoardColumn"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> -> <a href="<?php echo isset($this->vars['U_VIEW_FORUM']) ? $this->vars['U_VIEW_FORUM'] : $this->lang('U_VIEW_FORUM'); ?>" class="nav"><?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></a></span></td>
  </tr>
</table>

  <table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
	<tr> 
	  <td class="BoardRowHeading" colspan="5" align="center" height="28"><span class="BoardRowHeadingLink"><?php echo isset($this->vars['L_MOD_CP']) ? $this->vars['L_MOD_CP'] : $this->lang('L_MOD_CP'); ?></span> 
	  </td>
	</tr>
	<tr> 
	  <td class="BoardRowBody" colspan="5" align="center"><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_MOD_CP_EXPLAIN']) ? $this->vars['L_MOD_CP_EXPLAIN'] : $this->lang('L_MOD_CP_EXPLAIN'); ?></span></td>
	</tr>
	<tr class="BoardColumn"> 
	  <th width="4%" class="thLeft" nowrap="nowrap">&nbsp;</th>
	  <th nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_TOPICS']) ? $this->vars['L_TOPICS'] : $this->lang('L_TOPICS'); ?>&nbsp;</th>
	  <th width="8%" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_REPLIES']) ? $this->vars['L_REPLIES'] : $this->lang('L_REPLIES'); ?>&nbsp;</th>
	  <th width="17%" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_LASTPOST']) ? $this->vars['L_LASTPOST'] : $this->lang('L_LASTPOST'); ?>&nbsp;</th>
	  <th width="5%" class="thRight" nowrap="nowrap">&nbsp;<?php echo isset($this->vars['L_SELECT']) ? $this->vars['L_SELECT'] : $this->lang('L_SELECT'); ?>&nbsp;</th>
	</tr>
	<?php

$topicrow_count = ( isset($this->_tpldata['topicrow.']) ) ?  sizeof($this->_tpldata['topicrow.']) : 0;
for ($topicrow_i = 0; $topicrow_i < $topicrow_count; $topicrow_i++)
{
 $topicrow_item = &$this->_tpldata['topicrow.'][$topicrow_i];
 $topicrow_item['S_ROW_COUNT'] = $topicrow_i;
 $topicrow_item['S_NUM_ROWS'] = $topicrow_count;

?>
	<tr> 
	  <td class="BoardRowHeading" align="center" valign="middle"><img src="<?php echo isset($topicrow_item['TOPIC_FOLDER_IMG']) ? $topicrow_item['TOPIC_FOLDER_IMG'] : ''; ?>" width="19" height="18" alt="<?php echo isset($topicrow_item['L_TOPIC_FOLDER_ALT']) ? $topicrow_item['L_TOPIC_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($topicrow_item['L_TOPIC_FOLDER_ALT']) ? $topicrow_item['L_TOPIC_FOLDER_ALT'] : ''; ?>" /></td>
	  <td class="BoardRowBody">&nbsp;<span class="BoardRowHeadingLink"><?php echo isset($topicrow_item['TOPIC_TYPE']) ? $topicrow_item['TOPIC_TYPE'] : ''; ?><a href="<?php echo isset($topicrow_item['U_VIEW_TOPIC']) ? $topicrow_item['U_VIEW_TOPIC'] : ''; ?>" class="BoardRowHeadingLink"><?php echo isset($topicrow_item['TOPIC_TITLE']) ? $topicrow_item['TOPIC_TITLE'] : ''; ?></a></span></td>
	  <td class="BoardRowHeading" align="center" valign="middle"><span class="BoardRowBodyLink"><?php echo isset($topicrow_item['REPLIES']) ? $topicrow_item['REPLIES'] : ''; ?></span></td>
	  <td class="BoardRowHeading" align="center" valign="middle"><span class="BoardRowBodyLink"><?php echo isset($topicrow_item['LAST_POST_TIME']) ? $topicrow_item['LAST_POST_TIME'] : ''; ?></span></td>
	  <td class="BoardRowHeading" align="center" valign="middle"> 
		<input type="checkbox" name="topic_id_list[]" value="<?php echo isset($topicrow_item['TOPIC_ID']) ? $topicrow_item['TOPIC_ID'] : ''; ?>" />
	  </td>
	</tr>
	<?php

} // END topicrow

if(isset($topicrow_item)) { unset($topicrow_item); } 

?>
	<tr align="right"> 
	  <td class="BoardColumn" colspan="5" height="29"> <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
		<input type="submit" name="delete" class="liteoption" value="<?php echo isset($this->vars['L_DELETE']) ? $this->vars['L_DELETE'] : $this->lang('L_DELETE'); ?>" />
		&nbsp; 
		<input type="submit" name="move" class="liteoption" value="<?php echo isset($this->vars['L_MOVE']) ? $this->vars['L_MOVE'] : $this->lang('L_MOVE'); ?>" />
		&nbsp; 
		<input type="submit" name="lock" class="liteoption" value="<?php echo isset($this->vars['L_LOCK']) ? $this->vars['L_LOCK'] : $this->lang('L_LOCK'); ?>" />
		&nbsp; 
		<input type="submit" name="unlock" class="liteoption" value="<?php echo isset($this->vars['L_UNLOCK']) ? $this->vars['L_UNLOCK'] : $this->lang('L_UNLOCK'); ?>" />
	  </td>
	</tr>
  </table>
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr class="BoardColumn"> 
	<td align="left" valign="middle"><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></b></span></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span><br /><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
</table>
</form>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
	<td align="right" class="BoardColumn"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>
