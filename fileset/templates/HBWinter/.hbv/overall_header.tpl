<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">
{META}
{NAV_LINKS}
<title>Phatooine - {SITE_DESCRIPTION}</title>
<script language="javascript" type="text/javascript">
<!--

var PreloadFlag = false;
var expDays = 90;
var exp = new Date(); 
var tmp = '';
var tmp_counter = 0;
var tmp_open = 0;

exp.setTime(exp.getTime() + (expDays*24*60*60*1000));

function SetCookie(name, value) 
{
	var argv = SetCookie.arguments;
	var argc = SetCookie.arguments.length;
	var expires = (argc > 2) ? argv[2] : null;
	var path = (argc > 3) ? argv[3] : null;
	var domain = (argc > 4) ? argv[4] : null;
	var secure = (argc > 5) ? argv[5] : false;
	document.cookie = name + "=" + escape(value) +
		((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
		((path == null) ? "" : ("; path=" + path)) +
		((domain == null) ? "" : ("; domain=" + domain)) +
		((secure == true) ? "; secure" : "");
}

function getCookieVal(offset) 
{
	var endstr = document.cookie.indexOf(";",offset);
	if (endstr == -1)
	{
		endstr = document.cookie.length;
	}
	return unescape(document.cookie.substring(offset, endstr));
}

function GetCookie(name) 
{
	var arg = name + "=";
	var alen = arg.length;
	var clen = document.cookie.length;
	var i = 0;
	while (i < clen) 
	{
		var j = i + alen;
		if (document.cookie.substring(i, j) == arg)
			return getCookieVal(j);
		i = document.cookie.indexOf(" ", i) + 1;
		if (i == 0)
			break;
	} 
	return null;
}

function ShowHide(id1, id2, id3) 
{
	var res = expMenu(id1);
	if (id2 != '') expMenu(id2);
	if (id3 != '') SetCookie(id3, res, exp);
}
	
function expMenu(id) 
{
	var itm = null;
	if (document.getElementById) 
	{
		itm = document.getElementById(id);
	}
	else if (document.all)
	{
		itm = document.all[id];
	} 
	else if (document.layers)
	{
		itm = document.layers[id];
	}
	if (!itm) 
	{
		// do nothing
	}
	else if (itm.style) 
	{
		if (itm.style.display == "none")
		{ 
			itm.style.display = ""; 
			return 1;
		}
		else
		{
			itm.style.display = "none"; 
			return 2;
		}
	}
	else 
	{
		itm.visibility = "show"; 
		return 1;
	}
}

//-->
</script>
<style type='text/css'>

.MainTable {
	background-color: #383838;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 8pt;
	color: black;
	text-decoration: none;
}
.MainMenuRowAlt {
	background: transparent;
	font-family: arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 9pt;
	color: gold;
	text-decoration: none;
}
.MainMenuRow {
	background: #3a1516;
	font-family: verdana, arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 8pt;
	color: white;
	text-decoration: none;
}
.MainMenuLink {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 8pt;
	color: lightgrey;
	text-decoration: none;
}
a.MainMenuLink:hover {
	text-decoration: underline;
	color: aliceblue;
}
a.MainMenuLink:active {
	text-decoration: underline;
	color: aliceblue;
}
.BoardColumn {
	background: #4a0a19;
	font-family: verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: #f5f7ec;
	text-decoration: none;
}
.BoardColumnLink {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: #fbebbf;
	text-decoration: none;
}
a.BoardColumnLink:hover {
	text-decoration: underline;
}
a.BoardColumnLink:active {
	text-decoration: underline;
}
.BoardRowHeading {
	background-color: #D3C8B8;
	border: 2px groove snow;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 10pt;
	color: #000000;
	text-decoration: none;
}
.BoardRowHeadingLink {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: black;
	text-decoration: none;
}
.BoardRowHeadingLink:hover {
	text-decoration: underline;
}
.BoardRowHeadingLink:active {
	text-decoration: underline;
}
.BoardRowBody {
	background: #DFDAD3;
	border: 2px groove snow;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 10pt;
	color: black;
	text-decoration: none;
}
.BoardRowBodyLink {
	background:transparent;
	font-family: arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 8pt;
	color: black;
	text-decoration: none;
}
a.BoardRowBodyLink:hover {
	text-decoration: underline;
}
a.BoardRowBodyLink:active {
	text-decoration: underline;
}
.BoardRowBodySticky {
	background-color: #D3C8BD;
	border: 2px groove snow;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 10pt;
	color: #000000;
	text-decoration: none;
}
.SubjectLink {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: black;
	text-decoration: none;
}
a.SubjectLink {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: black;
	text-decoration: none;
}
a.SubjectLink:hover {
	text-decoration: underline;
}
a.SubjectLink:active {
	text-decoration: underline;
}
a.SubjectLink:visited {
	font-weight: normal;
	text-decoration: none;
}
.AuthorLink {
	background-color: #D3C8BD;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: black;
	text-decoration: none;
}
.VersionText {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 8pt;
	color: white;
	text-decoration: none;
}
.InputSection {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 10pt;
	color: firebrick;
	text-decoration: none;
}
.InputNotes {
	background-color: transparent;
	font-family: verdana,arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 9pt;
	color: black;
	text-decoration: none;
	width: 65%;
}
.SignatureTitle {
	background-color: transparent;
	font-family: arial, helvetica, sans-serif;
	font-weight: bold;
	font-size: 8pt;
	color: #000000;
	text-decoration: none;
}
.SignatureText {
	background-color: transparent;
	font-family: arial, helvetica, sans-serif;
	font-weight: normal;
	font-size: 8pt;
	color: black;
	text-decoration: none;
}
body {
	COLOR: black;
	BACKGROUND-COLOR: #0a0002;
}
a.OnlineModsLink {
	FONT-WEIGHT: normal;
	FONT-SIZE: 8pt;
	COLOR: #fdf7e4;
	FONT-FAMILY: verdana,arial, helvetica, sans-serif;
	BACKGROUND-COLOR: transparent;
	TEXT-DECORATION: underline;
}


B     { font-weight: bold; }
.red  { color: #880000; }
.grey { color: #999999; }

.statistictext { color: white; }
.statisticvalue
{
color: yellow;
font-weight: bold;
}

.QuotedText {
border: 1px dashed #888888;
background-color: #A1A3AC;
font-family: verdana,arial,sans-serif;
font-weight: normal;
font-size: 9pt;
color: white;
text-decoration: none;
margin-top: 5px;
margin-left: 5px;
margin-right: 5px;
padding: 5px;
}

.tos {
font-family: verdana,arial,sans-serif;
font-size: 8pt;
}

.AdminMenuLink {
background-color: transparent;
font-family: tahoma,arial,sans-serif;
font-weight: bold;
font-size: 8pt;
color: #FFCC99;
text-decoration: none;
}

</style>
</head>

<body marginwidth=0 marginheight=0 leftmargin=0 topmargin=0 bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">
<a name="top"></a>
<table width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
<tr><td width="100%" bgcolor="#000000" align="center" background="templates/HBPreview/images/panel_over.jpg"><div align="center"><a href="{U_INDEX}"><img border="0" src="templates/HBPreview/images/phatooine_logo.gif"  alt="{L_INDEX}"></a></div></td></tr>
</table>
<table width="100%" align="center" cellpadding="4" cellspacing="0" border="0">
    <tr>
      <td width="100%" class="MainTable">
        <table width="100%" cellpadding="4" cellspacing="1" border="0">
          <tr>
	    <td class="MainMenuRow"><a class="MainMenuLink" href="..">[{SITENAME}]</a>&nbsp;<a class="MainMenuLink" href="index.php">Forums</a>&nbsp;&raquo;&nbsp;Everything else is just another Star Wars site.
	    </td>
	  </tr>

<tr>
        <td class="MainMenuRow">
                <a class="MainMenuLink" href="#"></a>
                        Logged in as:
                        <a href="{U_PROFILE}" class="AuthorLink">{HB_LOGIN_LOGOUT}</a> | <a class="MainMenuLink" href="{U_LOGIN_LOGOUT}">Logoff</a> | <a class="MainMenuLink" href="{U_PRIVATEMSGS}">{PRIVATE_MESSAGE_INFO}</a> |{HB_ADMIN_LINK} <a class="MainMenuLink" href="{U_SEARCH}">{L_SEARCH}</a> | <a class="MainMenuLink" href="{U_PROFILE}">{L_PROFILE}</a> | <a class="MainMenuLink" href="{U_FAQ}">{L_FAQ}</a>
                        </td>
                </tr>

</table>


