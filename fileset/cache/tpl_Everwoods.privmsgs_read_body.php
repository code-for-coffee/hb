<?php

// eXtreme Styles mod cache. Generated on Tue, 25 Jan 2005 11:58:18 +0000 (time=1106654298)

?>
<table cellspacing="2" cellpadding="2" border="0" align="center" width="100%" class="BoardColumn">
<tr><td>
<table cellspacing="2" cellpadding="2" border="0" align="center" class="BoardColumn">
  <tr> 
	<td class="BoardColumn" valign="middle"><?php echo isset($this->vars['INBOX_IMG']) ? $this->vars['INBOX_IMG'] : $this->lang('INBOX_IMG'); ?></td>
	<td class="BoardColumn" valign="middle"><span class="cattitle"><?php echo isset($this->vars['INBOX']) ? $this->vars['INBOX'] : $this->lang('INBOX'); ?> &nbsp;</span></td>
	<td class="BoardColumn" valign="middle"><?php echo isset($this->vars['SENTBOX_IMG']) ? $this->vars['SENTBOX_IMG'] : $this->lang('SENTBOX_IMG'); ?></td>
	<td class="BoardColumn" valign="middle"><span class="cattitle"><?php echo isset($this->vars['SENTBOX']) ? $this->vars['SENTBOX'] : $this->lang('SENTBOX'); ?> &nbsp;</span></td>
	<td class="BoardColumn" valign="middle"><?php echo isset($this->vars['OUTBOX_IMG']) ? $this->vars['OUTBOX_IMG'] : $this->lang('OUTBOX_IMG'); ?></td>
	<td class="BoardColumn" valign="middle"><span class="cattitle"><?php echo isset($this->vars['OUTBOX']) ? $this->vars['OUTBOX'] : $this->lang('OUTBOX'); ?> &nbsp;</span></td>
	<td class="BoardColumn" valign="middle"><?php echo isset($this->vars['SAVEBOX_IMG']) ? $this->vars['SAVEBOX_IMG'] : $this->lang('SAVEBOX_IMG'); ?></td>
	<td class="BoardColumn" valign="middle"><span class="cattitle"><?php echo isset($this->vars['SAVEBOX']) ? $this->vars['SAVEBOX'] : $this->lang('SAVEBOX'); ?></span></td>
  </tr>
</table>
</td></tr></table>

<form method="post" action="<?php echo isset($this->vars['S_PRIVMSGS_ACTION']) ? $this->vars['S_PRIVMSGS_ACTION'] : $this->lang('S_PRIVMSGS_ACTION'); ?>">
<table width="100%" cellspacing="2" cellpadding="2" border="0" class="BoardColumn">
  <tr>
	  <td class="BoardColumn" valign="middle"><?php echo isset($this->vars['REPLY_PM_IMG']) ? $this->vars['REPLY_PM_IMG'] : $this->lang('REPLY_PM_IMG'); ?></td>
	  <td class="BoardColumn" width="100%"><span class="BoardColumnLink">&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></span></td>
  </tr>
</table>

<table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th colspan="3" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink"><?php echo isset($this->vars['BOX_NAME']) ? $this->vars['BOX_NAME'] : $this->lang('BOX_NAME'); ?> - <?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></span></th>
	</tr>
	<tr> 
	  <td class="BoardRowHeading"><?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?>:</td>
	  <td width="100%" class="BoardRowHeading" colspan="2"><span class="SubjectLink"><?php echo isset($this->vars['MESSAGE_FROM']) ? $this->vars['MESSAGE_FROM'] : $this->lang('MESSAGE_FROM'); ?></span></td>
	</tr>
	<tr> 
	  <td class="BoardRowHeading"><?php echo isset($this->vars['L_TO']) ? $this->vars['L_TO'] : $this->lang('L_TO'); ?>:</td>
	  <td width="100%" class="BoardRowHeading" colspan="2"><span class="SubjectLink"><?php echo isset($this->vars['MESSAGE_TO']) ? $this->vars['MESSAGE_TO'] : $this->lang('MESSAGE_TO'); ?></span></td>
	</tr>
	<tr> 
	  <td class="BoardRowHeading"><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>:</td>
	  <td width="100%" class="BoardRowHeading" colspan="2"><span class="SubjectLink"><?php echo isset($this->vars['POST_DATE']) ? $this->vars['POST_DATE'] : $this->lang('POST_DATE'); ?></span></td>
	</tr>
	<tr> 
	  <td class="BoardRowHeading"><?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?>:</td>
	  <td width="100%" class="BoardRowHeading"><span class="SubjectLink"><?php echo isset($this->vars['POST_SUBJECT']) ? $this->vars['POST_SUBJECT'] : $this->lang('POST_SUBJECT'); ?></span></td>
	  <td nowrap="nowrap" class="BoardRowHeading" align="right"> <?php echo isset($this->vars['QUOTE_PM_IMG']) ? $this->vars['QUOTE_PM_IMG'] : $this->lang('QUOTE_PM_IMG'); ?> <?php echo isset($this->vars['EDIT_PM_IMG']) ? $this->vars['EDIT_PM_IMG'] : $this->lang('EDIT_PM_IMG'); ?></td>
	</tr>
	<tr> 
	  <td valign="top" colspan="3" class="BoardRowBody"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></td>
	</tr>
	<tr> 
	  <td width="78%" height="28" valign="bottom" colspan="3" class="BoardColumn"> 
		<table cellspacing="0" cellpadding="0" border="0" height="18">
		  <tr> 
			<td valign="middle" nowrap="nowrap"><?php echo isset($this->vars['PROFILE_IMG']) ? $this->vars['PROFILE_IMG'] : $this->lang('PROFILE_IMG'); ?> <?php echo isset($this->vars['BUDDY_IMG']) ? $this->vars['BUDDY_IMG'] : $this->lang('BUDDY_IMG'); ?> <?php echo isset($this->vars['PM_IMG']) ? $this->vars['PM_IMG'] : $this->lang('PM_IMG'); ?> <?php echo isset($this->vars['EMAIL_IMG']) ? $this->vars['EMAIL_IMG'] : $this->lang('EMAIL_IMG'); ?> 
			  <?php echo isset($this->vars['WWW_IMG']) ? $this->vars['WWW_IMG'] : $this->lang('WWW_IMG'); ?> <?php echo isset($this->vars['AIM_IMG']) ? $this->vars['AIM_IMG'] : $this->lang('AIM_IMG'); ?> <?php echo isset($this->vars['YIM_IMG']) ? $this->vars['YIM_IMG'] : $this->lang('YIM_IMG'); ?> <?php echo isset($this->vars['MSN_IMG']) ? $this->vars['MSN_IMG'] : $this->lang('MSN_IMG'); ?></td><td>&nbsp;</td><td valign="top" nowrap="nowrap"><script language="JavaScript" type="text/javascript"><!-- 

		if ( navigator.userAgent.toLowerCase().indexOf('mozilla') != -1 && navigator.userAgent.indexOf('5.') == -1 && navigator.userAgent.indexOf('6.') == -1 )
			document.write('<?php echo isset($this->vars['ICQ_IMG']) ? $this->vars['ICQ_IMG'] : $this->lang('ICQ_IMG'); ?>');
		else
			document.write('<div style="position:relative"><div style="position:absolute"><?php echo isset($this->vars['ICQ_IMG']) ? $this->vars['ICQ_IMG'] : $this->lang('ICQ_IMG'); ?></div><div style="position:absolute;left:3px"><?php echo isset($this->vars['ICQ_STATUS_IMG']) ? $this->vars['ICQ_STATUS_IMG'] : $this->lang('ICQ_STATUS_IMG'); ?></div></div>');
		  
		  //--></script><noscript><?php echo isset($this->vars['ICQ_IMG']) ? $this->vars['ICQ_IMG'] : $this->lang('ICQ_IMG'); ?></noscript></td>
		  </tr>
		</table>
	  </td>
	</tr>
	<tr>
	  <td class="BoardColumn" colspan="3" height="28" align="right"> <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
		<input type="submit" name="save" value="<?php echo isset($this->vars['L_SAVE_MSG']) ? $this->vars['L_SAVE_MSG'] : $this->lang('L_SAVE_MSG'); ?>" class="liteoption" />
		&nbsp; 
		<input type="submit" name="delete" value="<?php echo isset($this->vars['L_DELETE_MSG']) ? $this->vars['L_DELETE_MSG'] : $this->lang('L_DELETE_MSG'); ?>" class="liteoption" />
	  </td>
	</tr>
  </table>
  <table width="100%" cellspacing="2" border="0" class="BoardColumn" align="center" cellpadding="2">
	<tr> 
	  <td class="BoardColumn"><?php echo isset($this->vars['REPLY_PM_IMG']) ? $this->vars['REPLY_PM_IMG'] : $this->lang('REPLY_PM_IMG'); ?></td>
	  <td align="right" valign="top" class="BoardColumn"><span class="BoardColumnLink"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
	</tr>
  </table>
</form>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr> 
	<td valign="top" align="right" class="BoardColumn"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>
