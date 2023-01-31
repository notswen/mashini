<?php
const HOSTNAME = 'localhost';
const USERNAME = 'root';
const PASSWORD = 'root';
const DATABASE = 'newbase';

function db_connect()
{
    $mysqli = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if (mysqli_connect_errno()) {
        printf(
            'Ошибка подключения к БД: %s',
            mysqli_connect_error()
        );
        die();
    }

    if (!mysqli_set_charset($mysqli, 'utf8')) {
        printf(
            'Ошибка установки кодировки к БД: %s',
            mysqli_error($mysqli)
        );
        die();
    }

    return $mysqli;
}

function db_close($mysqli)
{
    return mysqli_close($mysqli);
}

function getALLBrands()
{
    $mysqli = db_connect();

    $sql = 'SELECT * FROM auto_mark';

    $brands = mysqli_query($mysqli, $sql);
    $brands = mysqli_fetch_all($brands, MYSQLI_ASSOC);

    db_close($mysqli);

    return $brands;
}

function getALLModels()
{
    $mysqli = db_connect();

    $sql = '
        SELECT mark.name as mark, model.name as model, mark.id as mark_id, model.id as model_id
from auto_model as model
left join auto_mark as mark on mark.id = model.mark_id';

    $brands = mysqli_query($mysqli, $sql);
    $brands = mysqli_fetch_all($brands, MYSQLI_ASSOC);

    db_close($mysqli);

    return $brands;
}

function getModelsByBrandId($brand_id)
{
    $mysqli = db_connect();

    $brand_id = mysqli_real_escape_string($mysqli, $brand_id);

    $sql = "SELECT
       model.name as model,
       model.id as model_id
from auto_model as model
where mark_id = {$brand_id}
";
    $models = mysqli_query($mysqli, $sql);
    $models = mysqli_fetch_all($models, MYSQLI_ASSOC);

    db_close($mysqli);

    return $models;
}
function getAllCars()
{
    $mysqli = db_connect();

    $sql = 'select mark.name as marka, model.name as modelka, type.name as tip, auto.id as idshnik from auto
left join auto_type as type on type.id = auto.type_id
left join auto_model as model on model.id = auto.model_id
left join auto_mark as mark on mark.id = model.mark_id';

    $cars = mysqli_query($mysqli, $sql);
    $cars = mysqli_fetch_all($cars, MYSQLI_ASSOC);

    db_close($mysqli);

    return $cars;
}
