<?php

// eXtreme Styles mod cache. Generated on Sun, 23 Jan 2005 08:49:32 +0000 (time=1106470172)

?>
<table width="100%" cellspacing="1" cellpadding="3" border="0" class="BoardColumn">
	<tr>
		<td class="BoardColumn" colspan="3">
			<span class="BoardColumnLink"><?php echo isset($this->vars['L_BUDDYLIST']) ? $this->vars['L_BUDDYLIST'] : $this->lang('L_BUDDYLIST'); ?></span>
		</td>
	</tr>
	<tr>
		<th colspan="3" class="BoardColumnLink"><?php echo isset($this->vars['L_ONLINE']) ? $this->vars['L_ONLINE'] : $this->lang('L_ONLINE'); ?></th>
	</tr>
	<?php

$listrow_online_count = ( isset($this->_tpldata['listrow_online.']) ) ?  sizeof($this->_tpldata['listrow_online.']) : 0;
for ($listrow_online_i = 0; $listrow_online_i < $listrow_online_count; $listrow_online_i++)
{
 $listrow_online_item = &$this->_tpldata['listrow_online.'][$listrow_online_i];
 $listrow_online_item['S_ROW_COUNT'] = $listrow_online_i;
 $listrow_online_item['S_NUM_ROWS'] = $listrow_online_count;

?>
	<tr>
		<td width="50%" valign="middle" align="center" class="BoardRowBody">
			<span class="BoardRowBodyLink"><?php echo isset($listrow_online_item['BUDDY_URL']) ? $listrow_online_item['BUDDY_URL'] : ''; ?></span>
		</td>
		<td width="30%" align="center" valign="middle" class="BoardRowBody">
			<span class="BoardRowBodyLink"><?php echo isset($listrow_online_item['PM_IMG']) ? $listrow_online_item['PM_IMG'] : ''; ?></span>
		</td>
		<td width="20%" align="center" valign="middle" class="BoardRowBody">
			<span class="BoardRowBodyLink"><?php echo isset($listrow_online_item['REMOVE_IMG']) ? $listrow_online_item['REMOVE_IMG'] : ''; ?></span>
		</td>
	</tr>
	<?php

} // END listrow_online

if(isset($listrow_online_item)) { unset($listrow_online_item); } 

?>
	<?php

$switch_no_buddies_online_count = ( isset($this->_tpldata['switch_no_buddies_online.']) ) ?  sizeof($this->_tpldata['switch_no_buddies_online.']) : 0;
for ($switch_no_buddies_online_i = 0; $switch_no_buddies_online_i < $switch_no_buddies_online_count; $switch_no_buddies_online_i++)
{
 $switch_no_buddies_online_item = &$this->_tpldata['switch_no_buddies_online.'][$switch_no_buddies_online_i];
 $switch_no_buddies_online_item['S_ROW_COUNT'] = $switch_no_buddies_online_i;
 $switch_no_buddies_online_item['S_NUM_ROWS'] = $switch_no_buddies_online_count;

?>
	<tr>
		<td class="BoardRowBody" colspan="3" height="25" align="center" valign="middle">
			<span class="BoardRowBodyLink"><?php echo isset($this->vars['L_NO_BUDDIES_ONLINE']) ? $this->vars['L_NO_BUDDIES_ONLINE'] : $this->lang('L_NO_BUDDIES_ONLINE'); ?></span>
		</td>
	</tr>
	<?php

} // END switch_no_buddies_online

if(isset($switch_no_buddies_online_item)) { unset($switch_no_buddies_online_item); } 

?>
	<tr>
		<td class="BoardRowBodyLink" colspan="3" height="28">&nbsp;</td>
	</tr>
	<tr>
		<th colspan="3" class="BoardColumnLink"><?php echo isset($this->vars['L_OFFLINE']) ? $this->vars['L_OFFLINE'] : $this->lang('L_OFFLINE'); ?></th>
	</tr>
	<?php

$listrow_offline_count = ( isset($this->_tpldata['listrow_offline.']) ) ?  sizeof($this->_tpldata['listrow_offline.']) : 0;
for ($listrow_offline_i = 0; $listrow_offline_i < $listrow_offline_count; $listrow_offline_i++)
{
 $listrow_offline_item = &$this->_tpldata['listrow_offline.'][$listrow_offline_i];
 $listrow_offline_item['S_ROW_COUNT'] = $listrow_offline_i;
 $listrow_offline_item['S_NUM_ROWS'] = $listrow_offline_count;

?>
	<tr>
		<td width="50%" valign="middle" align="center" class="BoardRowBody">
			<span class="BoardRowBodyLink"><?php echo isset($listrow_offline_item['BUDDY_URL']) ? $listrow_offline_item['BUDDY_URL'] : ''; ?></span>
		</td>
		<td width="30%" align="center" valign="middle" class="BoardRowBody">
			<span class="postdetails"><?php echo isset($listrow_offline_item['PM_IMG']) ? $listrow_offline_item['PM_IMG'] : ''; ?></span>
		</td>
		<td width="20%" align="center" valign="middle" class="BoardRowBody">
			<span class="postdetails"><?php echo isset($listrow_offline_item['REMOVE_IMG']) ? $listrow_offline_item['REMOVE_IMG'] : ''; ?></span>
		</td>
	</tr>
	<?php

} // END listrow_offline

if(isset($listrow_offline_item)) { unset($listrow_offline_item); } 

?>
	<?php

$switch_no_buddies_offline_count = ( isset($this->_tpldata['switch_no_buddies_offline.']) ) ?  sizeof($this->_tpldata['switch_no_buddies_offline.']) : 0;
for ($switch_no_buddies_offline_i = 0; $switch_no_buddies_offline_i < $switch_no_buddies_offline_count; $switch_no_buddies_offline_i++)
{
 $switch_no_buddies_offline_item = &$this->_tpldata['switch_no_buddies_offline.'][$switch_no_buddies_offline_i];
 $switch_no_buddies_offline_item['S_ROW_COUNT'] = $switch_no_buddies_offline_i;
 $switch_no_buddies_offline_item['S_NUM_ROWS'] = $switch_no_buddies_offline_count;

?>
	<tr>
		<td class="BoardRowBody" colspan="3" height="25" align="center" valign="middle">
			<span class="BoardRowBodyLink"><?php echo isset($this->vars['L_NO_BUDDIES_OFFLINE']) ? $this->vars['L_NO_BUDDIES_OFFLINE'] : $this->lang('L_NO_BUDDIES_OFFLINE'); ?></span>
		</td>
	</tr>
	<?php

} // END switch_no_buddies_offline

if(isset($switch_no_buddies_offline_item)) { unset($switch_no_buddies_offline_item); } 

?>
	<tr>
		<td class="catBottom" colspan="3" height="28">&nbsp;</td>
	</tr>
</table>
