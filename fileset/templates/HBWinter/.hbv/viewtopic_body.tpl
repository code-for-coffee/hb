<table width="100%" cellpadding="3" cellspacing="1" border="0">
  <tr>
    <td width="80%" align="left" class="BoardColumn"><a class="MainMenuLink" href="{U_VIEW_FORUM}">{FORUM_NAME}</a>: <a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><br />
    <td align="right" class="BoardColumn">{PAGINATION}</td>
  </tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0">

  <tr>
    
    <td width="20%" class="BoardColumn">Author</td>
    <td width="80%" class="BoardColumn">Topic: {TOPIC_TITLE}</td>

  </tr>
</table>

<!-- BEGIN postrow -->

<table width="100%" cellpadding="3" cellspacing="1" border="0">
  <tr>

    <td width=20% rowspan=3 class='BoardRowHeading' valign="top"><span class="AuthorLink"><a class="AuthorLink" href="{postrow.HB_PROFILE}" alt="View {postrow.POSTER_NAME}'s Profile">{postrow.POSTER_NAME}</a></span><br>
    <span style='font-size: 8pt;'>
    <span style='font-weight: bold;'></span>{postrow.POSTER_RANK}<br>
    <span style='font-weight: bold;'></span>{postrow.POSTER_POSTS}<br>
    <span style='font-weight: bold;'></span>{postrow.POSTER_JOINED}<br>
    {postrow.POSTER_AVATAR}
    </td>

<td width=80% class='BoardRowHeading'>
<span style='font-weight: bold;'>Date Posted:</span> <span style='font-weight: normal;'>{postrow.POST_DATE}</span>
<span style='font-weight: bold;'>Subject:</span> <span style='font-weight: normal;'>{postrow.POST_SUBJECT}</span>

</td></tr>
<tr><td class='BoardRowBody'>
{postrow.MESSAGE}<br><br>
{postrow.SIGNATURE}<br><br></td>
</tr>
<tr><td class="BoardRowBody" align="right">
    <span class="BoardRowBodyLink"><span align="left">{postrow.DELETE_IMG} {postrow.IP_IMG}</span> {postrow.PM_IMG} {postrow.EDIT_IMG} {postrow.QUOTE_IMG} 
    <a href="{U_POST_REPLY_TOPIC}"><img src="templates/HBPreview/images/replysmall.gif" border="0"></a></td>
</tr>
</td>
</tr></table>
<!-- END postrow -->                                                                                    

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
	<tr>
	  <td align="center" colspan="3" class="BoardColumn">{QUICK_REPLY_FORM}</td>
	</tr>
	<tr>
	  <td align="right" colspan="3" class="BoardColumn"><span class='VersionText'>{S_AUTH_LIST}</span></td>
	</tr>  

</table>
