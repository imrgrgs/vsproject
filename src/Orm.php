<?php
/**
 * Classe de orm bitio
 * 
 * @package Orm
 * 
 * @author iomar <iomargorges@hotmail.com>
 * 
 * @since 1.0
 */

namespace orm;

use LessQL\Database;

/**
 * Database object wrapping a PDO instance
 */
class Orm
{
    var $model;

    public function __construct()
    {
        
    }
    
    /**
     * Undocumented function
     *
     * @return string contains the base path for this aplication
     */
    public function model()
    {
        $options = [];
        return base_path();
        // $pdo = new \PDO("xx", "iomar", "33iomar33");
        // $this->model = new Database($pdo);
    }

    /**
     * Get the value of model
     * @return mixed
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }
}
