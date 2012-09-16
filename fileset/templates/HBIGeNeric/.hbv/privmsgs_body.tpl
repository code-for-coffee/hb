 
<script language="Javascript" type="text/javascript">
	//
	// Should really check the browser to stop this whining ...
	//
	function select_switch(status)
	{
		for (i = 0; i < document.privmsg_list.length; i++)
		{
			document.privmsg_list.elements[i].checked = status;
		}
	}
</script>
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%" class="BoardColumn">
<tr><td>
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
  <tr> 
	<td valign="top" align="center" width="100%" class="BoardColumn"> 
	  <table height="40" cellspacing="2" cellpadding="2" border="0">
		<tr valign="middle"> 
		  <td>{INBOX_IMG}</td>
		  <td><span class="BoardColumnLink">{INBOX} &nbsp;</span></td>
		  <td>{SENTBOX_IMG}</td>
		  <td><span class="BoardColumnLink">{SENTBOX} &nbsp;</span></td>
		  <td>{OUTBOX_IMG}</td>
		  <td><span class="BoardColumnLink">{OUTBOX} &nbsp;</span></td>
		  <td>{SAVEBOX_IMG}</td>
		  <td><span class="BoardColumnLink">{SAVEBOX} &nbsp;</span></td>
		</tr>
	  </table>
	</td>
	<td align="right"> 
	  <!-- BEGIN switch_box_size_notice -->
	  <table width="175" cellspacing="1" cellpadding="2" border="0" class="bodyline">
		<tr> 
		  <td colspan="3" width="175" class="BoardColumn" nowrap="nowrap"><span class="BoardColumnLink">{BOX_SIZE_STATUS}</span></td>
		</tr>
		<tr> 
		  <td colspan="3" width="175" class="row2">
			<table cellspacing="0" cellpadding="1" border="0" class="BoardColumn">
			  <tr> 
				<td class="BoardRowHeading"><img src="templates/HBPreview/images/spacer.gif" width="{INBOX_LIMIT_IMG_WIDTH}" height="8" alt="{INBOX_LIMIT_PERCENT}" /></td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr> 
		  <td width="33%" class="BoardColumn"><span class="BoardColumnLink">0%</span></td>
		  <td width="34%" align="center" class="BoardColumn"><span class="BoardColumnLink">50%</span></td>
		  <td width="33%" align="right" class="BoardColumn"><span class="BoardColumnLink">100%</span></td>
		</tr>
	  </table>
	  <!-- END switch_box_size_notice -->
	</td>
  </tr>
</table>

<br clear="all" />

<form method="post" name="privmsg_list" action="{S_PRIVMSGS_ACTION}">
 <table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td colspan="2" class="BoardColumn"> </td>
    <td class="BoardColumn">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left" valign="middle">{POST_PM_IMG}</td>
	  <td align="left" width="100%">&nbsp;<span class="BoardColumnLink"><a href="{U_INDEX}" class="BoardColumnLink">{L_INDEX}</a></span></td>
	  <td align="right" nowrap="nowrap"><span class="BoardColumn">{L_DISPLAY_MESSAGES}: 
		<select name="msgdays">{S_SELECT_MSG_DAYS}
		</select>
		<input type="submit" value="{L_GO}" name="submit_msgdays" class="liteoption" />
		</span></td>
	</tr>
  </table>

     </td>
  </tr>

  <table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th width="5%" height="25" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink"> &nbsp;{L_FLAG}&nbsp; </span></th>
	  <th width="55%" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_SUBJECT}&nbsp;</span></th>
	  <th width="20%" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_FROM_OR_TO}&nbsp;</span></th>
	  <th width="15%" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_DATE}&nbsp;</span></th>
	  <th width="5%" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_MARK}&nbsp;</span></th>
	</tr>
	<!-- BEGIN listrow -->
	<tr> 
	  <td class="BoardRowHeading" width="5%" align="center" valign="middle"><img src="{listrow.PRIVMSG_FOLDER_IMG}" width="19" height="18" alt="{listrow.L_PRIVMSG_FOLDER_ALT}" title="{listrow.L_PRIVMSG_FOLDER_ALT}" /></td>
	  <td width="55%" valign="middle" class="BoardRowBody"><span class="SubjectLink">&nbsp;<a href="{listrow.U_READ}" class="SubjectLink">{listrow.SUBJECT}</a></span></td>
	  <td width="20%" valign="middle" align="center" class="BoardRowBody"><span class="SubjectLink">&nbsp;<a href="{listrow.U_FROM_USER_PROFILE}" class="SubjectLink">{listrow.FROM}</a></span></td>
	  <td width="15%" align="center" valign="middle" class="BoardRowBody"><span class="BoardRowBodyLink">{listrow.DATE}</span></td>
	  <td width="5%" align="center" valign="middle" class="BoardRowBody"><span class="BoardRowBodyLink"> 
		<input type="checkbox" name="mark[]2" value="{listrow.S_MARK_ID}" />
		</span></td>
	</tr>
	<!-- END listrow -->
	<!-- BEGIN switch_no_messages -->
	<tr> 
	  <td class="BoardRowHeading" colspan="5" align="center" valign="middle"><span class="gen">{L_NO_MESSAGES}</span></td>
	</tr>
	<!-- END switch_no_messages -->
	<tr> 
	  <td class="BoardColumn" colspan="5" height="28" align="right"> {S_HIDDEN_FIELDS} 
		<input type="submit" name="save" value="{L_SAVE_MARKED}" class="mainoption" />
		&nbsp; 
		<input type="submit" name="delete" value="{L_DELETE_MARKED}" class="liteoption" />
		&nbsp; 
		<input type="submit" name="deleteall" value="{L_DELETE_ALL}" class="liteoption" />
	  </td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="left" valign="middle" class="BoardColumn"><span class="BoardColumnLink">{POST_PM_IMG}</span></td>
	  <td align="left" valign="middle" width="100%" class="BoardColumn"><span class="BoardColumnLink">{PAGE_NUMBER}</span></td>
	  <td align="right" valign="top" nowrap="nowrap" class="BoardColumn"><b><span class="BoardColumnLink"><a href="javascript:select_switch(true);" class="BoardColumn">{L_MARK_ALL}</a> :: <a href="javascript:select_switch(false);" class="BoardColumn">{L_UNMARK_ALL}</a></span></b><br /><span class="nav">{PAGINATION}<br /></span><span class="gensmall">{S_TIMEZONE}</span></td>
	</tr>
  </table>

     </td>
  </tr>
 </table>

</form>
</td></tr></table>
<table width="100%" border="0" class="BoardColumn">
  <tr>
     <td>{BUDDYLIST}</td>
  </tr>
</table>

<table width="100%" border="0">
  <tr> 
	<td align="right" valign="top">{JUMPBOX}</td>
  </tr>
</table>
