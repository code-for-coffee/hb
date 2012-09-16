<script language="javascript" type="text/javascript" src="{U_CFI_JSLIB}"></script>
<script language="javascript" type="text/javascript">
<!--

var CFIG_Version = "DHTML Collapsible Forum Index MOD v1.1.1";

var CFIG = new _CFIG('CFIG',
		['{IMG_PLUS}', '{IMG_MINUS}'],
		['{IMG_DW_ARROW}', '{IMG_UP_ARROW}'],
		['{COOKIE_PATH}', '{COOKIE_DOMAIN}', (('{COOKIE_SECURE}' == '0') ? false : true)]);
	CFIG.T['cookie'] = '{CFI_COOKIE_NAME}';
	CFIG.T['title'] = ['{L_CFI_OPTIONS}', '{L_CFI_OPTIONS_EX}'];
	CFIG.T['close'] = '{L_CFI_CLOSE}';
	CFIG.T['delete'] = '{L_CFI_DELETE}';
	CFIG.T['restore'] = '{L_CFI_RESTORE}';
	CFIG.T['save'] = '{L_CFI_SAVE}';
	CFIG.T['expand_all'] = '{L_CFI_EXPAND_ALL}';
	CFIG.T['collapse_all'] = '{L_CFI_COLLAPSE_ALL}';
	CFIG.T['u_index'] = '{U_INDEX}';
	CFIG.allowed = true;

	if( CFIG.IsEnabled() && parseInt(CFIG.getQueryVar('c')) > 0 )
	{
		window.location.replace('{U_INDEX}');
	}
// -->
</script>
<table width="100%" cellpadding="3" cellspacing="1" border="0">
    <tr>
       <td class="MainMenuRow" width="100%" align="left">{TOTAL_POSTS}.&nbsp;&nbsp;{TOTAL_USERS_ONLINE}.</td>
    </tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="MainMenuRow">
    <tr>
      <td width="65%" align="left"><font size="1">
      <script language="javascript" type="text/javascript">
<!--
	CFIG.writeButton();
// -->
      </script></font><a href="javascript:CFIG.cmd('collapseAll');" class="MainMenuLink">Hide Forums</a>&nbsp;|&nbsp;<a href="javascript:CFIG.cmd('expandAll');" class="MainMenuLink">Show Forums</a></td>
      <td width="5%" align="left"><font size="1">Topics</font></td>
      <td width="5%" align="left"><font size="1">Posts</font></td>
      <td width="25%" align="right"><font size="1">Last Message</font></td>
   </tr>
</table>
<script language="javascript" type="text/javascript">
<!--
	CFIG.writePanel();

<!-- BEGIN catrow -->
CFIG.C['cat_{catrow.CAT_ID}'] = new _CFIC('{catrow.CAT_ID}', '{catrow.DISPLAY}');
<!-- BEGIN forumrow -->
if( CFIG.C['cat_{catrow.CAT_ID}'] ) CFIG.C['cat_{catrow.CAT_ID}'].add('forum_{catrow.CAT_ID}_{catrow.forumrow.FORUM_ID}');
<!-- END forumrow -->
<!-- END catrow -->

function CFIG_slideCat(cat_id, isLink)
{
	if( CFIG && CFIG.currentStep <= 0 )
	{
		if( CFIG.IsEnabled() && CFIG.C['cat_'+cat_id] )
		{
			if( isLink ) return false;
			CFIG.createQueue();
			CFIG.slideForums(cat_id);
			CFIG.execQueue();
			CFIG.saveIndexState(CFIG.T['cookie']);
			return false;	// omit the default action of the link.
		}
		if( !isLink )
		{
			var u_index = CFIG.T['u_index'];
			u_index += ( u_index.indexOf('?') > 0 ? '&' : '?' ) + 'c=' + parseInt(cat_id);
			window.location.replace(u_index);
			return false;
		}
	}
	return true;	// let the link do its job.
}
function CFIG_onLoad()
{
	if( CFIG_oldOnLoad )
	{
		CFIG_oldOnLoad();
		CFIG_oldOnLoad = null;
	}
	if( CFIG && CFIG.IsEnabled() )
	{
		CFIG.restoreIndexState(CFIG.T['cookie']);
	}
}
var CFIG_oldOnLoad = window.onload;
window.onload = CFIG_onLoad;
// -->
</script>
<table width="100%" cellpadding="3" cellspacing="0" border="0">
      <!-- BEGIN catrow -->
<tr>      
      <td onclick="CFIG_slideCat('{catrow.CAT_ID}', false);" title="{catrow.CAT_DESC}" width="3%" class="BoardColumn" align="left"><span class="BoardColumn"><img name="icon_sign_{catrow.CAT_ID}" src="{SPACER}" border="0" height="15" width="15" /></span></td>
      <td width="62%" class="BoardColumn" onclick="CFIG_slideCat('{catrow.CAT_ID}', false);" style="cursor:pointer;cursor:hand;"  title="{catrow.CAT_DESC}" width="3%" class="BoardColumn">{catrow.CAT_DESC}</a>
      <td width="5%" class="BoardColumn" onclick="CFIG_slideCat('{catrow.CAT_ID}', false);" style="cursor:pointer;cursor:hand;"  title="{catrow.CAT_DESC}" width="3%" class="BoardColumn">&nbsp;</td>
      <td width="5%" class="BoardColumn" onclick="CFIG_slideCat('{catrow.CAT_ID}', false);" style="cursor:pointer;cursor:hand;"  title="{catrow.CAT_DESC}" width="3%" class="BoardColumn">&nbsp;</td>
      <td width="25%" class="BoardColumn" onclick="CFIG_slideCat('{catrow.CAT_ID}', false);" style="cursor:pointer;cursor:hand;"  title="{catrow.CAT_DESC}" width="3%" class="BoardColumn">&nbsp;</td>
</tr>

<!-- BEGIN forumrow -->
<tr id="forum_{catrow.CAT_ID}_{catrow.forumrow.FORUM_ID}" style="display:{catrow.forumrow.DISPLAY};">
     <td class="BoardRowHeading" width="3%" nowrap="nowrap">&nbsp;<img src="{catrow.forumrow.FORUM_FOLDER_IMG}" width="2" height="9">&nbsp;</td>
      <td width="62%" class="BoardRowBody"><a class="SubjectLink" href="{catrow.forumrow.U_VIEWFORUM}">{catrow.forumrow.FORUM_NAME}</a>&nbsp;-&nbsp;<span class="ForumDescription">{catrow.forumrow.FORUM_DESC}</span></td>
      <td class="BoardRowHeading" width="5%" align="center">&nbsp;{catrow.forumrow.TOPICS}&nbsp;</td>
      <td class="BoardRowHeading" width="5%" align="center">&nbsp;{catrow.forumrow.POSTS}&nbsp;</td>
      <td class="BoardRowHeading" width="25%" align="right"><span style='font-size: 9px;'>{catrow.forumrow.LAST_POST}</span></td>
    </tr>
<!-- END forumrow -->
<!-- END catrow -->

</table>