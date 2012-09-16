*************************************************************************
* 		   Hailboards System for phpBB 2.2.x			*
*************************************************************************

Hailboards is an "Even Better Than The Real Thing" clone of IGN's
Snowboards system.  Built on the phpBB engine, it includes the ability
to use classical phpBB styles as well as the IGNBoards-like Hailboards
styles and features.


TABLE OF CONTENTS FOR README.txt
-------------------------------------------------------------------------
1) About this release
2) Changelog
3) How to Install
4) How to set a User's colors
5) Credits
6) License


1. About this release
-------------------------------------------------------------------------
0.2 Beta is the first ready-for-all beta of the Hailboards system.  It
requires a functional phpBB based board to be installed before use.  It
includes a Snowboards style usercolors system, and a Watched Users List
that is improved of the Snowboards style.  Many of the phpBB features
remain (and will remain) in place, simply because they improve upon the
board overall, when compared to stock Snowboards, or its clone Discoboards.


2. Changelog from 0.1.0 to 0.2.0
-------------------------------------------------------------------------
* Locked threads are stricken out, IGN style
* "Hide Forums | Show Forums" Links added.
* Bugfixes
* Stylesheet adjustments
* Moderator Control Panel Link on Forum view
* Forum descriptions were added
* Version changed to 0.2.2 beta. 


3. To Install
-------------------------------------------------------------------------
0. Back up your forum software and database.
1. Place updatedb.php in the root directory of your phpBB installation.
2. Run the file.
3. Delete immediately afterwards.
4. Extract fileset.tar in the root directory of your phpBB installation.
	4a. Alternatively, you may copy over the /fileset/ directory.
5. Enter the Admin Panel with your administrator username, and click on
"Styles Management" under the eXtreme Styles section below "Administration"
	a. Click on "set default style"
	b. Set default style to HBWinter.


4. How to set a User's colors
-------------------------------------------------------------------------
User colors are stored in the same table as user ranks/titles.  To change
ones' user colors, you will need to bestow a rank on them, and set a CSS
style between the open/close tags.  

These are only available in HBWinter by default, and the 
/templates/admin.css file will need to be linked to any subSilver or 
other templates in order for them to be displayed.  It is suggested to use 
this method to display usercolors (examples are stored in the stock
admin.css file).

Setting rank:
Open Tag: <span class="myusername">
Close Tag: </span>

You can also use <font> or <span style>, but they are not recommended.


5. Credits
-------------------------------------------------------------------------
Zerosleep for the original Snowboards.

Switchblade's GCBoards/SBBoards, and Prappl's Discoboards influenced the
CSS layout/structure in Hailboards, so they deserve props.

Andareed's User Rank Color, a phpBB mod located at:
http://www.phpbb.com/phpBB/viewtopic.php?t=30129

CyberAlien's eXtreme Styles MOD
http://www.phpbbstyles.com/ is also included in Hailboards.

Development of Hailboards: Salty, Tuvitor and James.


6. Licensing
-------------------------------------------------------------------------
Distributed under the GNU General Public License, Version 2 or Newer.
A copy of the license may be found in the /DOCS/COPYING.TXT file included.


