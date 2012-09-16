<?php

// eXtreme Styles mod cache. Generated on Sat, 19 Feb 2005 15:11:51 -0800 (time=1108854711)

?><form method="post" action="<?php echo isset($this->vars['S_MODE_ACTION']) ? $this->vars['S_MODE_ACTION'] : $this->lang('S_MODE_ACTION'); ?>">
<table width="100%" class="BoardColumn" align="center">
<tr>
<td align="left"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>
<td align="right" nowrap="nowrap"><?php echo isset($this->vars['L_SELECT_SORT_METHOD']) ? $this->vars['L_SELECT_SORT_METHOD'] : $this->lang('L_SELECT_SORT_METHOD'); ?>&nbsp;<?php echo isset($this->vars['S_MODE_SELECT']) ? $this->vars['S_MODE_SELECT'] : $this->lang('S_MODE_SELECT'); ?>&nbsp;&nbsp;<?php echo isset($this->vars['L_ORDER']) ? $this->vars['L_ORDER'] : $this->lang('L_ORDER'); ?>&nbsp;<?php echo isset($this->vars['S_ORDER_SELECT']) ? $this->vars['S_ORDER_SELECT'] : $this->lang('S_ORDER_SELECT'); ?>&nbsp;&nbsp;
<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" />
</td>
</tr></table>
<table width="100%" class="BoardRowHeading" align="center">
<tr>
	<th class="BoardRowHeading" height="25" nowrap="nowrap"><b>#</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b>PM</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_EMAIL']) ? $this->vars['L_EMAIL'] : $this->lang('L_EMAIL'); ?></b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?></b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_JOINED']) ? $this->vars['L_JOINED'] : $this->lang('L_JOINED'); ?></b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_POSTS']) ? $this->vars['L_POSTS'] : $this->lang('L_POSTS'); ?></b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_WEBSITE']) ? $this->vars['L_WEBSITE'] : $this->lang('L_WEBSITE'); ?></b></th>
</tr>
<?php

$memberrow_count = ( isset($this->_tpldata['memberrow.']) ) ?  sizeof($this->_tpldata['memberrow.']) : 0;
for ($memberrow_i = 0; $memberrow_i < $memberrow_count; $memberrow_i++)
{
 $memberrow_item = &$this->_tpldata['memberrow.'][$memberrow_i];
 $memberrow_item['S_ROW_COUNT'] = $memberrow_i;
 $memberrow_item['S_NUM_ROWS'] = $memberrow_count;

?>
<tr>
<td class="BoardRowHeading" align="center">&nbsp;<?php echo isset($memberrow_item['ROW_NUMBER']) ? $memberrow_item['ROW_NUMBER'] : ''; ?>&nbsp;</td>
<td class="BoardRowBody" align="center">&nbsp;<?php echo isset($memberrow_item['PM_IMG']) ? $memberrow_item['PM_IMG'] : ''; ?>&nbsp;</td>
<td class="BoardRowBody" align="center"><a href="<?php echo isset($memberrow_item['U_VIEWPROFILE']) ? $memberrow_item['U_VIEWPROFILE'] : ''; ?>"><?php echo isset($memberrow_item['USERNAME']) ? $memberrow_item['USERNAME'] : ''; ?></a></td>
<td class="BoardRowBody" align="center">&nbsp;<?php echo isset($memberrow_item['EMAIL_IMG']) ? $memberrow_item['EMAIL_IMG'] : ''; ?>&nbsp;</td>
<td class="BoardRowBody" align="center"><?php echo isset($memberrow_item['FROM']) ? $memberrow_item['FROM'] : ''; ?></td>
<td class="BoardRowBody" align="center"><?php echo isset($memberrow_item['JOINED']) ? $memberrow_item['JOINED'] : ''; ?></td>
<td class="BoardRowBody" align="center"><?php echo isset($memberrow_item['POSTS']) ? $memberrow_item['POSTS'] : ''; ?></td>
<td class="BoardRowBody" align="center">&nbsp;<?php echo isset($memberrow_item['WWW_IMG']) ? $memberrow_item['WWW_IMG'] : ''; ?>&nbsp;</td>


<?php

} // END memberrow

if(isset($memberrow_item)) { unset($memberrow_item); } 

?>
</tr></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="MainMenu">
  <tr> 
	<td><span class="MainMenuLink"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
	<td align="right"><span class="MainMenuLink"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span><br /><span class="nav"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span></td>
  </tr>
</table></form>

<table width="100%" cellspacing="2" border="0" align="center" class="MainMenuRow">
  <tr> 
	<td valign="top" align="right" class="MainMenuLink"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>