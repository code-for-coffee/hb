<?php

// eXtreme Styles mod cache. Generated on Sun, 23 Jan 2005 06:49:48 +0000 (time=1106462988)

?><script language="JavaScript" type="text/javascript">
<!--
// bbCode control by
// subBlue design
// www.subBlue.com

// Startup variables
var imageTag = false;
var theSelection = false;

// Check for Browser & Platform for PC & IE specific bits
// More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
var clientPC = navigator.userAgent.toLowerCase(); // Get client info
var clientVer = parseInt(navigator.appVersion); // Get browser version

var is_ie = ((clientPC.indexOf("msie") != -1) && (clientPC.indexOf("opera") == -1));
var is_nav = ((clientPC.indexOf('mozilla')!=-1) && (clientPC.indexOf('spoofer')==-1)
                && (clientPC.indexOf('compatible') == -1) && (clientPC.indexOf('opera')==-1)
                && (clientPC.indexOf('webtv')==-1) && (clientPC.indexOf('hotjava')==-1));
var is_moz = 0;

var is_win = ((clientPC.indexOf("win")!=-1) || (clientPC.indexOf("16bit") != -1));
var is_mac = (clientPC.indexOf("mac")!=-1);

// Helpline messages
b_help = "<?php echo isset($this->vars['L_BBCODE_B_HELP']) ? $this->vars['L_BBCODE_B_HELP'] : $this->lang('L_BBCODE_B_HELP'); ?>";
i_help = "<?php echo isset($this->vars['L_BBCODE_I_HELP']) ? $this->vars['L_BBCODE_I_HELP'] : $this->lang('L_BBCODE_I_HELP'); ?>";
u_help = "<?php echo isset($this->vars['L_BBCODE_U_HELP']) ? $this->vars['L_BBCODE_U_HELP'] : $this->lang('L_BBCODE_U_HELP'); ?>";
q_help = "<?php echo isset($this->vars['L_BBCODE_Q_HELP']) ? $this->vars['L_BBCODE_Q_HELP'] : $this->lang('L_BBCODE_Q_HELP'); ?>";
c_help = "<?php echo isset($this->vars['L_BBCODE_C_HELP']) ? $this->vars['L_BBCODE_C_HELP'] : $this->lang('L_BBCODE_C_HELP'); ?>";
l_help = "<?php echo isset($this->vars['L_BBCODE_L_HELP']) ? $this->vars['L_BBCODE_L_HELP'] : $this->lang('L_BBCODE_L_HELP'); ?>";
o_help = "<?php echo isset($this->vars['L_BBCODE_O_HELP']) ? $this->vars['L_BBCODE_O_HELP'] : $this->lang('L_BBCODE_O_HELP'); ?>";
p_help = "<?php echo isset($this->vars['L_BBCODE_P_HELP']) ? $this->vars['L_BBCODE_P_HELP'] : $this->lang('L_BBCODE_P_HELP'); ?>";
w_help = "<?php echo isset($this->vars['L_BBCODE_W_HELP']) ? $this->vars['L_BBCODE_W_HELP'] : $this->lang('L_BBCODE_W_HELP'); ?>";
a_help = "<?php echo isset($this->vars['L_BBCODE_A_HELP']) ? $this->vars['L_BBCODE_A_HELP'] : $this->lang('L_BBCODE_A_HELP'); ?>";
s_help = "<?php echo isset($this->vars['L_BBCODE_S_HELP']) ? $this->vars['L_BBCODE_S_HELP'] : $this->lang('L_BBCODE_S_HELP'); ?>";
f_help = "<?php echo isset($this->vars['L_BBCODE_F_HELP']) ? $this->vars['L_BBCODE_F_HELP'] : $this->lang('L_BBCODE_F_HELP'); ?>";

// Define the bbCode tags
bbcode = new Array();
bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]');
imageTag = false;

// Shows the help messages in the helpline window
function helpline(help) {
	document.post.helpbox.value = eval(help + "_help");
}


// Replacement for arrayname.length property
function getarraysize(thearray) {
	for (i = 0; i < thearray.length; i++) {
		if ((thearray[i] == "undefined") || (thearray[i] == "") || (thearray[i] == null))
			return i;
		}
	return thearray.length;
}

// Replacement for arrayname.push(value) not implemented in IE until version 5.5
// Appends element to the array
function arraypush(thearray,value) {
	thearray[ getarraysize(thearray) ] = value;
}

// Replacement for arrayname.pop() not implemented in IE until version 5.5
// Removes and returns the last element of an array
function arraypop(thearray) {
	thearraysize = getarraysize(thearray);
	retval = thearray[thearraysize - 1];
	delete thearray[thearraysize - 1];
	return retval;
}


function checkForm() {

	formErrors = false;    

	if (document.post.message.value.length < 2) {
		formErrors = "<?php echo isset($this->vars['L_EMPTY_MESSAGE']) ? $this->vars['L_EMPTY_MESSAGE'] : $this->lang('L_EMPTY_MESSAGE'); ?>";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	} else {
		bbstyle(-1);
		//formObj.preview.disabled = true;
		//formObj.submit.disabled = true;
		return true;
	}
}

function emoticon(text) {
	var txtarea = document.post.message;
	text = ' ' + text + ' ';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
		txtarea.focus();
	} else {
		txtarea.value  += text;
		txtarea.focus();
	}
}

function bbfontstyle(bbopen, bbclose) {
	var txtarea = document.post.message;

	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (!theSelection) {
			txtarea.value += bbopen + bbclose;
			txtarea.focus();
			return;
		}
		document.selection.createRange().text = bbopen + theSelection + bbclose;
		txtarea.focus();
		return;
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbopen, bbclose);
		return;
	}
	else
	{
		txtarea.value += bbopen + bbclose;
		txtarea.focus();
	}
	storeCaret(txtarea);
}


function bbstyle(bbnumber) {
	var txtarea = document.post.message;

	txtarea.focus();
	donotinsert = false;
	theSelection = false;
	bblast = 0;

	if (bbnumber == -1) { // Close all open tags & default button names
		while (bbcode[0]) {
			butnumber = arraypop(bbcode) - 1;
			txtarea.value += bbtags[butnumber + 1];
			buttext = eval('document.post.addbbcode' + butnumber + '.value');
			eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
		}
		imageTag = false; // All tags are closed including image tags :D
		txtarea.focus();
		return;
	}

	if ((clientVer >= 4) && is_ie && is_win)
	{
		theSelection = document.selection.createRange().text; // Get text selection
		if (theSelection) {
			// Add tags around selection
			document.selection.createRange().text = bbtags[bbnumber] + theSelection + bbtags[bbnumber+1];
			txtarea.focus();
			theSelection = '';
			return;
		}
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbtags[bbnumber], bbtags[bbnumber+1]);
		return;
	}
	
	// Find last occurance of an open tag the same as the one just clicked
	for (i = 0; i < bbcode.length; i++) {
		if (bbcode[i] == bbnumber+1) {
			bblast = i;
			donotinsert = true;
		}
	}

	if (donotinsert) {		// Close all open tags up to the one just clicked & default button names
		while (bbcode[bblast]) {
				butnumber = arraypop(bbcode) - 1;
				txtarea.value += bbtags[butnumber + 1];
				buttext = eval('document.post.addbbcode' + butnumber + '.value');
				eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
				imageTag = false;
			}
			txtarea.focus();
			return;
	} else { // Open tags
	
		if (imageTag && (bbnumber != 14)) {		// Close image tag before adding another
			txtarea.value += bbtags[15];
			lastValue = arraypop(bbcode) - 1;	// Remove the close image tag from the list
			document.post.addbbcode14.value = "Img";	// Return button back to normal state
			imageTag = false;
		}
		
		// Open tag
		txtarea.value += bbtags[bbnumber];
		if ((bbnumber == 14) && (imageTag == false)) imageTag = 1; // Check to stop additional tags after an unclosed image tag
		arraypush(bbcode,bbnumber+1);
		eval('document.post.addbbcode'+bbnumber+'.value += "*"');
		txtarea.focus();
		return;
	}
	storeCaret(txtarea);
}

// From http://www.massless.org/mozedit/
function mozWrap(txtarea, open, close)
{
	var selLength = txtarea.textLength;
	var selStart = txtarea.selectionStart;
	var selEnd = txtarea.selectionEnd;
	if (selEnd == 1 || selEnd == 2) 
		selEnd = selLength;

	var s1 = (txtarea.value).substring(0,selStart);
	var s2 = (txtarea.value).substring(selStart, selEnd)
	var s3 = (txtarea.value).substring(selEnd, selLength);
	txtarea.value = s1 + open + s2 + close + s3;
	return;
}

// Insert at Claret position. Code from
// http://www.faqts.com/knowledge_base/view.phtml/aid/1052/fid/130
function storeCaret(textEl) {
	if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}

//-->
</script>

<?php

$privmsg_extensions_count = ( isset($this->_tpldata['privmsg_extensions.']) ) ?  sizeof($this->_tpldata['privmsg_extensions.']) : 0;
for ($privmsg_extensions_i = 0; $privmsg_extensions_i < $privmsg_extensions_count; $privmsg_extensions_i++)
{
 $privmsg_extensions_item = &$this->_tpldata['privmsg_extensions.'][$privmsg_extensions_i];
 $privmsg_extensions_item['S_ROW_COUNT'] = $privmsg_extensions_i;
 $privmsg_extensions_item['S_NUM_ROWS'] = $privmsg_extensions_count;

?>
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
  <tr> 
	<td valign="top" align="center" width="100%"> 
	  <table height="40" cellspacing="2" cellpadding="2" border="0">
		<tr valign="middle"> 
		  <td><?php echo isset($this->vars['INBOX_IMG']) ? $this->vars['INBOX_IMG'] : $this->lang('INBOX_IMG'); ?></td>
		  <td><span class="BoardColumnLink"><?php echo isset($this->vars['INBOX_LINK']) ? $this->vars['INBOX_LINK'] : $this->lang('INBOX_LINK'); ?>&nbsp;&nbsp;</span></td>
		  <td><?php echo isset($this->vars['SENTBOX_IMG']) ? $this->vars['SENTBOX_IMG'] : $this->lang('SENTBOX_IMG'); ?></td>
		  <td><span class="BoardColumnLink"><?php echo isset($this->vars['SENTBOX_LINK']) ? $this->vars['SENTBOX_LINK'] : $this->lang('SENTBOX_LINK'); ?>&nbsp;&nbsp;</span></td>
		  <td><?php echo isset($this->vars['OUTBOX_IMG']) ? $this->vars['OUTBOX_IMG'] : $this->lang('OUTBOX_IMG'); ?></td>
		  <td><span class="BoardColumnLink"><?php echo isset($this->vars['OUTBOX_LINK']) ? $this->vars['OUTBOX_LINK'] : $this->lang('OUTBOX_LINK'); ?>&nbsp;&nbsp;</span></td>
		  <td><?php echo isset($this->vars['SAVEBOX_IMG']) ? $this->vars['SAVEBOX_IMG'] : $this->lang('SAVEBOX_IMG'); ?></td>
		  <td><span class="BoardColumnLink"><?php echo isset($this->vars['SAVEBOX_LINK']) ? $this->vars['SAVEBOX_LINK'] : $this->lang('SAVEBOX_LINK'); ?>&nbsp;&nbsp;</span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<br clear="all" />
<?php

} // END privmsg_extensions

if(isset($privmsg_extensions_item)) { unset($privmsg_extensions_item); } 

?>

<form action="<?php echo isset($this->vars['S_POST_ACTION']) ? $this->vars['S_POST_ACTION'] : $this->lang('S_POST_ACTION'); ?>" method="post" name="post" onsubmit="return checkForm(this)">

<?php echo isset($this->vars['POST_PREVIEW_BOX']) ? $this->vars['POST_PREVIEW_BOX'] : $this->lang('POST_PREVIEW_BOX'); ?>
<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="left" class="MainMenuRow"><span class="BoardColumnLink"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>" class="MainMenuLink"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a>
		<?php

$switch_not_privmsg_count = ( isset($this->_tpldata['switch_not_privmsg.']) ) ?  sizeof($this->_tpldata['switch_not_privmsg.']) : 0;
for ($switch_not_privmsg_i = 0; $switch_not_privmsg_i < $switch_not_privmsg_count; $switch_not_privmsg_i++)
{
 $switch_not_privmsg_item = &$this->_tpldata['switch_not_privmsg.'][$switch_not_privmsg_i];
 $switch_not_privmsg_item['S_ROW_COUNT'] = $switch_not_privmsg_i;
 $switch_not_privmsg_item['S_NUM_ROWS'] = $switch_not_privmsg_count;

?> 
		-> <a href="<?php echo isset($this->vars['U_VIEW_FORUM']) ? $this->vars['U_VIEW_FORUM'] : $this->lang('U_VIEW_FORUM'); ?>" class="MainMenuLink"><?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></a></span></td>
		<?php

} // END switch_not_privmsg

if(isset($switch_not_privmsg_item)) { unset($switch_not_privmsg_item); } 

?>
	</tr>
</table>

<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr> 
		<th class="BoardColumn" colspan="2" height="25"><b><?php echo isset($this->vars['L_POST_A']) ? $this->vars['L_POST_A'] : $this->lang('L_POST_A'); ?></b></th>
	</tr>
	<?php

$switch_username_select_count = ( isset($this->_tpldata['switch_username_select.']) ) ?  sizeof($this->_tpldata['switch_username_select.']) : 0;
for ($switch_username_select_i = 0; $switch_username_select_i < $switch_username_select_count; $switch_username_select_i++)
{
 $switch_username_select_item = &$this->_tpldata['switch_username_select.'][$switch_username_select_i];
 $switch_username_select_item['S_ROW_COUNT'] = $switch_username_select_i;
 $switch_username_select_item['S_NUM_ROWS'] = $switch_username_select_count;

?>
	<tr> 
		<td class="BoardColumn"><span class="BoardColumnLink"><b><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></b></span></td>
		<td class="BoardColumn"><span class="BoardColumnLink"><input type="text" class="post" tabindex="1" name="username" size="25" maxlength="25" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" /></span></td>
	</tr>
	<?php

} // END switch_username_select

if(isset($switch_username_select_item)) { unset($switch_username_select_item); } 

?>
	<?php

$switch_privmsg_count = ( isset($this->_tpldata['switch_privmsg.']) ) ?  sizeof($this->_tpldata['switch_privmsg.']) : 0;
for ($switch_privmsg_i = 0; $switch_privmsg_i < $switch_privmsg_count; $switch_privmsg_i++)
{
 $switch_privmsg_item = &$this->_tpldata['switch_privmsg.'][$switch_privmsg_i];
 $switch_privmsg_item['S_ROW_COUNT'] = $switch_privmsg_i;
 $switch_privmsg_item['S_NUM_ROWS'] = $switch_privmsg_count;

?>
	<tr> 
		<td class="BoardColumn"><b><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?></b></td>
		<td class="BoardColumn"><span class="BoardColumnLink"><input type="text"  class="post" name="username" maxlength="25" size="25" tabindex="1" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" />&nbsp;<input type="submit" name="usersubmit" value="<?php echo isset($this->vars['L_FIND_USERNAME']) ? $this->vars['L_FIND_USERNAME'] : $this->lang('L_FIND_USERNAME'); ?>" class="liteoption" onClick="window.open('<?php echo isset($this->vars['U_SEARCH_USER']) ? $this->vars['U_SEARCH_USER'] : $this->lang('U_SEARCH_USER'); ?>', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></span></td>
	</tr>
	<?php

} // END switch_privmsg

if(isset($switch_privmsg_item)) { unset($switch_privmsg_item); } 

?>
	<tr> 
	  <td class="BoardRowHeading" width="22%"><b><?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?></b></td>
	  <td class="BoardRowHeading" width="78%"> 
		<input type="text" name="subject" size="45" maxlength="60" style="width:450px" tabindex="2" class="post" value="<?php echo isset($this->vars['SUBJECT']) ? $this->vars['SUBJECT'] : $this->lang('SUBJECT'); ?>" />
		</td>
	</tr>
	<tr> 
	  <td class="BoardRowHeading" valign="top"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
		  <tr> 
			<td align="center"><span class="BoardRowHeadingLink"><b><?php echo isset($this->vars['L_MESSAGE_BODY']) ? $this->vars['L_MESSAGE_BODY'] : $this->lang('L_MESSAGE_BODY'); ?></b></span> </td>
		  </tr>
		  <tr> 
			<td valign="middle" align="center"> <br />
			  <table width="100" border="0" cellspacing="0" cellpadding="5">
				<tr align="center"> 
				  <td colspan="<?php echo isset($this->vars['S_SMILIES_COLSPAN']) ? $this->vars['S_SMILIES_COLSPAN'] : $this->lang('S_SMILIES_COLSPAN'); ?>" class="BoardRowBodyLink"><b><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_EMOTICONS']) ? $this->vars['L_EMOTICONS'] : $this->lang('L_EMOTICONS'); ?></span></b></td>
				</tr>
				<?php

$smilies_row_count = ( isset($this->_tpldata['smilies_row.']) ) ?  sizeof($this->_tpldata['smilies_row.']) : 0;
for ($smilies_row_i = 0; $smilies_row_i < $smilies_row_count; $smilies_row_i++)
{
 $smilies_row_item = &$this->_tpldata['smilies_row.'][$smilies_row_i];
 $smilies_row_item['S_ROW_COUNT'] = $smilies_row_i;
 $smilies_row_item['S_NUM_ROWS'] = $smilies_row_count;

?>
				<tr align="center" valign="middle"> 
				  <?php

$smilies_col_count = ( isset($smilies_row_item['smilies_col.']) ) ? sizeof($smilies_row_item['smilies_col.']) : 0;
for ($smilies_col_i = 0; $smilies_col_i < $smilies_col_count; $smilies_col_i++)
{
 $smilies_col_item = &$smilies_row_item['smilies_col.'][$smilies_col_i];
 $smilies_col_item['S_ROW_COUNT'] = $smilies_col_i;
 $smilies_col_item['S_NUM_ROWS'] = $smilies_col_count;

?>
				  <td><a href="javascript:emoticon('<?php echo isset($smilies_col_item['SMILEY_CODE']) ? $smilies_col_item['SMILEY_CODE'] : ''; ?>')"><img src="<?php echo isset($smilies_col_item['SMILEY_IMG']) ? $smilies_col_item['SMILEY_IMG'] : ''; ?>" border="0" alt="<?php echo isset($smilies_col_item['SMILEY_DESC']) ? $smilies_col_item['SMILEY_DESC'] : ''; ?>" title="<?php echo isset($smilies_col_item['SMILEY_DESC']) ? $smilies_col_item['SMILEY_DESC'] : ''; ?>" /></a></td>
				  <?php

} // END smilies_col

if(isset($smilies_col_item)) { unset($smilies_col_item); } 

?>
				</tr>
				<?php

} // END smilies_row

if(isset($smilies_row_item)) { unset($smilies_row_item); } 

?>
				<?php

$switch_smilies_extra_count = ( isset($this->_tpldata['switch_smilies_extra.']) ) ?  sizeof($this->_tpldata['switch_smilies_extra.']) : 0;
for ($switch_smilies_extra_i = 0; $switch_smilies_extra_i < $switch_smilies_extra_count; $switch_smilies_extra_i++)
{
 $switch_smilies_extra_item = &$this->_tpldata['switch_smilies_extra.'][$switch_smilies_extra_i];
 $switch_smilies_extra_item['S_ROW_COUNT'] = $switch_smilies_extra_i;
 $switch_smilies_extra_item['S_NUM_ROWS'] = $switch_smilies_extra_count;

?>
				<tr align="center"> 
				  <td colspan="<?php echo isset($this->vars['S_SMILIES_COLSPAN']) ? $this->vars['S_SMILIES_COLSPAN'] : $this->lang('S_SMILIES_COLSPAN'); ?>"><span  class="BoardRowBodyLink"><a href="<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>" onclick="window.open('<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=375');return false;" target="_phpbbsmilies" class="BoardRowBodyLink"><?php echo isset($this->vars['L_MORE_SMILIES']) ? $this->vars['L_MORE_SMILIES'] : $this->lang('L_MORE_SMILIES'); ?></a></span></td>
				</tr>
				<?php

} // END switch_smilies_extra

if(isset($switch_smilies_extra_item)) { unset($switch_smilies_extra_item); } 

?>
			  </table>
			</td>
		  </tr>
		</table>
	  </td>
	  <td class="BoardRowBody" valign="top"><span class="BoardRowBodyLink"> <span class="BoardRowBodyLink"> </span> 
		<table width="450" border="0" cellspacing="0" cellpadding="2">
		  <tr align="center" valign="middle"> 
			<td><span class="BoardRowBodyLink"> 
			  <input type="button" class="InputArea" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onClick="bbstyle(0)" onMouseOver="helpline('b')" />
			  </span></td>
			<td><span class="BoardRowBodyLink"> 
			  <input type="button" class="InputArea" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onClick="bbstyle(2)" onMouseOver="helpline('i')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="InputArea" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onClick="bbstyle(4)" onMouseOver="helpline('u')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onClick="bbstyle(6)" onMouseOver="helpline('q')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onClick="bbstyle(8)" onMouseOver="helpline('c')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onClick="bbstyle(10)" onMouseOver="helpline('l')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onClick="bbstyle(12)" onMouseOver="helpline('o')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="p" name="addbbcode14" value="Img" style="width: 40px"  onClick="bbstyle(14)" onMouseOver="helpline('p')" />
			  </span></td>
			<td><span class="genmed"> 
			  <input type="button" class="button" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onClick="bbstyle(16)" onMouseOver="helpline('w')" />
			  </span></td>
		  </tr>
		  <tr> 
			<td colspan="9"> 
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr> 
				  <td><span class="BoardRowBodyLink"> &nbsp;<?php echo isset($this->vars['L_FONT_COLOR']) ? $this->vars['L_FONT_COLOR'] : $this->lang('L_FONT_COLOR'); ?>: 
					<select name="addbbcode18" onChange="bbfontstyle('[color=' + this.form.addbbcode18.options[this.form.addbbcode18.selectedIndex].value + ']', '[/color]');this.selectedIndex=0;" onMouseOver="helpline('s')">
					  <option style="color:black; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="<?php echo isset($this->vars['T_FONTCOLOR1']) ? $this->vars['T_FONTCOLOR1'] : $this->lang('T_FONTCOLOR1'); ?>" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_DEFAULT']) ? $this->vars['L_COLOR_DEFAULT'] : $this->lang('L_COLOR_DEFAULT'); ?></option>
					  <option style="color:darkred; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="darkred" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_DARK_RED']) ? $this->vars['L_COLOR_DARK_RED'] : $this->lang('L_COLOR_DARK_RED'); ?></option>
					  <option style="color:red; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="red" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_RED']) ? $this->vars['L_COLOR_RED'] : $this->lang('L_COLOR_RED'); ?></option>
					  <option style="color:orange; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="orange" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_ORANGE']) ? $this->vars['L_COLOR_ORANGE'] : $this->lang('L_COLOR_ORANGE'); ?></option>
					  <option style="color:brown; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="brown" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_BROWN']) ? $this->vars['L_COLOR_BROWN'] : $this->lang('L_COLOR_BROWN'); ?></option>
					  <option style="color:yellow; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="yellow" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_YELLOW']) ? $this->vars['L_COLOR_YELLOW'] : $this->lang('L_COLOR_YELLOW'); ?></option>
					  <option style="color:green; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="green" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_GREEN']) ? $this->vars['L_COLOR_GREEN'] : $this->lang('L_COLOR_GREEN'); ?></option>
					  <option style="color:olive; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="olive" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_OLIVE']) ? $this->vars['L_COLOR_OLIVE'] : $this->lang('L_COLOR_OLIVE'); ?></option>
					  <option style="color:cyan; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="cyan" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_CYAN']) ? $this->vars['L_COLOR_CYAN'] : $this->lang('L_COLOR_CYAN'); ?></option>
					  <option style="color:blue; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="blue" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_BLUE']) ? $this->vars['L_COLOR_BLUE'] : $this->lang('L_COLOR_BLUE'); ?></option>
					  <option style="color:darkblue; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="darkblue" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_DARK_BLUE']) ? $this->vars['L_COLOR_DARK_BLUE'] : $this->lang('L_COLOR_DARK_BLUE'); ?></option>
					  <option style="color:indigo; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="indigo" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_INDIGO']) ? $this->vars['L_COLOR_INDIGO'] : $this->lang('L_COLOR_INDIGO'); ?></option>
					  <option style="color:violet; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="violet" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_VIOLET']) ? $this->vars['L_COLOR_VIOLET'] : $this->lang('L_COLOR_VIOLET'); ?></option>
					  <option style="color:white; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="white" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_WHITE']) ? $this->vars['L_COLOR_WHITE'] : $this->lang('L_COLOR_WHITE'); ?></option>
					  <option style="color:black; background-color: <?php echo isset($this->vars['T_TD_COLOR1']) ? $this->vars['T_TD_COLOR1'] : $this->lang('T_TD_COLOR1'); ?>" value="black" class="BoardRowBodyLink"><?php echo isset($this->vars['L_COLOR_BLACK']) ? $this->vars['L_COLOR_BLACK'] : $this->lang('L_COLOR_BLACK'); ?></option>
					</select> &nbsp;<?php echo isset($this->vars['L_FONT_SIZE']) ? $this->vars['L_FONT_SIZE'] : $this->lang('L_FONT_SIZE'); ?>:<select name="addbbcode20" onChange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]')" onMouseOver="helpline('f')">
					  <option value="7" class="genmed"><?php echo isset($this->vars['L_FONT_TINY']) ? $this->vars['L_FONT_TINY'] : $this->lang('L_FONT_TINY'); ?></option>
					  <option value="9" class="genmed"><?php echo isset($this->vars['L_FONT_SMALL']) ? $this->vars['L_FONT_SMALL'] : $this->lang('L_FONT_SMALL'); ?></option>
					  <option value="12" selected class="genmed"><?php echo isset($this->vars['L_FONT_NORMAL']) ? $this->vars['L_FONT_NORMAL'] : $this->lang('L_FONT_NORMAL'); ?></option>
					  <option value="18" class="genmed"><?php echo isset($this->vars['L_FONT_LARGE']) ? $this->vars['L_FONT_LARGE'] : $this->lang('L_FONT_LARGE'); ?></option>
					  <option  value="24" class="genmed"><?php echo isset($this->vars['L_FONT_HUGE']) ? $this->vars['L_FONT_HUGE'] : $this->lang('L_FONT_HUGE'); ?></option>
					</select>
					</span></td>
				  <td nowrap="nowrap" align="right"><span class="BoardRowBodyLink"><a href="javascript:bbstyle(-1)" class="BoardRowBodyLink" onMouseOver="helpline('a')"><?php echo isset($this->vars['L_BBCODE_CLOSE_TAGS']) ? $this->vars['L_BBCODE_CLOSE_TAGS'] : $this->lang('L_BBCODE_CLOSE_TAGS'); ?></a></span></td>
				</tr>
			  </table>
			</td>
		  </tr>
		  <tr> 
			<td colspan="9"><span class="gensmall"> 
			  <input type="text" name="helpbox" size="45" maxlength="100" style="width:450px; font-size:10px" class="helpline" value="<?php echo isset($this->vars['L_STYLES_TIP']) ? $this->vars['L_STYLES_TIP'] : $this->lang('L_STYLES_TIP'); ?>" />
			  </span></td>
		  </tr>
		  <tr> 
			<td colspan="9"><span class="gen"> 
			  <textarea name="message" rows="15" cols="35" wrap="virtual" style="width:450px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></textarea>
			  </span></td>
		  </tr>
		</table>
		</span></td>
	</tr>
	<tr> 
	  <td class="BoardRowBody" valign="top"><span class="BoardRowBodyLink"><b><?php echo isset($this->vars['L_OPTIONS']) ? $this->vars['L_OPTIONS'] : $this->lang('L_OPTIONS'); ?></b></span><br /><span class="BoardRowBodyLink"><?php echo isset($this->vars['HTML_STATUS']) ? $this->vars['HTML_STATUS'] : $this->lang('HTML_STATUS'); ?><br /><?php echo isset($this->vars['BBCODE_STATUS']) ? $this->vars['BBCODE_STATUS'] : $this->lang('BBCODE_STATUS'); ?><br /><?php echo isset($this->vars['SMILIES_STATUS']) ? $this->vars['SMILIES_STATUS'] : $this->lang('SMILIES_STATUS'); ?></span></td>
	  <td class="BoardRowBody"><span class="gen"> </span> 
		<table cellspacing="0" cellpadding="1" border="0">
		  <?php

$switch_html_checkbox_count = ( isset($this->_tpldata['switch_html_checkbox.']) ) ?  sizeof($this->_tpldata['switch_html_checkbox.']) : 0;
for ($switch_html_checkbox_i = 0; $switch_html_checkbox_i < $switch_html_checkbox_count; $switch_html_checkbox_i++)
{
 $switch_html_checkbox_item = &$this->_tpldata['switch_html_checkbox.'][$switch_html_checkbox_i];
 $switch_html_checkbox_item['S_ROW_COUNT'] = $switch_html_checkbox_i;
 $switch_html_checkbox_item['S_NUM_ROWS'] = $switch_html_checkbox_count;

?>
		  <tr> 
			<td> 
			  <input type="checkbox" name="disable_html" <?php echo isset($this->vars['S_HTML_CHECKED']) ? $this->vars['S_HTML_CHECKED'] : $this->lang('S_HTML_CHECKED'); ?> />
			</td>
			<td><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_DISABLE_HTML']) ? $this->vars['L_DISABLE_HTML'] : $this->lang('L_DISABLE_HTML'); ?></span></td>
		  </tr>
		  <?php

} // END switch_html_checkbox

if(isset($switch_html_checkbox_item)) { unset($switch_html_checkbox_item); } 

?>
		  <?php

$switch_bbcode_checkbox_count = ( isset($this->_tpldata['switch_bbcode_checkbox.']) ) ?  sizeof($this->_tpldata['switch_bbcode_checkbox.']) : 0;
for ($switch_bbcode_checkbox_i = 0; $switch_bbcode_checkbox_i < $switch_bbcode_checkbox_count; $switch_bbcode_checkbox_i++)
{
 $switch_bbcode_checkbox_item = &$this->_tpldata['switch_bbcode_checkbox.'][$switch_bbcode_checkbox_i];
 $switch_bbcode_checkbox_item['S_ROW_COUNT'] = $switch_bbcode_checkbox_i;
 $switch_bbcode_checkbox_item['S_NUM_ROWS'] = $switch_bbcode_checkbox_count;

?>
		  <tr> 
			<td> 
			  <input type="checkbox" name="disable_bbcode" <?php echo isset($this->vars['S_BBCODE_CHECKED']) ? $this->vars['S_BBCODE_CHECKED'] : $this->lang('S_BBCODE_CHECKED'); ?> />
			</td>
			<td><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_DISABLE_BBCODE']) ? $this->vars['L_DISABLE_BBCODE'] : $this->lang('L_DISABLE_BBCODE'); ?></span></td>
		  </tr>
		  <?php

} // END switch_bbcode_checkbox

if(isset($switch_bbcode_checkbox_item)) { unset($switch_bbcode_checkbox_item); } 

?>
		  <?php

$switch_smilies_checkbox_count = ( isset($this->_tpldata['switch_smilies_checkbox.']) ) ?  sizeof($this->_tpldata['switch_smilies_checkbox.']) : 0;
for ($switch_smilies_checkbox_i = 0; $switch_smilies_checkbox_i < $switch_smilies_checkbox_count; $switch_smilies_checkbox_i++)
{
 $switch_smilies_checkbox_item = &$this->_tpldata['switch_smilies_checkbox.'][$switch_smilies_checkbox_i];
 $switch_smilies_checkbox_item['S_ROW_COUNT'] = $switch_smilies_checkbox_i;
 $switch_smilies_checkbox_item['S_NUM_ROWS'] = $switch_smilies_checkbox_count;

?>
		  <tr> 
			<td> 
			  <input type="checkbox" name="disable_smilies" <?php echo isset($this->vars['S_SMILIES_CHECKED']) ? $this->vars['S_SMILIES_CHECKED'] : $this->lang('S_SMILIES_CHECKED'); ?> />
			</td>
			<td><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_DISABLE_SMILIES']) ? $this->vars['L_DISABLE_SMILIES'] : $this->lang('L_DISABLE_SMILIES'); ?></span></td>
		  </tr>
		  <?php

} // END switch_smilies_checkbox

if(isset($switch_smilies_checkbox_item)) { unset($switch_smilies_checkbox_item); } 

?>
		  <?php

$switch_signature_checkbox_count = ( isset($this->_tpldata['switch_signature_checkbox.']) ) ?  sizeof($this->_tpldata['switch_signature_checkbox.']) : 0;
for ($switch_signature_checkbox_i = 0; $switch_signature_checkbox_i < $switch_signature_checkbox_count; $switch_signature_checkbox_i++)
{
 $switch_signature_checkbox_item = &$this->_tpldata['switch_signature_checkbox.'][$switch_signature_checkbox_i];
 $switch_signature_checkbox_item['S_ROW_COUNT'] = $switch_signature_checkbox_i;
 $switch_signature_checkbox_item['S_NUM_ROWS'] = $switch_signature_checkbox_count;

?>
		  <tr> 
			<td> 
			  <input type="checkbox" name="attach_sig" <?php echo isset($this->vars['S_SIGNATURE_CHECKED']) ? $this->vars['S_SIGNATURE_CHECKED'] : $this->lang('S_SIGNATURE_CHECKED'); ?> />
			</td>
			<td><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_ATTACH_SIGNATURE']) ? $this->vars['L_ATTACH_SIGNATURE'] : $this->lang('L_ATTACH_SIGNATURE'); ?></span></td>
		  </tr>
		  <?php

} // END switch_signature_checkbox

if(isset($switch_signature_checkbox_item)) { unset($switch_signature_checkbox_item); } 

?>
		  <?php

$switch_notify_checkbox_count = ( isset($this->_tpldata['switch_notify_checkbox.']) ) ?  sizeof($this->_tpldata['switch_notify_checkbox.']) : 0;
for ($switch_notify_checkbox_i = 0; $switch_notify_checkbox_i < $switch_notify_checkbox_count; $switch_notify_checkbox_i++)
{
 $switch_notify_checkbox_item = &$this->_tpldata['switch_notify_checkbox.'][$switch_notify_checkbox_i];
 $switch_notify_checkbox_item['S_ROW_COUNT'] = $switch_notify_checkbox_i;
 $switch_notify_checkbox_item['S_NUM_ROWS'] = $switch_notify_checkbox_count;

?>
		  <tr> 
			<td> 
			  <input type="checkbox" name="notify" <?php echo isset($this->vars['S_NOTIFY_CHECKED']) ? $this->vars['S_NOTIFY_CHECKED'] : $this->lang('S_NOTIFY_CHECKED'); ?> />
			</td>
			<td><span class="BoardRowBodyLink"><?php echo isset($this->vars['L_NOTIFY_ON_REPLY']) ? $this->vars['L_NOTIFY_ON_REPLY'] : $this->lang('L_NOTIFY_ON_REPLY'); ?></span></td>
		  </tr>
		  <?php

} // END switch_notify_checkbox

if(isset($switch_notify_checkbox_item)) { unset($switch_notify_checkbox_item); } 

?>
		  <?php

$switch_delete_checkbox_count = ( isset($this->_tpldata['switch_delete_checkbox.']) ) ?  sizeof($this->_tpldata['switch_delete_checkbox.']) : 0;
for ($switch_delete_checkbox_i = 0; $switch_delete_checkbox_i < $switch_delete_checkbox_count; $switch_delete_checkbox_i++)
{
 $switch_delete_checkbox_item = &$this->_tpldata['switch_delete_checkbox.'][$switch_delete_checkbox_i];
 $switch_delete_checkbox_item['S_ROW_COUNT'] = $switch_delete_checkbox_i;
 $switch_delete_checkbox_item['S_NUM_ROWS'] = $switch_delete_checkbox_count;

?>
		  <tr> 
			<td> 
			  <input type="checkbox" name="delete" />
			</td>
			<td><span class="BoardRowBodylink"><?php echo isset($this->vars['L_DELETE_POST']) ? $this->vars['L_DELETE_POST'] : $this->lang('L_DELETE_POST'); ?></span></td>
		  </tr>
		  <?php

} // END switch_delete_checkbox

if(isset($switch_delete_checkbox_item)) { unset($switch_delete_checkbox_item); } 

?>
		  <?php

$switch_type_toggle_count = ( isset($this->_tpldata['switch_type_toggle.']) ) ?  sizeof($this->_tpldata['switch_type_toggle.']) : 0;
for ($switch_type_toggle_i = 0; $switch_type_toggle_i < $switch_type_toggle_count; $switch_type_toggle_i++)
{
 $switch_type_toggle_item = &$this->_tpldata['switch_type_toggle.'][$switch_type_toggle_i];
 $switch_type_toggle_item['S_ROW_COUNT'] = $switch_type_toggle_i;
 $switch_type_toggle_item['S_NUM_ROWS'] = $switch_type_toggle_count;

?>
		  <tr> 
			<td></td>
			<td><span class="BoardRowBodyLink"><?php echo isset($this->vars['S_TYPE_TOGGLE']) ? $this->vars['S_TYPE_TOGGLE'] : $this->lang('S_TYPE_TOGGLE'); ?></span></td>
		  </tr>
		  <?php

} // END switch_type_toggle

if(isset($switch_type_toggle_item)) { unset($switch_type_toggle_item); } 

?>
		</table>
	  </td>
	</tr>
	<?php echo isset($this->vars['POLLBOX']) ? $this->vars['POLLBOX'] : $this->lang('POLLBOX'); ?> 
	<tr> 
	  <td class="BoardColumn" colspan="2" align="center" height="28"> <?php echo isset($this->vars['S_HIDDEN_FORM_FIELDS']) ? $this->vars['S_HIDDEN_FORM_FIELDS'] : $this->lang('S_HIDDEN_FORM_FIELDS'); ?><input type="submit" tabindex="5" name="preview" class="mainoption" value="<?php echo isset($this->vars['L_PREVIEW']) ? $this->vars['L_PREVIEW'] : $this->lang('L_PREVIEW'); ?>" />&nbsp;<input type="submit" accesskey="s" tabindex="6" name="post" class="mainoption" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="right" valign="top" class="BoardColumn"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></td>
	</tr>
  </table>
</form>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="center" class="BoardColumn"><span="BoardColumnLink"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></span></td>
  </tr>
</table>

<?php echo isset($this->vars['TOPIC_REVIEW_BOX']) ? $this->vars['TOPIC_REVIEW_BOX'] : $this->lang('TOPIC_REVIEW_BOX'); ?>
