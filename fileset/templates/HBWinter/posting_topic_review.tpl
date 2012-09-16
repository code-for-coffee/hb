
<!-- BEGIN switch_inline_mode -->
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="BoardRowBody">
	<tr> 
		<td class="BoardColumn" height="28" align="center"><b><span class="BoardColumnLink">{L_TOPIC_REVIEW}</span></b></td>
	</tr>
	<tr>
		<td class="BoardRowBody"><iframe width="100%" height="300" src="{U_REVIEW_TOPIC}" >
<!-- END switch_inline_mode -->
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="BoardRowHeading" width="22%" height="26"><b>{L_AUTHOR}</b></th>
		<th class="BoardRowHeading"><b>{L_MESSAGE}</b></th>
	</tr>
	<!-- BEGIN postrow -->
	<tr>
		<td width="22%" align="left" valign="top" class="BoardRowHeading"><span class="name"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span></td>
		<td class="{postrow.ROW_CLASS}" height="28" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr> 
				<td width="100%"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /><span class="BoardRowBodyLink">{L_POSTED}: {postrow.POST_DATE}<span class="gen">&nbsp;</span>&nbsp;&nbsp;&nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></td>
			</tr>
			<tr> 
				<td colspan="2"><hr /></td>
			</tr>
			<tr> 
				<td class="BoardRowBody" colspan="2">{postrow.MESSAGE}</td>
			</tr>
		</table></td>
	</tr>
	<tr> 
		<td colspan="2" height="1" class="spaceRow"><img src="templates/HBWinter/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	 <!-- END postrow -->
</table>
<!-- BEGIN switch_inline_mode -->
		</iframe></td>
	</tr>
</table>
<!-- END switch_inline_mode -->
