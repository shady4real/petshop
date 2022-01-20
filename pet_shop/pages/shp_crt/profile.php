<?php
    include "connect.php";

    $show_profile = "select * from user where Mail='$email' ";
    echo "$show_profile";

?>
