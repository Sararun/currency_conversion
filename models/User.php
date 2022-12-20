<?php

namespace models;
require 'app_model.php';

class User
{
    private array $user = [];

    /**
     * @return array
     */
    public function getUser(): array
    {
        $query = "SELECT login, password FROM user";
        $PDODriver = connectDB();
        $sth = $PDODriver->prepare($query);
        $sth->execute();
        $this->user = $sth->fetchAll();
        return $this->user;
    }





}