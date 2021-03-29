<?php namespace App\FilmDates\Entity;

use App\Database\Entity\Entity;

class FilmDatesEntity extends Entity {

    private $id;
    private $film_date;
    private $film_id;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFilmDate() {
        return $this->film_date;

    }
    /**
     * @param mixed $film_date
     */
    public function setFilmDate($film_date) {
        $this->film_date = $film_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilmId() {
        return $this->film_id;
    }

    /**
     * @param mixed $film_id
     */
    public function setFilmId($film_id) {
        $this->film_id = $film_id;
        return $this;
    }
}