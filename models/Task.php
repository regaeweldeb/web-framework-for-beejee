<?php

class Task {
    private $id;
    private $name;
    private $email;
    private $text;
    private $status;
    private $edited;

    // Конструктор класса
    public function __construct($id, $name, $email, $text, $status, $edited) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->text = $text;
        $this->status = $status;
        $this->edited = $edited;
    }

    // Геттеры и сеттеры для полей задачи
}
