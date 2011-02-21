<?php
/* Example logout page for mod_auth_pubtkt
   (https://neon1.net/mod_auth_pubtkt)

   written by Manuel Kasper <mk@neon1.net> */

header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

$domain = ".example.com";

if (isset($_POST['logout'])) {
    /* only do this if there really has been a POST; otherwise we could
       be fooled by pre-caching browsers etc. */
    setcookie("auth_pubtkt", "", time() - 86400, "/", $domain, true);
} else {
    header("Location: login.php");
    exit;
}

?>
<html>
<head>
<title>mod_auth_pubtkt Single Sign-On</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<table width="100%" height="100%">
<tr><td align="center" valign="middle">

<img src="logo.gif">
<h2>Single Sign-On</h2>

<p>You are now logged out.</p>

</tr></td>
</table>

</body>
</html>
