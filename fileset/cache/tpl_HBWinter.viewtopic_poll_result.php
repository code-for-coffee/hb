<?php

// eXtreme Styles mod cache. Generated on Sat, 22 Jan 2005 04:41:24 +0000 (time=1106368884)

?><table class="BoardColumn" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td align="center"><b><?php echo isset($this->vars['POLL_QUESTION']) ? $this->vars['POLL_QUESTION'] : $this->lang('POLL_QUESTION'); ?></b></td>
</tr>
<tr>
<td align="center">
        <table cellspacing="0" cellpadding="2" border="0">
<?php

$poll_option_count = ( isset($this->_tpldata['poll_option.']) ) ?  sizeof($this->_tpldata['poll_option.']) : 0;
for ($poll_option_i = 0; $poll_option_i < $poll_option_count; $poll_option_i++)
{
 $poll_option_item = &$this->_tpldata['poll_option.'][$poll_option_i];
 $poll_option_item['S_ROW_COUNT'] = $poll_option_i;
 $poll_option_item['S_NUM_ROWS'] = $poll_option_count;

?>
                        <tr>
                          <td><span class="BoardColumnLink"><?php echo isset($poll_option_item['POLL_OPTION_CAPTION']) ? $poll_option_item['POLL_OPTION_CAPTION'] : ''; ?></span></td>
                          <td>
                                <table cellspacing="0" cellpadding="0" border="0">
                                  <tr>
                                        <td><img src="templates/HBWinter/images/vote_lcap.gif" width="4" alt="" height="12" /></td>
                                        <td><img src="<?php echo isset($poll_option_item['POLL_OPTION_IMG']) ? $poll_option_item['POLL_OPTION_IMG'] : ''; ?>" width="<?php echo isset($poll_option_item['POLL_OPTION_IMG_WIDTH']) ? $poll_option_item['POLL_OPTION_IMG_WIDTH'] : ''; ?>" height="12" alt="<?php echo isset($poll_option_item['POLL_OPTION_PERCENT']) ? $poll_option_item['POLL_OPTION_PERCENT'] : ''; ?>" /></td>
                                        <td><img src="templates/HBWinter/images/vote_rcap.gif" width="4" alt="" height="12" /></td>
                                  </tr>
                                </table>
                          </td>
                          <td align="center"><b><span class="BoardColumnLink">&nbsp;<?php echo isset($poll_option_item['POLL_OPTION_PERCENT']) ? $poll_option_item['POLL_OPTION_PERCENT'] : ''; ?>&nbsp;</span></b></td>
                          <td align="center"><span class="BoardColumnLink">[ <?php echo isset($poll_option_item['POLL_OPTION_RESULT']) ? $poll_option_item['POLL_OPTION_RESULT'] : ''; ?> ]</span></td>
                        </tr>										
<?php

} // END poll_option

if(isset($poll_option_item)) { unset($poll_option_item); } 

?>
       </table></td>
</tr>
<tr>
</tr>
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>

</tr>
</table>
