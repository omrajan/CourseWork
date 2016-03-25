<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>

    <body>
        <div id="wrapper">
            <h1>RP Bug Tracking System</h1>
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href ="login/index.php">Login</a></li>
                    <li><a href="register.php">Register here</a></li>
                    <li><a href="bug.php">Bug</a></li>
                    <li><a href="comment.php">comment</a></li>
                    <li><a href="buglist.php">Search Bug</a></li>

                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            <div id="sidebar">

            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
