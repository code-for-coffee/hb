
<h1>{L_BAN_TITLE}</h1>

<p>{L_BAN_EXPLAIN}</p>

<form method="post" name="post" action="{S_BANLIST_ACTION}"><table width="80%" cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
	<tr> 
	  <th class="thHead" colspan="2">{L_BAN_USER}</th>
	</tr>
	<tr> 
	  <td class="row1">{L_USERNAME}:</td>
	  <td class="row2"><input class="post" type="text" class="post" name="username" maxlength="50" size="20" /> <input type="hidden" name="mode" value="edit" />{S_HIDDEN_FIELDS} <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></td>
	</tr>
	<tr> 
	  <th class="thHead" colspan="2">{L_UNBAN_USER}</th>
	</tr>
	<tr> 
	  <td class="row1">{L_USERNAME}: <br /><span class="gensmall">{L_UNBAN_USER_EXPLAIN}</span></td>
	  <td class="row2">{S_UNBAN_USERLIST_SELECT}</td>
	</tr>
	</table></form>

<p>{L_BAN_EXPLAIN_WARN}</p>
