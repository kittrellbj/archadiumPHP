<?php
/*		name:  config.php
		description:  The configuration file for Archadium Login
		written by:   Brian Kittrell, Archadium
		created:	  12/12/2008
		modified:
*/

// MySQL connection data
$arch_host = 'localhost'; // Hostname/URL
$arch_user = 'root'; // Username for database connection
$arch_pass = ''; // Password for database connection
$arch_db = 'archadium_main'; // The database name
// End MySQL connection data
// Establish format and echo for database connection error
$db_connect_error = "<BR><BR><CENTER><FONT SIZE=4>Could not connect to the database.  Please contact the system administrator at admin@archadium.com</FONT></CENTER>";
// Connect to database
$archcxn = mysql_connect($arch_host,$arch_user,$arch_pass,$arch_db) or die ($db_connect_error);
// Global Variables
$base_dir = ''; // The base URL/directory setting
$pm_url = $base_dir . 'pm.php'; // The location of private message directory
$logout = $base_dir . 'logout.php'; // URL/location for logout
$user_pref = ''; // Gets user color scheme preference
// End Global Variables

// Session variables for login
$username = $_SESSION['username']; // Get Session username
$password = $_SESSION['password']; // Get Session password
$nickname = $_SESSION['nickname']; // Get Session nickname
$uid = $_SESSION['uid']; // Get Session user id number
$count = $_SESSION['count'];
// End session variables for login
// Includes
include("$base_dir" . "includes/cryptograph.php");
// End Includes

// Variables governing dispay
$user_pm_count = "7"; // Counts number of new messages in message box

// Function login - checks session, logins in user if not logged in already
//   if the user is not logged in, allow them to type information to the form
//   to attempt login and use cryptograph to verify.
function Login()
{
	global $pm_url, $logout, $base_dir, $username, $password, $nickname, $uid, $count, $user_pm_count;
if (isset($username) and isset($password) and isset($uid) and isset($nickname)){
	echo "<p><FONT SIZE=2>Logged in as"," ",$nickname," | ","<A HREF=$logout>Logout</A></FONT><BR>You have <A HREF=$pm_url>",$user_pm_count,"</A> new messages.";}
else {
	echo "<form action=\"$base_dir" . "includes/login.php\" method=\"post\">
		  <TABLE><TR><TD></TD><TD><p><b>Username:</TD><TD><INPUT TYPE=TEXT NAME=username></TD>
		  <TD><p><b>Password:</TD><TD><INPUT TYPE=password name=password></TD></TR>";
		  if ($count >= 3){
		  echo "<TR><TD align=center colspan=4><p>Enter code in the field to continue</TD></TR>
		  <TR><TD align=center colspan=2><p>Verification Image</TD><TD align=center colspan=2><INPUT TYPE=TEXT NAME=verify></TD></TR>";}
		  echo "<TR><td align=center colspan=4><FONT COLOR=white>Registration is free! <A HREF=$base_dir" . "register.php>Sign up</A> now!<TD colspan=2><CENTER><INPUT TYPE=submit name=login value=LOGIN></form></TD></TD></TR></TABLE>";
	return FALSE;}
}

switch ( $user_pref )
{
	case "red" :
		$images = $base_dir . 'images/red/';
		break;
	case "green" :
		$images = $base_dir . 'images/green/';
		break;
	case "yellow" :
		$images = $base_dir . 'images/yellow/';
		break;
	case "black" :
		$images = $base_dir . 'images/black/';
	default :
		$images = $base_dir . 'images/red/';
		break;
}
?>