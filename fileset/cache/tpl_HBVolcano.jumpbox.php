<?php

// eXtreme Styles mod cache. Generated on Sun, 23 Jan 2005 06:43:09 +0000 (time=1106462589)

?>
<form method="get" name="jumpbox" action="<?php echo isset($this->vars['S_JUMPBOX_ACTION']) ? $this->vars['S_JUMPBOX_ACTION'] : $this->lang('S_JUMPBOX_ACTION'); ?>" onSubmit="if(document.jumpbox.f.value == -1){return false;}"><table cellspacing="0" cellpadding="0" border="0">
	<tr> 
		<td nowrap="nowrap"><span class="BoardColumnLink"><?php echo isset($this->vars['L_JUMP_TO']) ? $this->vars['L_JUMP_TO'] : $this->lang('L_JUMP_TO'); ?>:&nbsp;<?php echo isset($this->vars['S_JUMPBOX_SELECT']) ? $this->vars['S_JUMPBOX_SELECT'] : $this->lang('S_JUMPBOX_SELECT'); ?>&nbsp;<input type="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="liteoption" /></span></td>
	</tr>
</table></form>
