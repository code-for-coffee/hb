<?php

// eXtreme Styles mod cache. Generated on Mon, 24 Jan 2005 06:50:16 +0000 (time=1106549416)

?><table width="100%" cellpadding="3" cellspacing="0" border="0">
  <tr>
    <td width="80%" align="left" class="BoardColumn"><a class="MainMenuLink" href="<?php echo isset($this->vars['U_VIEW_FORUM']) ? $this->vars['U_VIEW_FORUM'] : $this->lang('U_VIEW_FORUM'); ?>"><?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></a>: <a class="MainMenuLink" href="<?php echo isset($this->vars['U_VIEW_TOPIC']) ? $this->vars['U_VIEW_TOPIC'] : $this->lang('U_VIEW_TOPIC'); ?>"><?php echo isset($this->vars['TOPIC_TITLE']) ? $this->vars['TOPIC_TITLE'] : $this->lang('TOPIC_TITLE'); ?></a><br />
    <td align="right" class="BoardColumn"><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></td>
  </tr>
</table>
<table width="100%" cellpadding="3" cellspacing="0" border="0">

  <tr>
    
    <td width="20%" class="BoardColumn">Author</td>
    <td width="80%" class="BoardColumn">Topic: <?php echo isset($this->vars['TOPIC_TITLE']) ? $this->vars['TOPIC_TITLE'] : $this->lang('TOPIC_TITLE'); ?></td>

  </tr>
</table>
<?php echo isset($this->vars['POLL_DISPLAY']) ? $this->vars['POLL_DISPLAY'] : $this->lang('POLL_DISPLAY'); ?>
<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ?  sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>

<table width="100%" cellpadding="3" cellspacing="1" border="0">
  <tr>

    <td width=20% rowspan=3 class='BoardRowHeading' valign="top"><span class="AuthorLink"><a class="AuthorLink" href="<?php echo isset($postrow_item['HB_PROFILE']) ? $postrow_item['HB_PROFILE'] : ''; ?>" alt="View <?php echo isset($postrow_item['HB_POSTER_NAME']) ? $postrow_item['HB_POSTER_NAME'] : ''; ?>'s Profile"><?php echo isset($postrow_item['POSTER_NAME']) ? $postrow_item['POSTER_NAME'] : ''; ?></a></span><br>
    <span style='font-size: 8pt;'>
    <span style='font-weight: bold;'></span><?php echo isset($postrow_item['POSTER_RANK']) ? $postrow_item['POSTER_RANK'] : ''; ?><br>
    <span style='font-weight: bold;'></span><?php echo isset($postrow_item['POSTER_POSTS']) ? $postrow_item['POSTER_POSTS'] : ''; ?><br>
    <span style='font-weight: bold;'></span><?php echo isset($postrow_item['POSTER_JOINED']) ? $postrow_item['POSTER_JOINED'] : ''; ?><br>
    <?php echo isset($postrow_item['POSTER_AVATAR']) ? $postrow_item['POSTER_AVATAR'] : ''; ?>
    </td>

<td width=80% class='BoardRowHeading'><a name="<?php echo isset($postrow_item['U_POST_ID']) ? $postrow_item['U_POST_ID'] : ''; ?>"></a>
<span style='font-weight: bold;'>Date Posted:</span> <span style='font-weight: normal;'><?php echo isset($postrow_item['POST_DATE']) ? $postrow_item['POST_DATE'] : ''; ?></span>
<span style='font-weight: bold;'>Subject:</span> <span style='font-weight: normal;'><?php echo isset($postrow_item['POST_SUBJECT']) ? $postrow_item['POST_SUBJECT'] : ''; ?></span>

</td></tr>
<tr><td class='BoardRowBody'>
<?php echo isset($postrow_item['MESSAGE']) ? $postrow_item['MESSAGE'] : ''; ?><br><br>
<span class="SignatureText"><?php echo isset($postrow_item['SIGNATURE']) ? $postrow_item['SIGNATURE'] : ''; ?></span><br><br></td>
</tr>
<tr><td class="BoardRowBody" align="right">
    <span class="BoardRowBodyLink"><span align="left"><?php echo isset($postrow_item['DELETE_IMG']) ? $postrow_item['DELETE_IMG'] : ''; ?> <?php echo isset($postrow_item['IP_IMG']) ? $postrow_item['IP_IMG'] : ''; ?></span> <?php echo isset($postrow_item['PM_IMG']) ? $postrow_item['PM_IMG'] : ''; ?> <?php echo isset($postrow_item['EDIT_IMG']) ? $postrow_item['EDIT_IMG'] : ''; ?> <?php echo isset($postrow_item['QUOTE_IMG']) ? $postrow_item['QUOTE_IMG'] : ''; ?> 
    <a href="<?php echo isset($this->vars['U_POST_REPLY_TOPIC']) ? $this->vars['U_POST_REPLY_TOPIC'] : $this->lang('U_POST_REPLY_TOPIC'); ?>"><img src="templates/Everwoods/images/replysmall.gif" border="0"></a></td>
</tr>
</td>
</tr></table>
<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>                                                                                    

  <table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
        <tr> 
          <td align="left" valign="middle" width="50" class="MainMenuRow"><a href="<?php echo isset($this->vars['U_POST_NEW_TOPIC']) ? $this->vars['U_POST_NEW_TOPIC'] : $this->lang('U_POST_NEW_TOPIC'); ?>"><img src="<?php echo isset($this->vars['POST_IMG']) ? $this->vars['POST_IMG'] : $this->lang('POST_IMG'); ?>" border="0" alt="<?php echo isset($this->vars['L_POST_NEW_TOPIC']) ? $this->vars['L_POST_NEW_TOPIC'] : $this->lang('L_POST_NEW_TOPIC'); ?>" /></a></td>
          <td align="left" valign="middle" width="100%" class="MainMenuRow"><span class="BoardColumnLink">&nbsp;&nbsp;&nbsp;<a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="BoardColumnLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a> -> <a class="BoardColumnLink" href="<?php echo isset($this->vars['U_VIEW_FORUM']) ? $this->vars['U_VIEW_FORUM'] : $this->lang('U_VIEW_FORUM'); ?>"><?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></a></span></td>
          <td align="right" valign="middle" nowrap="nowrap" class="MainMenuRow"><span class="BoardColumnLink"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?><br /><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?></span> 
                </td> 
        </tr>
        <tr>  
          <td align="left" colspan="2" class="MainMenuRow"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></td>
	  <td align="right" colspan="1" class="MainMenuRow">&nbsp;<?php echo isset($this->vars['S_TOPIC_ADMIN']) ? $this->vars['S_TOPIC_ADMIN'] : $this->lang('S_TOPIC_ADMIN'); ?></td>
	</tr>
	<tr>
	  <td align="center" colspan="3" class="BoardColumn"><?php echo isset($this->vars['QUICK_REPLY_FORM']) ? $this->vars['QUICK_REPLY_FORM'] : $this->lang('QUICK_REPLY_FORM'); ?></td>
	</tr>
	<tr>
	  <td align="right" colspan="3" class="BoardColumn"><span class='VersionText'><?php echo isset($this->vars['S_AUTH_LIST']) ? $this->vars['S_AUTH_LIST'] : $this->lang('S_AUTH_LIST'); ?></span></td>
	</tr>  

</table>
