<?php

header('Content-Type: application/json; charset=utf-8');
echo json_encode(fpm_get_status(), JSON_PRETTY_PRINT);
