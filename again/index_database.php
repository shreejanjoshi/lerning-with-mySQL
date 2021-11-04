<?php

$connect = mysqli_connect('localhost', 'root', '', 'again');

if ($connect) {
    echo "it connected";
} else {
    die("failed to connect");
}