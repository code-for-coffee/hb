<?php

// eXtreme Styles mod cache. Generated on Sat, 22 Jan 2005 08:26:38 +0000 (time=1106382398)

?> 
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" class="BoardColumn"><span class="nav"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></span></td>
  </tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0" class="BoardRowBody">
  <tr> 
	<th class="BoardRowHeading" width="35%" height="25"><b>&nbsp;<?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>&nbsp;</b></th>
	<th class="BoardRowHeading" width="25%"><b>&nbsp;<?php echo isset($this->vars['L_LAST_UPDATE']) ? $this->vars['L_LAST_UPDATE'] : $this->lang('L_LAST_UPDATE'); ?>&nbsp;</b></th>
	<th class="BoardRowHeading" width="40%"><b>&nbsp;<?php echo isset($this->vars['L_FORUM_LOCATION']) ? $this->vars['L_FORUM_LOCATION'] : $this->lang('L_FORUM_LOCATION'); ?>&nbsp;</b></th>
  </tr>
  <tr> 
	<td class="catSides" colspan="3" height="28"><span class="cattitle"><b><?php echo isset($this->vars['TOTAL_REGISTERED_USERS_ONLINE']) ? $this->vars['TOTAL_REGISTERED_USERS_ONLINE'] : $this->lang('TOTAL_REGISTERED_USERS_ONLINE'); ?></b></span></td>
  </tr>
  <?php

$reg_user_row_count = ( isset($this->_tpldata['reg_user_row.']) ) ?  sizeof($this->_tpldata['reg_user_row.']) : 0;
for ($reg_user_row_i = 0; $reg_user_row_i < $reg_user_row_count; $reg_user_row_i++)
{
 $reg_user_row_item = &$this->_tpldata['reg_user_row.'][$reg_user_row_i];
 $reg_user_row_item['S_ROW_COUNT'] = $reg_user_row_i;
 $reg_user_row_item['S_NUM_ROWS'] = $reg_user_row_count;

?>
  <tr> 
	<td width="35%" class="<?php echo isset($reg_user_row_item['ROW_CLASS']) ? $reg_user_row_item['ROW_CLASS'] : ''; ?>">&nbsp;<span class="gen"><a href="<?php echo isset($reg_user_row_item['U_USER_PROFILE']) ? $reg_user_row_item['U_USER_PROFILE'] : ''; ?>" class="gen"><?php echo isset($reg_user_row_item['USERNAME']) ? $reg_user_row_item['USERNAME'] : ''; ?></a></span>&nbsp;</td>
	<td width="25%" align="center" nowrap="nowrap" class="<?php echo isset($reg_user_row_item['ROW_CLASS']) ? $reg_user_row_item['ROW_CLASS'] : ''; ?>">&nbsp;<span class="gen"><?php echo isset($reg_user_row_item['LASTUPDATE']) ? $reg_user_row_item['LASTUPDATE'] : ''; ?></span>&nbsp;</td>
	<td width="40%" class="<?php echo isset($reg_user_row_item['ROW_CLASS']) ? $reg_user_row_item['ROW_CLASS'] : ''; ?>">&nbsp;<span class="gen"><a href="<?php echo isset($reg_user_row_item['U_FORUM_LOCATION']) ? $reg_user_row_item['U_FORUM_LOCATION'] : ''; ?>" class="gen"><?php echo isset($reg_user_row_item['FORUM_LOCATION']) ? $reg_user_row_item['FORUM_LOCATION'] : ''; ?></a></span>&nbsp;</td>
  </tr>
  <?php

} // END reg_user_row

if(isset($reg_user_row_item)) { unset($reg_user_row_item); } 

?>
  <tr> 
	<td colspan="3" height="1" class="row3"><img src="templates/HBWinter/images/spacer.gif" width="1" height="1" alt="."></td>
  </tr>
  <tr> 
	<td colspan="3" height="28"><span class="cattitle"><b><?php echo isset($this->vars['TOTAL_GUEST_USERS_ONLINE']) ? $this->vars['TOTAL_GUEST_USERS_ONLINE'] : $this->lang('TOTAL_GUEST_USERS_ONLINE'); ?></b></span></td>
  </tr>
  <?php

$guest_user_row_count = ( isset($this->_tpldata['guest_user_row.']) ) ?  sizeof($this->_tpldata['guest_user_row.']) : 0;
for ($guest_user_row_i = 0; $guest_user_row_i < $guest_user_row_count; $guest_user_row_i++)
{
 $guest_user_row_item = &$this->_tpldata['guest_user_row.'][$guest_user_row_i];
 $guest_user_row_item['S_ROW_COUNT'] = $guest_user_row_i;
 $guest_user_row_item['S_NUM_ROWS'] = $guest_user_row_count;

?>
  <tr> 
	<td width="35%" class="<?php echo isset($guest_user_row_item['ROW_CLASS']) ? $guest_user_row_item['ROW_CLASS'] : ''; ?>">&nbsp;<span class="gen"><?php echo isset($guest_user_row_item['USERNAME']) ? $guest_user_row_item['USERNAME'] : ''; ?></span>&nbsp;</td>
	<td width="25%" align="center" nowrap="nowrap" class="<?php echo isset($guest_user_row_item['ROW_CLASS']) ? $guest_user_row_item['ROW_CLASS'] : ''; ?>">&nbsp;<span class="gen"><?php echo isset($guest_user_row_item['LASTUPDATE']) ? $guest_user_row_item['LASTUPDATE'] : ''; ?></span>&nbsp;</td>
	<td width="40%" class="<?php echo isset($guest_user_row_item['ROW_CLASS']) ? $guest_user_row_item['ROW_CLASS'] : ''; ?>">&nbsp;<span class="gen"><a href="<?php echo isset($guest_user_row_item['U_FORUM_LOCATION']) ? $guest_user_row_item['U_FORUM_LOCATION'] : ''; ?>" class="gen"><?php echo isset($guest_user_row_item['FORUM_LOCATION']) ? $guest_user_row_item['FORUM_LOCATION'] : ''; ?></a></span>&nbsp;</td>
  </tr>
  <?php

} // END guest_user_row

if(isset($guest_user_row_item)) { unset($guest_user_row_item); } 

?>
</table>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2" class="BoardColumn">
  <tr> 
	<td align="left" valign="top"><span class="BoardColumnLink"><?php echo isset($this->vars['L_ONLINE_EXPLAIN']) ? $this->vars['L_ONLINE_EXPLAIN'] : $this->lang('L_ONLINE_EXPLAIN'); ?></span></td>
	<td align="right" valign="top"><span class="BoardColumnLink"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
  </tr>
</table>


<table width="100%" cellspacing="2" border="0" align="center" class="BoardColumn">
  <tr> 
	<td valign="top" align="right"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td>
  </tr>
</table>
