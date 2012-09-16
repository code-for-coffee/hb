<?php

// eXtreme Styles mod cache. Generated on Sun, 23 Jan 2005 06:18:27 +0000 (time=1106461107)

?>
<form method="post" action="<?php echo isset($this->vars['S_SPLIT_ACTION']) ? $this->vars['S_SPLIT_ACTION'] : $this->lang('S_SPLIT_ACTION'); ?>">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left" class="BoardColumn"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a><span class="nav"> 
		-> <a href="<?php echo isset($this->vars['U_VIEW_FORUM']) ? $this->vars['U_VIEW_FORUM'] : $this->lang('U_VIEW_FORUM'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></a></span></td>
	</tr>
  </table>
  <table width="100%" cellpadding="4" cellspacing="1" border="0" class="BoardRowHeading">
	<tr> 
	  <th height="25" class="thHead" colspan="3" nowrap="nowrap" class="BoardRowHeading"><b><?php echo isset($this->vars['L_SPLIT_TOPIC']) ? $this->vars['L_SPLIT_TOPIC'] : $this->lang('L_SPLIT_TOPIC'); ?></b></th>
	</tr>
	<tr> 
	  <td class="BoardRowBody" colspan="3" align="center"><span class="gensmall"><?php echo isset($this->vars['L_SPLIT_TOPIC_EXPLAIN']) ? $this->vars['L_SPLIT_TOPIC_EXPLAIN'] : $this->lang('L_SPLIT_TOPIC_EXPLAIN'); ?></span></td>
	</tr>
	<tr> 
	  <td class="row1" nowrap="nowrap"><span class="gen"><?php echo isset($this->vars['L_SPLIT_SUBJECT']) ? $this->vars['L_SPLIT_SUBJECT'] : $this->lang('L_SPLIT_SUBJECT'); ?></span></td>
	  <td class="row2" colspan="2"><input class="post" type="text" size="35" style="width: 350px" maxlength="60" name="subject" /></td>
	</tr>
	<tr> 
	  <td class="row1" nowrap="nowrap"><span class="gen"><?php echo isset($this->vars['L_SPLIT_FORUM']) ? $this->vars['L_SPLIT_FORUM'] : $this->lang('L_SPLIT_FORUM'); ?></span></td>
	  <td class="row2" colspan="2"><?php echo isset($this->vars['S_FORUM_SELECT']) ? $this->vars['S_FORUM_SELECT'] : $this->lang('S_FORUM_SELECT'); ?></td>
	</tr>
	<tr> 
	  <td class="catHead" colspan="3" height="28"> 
		<table width="60%" cellspacing="0" cellpadding="0" border="0" align="center">
		  <tr> 
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_all" value="<?php echo isset($this->vars['L_SPLIT_POSTS']) ? $this->vars['L_SPLIT_POSTS'] : $this->lang('L_SPLIT_POSTS'); ?>" />
			</td>
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_beyond" value="<?php echo isset($this->vars['L_SPLIT_AFTER']) ? $this->vars['L_SPLIT_AFTER'] : $this->lang('L_SPLIT_AFTER'); ?>" />
			</td>
		  </tr>
		</table>
	  </td>
	</tr>
	<tr> 
	  <th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></b></th>
	  <th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></b></th>
	  <th class="BoardRowHeading" nowrap="nowrap"><b><?php echo isset($this->vars['L_SELECT']) ? $this->vars['L_SELECT'] : $this->lang('L_SELECT'); ?></b></th>
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
	  <td align="left" valign="top" class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>"><span class="name"><a name="<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"></a><?php echo isset($postrow_item['POSTER_NAME']) ? $postrow_item['POSTER_NAME'] : ''; ?></span></td>
	  <td width="100%" valign="top" class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>"> 
		<table width="100%" cellspacing="0" cellpadding="3" border="0">
		  <tr> 
			<td valign="middle" class="BoardRowHeading"><img src="templates/HBWinter/images/icon_minipost.gif" alt="<?php echo isset($this->vars['L_POST']) ? $this->vars['L_POST'] : $this->lang('L_POST'); ?>"><span class="postdetails"><?php echo isset($this->vars['L_POSTED']) ? $this->vars['L_POSTED'] : $this->lang('L_POSTED'); ?>: 
			  <?php echo isset($postrow_item['POST_DATE']) ? $postrow_item['POST_DATE'] : ''; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo isset($this->vars['L_POST_SUBJECT']) ? $this->vars['L_POST_SUBJECT'] : $this->lang('L_POST_SUBJECT'); ?>: <?php echo isset($postrow_item['POST_SUBJECT']) ? $postrow_item['POST_SUBJECT'] : ''; ?></span></td>
		  </tr>
		  <tr> 
			<td valign="top"> 
			  <hr size="1" />
			  <span class="SignatureText"><?php echo isset($postrow_item['MESSAGE']) ? $postrow_item['MESSAGE'] : ''; ?></span></td> 
		  </tr>
		</table>
	  </td>
	  <td width="5%" align="center" class="<?php echo isset($postrow_item['ROW_CLASS']) ? $postrow_item['ROW_CLASS'] : ''; ?>"><?php echo isset($postrow_item['S_SPLIT_CHECKBOX']) ? $postrow_item['S_SPLIT_CHECKBOX'] : ''; ?></td>
	</tr>
	<tr> 
	  <td colspan="3" height="1" class="row3"><img src="templates/HBPreview/images/spacer.gif" width="1" height="1" alt="."></td>
	</tr>
	<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
	<tr> 
	  <td class="catBottom" colspan="3" height="28"> 
		<table width="60%" cellspacing="0" cellpadding="0" border="0" align="center">
		  <tr> 
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_all" value="<?php echo isset($this->vars['L_SPLIT_POSTS']) ? $this->vars['L_SPLIT_POSTS'] : $this->lang('L_SPLIT_POSTS'); ?>" />
			</td>
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_beyond" value="<?php echo isset($this->vars['L_SPLIT_AFTER']) ? $this->vars['L_SPLIT_AFTER'] : $this->lang('L_SPLIT_AFTER'); ?>" />
			  <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> </td>
		  </tr>
		</table>
	  </td>
	</tr>
  </table>
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="right" valign="top" class="BoardColumn"><span class="MainMenuLink"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span></td>
	</tr>
  </table>
</form>
