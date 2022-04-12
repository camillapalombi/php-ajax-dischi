<?php

header('Content-Type: application/json');

include './database/data.php';

echo json_encode($array_discs);