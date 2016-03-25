
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="login/style.css" type="text/css" />
</head>

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

<!--CODE FOR BUG LIST-->

<body>
    <div id ="content">
        <?php
            include("connection.php");
            $sql="SELECT * FROM bugs WHERE bugs.ID=".$_GET["id"];
            $result=mysqli_query($db,$sql);
            $row=mysqli_fetch_assoc($result);
            $bugTitle=$row['title'];
            $bugID=$row['ID'];
            $bugDesc=$row['desc'];

            echo "<h2>".$bugTitle."</h2>";
            echo "<p>".$bugDesc."</p>";
            $sql="SELECT * FROM comments WHERE bugs.ID=".$_GET["id"];
            $result=mysqli_query($db,$sql);
            while($row=mysqli_fetch_assoc($result)) {
                $commentTitle = $row['title'];
                $comment = $row['comment'];

                echo '<h3>' . $title . '</h3>';
                echo '<p>' . $comment . '</p>';

            }
        ?>
    </div>
</body>


<body>

<form method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>

<?php
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
    $fileName = $_FILES['userfile']['name'];
    $tmpName  = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];

    $fp      = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if(!get_magic_quotes_gpc())
    {
        $fileName = addslashes($fileName);
    }

    include 'connection.php';

    $query = "INSERT INTO upload (name, size, type, content ) ".
        "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

    mysql_query($query) or die('Error, query failed');
    include 'library/closedb.php';

    echo "<br>File $fileName uploaded<br>";
}
?>

</body>

</html>