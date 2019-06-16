<?php
/**
 * Classe Orm
 */
namespace orm;

use LessQL\Database;

/**
 * Database object wrapping a PDO instance
 */
class Orm
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    public $model;
    /**
     * Undocumented function
     */
    public function __construct()
    {
        //TODO fazer alguma coisa aqui
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function model()
    {
        $options = [];
        return base_path();
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Undocumented function
     *
     * @param string $model
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

}
