</body>
<h1> Bug List</h1>
<div id ="content">
    <?php
    include("connection.php")
            $sql="SELECT* FROM bugs";
            $result=mysqli_query($db,$sql);
            while($row=mysqli_fetch_assoc($result)) {
                $bugTitle = $row['title'];
                $bugID = $row['ID'];

                echo '<a href="bug.php?id="' . $bugID . '>' . $bugtitle . '</a></br>';
            }

        ?>
</div>
</body>