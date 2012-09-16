<table class="BoardColumn" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td align="center"><b>{POLL_QUESTION}</b></td>
</tr>
<tr>
<td align="center">
        <table cellspacing="0" cellpadding="2" border="0">
<!-- BEGIN poll_option -->
                        <tr>
                          <td><span class="BoardColumnLink">{poll_option.POLL_OPTION_CAPTION}</span></td>
                          <td>
                                <table cellspacing="0" cellpadding="0" border="0">
                                  <tr>
                                        <td><img src="templates/HBWinter/images/vote_lcap.gif" width="4" alt="" height="12" /></td>
                                        <td><img src="{poll_option.POLL_OPTION_IMG}" width="{poll_option.POLL_OPTION_IMG_WIDTH}" height="12" alt="{poll_option.POLL_OPTION_PERCENT}" /></td>
                                        <td><img src="templates/HBWinter/images/vote_rcap.gif" width="4" alt="" height="12" /></td>
                                  </tr>
                                </table>
                          </td>
                          <td align="center"><b><span class="BoardColumnLink">&nbsp;{poll_option.POLL_OPTION_PERCENT}&nbsp;</span></b></td>
                          <td align="center"><span class="BoardColumnLink">[ {poll_option.POLL_OPTION_RESULT} ]</span></td>
                        </tr>										
<!-- END poll_option -->
       </table></td>
</tr>
<tr>
</tr>
{S_HIDDEN_FIELDS}

</tr>
</table>
