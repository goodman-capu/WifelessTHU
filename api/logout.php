<?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 16/4/27
 * Time: 上午10:49
 */

/**
 * Common functions for Social API.
 */
require_once 'api_utilities.php';
$con = db_connect();
check_login($con);

$token = filter($con, $_POST["token"]);
$con->query("DELETE FROM token WHERE token = '$token'");
check_sql_error($con);
report_success();