<?php

include "env.php";
/**
 * Class DB
 */
class DB
{
    public $con;

    public function __construct()
    {
        $this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
        mysqli_select_db($this->con, DB_NAME);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

    public function select($sql){
        try {
            $data = [];
            $result = mysqli_query($this->con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
            }
            return $data;
        } catch (Exception $ex) {
            return false;
        }
    }

    public function insertUpdate($sql){
        try {
            return mysqli_query($this->con, $sql);
        } catch (Exception $ex) {
            return false;
        }
    }
}