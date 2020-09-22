<?php 

namespace Core\Db;

interface DBInterfaces{

    public function select($tableName, $where);

    public function delete($tableName, $where);

    public function update($tableName, $array, $where);

    public function insert($tableName, $array);

}