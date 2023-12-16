<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('location: ./statistics/index.php');
}