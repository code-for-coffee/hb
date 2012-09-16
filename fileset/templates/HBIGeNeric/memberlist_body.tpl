<form method="post" action="{S_MODE_ACTION}">
<table width="100%" class="BoardColumn" align="center">
<tr>
<td align="left"><a href="{U_INDEX}" class="BoardColumnLink">{L_INDEX}</a></td>
<td align="right" nowrap="nowrap">{L_SELECT_SORT_METHOD}&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp;
<input type="submit" name="submit" value="{L_SUBMIT}" />
</td>
</tr></table>
<table width="100%" class="BoardRowHeading" align="center">
<tr>
	<th class="BoardRowHeading" height="25" nowrap="nowrap"><b>#</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b>PM</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b>{L_USERNAME}</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b>{L_EMAIL}</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b>{L_FROM}</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b>{L_JOINED}</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b>{L_POSTS}</b></th>
	<th class="BoardRowHeading" nowrap="nowrap"><b>{L_WEBSITE}</b></th>
</tr>
<!-- BEGIN memberrow -->
<tr>
<td class="BoardRowHeading" align="center">&nbsp;{memberrow.ROW_NUMBER}&nbsp;</td>
<td class="BoardRowBody" align="center">&nbsp;{memberrow.PM_IMG}&nbsp;</td>
<td class="BoardRowBody" align="center"><a href="{memberrow.U_VIEWPROFILE}">{memberrow.USERNAME}</a></td>
<td class="BoardRowBody" align="center">&nbsp;{memberrow.EMAIL_IMG}&nbsp;</td>
<td class="BoardRowBody" align="center">{memberrow.FROM}</td>
<td class="BoardRowBody" align="center">{memberrow.JOINED}</td>
<td class="BoardRowBody" align="center">{memberrow.POSTS}</td>
<td class="BoardRowBody" align="center">&nbsp;{memberrow.WWW_IMG}&nbsp;</td>


<!-- END memberrow -->
</tr></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="MainMenu">
  <tr> 
	<td><span class="MainMenuLink">{PAGE_NUMBER}</span></td>
	<td align="right"><span class="MainMenuLink">{S_TIMEZONE}</span><br /><span class="nav">{PAGINATION}</span></td>
  </tr>
</table></form>

<table width="100%" cellspacing="2" border="0" align="center" class="MainMenuRow">
  <tr> 
	<td valign="top" align="right" class="MainMenuLink">{JUMPBOX}</td>
  </tr>
</table>