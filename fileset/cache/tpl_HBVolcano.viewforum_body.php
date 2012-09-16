<?php

// eXtreme Styles mod cache. Generated on Sun, 23 Jan 2005 06:49:36 +0000 (time=1106462976)

?><table width="100%" cellpadding="3" cellspacing="0" border="0">
<tr>
  <td width="55%" class="MainMenuRow">&nbsp;<a class="MainMenuLink" href="<?php echo isset($this->vars['U_POST_NEW_TOPIC']) ? $this->vars['U_POST_NEW_TOPIC'] : $this->lang('U_POST_NEW_TOPIC'); ?>"><?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?></a></td>
  <td width="45%" class="MainMenuRow"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0">
<tr><td width="55%" class="BoardColumn"><?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></td>
<td width="15%" class="BoardColumn">Author</td>
<td align="center" width="7%" class="BoardColumn">Views</td>
<td align="center" width="8%" class="BoardColumn">Replies</td>
<td width="15%" class="BoardColumn">Last Post</td>
</tr>
<?php

$topicrow_count = ( isset($this->_tpldata['topicrow.']) ) ?  sizeof($this->_tpldata['topicrow.']) : 0;
for ($topicrow_i = 0; $topicrow_i < $topicrow_count; $topicrow_i++)
{
 $topicrow_item = &$this->_tpldata['topicrow.'][$topicrow_i];
 $topicrow_item['S_ROW_COUNT'] = $topicrow_i;
 $topicrow_item['S_NUM_ROWS'] = $topicrow_count;

?>
<tr>
  <td class="BoardRowBody" valign="center"><img src="<?php echo isset($topicrow_item['TOPIC_FOLDER_IMG']) ? $topicrow_item['TOPIC_FOLDER_IMG'] : ''; ?>" width="18" height="18">&nbsp;<a class="SubjectLink" href="<?php echo isset($topicrow_item['U_VIEW_TOPIC']) ? $topicrow_item['U_VIEW_TOPIC'] : ''; ?>"><?php echo isset($topicrow_item['TOPIC_TITLE']) ? $topicrow_item['TOPIC_TITLE'] : ''; ?></a> <font size=1><?php echo isset($topicrow_item['GOTO_PAGE']) ? $topicrow_item['GOTO_PAGE'] : ''; ?></font></td>
  <td class="BoardRowHeading"><a class="AuthorLink" href=""><span class="AuthorLink"><?php echo isset($topicrow_item['TOPIC_AUTHOR']) ? $topicrow_item['TOPIC_AUTHOR'] : ''; ?></span></a></td>
  <td align="center" class="BoardRowBody"><?php echo isset($topicrow_item['VIEWS']) ? $topicrow_item['VIEWS'] : ''; ?></td>
  <td align="center" class="BoardRowBody"><?php echo isset($topicrow_item['REPLIES']) ? $topicrow_item['REPLIES'] : ''; ?></td>
  <td class="BoardRowHeading"><span style='font-size: 8pt;'><?php echo isset($topicrow_item['LAST_POST_TIME']) ? $topicrow_item['LAST_POST_TIME'] : ''; ?> <?php echo isset($topicrow_item['LAST_POST_IMG']) ? $topicrow_item['LAST_POST_IMG'] : ''; ?></a></td>

</tr>

<?php

} // END topicrow

if(isset($topicrow_item)) { unset($topicrow_item); } 

?>
</table>
