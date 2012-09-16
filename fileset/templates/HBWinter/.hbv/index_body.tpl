<table width="100%" cellpadding="3" cellspacing="1" border="0">
    <tr>
      <td class="MainMenuRow" width="100%">{TOTAL_POSTS}</td>
    </tr>
</table>
<table width="100%" cellpadding="3" cellspacing="0" border="0">
    <tr>
      <!-- BEGIN catrow -->
      <td class="BoardColumn">
      <img src="templates/HBPreview/images/cat_minus.png" align="top" border="0" height="15" hspace="0" width="15" vspace="0">
      </td>
      <td colspan="2" width="65%" class="BoardColumn"><a class="BoardColumn" href="{catrow.U_VIEWCAT}">{catrow.CAT_DESC}</a></td>
      <td width="5%" class="BoardColumn">{L_TOPICS}</td>
      <td width="5%" class="BoardColumn">{L_POSTS}</td>
      <td width="25%" class="BoardColumn" align="center">{L_LASTPOST}</td>
     </tr>
    <tr>
      <!-- BEGIN forumrow -->
      <td class="BoardRowHeading" width=1%><b>&nbsp;!&nbsp;</b></td>
      <td colspan="2" width="65%" class="BoardRowBody"><a class="SubjectLink" href="{catrow.forumrow.U_VIEWFORUM}">{catrow.forumrow.FORUM_NAME}</a></td>
      <td class="BoardRowHeading" width="5%" align="center">&nbsp;{catrow.forumrow.TOPICS}&nbsp;</td>
      <td class="BoardRowHeading" width="5%" align="center">&nbsp;{catrow.forumrow.POSTS}&nbsp;</td>
      <td class="BoardRowHeading" width="25%" align="right"><span style='font-size: 9px;'>{catrow.forumrow.LAST_POST}</span></td>
    </tr>
<!-- END catrow -->
<!-- END forumrow -->
</table>

