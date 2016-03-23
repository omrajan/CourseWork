<?php

include("connection.php");
include("submit.php");

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bug Entry Form</title>
    <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css">
</head>

<body>

<header>
    <h1>Please Enter your comments related to Bug!!!</h1>

    <nav>
        <ul>
            <li><a href="index.php">Home Page</a></li>
            <li><a href="comment.php">Comments</a></li>
            <li><a href="bug.php">Bugs</a></li>
            <li><a href="register.php">Register</a></li>

        </ul>
    </nav>
</header>


<form method="post" action="">
    <fieldset>
        <legend>Bug Entry Form</legend>
        <table width="400" border="0" cellpadding="10" cellspacing="10">
            <tr>
                <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
            </tr>

            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="desc">Comment text</label>
                    </div>
                </td>
                <td>
                    <input name="desc" type="text" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="userID">User Commented</label>
                    </div>
                </td>
                <td>
                    <input name="userID" type="text" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="postDate">Date Posted</label>
                    </div>
                </td>
                <td>
                    <input name="postDate" type="date" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="bugID">Comment belongs to</label>
                    </div>
                </td>
                <td>
                    <input name="bugID" type="text" class="input" size="25" required />
                </td>
            </tr>

            <tr>
                <td height="23"></td>
                <td>
                    <div align="right">
                        <input type="submit" name="submit" value="Register!" />
                    </div>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>