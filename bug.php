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


<!--?php
include("connection.php");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?-->

</body>


</html>