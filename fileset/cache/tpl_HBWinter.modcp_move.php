<?php

// eXtreme Styles mod cache. Generated on Sat, 19 Feb 2005 17:36:48 -0800 (time=1108863408)

?>
<form action="<?php echo isset($this->vars['S_MODCP_ACTION']) ? $this->vars['S_MODCP_ACTION'] : $this->lang('S_MODCP_ACTION'); ?>" method="post">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left" class="BoardColumn"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
	</tr>
  </table>
  <table width="100%" cellpadding="4" cellspacing="1" border="0" class="BoardRowHeading">
	<tr> 
	  <th height="25" class="BoardRowHeading"><b><?php echo isset($this->vars['MESSAGE_TITLE']) ? $this->vars['MESSAGE_TITLE'] : $this->lang('MESSAGE_TITLE'); ?></b></th>
	</tr>
	<tr> 
	  <td class="BoardRowBody"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
		  <tr> 
			<td>&nbsp;</td>
		  </tr>
		  <tr> 
			<td align="center"><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_MOVE_TO_FORUM']) ? $this->vars['L_MOVE_TO_FORUM'] : $this->lang('L_MOVE_TO_FORUM'); ?> &nbsp; <?php echo isset($this->vars['S_FORUM_SELECT']) ? $this->vars['S_FORUM_SELECT'] : $this->lang('S_FORUM_SELECT'); ?><br /><br />
			  <input type="checkbox" name="move_leave_shadow" checked="checked" /><?php echo isset($this->vars['L_LEAVESHADOW']) ? $this->vars['L_LEAVESHADOW'] : $this->lang('L_LEAVESHADOW'); ?><br />
			  <br />
			  <?php echo isset($this->vars['MESSAGE_TEXT']) ? $this->vars['MESSAGE_TEXT'] : $this->lang('MESSAGE_TEXT'); ?></span><br />
			  <br />
			  <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
			  <input class="mainoption" type="submit" name="confirm" value="<?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>" />
			  &nbsp;&nbsp; 
			  <input class="liteoption" type="submit" name="cancel" value="<?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?>" />
			</td>
		  </tr>
		  <tr> 
			<td>&nbsp;</td>
		  </tr>
		</table>
	  </td>
	</tr>
  </table>
</form>
