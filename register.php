<?php
/*		name:  register.php
		description:  Allows users to register, checks the fields for problems, and inserts data to database
		written by:   Brian Kittrell, Archadium
		created:	  12/11/2008
		modified:
*/
include("$base_dir"."header.php");

if (!isset($_POST['error'])) { ?>
	<form action=\"$base_dir" . "includes/register.inc\" method=\"post\">
	<CENTER><TABLE BORDER="0" WIDTH="700">
	<TR>
		<TD WIDTH="300" align="right"><FONT COLOR="WHITE">To create an account, enter the following information.</TD>  
		<TD WIDTH="300" align="left"><FONT COLOR="WHITE">Remember: <FONT COLOR="RED">*</FONT> indicates a required field.</TD></TR>
		<TD WIDTH="100" align="right"></TD>
	<TR>
		<TD colspan=3></TR>
	<TR>
		<TD align="right"><p><FONT COLOR="RED">*</FONT> Enter Desired Login/Username : <BR></TD><TD><INPUT TYPE=TEXT NAME=rusername></TD></TR>
	<TR>
		<TD align="right"><p><FONT COLOR="RED">*</FONT> Enter Desired Nickname/Display Name : </TD><TD><INPUT TYPE=TEXT NAME=rnickname></TD></TR>
	<TR>
		<TD align="right"><p><FONT COLOR="RED">*</FONT> Enter Password : </TD><TD><INPUT TYPE=PASSWORD NAME=rpassword></TD></TR>
	<TR>
		<TD align="right"><p><FONT COLOR="RED">*</FONT> Enter Email Address : </TD><TD><INPUT TYPE=TEXT NAME=remail></TD></TR>
	<TR>
		<TD colspan=3 align=center><HR><FONT COLOR=white>The following details are optional.  Details which are displayed in your profile are marked with a <FONT COLOR="RED">+</FONT>.<HR></TD></TR>
<?php } ?>
<?php
/*
<TR>
	<TD align="right"><p>First Name : </TD><TD><INPUT TYPE=TEXT NAME=rfirst_name></TD></TR>
<TR>
	<TD align="right"><p>Last Name : </TD><TD><INPUT TYPE=TEXT NAME=rlast_name></TD></TR>
<TR>
	<TD align="right"><p>Gender : </TD><TD><INPUT TYPE=TEXT NAME=rgender></TD></TR>
<TR>
	<TD align="right"><p>Birthdate : </TD><TD><INPUT TYPE=TEXT NAME=rbirthdate></TD></TR>
<TR>
	<TD align="right"><p>Last Name : </TD><TD><INPUT TYPE=TEXT NAME=rlast_name></TD></TR>
<TR>
	<TD align="right"><p>Last Name : </TD><TD><INPUT TYPE=TEXT NAME=rlast_name></TD></TR>
*/
?>
<TR><TD colspan="3" align=center><INPUT TYPE=submit name=register value=Submit></form></TD></TR>
</FORM>
</TABLE>
	