<?php

// eXtreme Styles mod cache. Generated on Tue, 25 Jan 2005 11:58:15 +0000 (time=1106654295)

?> 
<script language="Javascript" type="text/javascript">
	//
	// Should really check the browser to stop this whining ...
	//
	function select_switch(status)
	{
		for (i = 0; i < document.privmsg_list.length; i++)
		{
			document.privmsg_list.elements[i].checked = status;
		}
	}
</script>
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%" class="BoardColumn">
<tr><td>
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
  <tr> 
	<td valign="top" align="center" width="100%" class="MainMenuRow"> 
	  <table height="40" cellspacing="2" cellpadding="2" border="0">
		<tr valign="middle"> 
		  <td><?php echo isset($this->vars['INBOX_IMG']) ? $this->vars['INBOX_IMG'] : $this->lang('INBOX_IMG'); ?></td>
		  <td><span class="MainMenuLink"><?php echo isset($this->vars['INBOX']) ? $this->vars['INBOX'] : $this->lang('INBOX'); ?> &nbsp;</span></td>
		  <td><?php echo isset($this->vars['SENTBOX_IMG']) ? $this->vars['SENTBOX_IMG'] : $this->lang('SENTBOX_IMG'); ?></td>
		  <td><span class="MainMenuLink"><?php echo isset($this->vars['SENTBOX']) ? $this->vars['SENTBOX'] : $this->lang('SENTBOX'); ?> &nbsp;</span></td>
		  <td><?php echo isset($this->vars['OUTBOX_IMG']) ? $this->vars['OUTBOX_IMG'] : $this->lang('OUTBOX_IMG'); ?></td>
		  <td><span class="MainMenuLink"><?php echo isset($this->vars['OUTBOX']) ? $this->vars['OUTBOX'] : $this->lang('OUTBOX'); ?> &nbsp;</span></td>
		  <td><?php echo isset($this->vars['SAVEBOX_IMG']) ? $this->vars['SAVEBOX_IMG'] : $this->lang('SAVEBOX_IMG'); ?></td>
		  <td><span class="MainMenuLink"><?php echo isset($this->vars['SAVEBOX']) ? $this->vars['SAVEBOX'] : $this->lang('SAVEBOX'); ?> &nbsp;</span></td>
		</tr>
	  </table>
	</td>
	<td align="right"> 
	  <?php

$switch_box_size_notice_count = ( isset($this->_tpldata['switch_box_size_notice.']) ) ?  sizeof($this->_tpldata['switch_box_size_notice.']) : 0;
for ($switch_box_size_notice_i = 0; $switch_box_size_notice_i < $switch_box_size_notice_count; $switch_box_size_notice_i++)
{
 $switch_box_size_notice_item = &$this->_tpldata['switch_box_size_notice.'][$switch_box_size_notice_i];
 $switch_box_size_notice_item['S_ROW_COUNT'] = $switch_box_size_notice_i;
 $switch_box_size_notice_item['S_NUM_ROWS'] = $switch_box_size_notice_count;

?>
	  <table width="175" cellspacing="1" cellpadding="2" border="0" class="bodyline">
		<tr> 
		  <td colspan="3" width="175" class="MainMenuRow" nowrap="nowrap"><span class="MainMenuLink"><?php echo isset($this->vars['BOX_SIZE_STATUS']) ? $this->vars['BOX_SIZE_STATUS'] : $this->lang('BOX_SIZE_STATUS'); ?></span></td>
		</tr>
		<tr> 
		  <td colspan="3" width="175" class="row2">
			<table cellspacing="0" cellpadding="1" border="0" class="MainMenuRow">
			  <tr> 
				<td class="MainMenuRow"><img src="templates/HBPreview/images/spacer.gif" width="<?php echo isset($this->vars['INBOX_LIMIT_IMG_WIDTH']) ? $this->vars['INBOX_LIMIT_IMG_WIDTH'] : $this->lang('INBOX_LIMIT_IMG_WIDTH'); ?>" height="8" alt="<?php echo isset($this->vars['INBOX_LIMIT_PERCENT']) ? $this->vars['INBOX_LIMIT_PERCENT'] : $this->lang('INBOX_LIMIT_PERCENT'); ?>" /></td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr> 
		  <td width="33%" class="MainMenuRow"><span class="MainMenuLink">0%</span></td>
		  <td width="34%" align="center" class="MainMenuRow"><span class="MainMenuLink">50%</span></td>
		  <td width="33%" align="right" class="MainMenuRow"><span class="MainMenuLink">100%</span></td>
		</tr>
	  </table>
	  <?php

} // END switch_box_size_notice

if(isset($switch_box_size_notice_item)) { unset($switch_box_size_notice_item); } 

?>
	</td>
  </tr>
</table>

<br clear="all" />

<form method="post" name="privmsg_list" action="<?php echo isset($this->vars['S_PRIVMSGS_ACTION']) ? $this->vars['S_PRIVMSGS_ACTION'] : $this->lang('S_PRIVMSGS_ACTION'); ?>">
 <table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td colspan="2" class="BoardColumn"> </td>
    <td class="BoardColumn">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left" valign="middle"><?php echo isset($this->vars['POST_PM_IMG']) ? $this->vars['POST_PM_IMG'] : $this->lang('POST_PM_IMG'); ?></td>
	  <td align="left" width="100%">&nbsp;<span class="BoardColumnLink"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></span></td>
	  <td align="right" nowrap="nowrap"><span class="BoardColumn"><?php echo isset($this->vars['L_DISPLAY_MESSAGES']) ? $this->vars['L_DISPLAY_MESSAGES'] : $this->lang('L_DISPLAY_MESSAGES'); ?>: 
		<select name="msgdays"><?php echo isset($this->vars['S_SELECT_MSG_DAYS']) ? $this->vars['S_SELECT_MSG_DAYS'] : $this->lang('S_SELECT_MSG_DAYS'); ?>
		</select>
		<input type="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" name="submit_msgdays" class="liteoption" />
		</span></td>
	</tr>
  </table>

     </td>
  </tr>

  <table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th width="5%" height="25" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink"> &nbsp;<?php echo isset($this->vars['L_FLAG']) ? $this->vars['L_FLAG'] : $this->lang('L_FLAG'); ?>&nbsp; </span></th>
	  <th width="55%" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;<?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?>&nbsp;</span></th>
	  <th width="20%" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;<?php echo isset($this->vars['L_FROM_OR_TO']) ? $this->vars['L_FROM_OR_TO'] : $this->lang('L_FROM_OR_TO'); ?>&nbsp;</span></th>
	  <th width="15%" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;<?php echo isset($this->vars['L_DATE']) ? $this->vars['L_DATE'] : $this->lang('L_DATE'); ?>&nbsp;</span></th>
	  <th width="5%" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;<?php echo isset($this->vars['L_MARK']) ? $this->vars['L_MARK'] : $this->lang('L_MARK'); ?>&nbsp;</span></th>
	</tr>
	<?php

$listrow_count = ( isset($this->_tpldata['listrow.']) ) ?  sizeof($this->_tpldata['listrow.']) : 0;
for ($listrow_i = 0; $listrow_i < $listrow_count; $listrow_i++)
{
 $listrow_item = &$this->_tpldata['listrow.'][$listrow_i];
 $listrow_item['S_ROW_COUNT'] = $listrow_i;
 $listrow_item['S_NUM_ROWS'] = $listrow_count;

?>
	<tr> 
	  <td class="BoardRowHeading" width="5%" align="center" valign="middle"><img src="<?php echo isset($listrow_item['PRIVMSG_FOLDER_IMG']) ? $listrow_item['PRIVMSG_FOLDER_IMG'] : ''; ?>" width="19" height="18" alt="<?php echo isset($listrow_item['L_PRIVMSG_FOLDER_ALT']) ? $listrow_item['L_PRIVMSG_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($listrow_item['L_PRIVMSG_FOLDER_ALT']) ? $listrow_item['L_PRIVMSG_FOLDER_ALT'] : ''; ?>" /></td>
	  <td width="55%" valign="middle" class="BoardRowBody"><span class="SubjectLink">&nbsp;<a href="<?php echo isset($listrow_item['U_READ']) ? $listrow_item['U_READ'] : ''; ?>" class="SubjectLink"><?php echo isset($listrow_item['SUBJECT']) ? $listrow_item['SUBJECT'] : ''; ?></a></span></td>
	  <td width="20%" valign="middle" align="center" class="BoardRowBody"><span class="SubjectLink">&nbsp;<a href="<?php echo isset($listrow_item['U_FROM_USER_PROFILE']) ? $listrow_item['U_FROM_USER_PROFILE'] : ''; ?>" class="SubjectLink"><?php echo isset($listrow_item['FROM']) ? $listrow_item['FROM'] : ''; ?></a></span></td>
	  <td width="15%" align="center" valign="middle" class="BoardRowBody"><span class="BoardRowBodyLink"><?php echo isset($listrow_item['DATE']) ? $listrow_item['DATE'] : ''; ?></span></td>
	  <td width="5%" align="center" valign="middle" class="BoardRowBody"><span class="BoardRowBodyLink"> 
		<input type="checkbox" name="mark[]2" value="<?php echo isset($listrow_item['S_MARK_ID']) ? $listrow_item['S_MARK_ID'] : ''; ?>" />
		</span></td>
	</tr>
	<?php

} // END listrow

if(isset($listrow_item)) { unset($listrow_item); } 

?>
	<?php

$switch_no_messages_count = ( isset($this->_tpldata['switch_no_messages.']) ) ?  sizeof($this->_tpldata['switch_no_messages.']) : 0;
for ($switch_no_messages_i = 0; $switch_no_messages_i < $switch_no_messages_count; $switch_no_messages_i++)
{
 $switch_no_messages_item = &$this->_tpldata['switch_no_messages.'][$switch_no_messages_i];
 $switch_no_messages_item['S_ROW_COUNT'] = $switch_no_messages_i;
 $switch_no_messages_item['S_NUM_ROWS'] = $switch_no_messages_count;

?>
	<tr> 
	  <td class="BoardRowHeading" colspan="5" align="center" valign="middle"><span class="gen"><?php echo isset($this->vars['L_NO_MESSAGES']) ? $this->vars['L_NO_MESSAGES'] : $this->lang('L_NO_MESSAGES'); ?></span></td>
	</tr>
	<?php

} // END switch_no_messages

if(isset($switch_no_messages_item)) { unset($switch_no_messages_item); } 

?>
	<tr> 
	  <td class="BoardColumn" colspan="5" height="28" align="right"> <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
		<input type="submit" name="save" value="<?php echo isset($this->vars['L_SAVE_MARKED']) ? $this->vars['L_SAVE_MARKED'] : $this->lang('L_SAVE_MARKED'); ?>" class="mainoption" />
		&nbsp; 
		<input type="submit" name="delete" value="<?php echo isset($this->vars['L_DELETE_MARKED']) ? $this->vars['L_DELETE_MARKED'] : $this->lang('L_DELETE_MARKED'); ?>" class="liteoption" />
		&nbsp; 
		<input type="submit" name="deleteall" value="<?php echo isset($this->vars['L_DELETE_ALL']) ? $this->vars['L_DELETE_ALL'] : $this->lang('L_DELETE_ALL'); ?>" class="liteoption" />
	  </td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="left" valign="middle" class="BoardColumn"><span class="BoardColumnLink"><?php echo isset($this->vars['POST_PM_IMG']) ? $this->vars['POST_PM_IMG'] : $this->lang('POST_PM_IMG'); ?></span></td>
	  <td align="left" valign="middle" width="100%" class="BoardColumn"><span class="BoardColumnLink"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
	  <td align="right" valign="top" nowrap="nowrap" class="BoardColumn"><b><span class="BoardColumnLink"><a href="javascript:select_switch(true);" class="BoardColumn"><?php echo isset($this->vars['L_MARK_ALL']) ? $this->vars['L_MARK_ALL'] : $this->lang('L_MARK_ALL'); ?></a> :: <a href="javascript:select_switch(false);" class="BoardColumn"><?php echo isset($this->vars['L_UNMARK_ALL']) ? $this->vars['L_UNMARK_ALL'] : $this->lang('L_UNMARK_ALL'); ?></a></span></b><br /><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?><br /></span><span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
	</tr>
  </table>

     </td>
  </tr>
 </table>

</form>
</td></tr></table>
<table width="100%" border="0" class="MainMenuRow">
  <tr>
     <td><?php echo isset($this->vars['BUDDYLIST']) ? $this->vars['BUDDYLIST'] : $this->lang('BUDDYLIST'); ?></td>
  </tr>
</table>

<table width="100%" border="0">
  <tr> 
	<td align="right" valign="top" class="MainMenuRow"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>
