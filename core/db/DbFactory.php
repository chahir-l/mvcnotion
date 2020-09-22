<?php 

namespace Core\Db;

use Core\Db\DbPDO;

class DBFactory{



    public static function getDb($system)
    {   
        switch($system) {

            case 'pdo':
                    return DbPDO::getInstance(); 
            break;
            
        }
    }
}