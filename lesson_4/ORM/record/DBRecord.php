<?php

namespace app\record;

use app\interfaces\IModel;

abstract class DBRecord implements IModel
{
    public abstract function getOne($id);

    public abstract function getAll();

    public abstract function insert();

    public abstract function update();

    public abstract function delete($id);

    public abstract function getTableName();
}