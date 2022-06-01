<?php

const DB_HOST = 'db';
const DB_NAME = 'developer';
const DB_USER = 'developer';
const DB_PASSWORD = 'developer';

function db()
{
    static $pdo;
    if (!$pdo) {
        $pdo = connect(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
    }
    return $pdo;
}