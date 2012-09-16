<form method="POST" action="{S_POLL_ACTION}">
<table class="BoardColumn" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td align="center"><b>{POLL_QUESTION}</b></td>
</tr>
<tr>
<td align="center">
        <table cellspacing="0" cellpadding="2" border="0">
<!-- BEGIN poll_option -->
<tr>
<td><input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}" />&nbsp;</td>
<td><span class="BoardColumnLink">{poll_option.POLL_OPTION_CAPTION}</span></td>
</tr>
<!-- END poll_option -->
       </table></td>
</tr>
<tr>
<td align="center"><input type="submit" name "submit" value="{L_SUBMIT_VOTE}" />
</td>
</tr>
<tr>
<td align="center">
<a href="{U_VIEW_RESULTS}" class="BoardColumnLink">{L_VIEW_RESULTS}</a></td>
</tr>
{S_HIDDEN_FIELDS}

</form>
</tr>
</table>
