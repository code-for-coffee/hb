<?php

// eXtreme Styles mod cache. Generated on Sat, 19 Feb 2005 15:10:10 -0800 (time=1108854610)

?> 
<form action="<?php echo isset($this->vars['S_LOGIN_ACTION']) ? $this->vars['S_LOGIN_ACTION'] : $this->lang('S_LOGIN_ACTION'); ?>" method="post" target="_top">

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" class="BoardColumn"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
  </tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
  <tr> 
	<th height="25" class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_ENTER_PASSWORD']) ? $this->vars['L_ENTER_PASSWORD'] : $this->lang('L_ENTER_PASSWORD'); ?></b></th>
  </tr>
  <tr> 
	<td class="BoardRowBody"><table border="0" cellpadding="3" cellspacing="1" width="100%">
		  <tr> 
			<td colspan="2" align="center">&nbsp;</td>
		  </tr>
		  <tr> 
			<td width="45%" align="right"><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:</span></td>
			<td> 
			  <input type="text" class="post" name="username" size="25" maxlength="40" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" />
			</td>
		  </tr>
		  <tr> 
			<td align="right"><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_PASSWORD']) ? $this->vars['L_PASSWORD'] : $this->lang('L_PASSWORD'); ?>:</span></td>
			<td> 
			  <input type="password" class="post" name="password" size="25" maxlength="32" />
			</td>
		  </tr>
		  <tr align="center"> 
			<td colspan="2"><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_AUTO_LOGIN']) ? $this->vars['L_AUTO_LOGIN'] : $this->lang('L_AUTO_LOGIN'); ?>: <input type="checkbox" name="autologin" /></span></td>
		  </tr>
		  <tr align="center"> 
			<td colspan="2"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="login" class="mainoption" value="<?php echo isset($this->vars['L_LOGIN']) ? $this->vars['L_LOGIN'] : $this->lang('L_LOGIN'); ?>" /></td>
		  </tr>
		  <tr align="center"> 
			<td colspan="2"><span class="gensmall"><a href="<?php echo isset($this->vars['U_SEND_PASSWORD']) ? $this->vars['U_SEND_PASSWORD'] : $this->lang('U_SEND_PASSWORD'); ?>" class="BoardRowBodyLink"><?php echo isset($this->vars['L_SEND_PASSWORD']) ? $this->vars['L_SEND_PASSWORD'] : $this->lang('L_SEND_PASSWORD'); ?></a></span></td>
		  </tr>
		</table></td>
  </tr>
</table>

</form>
