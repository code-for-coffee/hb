<?php

// eXtreme Styles mod cache. Generated on Sat, 19 Feb 2005 17:40:47 -0800 (time=1108863647)

?><table class="BoardRowBody" width="100%" cellspacing="1" cellpadding="4" border="0">
	<tr> 
		<th height="25" class="BoardRowHeading"><?php echo isset($this->vars['L_PREVIEW']) ? $this->vars['L_PREVIEW'] : $this->lang('L_PREVIEW'); ?></th>
	</tr>
	<tr> 
		<td class="BoardRowBody"><img src="templates/HBGrievous/images/icon_minipost.gif" alt="<?php echo isset($this->vars['L_POST']) ? $this->vars['L_POST'] : $this->lang('L_POST'); ?>" /><span class="postdetails"><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($this->vars['POST_DATE']) ? $this->vars['POST_DATE'] : $this->lang('POST_DATE'); ?> &nbsp;&nbsp;&nbsp; <?php echo isset($this->vars['L_POST_SUBJECT']) ? $this->vars['L_POST_SUBJECT'] : $this->lang('L_POST_SUBJECT'); ?>: <?php echo isset($this->vars['POST_SUBJECT']) ? $this->vars['POST_SUBJECT'] : $this->lang('POST_SUBJECT'); ?></span></td>
	</tr>
	<tr> 
		<td class="BoardRowBody"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<span class="postbody"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></span>
				</td>
			</tr>
		</table></td>
	</tr>
	<tr> 
		<td height="1"><img src="templates/HBGrievous/images/spacer.gif" width="1" height="1" /></td>
	</tr>
</table>

<br clear="all" />