<?php
function Auth() {
        if (!isset($_SESSION['userdata']['id_professor'])) {
            header('Location: login.php');
            exit();
        }
}

?>