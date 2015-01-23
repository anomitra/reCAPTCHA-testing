<?php
/*
 * reCAPTCHA.php
 * 
 * Copyright 2015 Anomitra Saha<anomitra@Shadeslayer>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>reCAPTCHA</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.24.1" />
</head>

<body>
<?php

        $captcha;
        if(isset($_POST['g-recaptcha-response']))
        {
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha)
        {
          echo '<h2>Captcha not found!</h2>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdKugATAAAAAC726rSnQ82wcaslzVR5UE5DxXEz&response=".$captcha);
        if($response.success==false)
        {
          echo '<h2>Verification Failed.</h2>';
        }
        else
        {
          echo '<h2>Verification Success.</h2>';
        }
        echo $captcha;
        echo $response;
?>
</body>

</html>
