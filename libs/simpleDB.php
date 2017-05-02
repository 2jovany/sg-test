<?php
class simpleDB
{
    private $_db;

    function __construct() {
        $this->_db = new PDO("sqlite:simple.db");
        $this->_db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public function select($table){
        $db_query = 'SELECT * FROM ' . $table;
        $result = $this->_db->query($db_query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}