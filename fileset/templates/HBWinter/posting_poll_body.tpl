
			<tr>
				<th class="BoardRowHeading" colspan="2"><b>{L_ADD_A_POLL}</b></th>
	        </tr>
			<tr>
				<td class="BoardRowBody" colspan="2">{L_ADD_POLL_EXPLAIN}</td>
	        </tr>
            <tr>
				<td class="BoardRowBody"><span class="gen"><b>{L_POLL_QUESTION}</b></span></td>
				<td class="BoardRowBody"><span class="genmed"><input type="text" name="poll_title" size="50" maxlength="255" class="post" value="{POLL_TITLE}" /></span></td>
			</tr>
			<!-- BEGIN poll_option_rows -->
            <tr>
				<td class="BoardRowBody"><span class="gen"><b>{L_POLL_OPTION}</b></span></td>
				<td class="BoardRowBody"><span class="genmed"><input type="text" name="poll_option_text[{poll_option_rows.S_POLL_OPTION_NUM}]" size="50" class="post" maxlength="255" value="{poll_option_rows.POLL_OPTION}" /></span> &nbsp;<input type="submit" name="edit_poll_option" value="{L_UPDATE_OPTION}" class="liteoption" /> <input type="submit" name="del_poll_option[{poll_option_rows.S_POLL_OPTION_NUM}]" value="{L_DELETE_OPTION}" class="liteoption" /></td>
			</tr>
			<!-- END poll_option_rows -->
            <tr>
				<td class="BoardRowBody"><span class="gen"><b>{L_POLL_OPTION}</b></span></td>
				<td class="BoardRowBody"><span class="genmed"><input type="text" name="add_poll_option_text" size="50" maxlength="255" class="post" value="{ADD_POLL_OPTION}" /></span> &nbsp;<input type="submit" name="add_poll_option" value="{L_ADD_OPTION}" class="liteoption" /></td>
			</tr>
            <tr>
				<td class="BoardRowBody"><span class="gen"><b>{L_POLL_LENGTH}</b></span></td>
				<td class="BoardRowBody"><span class="genmed"><input type="text" name="poll_length" size="3" maxlength="3" class="post" value="{POLL_LENGTH}" /></span>&nbsp;<span class="gen"><b>{L_DAYS}</b></span> &nbsp; <span class="gensmall">{L_POLL_LENGTH_EXPLAIN}</span></td>
			</tr>
			<!-- BEGIN switch_poll_delete_toggle -->
            <tr>
				<td class="BoardRowBody"><span class="gen"><b>{L_POLL_DELETE}</b></span></td>
				<td class="BoardRowBody"><input type="checkbox" name="poll_delete" /></td>
			</tr>
			<!-- END switch_poll_delete_toggle -->
