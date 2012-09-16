<?php

// eXtreme Styles mod cache. Generated on Sat, 22 Jan 2005 16:51:32 +0000 (time=1106412692)

?>
<?php

$switch_inline_mode_count = ( isset($this->_tpldata['switch_inline_mode.']) ) ?  sizeof($this->_tpldata['switch_inline_mode.']) : 0;
for ($switch_inline_mode_i = 0; $switch_inline_mode_i < $switch_inline_mode_count; $switch_inline_mode_i++)
{
 $switch_inline_mode_item = &$this->_tpldata['switch_inline_mode.'][$switch_inline_mode_i];
 $switch_inline_mode_item['S_ROW_COUNT'] = $switch_inline_mode_i;
 $switch_inline_mode_item['S_NUM_ROWS'] = $switch_inline_mode_count;

?>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="BoardRowBody">
	<tr> 
		<td class="BoardColumn" height="28" align="center"><b><span class="BoardColumnLink"><?php echo isset($this->vars['L_TOPIC_REVIEW']) ? $this->vars['L_TOPIC_REVIEW'] : $this->lang('L_TOPIC_REVIEW'); ?></span></b></td>
	</tr>
	<tr>
		<td class="BoardRowBody"><iframe width="100%" height="300" src="<?php echo isset($this->vars['U_REVIEW_TOPIC']) ? $this->vars['U_REVIEW_TOPIC'] : $this->lang('U_REVIEW_TOPIC'); ?>" >
<?php

} // END switch_inline_mode

if(isset($switch_inline_mode_item)) { unset($switch_inline_mode_item); } 

?>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="BoardRowHeading" width="22%" height="26"><b><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></b></th>
		<th class="BoardRowHeading"><b><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></b></th>
	</tr>
	<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ?  sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
	<tr>
		<td width="22%" align="left" valign="top" class="BoardRowHeading"><span class="name"><a name="<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"></a><b><?php echo isset($postrow_item['POSTER_NAME']) ? $postrow_item['POSTER_NAME'] : ''; ?></b></span></td>
		<td class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>" height="28" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr> 
				<td width="100%"><img src="<?php echo isset($postrow_item['MINI_POST_IMG']) ? $postrow_item['MINI_POST_IMG'] : ''; ?>" width="12" height="9" alt="<?php echo isset($postrow_item['L_MINI_POST_ALT']) ? $postrow_item['L_MINI_POST_ALT'] : ''; ?>" title="<?php echo isset($postrow_item['L_MINI_POST_ALT']) ? $postrow_item['L_MINI_POST_ALT'] : ''; ?>" border="0" /><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: <?php echo isset($postrow_item['POST_DATE']) ? $postrow_item['POST_DATE'] : ''; ?><span class="gen">&nbsp;</span>&nbsp;&nbsp;&nbsp;<?php echo isset($this->vars['L_POST_SUBJECT']) ? $this->vars['L_POST_SUBJECT'] : $this->lang('L_POST_SUBJECT'); ?>: <?php echo isset($postrow_item['POST_SUBJECT']) ? $postrow_item['POST_SUBJECT'] : ''; ?></span></td>
			</tr>
			<tr> 
				<td colspan="2"><hr /></td>
			</tr>
			<tr> 
				<td class="BoardRowBody" colspan="2"><?php echo isset($postrow_item['MESSAGE']) ? $postrow_item['MESSAGE'] : ''; ?></td>
			</tr>
		</table></td>
	</tr>
	<tr> 
		<td colspan="2" height="1" class="spaceRow"><img src="templates/HBWinter/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	 <?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
</table>
<?php

$switch_inline_mode_count = ( isset($this->_tpldata['switch_inline_mode.']) ) ?  sizeof($this->_tpldata['switch_inline_mode.']) : 0;
for ($switch_inline_mode_i = 0; $switch_inline_mode_i < $switch_inline_mode_count; $switch_inline_mode_i++)
{
 $switch_inline_mode_item = &$this->_tpldata['switch_inline_mode.'][$switch_inline_mode_i];
 $switch_inline_mode_item['S_ROW_COUNT'] = $switch_inline_mode_i;
 $switch_inline_mode_item['S_NUM_ROWS'] = $switch_inline_mode_count;

?>
		</iframe></td>
	</tr>
</table>
<?php

} // END switch_inline_mode

if(isset($switch_inline_mode_item)) { unset($switch_inline_mode_item); } 

?>
