<?php

const VIEW_DIR = ROOT_DIR . '/views';
const PAGES_DIR = VIEW_DIR . '/pages';
const PARTS_DIR = VIEW_DIR . '/parts';

// DataBase constants
const HOST = 'localhost';
const DB_NAME = 'php_lesson';
const USER = 'root';
const PASSWORD = 'root';
const DSN = 'mysql:host=' . HOST . '; dbname=' . DB_NAME;

define("DOMAIN", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN . '/assets';
const IMAGES_URI = ASSETS_URI . '/images';