<?php

setcookie("user",'logout' ,time() + 6900, "/");
header("Location: ../Pages/index.php");


?>