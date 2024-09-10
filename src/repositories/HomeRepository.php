<?php

namespace ExpenseTracker\Repositories;

use ExpenseTracker\Core\BaseRepository;
use ExpenseTracker\Models\Users;

class HomeRepository extends BaseRepository
{
    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM Users WHERE Email = :email";
        $query = $this->db->prepare($sql);
        $query->execute(['email' => $email]);
        return $query->fetch();
    }

    public function createUser($email, $password)
    {
        $user = new Users();
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setRoleId(2);
        $this->table = 'Users';
        $this->create([
            'Email' => $user->getEmail(),
            'Password' => $user->getPassword(),
            'RoleId' => $user->getRoleId()
        ]);
    }
}