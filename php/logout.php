<?php
session_start();
session_destroy();
header("Location: /pagina_final/index.php");
exit();
?>