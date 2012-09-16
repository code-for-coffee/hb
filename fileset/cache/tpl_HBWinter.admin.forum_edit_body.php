<?php

// eXtreme Styles mod cache. Generated on Sat, 22 Jan 2005 04:38:50 +0000 (time=1106368730)

?>
<h1><?php echo isset($this->vars['L_FORUM_TITLE']) ? $this->vars['L_FORUM_TITLE'] : $this->lang('L_FORUM_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_FORUM_EXPLAIN']) ? $this->vars['L_FORUM_EXPLAIN'] : $this->lang('L_FORUM_EXPLAIN'); ?></p>

<form action="<?php echo isset($this->vars['S_FORUM_ACTION']) ? $this->vars['S_FORUM_ACTION'] : $this->lang('S_FORUM_ACTION'); ?>" method="post">
  <table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
	<tr> 
	  <th class="thHead" colspan="2"><?php echo isset($this->vars['L_FORUM_SETTINGS']) ? $this->vars['L_FORUM_SETTINGS'] : $this->lang('L_FORUM_SETTINGS'); ?></th>
	</tr>
	<tr> 
	  <td class="row1"><?php echo isset($this->vars['L_FORUM_NAME']) ? $this->vars['L_FORUM_NAME'] : $this->lang('L_FORUM_NAME'); ?></td>
	  <td class="row2"><input type="text" size="25" name="forumname" value="<?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?>" class="post" /></td>
	</tr>
	<tr> 
	  <td class="row1"><?php echo isset($this->vars['L_FORUM_DESCRIPTION']) ? $this->vars['L_FORUM_DESCRIPTION'] : $this->lang('L_FORUM_DESCRIPTION'); ?></td>
	  <td class="row2"><textarea rows="5" cols="45" wrap="virtual" name="forumdesc" class="post"><?php echo isset($this->vars['DESCRIPTION']) ? $this->vars['DESCRIPTION'] : $this->lang('DESCRIPTION'); ?></textarea></td>
	</tr>
	<tr> 
	  <td class="row1"><?php echo isset($this->vars['L_CATEGORY']) ? $this->vars['L_CATEGORY'] : $this->lang('L_CATEGORY'); ?></td>
	  <td class="row2"><select name="c"><?php echo isset($this->vars['S_CAT_LIST']) ? $this->vars['S_CAT_LIST'] : $this->lang('S_CAT_LIST'); ?></select></td>
	</tr>
	<tr> 
	  <td class="row1"><?php echo isset($this->vars['L_FORUM_STATUS']) ? $this->vars['L_FORUM_STATUS'] : $this->lang('L_FORUM_STATUS'); ?></td>
	  <td class="row2"><select name="forumstatus"><?php echo isset($this->vars['S_STATUS_LIST']) ? $this->vars['S_STATUS_LIST'] : $this->lang('S_STATUS_LIST'); ?></select></td>
	</tr>
	<tr> 
	  <td class="row1"><?php echo isset($this->vars['L_AUTO_PRUNE']) ? $this->vars['L_AUTO_PRUNE'] : $this->lang('L_AUTO_PRUNE'); ?></td>
	  <td class="row2"><table cellspacing="0" cellpadding="1" border="0">
		  <tr> 
			<td align="right" valign="middle"><?php echo isset($this->vars['L_ENABLED']) ? $this->vars['L_ENABLED'] : $this->lang('L_ENABLED'); ?></td>
			<td align="left" valign="middle"><input type="checkbox" name="prune_enable" value="1" <?php echo isset($this->vars['S_PRUNE_ENABLED']) ? $this->vars['S_PRUNE_ENABLED'] : $this->lang('S_PRUNE_ENABLED'); ?> /></td>
		  </tr>
		  <tr> 
			<td align="right" valign="middle"><?php echo isset($this->vars['L_PRUNE_DAYS']) ? $this->vars['L_PRUNE_DAYS'] : $this->lang('L_PRUNE_DAYS'); ?></td>
			<td align="left" valign="middle">&nbsp;<input type="text" name="prune_days" value="<?php echo isset($this->vars['PRUNE_DAYS']) ? $this->vars['PRUNE_DAYS'] : $this->lang('PRUNE_DAYS'); ?>" size="5" class="post" />&nbsp;<?php echo isset($this->vars['L_DAYS']) ? $this->vars['L_DAYS'] : $this->lang('L_DAYS'); ?></td>
		  </tr>
		  <tr> 
			<td align="right" valign="middle"><?php echo isset($this->vars['L_PRUNE_FREQ']) ? $this->vars['L_PRUNE_FREQ'] : $this->lang('L_PRUNE_FREQ'); ?></td>
			<td align="left" valign="middle">&nbsp;<input type="text" name="prune_freq" value="<?php echo isset($this->vars['PRUNE_FREQ']) ? $this->vars['PRUNE_FREQ'] : $this->lang('PRUNE_FREQ'); ?>" size="5" class="post" />&nbsp;<?php echo isset($this->vars['L_DAYS']) ? $this->vars['L_DAYS'] : $this->lang('L_DAYS'); ?></td>
		  </tr>
	  </table></td>
	</tr>
	<tr> 
	  <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="submit" value="<?php echo isset($this->vars['S_SUBMIT_VALUE']) ? $this->vars['S_SUBMIT_VALUE'] : $this->lang('S_SUBMIT_VALUE'); ?>" class="mainoption" /></td>
	</tr>
  </table>
</form>
		
<br clear="all" />
