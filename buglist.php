
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
    <h1>Enter details below for BUG List!!</h1>

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
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="userID">Bug belongs to</label>
                    </div>
                </td>
                <td>
                    <input name="userID" type="text" class="input" size="25" required />
                </td>
            </tr>

            <tr>
                <td height="23"></td>
                <td>
                    <div align="right">
                        <input type="submit" name="submit" value="Submit!" />
                    </div>
                </td>
            </tr>
        </table>
    </fieldset>
</form>


<body>
<h1> Bug List</h1>
<div id ="content">
    <?php
            include("connection.php");
            $sql="SELECT * FROM bugs";
            $result=mysqli_query($db,$sql);
            while($row=mysqli_fetch_assoc($result)) {
                $bugTitle = $row['title'];
                $bugID = $row['ID'];

                echo '<a href="bug.php?id="' .$bugID.'>'.$bugTitle.'</a></br>';
            }

        ?>
</div>
</body>
</html>