
<form method="post" action="{S_POST_DAYS_ACTION}">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left" valign="bottom" colspan="2" class="MainMenuRow"><a class="BoardColumnLink" href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br /><span class="MainMenuRow"><b>{L_MODERATOR}: {MODERATORS}<br /><br />{LOGGED_IN_USER_LIST}</b></span></td>
	  <td align="right" valign="bottom" nowrap="nowrap" class="MainMenuRow"><span class="MainMenuRow"><b>{PAGINATION}</b></span></td>
	</tr>
	<tr> 
	  <td align="left" valign="middle" width="50" class="MainMenuRow"><a href="{U_POST_NEW_TOPIC}">New Topic</a></td>
	  <td align="left" valign="middle" width="100%" class="MainMenuRow">&nbsp;&nbsp;&nbsp;<a class="BoardColumnLink" href="{U_INDEX}">{L_INDEX}</a> -> <a class="BoardColumnLink" href="{U_VIEW_FORUM}">{FORUM_NAME}</a></td>
	  <td align="right" valign="middle" class="MainMenuRow" nowrap="nowrap"><a class="MainMenuRow" href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></td>
	</tr>
  </table>
<!-- Marker -->
  <table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th colspan="2" align="center" height="25" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_TOPICS}&nbsp;</span></th>
	  <th width="50" align="center" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_REPLIES}&nbsp;</span></th>
	  <th width="100" align="center" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_AUTHOR}&nbsp;</span></th>
	  <th width="50" align="center" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_VIEWS}&nbsp;</span></th>
	  <th align="center" class="BoardRowHeading" nowrap="nowrap"><span class="SubjectLink">&nbsp;{L_LASTPOST}&nbsp;</span></th>
	</tr>
	<!-- BEGIN topicrow -->
	<tr> 
	  <td class="BoardRowBody" align="center" valign="middle" width="20"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="19" height="18" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  <td class="BoardRowBody" width="100%"><span class="SubjectText">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a class="SubjectLink" href="{topicrow.U_VIEW_TOPIC}">{topicrow.TOPIC_TITLE}</a></span><span class="SubjectText"><br />
		{topicrow.GOTO_PAGE}</span></td>
	  <td class="BoardRowBody" align="center" valign="middle"><span class="BoardRowBodyLink">{topicrow.REPLIES}</span></td>
	  <td class="BoardRowBody" align="center" valign="middle"><span class="SubjectLink">{topicrow.TOPIC_AUTHOR}</span></td>
	  <td class="BoardRowBody" align="center" valign="middle"><span class="BoardRowBodyLink">{topicrow.VIEWS}</span></td>
	  <td class="BoardRowBody" align="center" valign="middle" nowrap="nowrap"><span class="BoardRowBodyLink">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</span></td>
	</tr>
	<!-- END topicrow -->
	<!-- BEGIN switch_no_topics -->
	<tr> 
	  <td class="BoardRowBody" colspan="6" height="30" align="center" valign="middle"><span class="SubjectLink">{L_NO_TOPICS}</span></td>
	</tr>
	<!-- END switch_no_topics -->
	<tr> 
	  <td class="BoardColumn" align="center" valign="middle" colspan="6" height="28"><span class="BoardColumnLink">{L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp; 
		<input type="submit" class="InputSection" value="{L_GO}" name="submit" />
		</span></td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="left" valign="middle" width="50" class="MainMenuRow"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	  <td align="left" valign="middle" width="100%" class="MainMenuRow"><span class="BoardColumnLink">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="BoardColumnLink">{L_INDEX}</a> -> <a class="BoardColumnLink" href="{U_VIEW_FORUM}">{FORUM_NAME}</a></span></td>
	  <td align="right" valign="middle" nowrap="nowrap" class="MainMenuRow"><span class="BoardColumnLink">{S_TIMEZONE}<br />{PAGINATION}</span> 
		</td>
	</tr>
	<tr>
	  <td align="left" colspan="3" class="MainMenuRow">{PAGE_NUMBER}</td>
	</tr>
  </table>
</form>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
	<td align="right" class="MainMenuRow">{JUMPBOX}</td>
  </tr>
</table>

