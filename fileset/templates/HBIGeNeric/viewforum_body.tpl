<table width="100%" cellpadding="3" cellspacing="0" border="0">
<tr>
  <td width="55%" class="MainMenuRow">&nbsp;<a class="MainMenuLink" href="{U_POST_NEW_TOPIC}">{L_POST_NEW_TOPIC}</a></td>
  <td width="45%" class="MainMenuRow">{PAGINATION}</td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0">
<tr><td width="55%" class="BoardColumn">{FORUM_NAME}</td>
<td width="15%" class="BoardColumn">Author</td>
<td align="center" width="7%" class="BoardColumn">Views</td>
<td align="center" width="8%" class="BoardColumn">Replies</td>
<td width="15%" class="BoardColumn">Last Post</td>
</tr>
<!-- BEGIN topicrow -->
<tr>
  <td class="BoardRowBody" valign="center"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="18" height="18">&nbsp;<a class="SubjectLink" href="{topicrow.U_VIEW_TOPIC}">{topicrow.TOPIC_TITLE}</a> <font size=1>{topicrow.GOTO_PAGE}</font></td>
  <td class="BoardRowHeading"><a class="AuthorLink" href=""><span class="AuthorLink">{topicrow.TOPIC_AUTHOR}</span></a></td>
  <td align="center" class="BoardRowBody">{topicrow.VIEWS}</td>
  <td align="center" class="BoardRowBody">{topicrow.REPLIES}</td>
  <td class="BoardRowHeading"><span style='font-size: 8pt;'>{topicrow.LAST_POST_TIME} {topicrow.LAST_POST_IMG}</a></td>

</tr>

<!-- END topicrow -->
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0">
<tr>
     <td align="right" colspan="3" class="BoardColumn"><span class='VersionText'>{S_AUTH_LIST}</span></td>
</tr>
</table>