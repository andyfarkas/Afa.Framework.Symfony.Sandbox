<?php

namespace Sandbox\Users;

class UsersController
{

    /**
     * @var \Sandbox\Users\Service\IUsersService
     */
    protected $usersService;

    /**
     * @param Service\IUsersService $usersService
     */
    public function __construct(\Sandbox\Users\Service\IUsersService $usersService)
    {
        $this->usersService = $usersService;
    }

    /**
     * @param Request\Model\CreateUserModel $model
     * @return array
     */
    public function createUser(\Sandbox\Users\Request\Model\CreateUserModel $model)
    {
        // create the user using a dedicated service
        $createdUserName = $model->createUser($this->usersService);

        return array(
            'id' => 1,
            'name' => $createdUserName,
        );
    }

    /**
     * @return array
     */
    public function listUsers()
    {
        return array(
            'id' => 1,
            'name' => 'Jon Doe',
        );
    }

}
