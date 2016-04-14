<?php
header(($_SERVER['SERVER_PROTOCOL'] ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.1').' 301 Moved Permanently');
header('Location: ./public/');
exit;