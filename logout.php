<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['role']);
unset($_SESSION['cart']);
unset($_SESSION['is_admin']);
unset($_SESSION['is_user']);
unset($_SESSION['from']);
unset($_SESSION['arrive']);
unset($_SESSION['orderStatistical']);
header('location: login.php');

