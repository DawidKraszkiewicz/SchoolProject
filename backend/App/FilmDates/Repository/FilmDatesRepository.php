<?php namespace App\FilmDates\Repository;


use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\FilmDates\Entity\FilmDatesEntity;
use PDO;

class UserRepository extends Repository {

    protected function getEntityName() {
        return "App\FilmDates\Entity\FilmDatesEntity";
    }

    protected function getTableName() {
        return "film_dates";
    }
}