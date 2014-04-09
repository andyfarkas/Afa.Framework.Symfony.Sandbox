<?php

namespace Sandbox\Users\Request\Model;

class CreateUserModel extends \Afa\Framework\Request\Model\AbstractModel
{

    /**
     * @throws \Afa\Framework\Exception\BadRequestException
     */
    public function validate()
    {
        $name = $this->request->get('name');
        if ($name == null)
        {
            throw new \Afa\Framework\Exception\BadRequestException('Missing user name');
        }
    }

    /**
     * @param \Sandbox\Users\Service\IUsersService $usersService
     * @return string
     */
    public function createUser(\Sandbox\Users\Service\IUsersService $usersService)
    {
        $usersService->createUser($this->request->get('name'));
        return $this->request->get('name');
    }

}