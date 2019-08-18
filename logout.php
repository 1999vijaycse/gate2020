<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy(); 
echo 'Log Out Successfully';
header('Location: index.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

