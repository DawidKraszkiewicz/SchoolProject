<?php

namespace App\FilmDates\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\FilmDates\Service\FilmDatesService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/film_dates")
 */
class FilmDatesController {

    private $FilmDatesService;

    /**
     * UserController constructor.
     * @param $FilmDatesService
     */
    public function __construct() {
        $this->FilmDatesService = new FilmDatesService();
    }


    /**
     * @Action(method="GET")
     */
    public function getFilmDates() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Action(method="POST")
     */
    public function addFilmDates() {

        /** @var FilmDatesRequest $request */
        $request = RestBodyReader::readBody(FilmDatesRequest::class);

        $FilmDatesEntity = $this->FilmDatesService->createFilmDates($request);

        echo JsonSerializer::getInstance()->serialize($FilmDatesEntity, 'json');
    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getFilmDatesById($id) {
        $FilmDatesModel = $this->FilmDatesService->getFilmDates($id);

        echo JsonSerializer::getInstance()->serialize($FilmDatesModel, 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateFilmDates($id) {
        echo sprintf("Updated Film Date with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteFilmDates($id) {
        echo sprintf("Deleted Film Date with id: %s", array($id));
    }
}