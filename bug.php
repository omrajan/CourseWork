<?php

include("connection.php");

?>
<!doctype html>
<html>
<!--head>
    <link rel="stylesheet" type="text/css" href="login/style.css">
</head-->

<nav>
    <ul>
        <li><a href="index.php">Home Page</a></li>
    </ul>
</nav>

<header>
    <h1>Enter Bug details below!!!</h1>

</header>

<form method="post" action="">
    <fieldset>

        <table width="400" border="0" cellpadding="10" cellspacing="10">
            <tr>
                <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="title">Bug Title</label></div>
                </td>
                <td>
                    <input name="title" type="text" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="desc">Bug Description</label>
                    </div>
                </td>
                <td>
                    <input name="desc" type="text" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="userID">User ID</label>
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
                        <label for="fixDate">Date fixed</label>
                    </div>
                </td>
                <td>
                    <input name="fixDate" type="date" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="fixed">Fixed/infixed</label>
                    </div>
                </td>
                <td>
                    <input name="fixed" type="text" class="input" size="25" required />
                </td>
            </tr>

        </table>
    </fieldset>
</form>

<form method="post" enctype="multipart/form-data">
    <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
        <tr>
            <td width="246">
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="userfile" type="file" id="userfile">
            </td>
            <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
        </tr>
    </table>
</form>


</html>