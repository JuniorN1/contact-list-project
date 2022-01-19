<?php
namespace App\Repositories;

namespace App\Repositories;

abstract class BaseRepository
{
    protected $model;


    public function __construct($model)
    {
        $this->model = new $model;

    }
}
