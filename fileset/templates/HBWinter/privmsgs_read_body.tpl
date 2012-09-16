
<table cellspacing="2" cellpadding="2" border="0" align="center" width="100%" class="BoardColumn">
<tr><td>
<table cellspacing="2" cellpadding="2" border="0" align="center" class="BoardColumn">
  <tr> 
	<td class="BoardColumn" valign="middle">{INBOX_IMG}</td>
	<td class="BoardColumn" valign="middle"><span class="cattitle">{INBOX} &nbsp;</span></td>
	<td class="BoardColumn" valign="middle">{SENTBOX_IMG}</td>
	<td class="BoardColumn" valign="middle"><span class="cattitle">{SENTBOX} &nbsp;</span></td>
	<td class="BoardColumn" valign="middle">{OUTBOX_IMG}</td>
	<td class="BoardColumn" valign="middle"><span class="cattitle">{OUTBOX} &nbsp;</span></td>
	<td class="BoardColumn" valign="middle">{SAVEBOX_IMG}</td>
	<td class="BoardColumn" valign="middle"><span class="cattitle">{SAVEBOX}</span></td>
  </tr>
</table>
</td></tr></table>

<form method="post" action="{S_PRIVMSGS_ACTION}">
<table width="100%" cellspacing="2" cellpadding="2" border="0" class="BoardColumn">
  <tr>
	  <td class="BoardColumn" valign="middle">{REPLY_PM_IMG}</td>
	  <td class="BoardColumn" width="100%"><span class="BoardColumnLink">&nbsp;<a href="{U_INDEX}" class="BoardColumnLink">{L_INDEX}</a></span></td>
  </tr>
</table>

<table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th colspan="3" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">{BOX_NAME} - {L_MESSAGE}</span></th>
	</tr>
	<tr> 
	  <td class="BoardRowHeading">{L_FROM}:</td>
	  <td width="100%" class="BoardRowHeading" colspan="2"><span class="SubjectLink">{MESSAGE_FROM}</span></td>
	</tr>
	<tr> 
	  <td class="BoardRowHeading">{L_TO}:</td>
	  <td width="100%" class="BoardRowHeading" colspan="2"><span class="SubjectLink">{MESSAGE_TO}</span></td>
	</tr>
	<tr> 
	  <td class="BoardRowHeading">{L_POSTED}:</td>
	  <td width="100%" class="BoardRowHeading" colspan="2"><span class="SubjectLink">{POST_DATE}</span></td>
	</tr>
	<tr> 
	  <td class="BoardRowHeading">{L_SUBJECT}:</td>
	  <td width="100%" class="BoardRowHeading"><span class="SubjectLink">{POST_SUBJECT}</span></td>
	  <td nowrap="nowrap" class="BoardRowHeading" align="right"> {QUOTE_PM_IMG} {EDIT_PM_IMG}</td>
	</tr>
	<tr> 
	  <td valign="top" colspan="3" class="BoardRowBody">{MESSAGE}</td>
	</tr>
	<tr> 
	  <td width="78%" height="28" valign="bottom" colspan="3" class="BoardColumn"> 
		<table cellspacing="0" cellpadding="0" border="0" height="18">
		  <tr> 
			<td valign="middle" nowrap="nowrap">{PROFILE_IMG} {BUDDY_IMG} {PM_IMG} {EMAIL_IMG} 
			  {WWW_IMG} {AIM_IMG} {YIM_IMG} {MSN_IMG}</td><td>&nbsp;</td><td valign="top" nowrap="nowrap"><script language="JavaScript" type="text/javascript"><!-- 

		if ( navigator.userAgent.toLowerCase().indexOf('mozilla') != -1 && navigator.userAgent.indexOf('5.') == -1 && navigator.userAgent.indexOf('6.') == -1 )
			document.write('{ICQ_IMG}');
		else
			document.write('<div style="position:relative"><div style="position:absolute">{ICQ_IMG}</div><div style="position:absolute;left:3px">{ICQ_STATUS_IMG}</div></div>');
		  
		  //--></script><noscript>{ICQ_IMG}</noscript></td>
		  </tr>
		</table>
	  </td>
	</tr>
	<tr>
	  <td class="BoardColumn" colspan="3" height="28" align="right"> {S_HIDDEN_FIELDS} 
		<input type="submit" name="save" value="{L_SAVE_MSG}" class="liteoption" />
		&nbsp; 
		<input type="submit" name="delete" value="{L_DELETE_MSG}" class="liteoption" />
	  </td>
	</tr>
  </table>
  <table width="100%" cellspacing="2" border="0" class="BoardColumn" align="center" cellpadding="2">
	<tr> 
	  <td class="BoardColumn">{REPLY_PM_IMG}</td>
	  <td align="right" valign="top" class="BoardColumn"><span class="BoardColumnLink">{S_TIMEZONE}</span></td>
	</tr>
  </table>
</form>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr> 
	<td valign="top" align="right" class="BoardColumn">{JUMPBOX}</td>
  </tr>
</table>
