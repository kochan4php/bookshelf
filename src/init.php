<?php

if (!session_id()) session_start();

require_once __DIR__ . '/app/core/database.php';
require_once __DIR__ . '/app/utils/createSlug.php';
require_once __DIR__ . '/app/utils/getUserByEmailOrUsername.php';
require_once __DIR__ . '/app/utils/dd.php';
require_once __DIR__ . '/app/controllers/auth/register_controller.php';
require_once __DIR__ . '/app/controllers/auth/login_controller.php';
require_once __DIR__ . '/app/controllers/book_controller.php';
require_once __DIR__ . '/app/controllers/book_status_controller.php';
require_once __DIR__ . '/app/controllers/book_genre_controller.php';
require_once __DIR__ . '/app/controllers/upload_file_controller.php';
