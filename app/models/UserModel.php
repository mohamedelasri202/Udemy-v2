<?php
class UserModel
{
    private $id;
    private $name;
    private $lastName;
    private $email;
    private $passwordHash;
    private $roleId;
    private $status;
    private $db;

    const ROLE_TEACHER = 2;
    const ROLE_STUDENT = 3;
    const STATUS_WAITING = 'waiting';
    const STATUS_ACTIVATED = 'activated';
    public function __construct($id = null, $name = null, $lastName = null, $email = null, $passwordHash = null, $roleId = null, $status = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
        $this->roleId = $roleId;
        $this->status = $status;
    }
}
