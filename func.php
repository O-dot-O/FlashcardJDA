<?php 
function isConnect() {
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}