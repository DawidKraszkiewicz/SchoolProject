<?php 

namespace App\FilmDates\Model;

class FilmDatesModel{

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
    public function setFilmDate($film) {
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
        $this->username = $username;
        return $this;
    }
}