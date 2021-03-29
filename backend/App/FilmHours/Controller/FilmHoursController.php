<?php

namespace App\FilmHours\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\FilmHours\Service\FilmHoursService;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass;
use zpt\anno\Annotations;

/**
 * @Controller(path="/film_hours")
 */
class FilmHoursController {

    private $FilmHoursService;

    /**
     * UserController constructor.
     * @param $FilmHoursService
     */
    public function __construct() {
        $this->FilmHoursService = new FilmHoursService();
    }


    /**
     * @Action(method="GET")
     */
    public function getFilmHours() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Action(method="POST")
     */
    public function addFilmHours() {

        /** @var FilmHoursRequest $request */
        $request = RestBodyReader::readBody(FilmHoursRequest::class);

        $FilmHoursEntity = $this->FilmHoursService->createFilmHours($request);

        echo JsonSerializer::getInstance()->serialize($FilmHoursEntity, 'json');
    }

    /**
     * @Authorized
     * @Action(method="GET", path="/{id}")
     */
    public function getFilmHoursById($id) {
        $FilmHoursModel = $this->FilmHoursService->getFilmHours($id);

        echo JsonSerializer::getInstance()->serialize($FilmHoursModel, 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateFilmHours($id) {
        echo sprintf("Updated Film Hour with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteFilmHours($id) {
        echo sprintf("Deleted Film hour with id: %s", array($id));
    }
}