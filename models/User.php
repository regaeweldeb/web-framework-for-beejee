<?php

class User {
    private $username;
    private $password;

    // Конструктор класса
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    // Геттеры и сеттеры для полей пользователя
}
