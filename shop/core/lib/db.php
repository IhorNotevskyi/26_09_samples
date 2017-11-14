<?php

$db = null;

/**
 * @param string $host
 * @param string $user
 * @param string $password
 * @param string $database
 * @return mysqli
 */
function createDbConnection($host, $user, $password, $database)
{
    $handler = mysqli_connect($host, $user, $password);
    if (!$handler) {
        die('MySQL connection problem: ' . mysqli_error($handler));
    }

    mysqli_select_db($handler, $database);

    return $handler;
}

/**
 * @return mysqli|null
 */
function getDbConnection()
{
    global $db;
    if (null === $db) {
        $dbConfig = getConfigParameter('db');
        $db = createDbConnection(
            getArrayValue($dbConfig, 'host'),
            getArrayValue($dbConfig, 'user'),
            getArrayValue($dbConfig, 'password'),
            getArrayValue($dbConfig, 'database')
        );
    }

    return $db;
}

/**
 * @param string $sql
 */
function executeSQLString($sql)
{
    if (!mysqli_query(getDbConnection(), $sql)) {
        die("Error creating table: " . mysqli_error(getDbConnection()));
    }
}

/**
 * @param string $sql
 * @return array
 */
function selectRows($sql)
{
    $rows = [];
    if ($result = mysqli_query(getDbConnection(), $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }

    return $rows;
}
