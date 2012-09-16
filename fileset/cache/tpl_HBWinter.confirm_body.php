<?php

// eXtreme Styles mod cache. Generated on Sat, 22 Jan 2005 03:31:16 +0000 (time=1106364676)

?> 
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td class="MainMenuRow" align="left"><a class="MainMenuLink" href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
	</tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
	<tr>
		<th class="BoardRowHeading" height="25" valign="middle"><span class="SubjectLink"><?php echo isset($this->vars['MESSAGE_TITLE']) ? $this->vars['MESSAGE_TITLE'] : $this->lang('MESSAGE_TITLE'); ?></span></th>
	</tr>
	<tr>
		<td class="BoardRowBody" align="center"><form action="<?php echo isset($this->vars['S_CONFIRM_ACTION']) ? $this->vars['S_CONFIRM_ACTION'] : $this->lang('S_CONFIRM_ACTION'); ?>" method="post"><br /><?php echo isset($this->vars['MESSAGE_TEXT']) ? $this->vars['MESSAGE_TEXT'] : $this->lang('MESSAGE_TEXT'); ?><br /><br /><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="confirm" value="<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>" class="mainoption" />&nbsp;&nbsp;<input type="submit" name="cancel" value="<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>" class="liteoption" /></form></td>
	</tr>
</table>

<br clear="all" />
