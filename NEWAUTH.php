<?php
require_once 'base.php';
if (!empty($_POST['aa'])) {
    $user_name = authorisation($_POST['aa']);
}