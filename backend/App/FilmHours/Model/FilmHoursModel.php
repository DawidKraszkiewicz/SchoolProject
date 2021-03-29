<?php 
namespace App\FilmHours\Model;



class FilmHoursModel{

    private $id;
    private $film_date_id;
    private $film_hour;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFilmDateId() {
        return $this->film_date_id;

    }
    /**
     * @param mixed $film_date_id
     */
    public function setFilmDateId($film_date_id) {
        $this->film_date_id = $film_date_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilmHour() {
        return $this->film_hour;
    }

    /**
     * @param mixed $film_hour
     */
    public function setFilmHour($film_hour) {
        $this->film_hour = $film_hour;
        return $this;
    }
}