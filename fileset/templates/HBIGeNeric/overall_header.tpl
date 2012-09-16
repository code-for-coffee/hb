<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">
{META}
{NAV_LINKS}
<title>{SITENAME} - {SITE_DESCRIPTION}</title>
<link rel="stylesheet" href="templates/admin.css" type="text/css">
<style type="text/css">
<!--
a {
text-decoration: none; }
.MainTable {
background-color: #CCCCCC;font-family: arial, helvetica, sans-serif;font-weight: normal;font-size: 10pt;color: black;text-decoration: none;
}
.MainMenuRowAlt {
background-color: transparent;font-family: tahoma,arial,sans-serif;font-weight: bold;font-size: 9pt;color: yellow;text-decoration: none;
}
.MainMenuRow {
background-color: #666666;font-family: tahoma,arial,sans-serif;font-weight: normal;font-size: 9pt;color: white;text-decoration: none;
}
.MainMenuLink {
background-color: transparent;font-family: tahoma,arial,sans-serif;font-weight: bold;font-size: 9pt;color: white;text-decoration: none;
}
.BoardColumn {
background-color: #999999;font-family: verdana,arial,sans-serif;font-weight: bold;font-size: 10pt;color: white;text-decoration: none;
}
.BoardColumnLink {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: bold;font-size: 10pt;color: white;text-decoration: none;
}
.BoardRowHeading {
background-color: #b1b3bc;font-family: verdana,arial,sans-serif;font-weight: normal;font-size: 10pt;color: black;text-decoration: none;
}
.BoardRowHeadingLink {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: normal;font-size: 10pt;color: #000099;text-decoration: none;
}
.BoardRowBody {
background-color: #c1c2c9;font-family: verdana,arial,sans-serif;font-weight: normal;font-size: 10pt;color: black;text-decoration: none;
}
.BoardRowBodyLink {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: normal;font-size: 10pt;color: #000099;text-decoration: none;
}
.SubjectLink {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: black;
	text-decoration: underline;
}
a.SubjectLink {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: black;
	text-decoration: underline;
}
a.SubjectLink:hover {
	text-decoration: underline;
}
a.SubjectLink:active {
	text-decoration: underline;
}
a.SubjectLink:visited {
	font-weight: bold;
	text-decoration: underline;
}
.ForumDescription {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 8pt;
	color: black;
	text-decoration: none;
}
.AuthorLink {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: bold;font-size: 10pt;color: #000099;text-decoration: none;
}
.VersionText {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: normal;font-size: 8pt;color: #999999;text-decoration: none;
}
.InputSection {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: bold;font-size: 10pt;color: black;text-decoration: none;
}
.InputNotes {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: normal;font-size: 9pt;color: maroon;text-decoration: none;
width: 65%;
}
.SignatureTitle {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: bold;font-size: 9pt;color: maroon;text-decoration: none;
}
.SignatureText {
background-color: transparent;font-family: verdana,arial,sans-serif;font-weight: normal;font-size: 9pt;color: #333333;text-decoration: none;
}
-->
</style>
</head>
<body marginwidth=0 marginheight=0 leftmargin=0 topmargin=0 bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">
<a name="top"></a>
<table width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
<tr><td width="100%" bgcolor="#000000" align="center" background="templates/HBIGeNeric/images/panel_over.jpg"><div align="center"><a href="{U_INDEX}"><img border="0" src="templates/HBIGeNeric/images/hb_logo.gif"  alt="{L_INDEX}"></a></div></td></tr>
</table>
<table width="100%" align="center" cellpadding="4" cellspacing="0" border="0">
    <tr>
      <td width="100%" class="MainTable">
        <table width="100%" cellpadding="4" cellspacing="1" border="0">
          <tr>
	    <td class="MainMenuRow"><a class="MainMenuLink" href="..">[{SITENAME}]</a>&nbsp;<a class="MainMenuLink" href="index.php">Forums</a>&nbsp;&raquo;&nbsp;{SITE_DESCRIPTION}
	    </td>
	  </tr>

<tr>
        <td class="MainMenuRow">
                <a class="MainMenuLink" href="#"></a>
                        <!-- BEGIN switch_user_logged_in -->
			Logged in as:
                        <a href="{U_PROFILE}" class="AuthorLink">{HB_LOGIN_LOGOUT}</a> | 
			<!-- END switch_user_logged_in -->
			<!-- BEGIN switch_user_logged_out -->
			<a class="MainMenuLink" href="{U_LOGIN_LOGOUT}">Login</a> | <a href="{U_REGISTER}" class="MainMenuLink">Register</a>  
			<!-- END switch_user_logged_out -->
			<!-- BEGIN switch_user_logged_in -->	
			<a class="MainMenuLink" href="{U_LOGIN_LOGOUT}">Logoff</a>
			<!-- END switch_user_logged_in -->
			| <a class="MainMenuLink" href="{U_PRIVATEMSGS}">{PRIVATE_MESSAGE_INFO}</a> |{HB_ADMIN_LINK} <a class="MainMenuLink" href="{U_PROFILE}">{L_PROFILE}</a>
        </td></tr>
        <tr><td class="MainMenuRow">
	  <a class="MainMenuLink" href="{U_SEARCH}">{L_SEARCH}</a> | <a class="MainMenuLink" href="{U_FAQ}">{L_FAQ}</a> | <a class="MainMenuLink" href="{U_MEMBERLIST}"> {L_MEMBERLIST}</a> | <a class="MainMenuLink" href="{U_GROUP_CP}">{L_USERGROUPS}</a> | <a class="MainMenuLink" href="{U_VIEWONLINE}">Who's Online</a>
        </td>
        </tr>
</table>