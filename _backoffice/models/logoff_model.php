<?php

session_start();
session_destroy();

header("Location: " . $url_base . "backoffice/");
exit();



?>