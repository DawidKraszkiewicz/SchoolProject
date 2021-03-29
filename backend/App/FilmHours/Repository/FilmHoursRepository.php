<?php namespace App\FilmDates\Repository;


use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\FilmHours\Entity\FilmHoursEntity;
use PDO;

class UserRepository extends Repository {

    protected function getEntityName() {
        return "App\FilmHours\Entity\FilmHoursEntity";
    }

    protected function getTableName() {
        return "film_hours";
    }
}