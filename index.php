<?php
$title = "Home";
$content = '<img src="Image/bug.jpg" class="imgLeft" />
<h3>ABOUT THIS PAGE</h3>
<p>
    This page is for logging simple Bugs and track that has been logged
    and find methods for preventing programmers from inadvertently introducing bugs
    while writing software.
</p>

<img src="Image/bugtypes.png" class="imgRight"/>

<h3>GUIDANCE</h3>
<p>
    Only registered users should be able to access the system.
    If you are a new user, Click on Register here and fill required information.

    Registered users can do followings :

    Post new bugs, bugs are simply a text description of the code error.
    Attachments: A user should be able to upload an attachment to the bug, this should be a txt file containing some necessary code.
    Comment on any other bug. Comments are simply text stored to help another user fix a bug. 
</p>';

include 'Template.php';
?>

