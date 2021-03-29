<?php


namespace App\FilmDates\Service;


use App\Database\Entity\Entity;
use App\Database\Entity\EntityMapper;
use App\Serializer\JsonSerializer;
use App\FilmDates\FilmDatesEntity\FilmDatesEntity;
use App\FilmDates\Model\FilmDatesModel;
use App\FilmDates\Repository\FilmDatesRepository;

class UserService {

    const USER_GROUP_ID = 1;

    private $filmDatesRepository;

    /**
     * FilmDatesService constructor.
     */
    public function __construct() {
        $this->filmDatesRepository = new FilmDatesRepository();
    }

    public function createUser(UserRequest $request) {

        $userEntity = new UserEntity();

        $userEntity->setUsername($request->getUsername())
            ->setPasswordHash(sha1($request->getPassword()))
            ->setGroupId(self::USER_GROUP_ID);

        return EntityMapper::mapEntityToResponse(
            $this->userRepository->save($userEntity),
            UserModel::class
        );
    }

    /**
     * @param $id
     * @return object
     */
    public function getUser($id) {
        return EntityMapper::mapEntityToResponse(
            $this->userRepository->getById($id),
            UserModel::class
        );
    }

    public function isUserWithPasswordExists($username, $password) {
        return $this->userRepository->isUserWithPasswordExists($username, $password);
    }
}