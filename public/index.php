<?php
require '../config.php';
require '../helpers/auth.php';
require '../helpers/validation.php';

// Функция автозагрузки
function autoload($className)
{
    $classPath = '../controllers/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($classPath)) {
        require_once $classPath;
    }
}

// Регистрация автозагрузчика
spl_autoload_register('autoload');

use Task;
use User;
use AuthController;
use TaskController;

// Входная точка приложения
// Обработка запросов и вызов соответствующих контроллеров и их методов
