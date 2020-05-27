<?php
/**
 * - Инкапсуляция
 *      свойства
 *      методы
 *      модификаторы доступа(public, protected, private)
 *      this
 *      конструктор
 * 
 * - Наследование
 *      переопределение членов класса
 *      
 * - Полиморфизм
 *      
 * - Абстрактные классы
 *      статические методы
 *      константы
 *      self
 * 
 * - Интерфейсы
 * 
 * - SOLID
 * 
 */

/**
 * Class Parrot Попугай
 */
class Parrot
{
    public $age;
    private $wings = 2;
    public $name;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function breathe() 
    {
        echo "Попугай дышит";
    }

    public function eat() 
    {
        echo "Попугай ест";
    }

    public function fly() 
    {
        echo "Попугай летит";
    }
}

$parrot1 = new Parrot('Gosha', 10); 
print_r($parrot1);
$parrot1->age = ++$parrot1->age; 
$parrot2 = new Parrot('Gena', 8); 
$parrot2->age = ++$parrot2->age; 
print_r($parrot2);


print_r($parrot1);
print_r($parrot2);

/**
 * Class Crow Ворона
 */
class Crow
{
    public $age;
    public $wings;

    public function breathe() 
    {
        echo "Ворона дышит";
    }

    public function eat() 
    {
        echo "Ворона ест";
    }

    public function fly() 
    {
        echo "Ворона летит";
    }
}

/**
 * Class Eagle Орел
 */
class Eagle
{
    public $age;
    public $wings;

    public function breathe() 
    {
        echo "Орел дышит";
    }

    public function eat() 
    {
        echo "Орел ест";
    }

    public function fly() 
    {
        echo "Орел летит";
    }
}

/**
 * Class Penguin Пингвин
 */
class Penguin
{
    public $age;
    public $wings;

    public function breathe() 
    {
        echo "Пингвин дышит";
    }

    public function swim() 
    {
        echo "Пингвин плывет";
    }

    public function eat() 
    {
        echo "Пингвин ест";
    }
}

/**
 * Class Ostrich Страус
 */
class Ostrich
{
    public $age;
    public $wings;

    public function breathe() 
    {
        echo "Страус дышит";
    }

    public function eat() 
    {
        echo "Страус ест";
    }
    
    public function run() 
    {
        echo "Страус бежит";
    }

}

/**
 * Class Dog Собака
 */
class Dog
{
    public $age;
    public $name;
    public $paws;

    public function breathe() 
    {
        echo "Собака дышит";
    }

    public function eat() 
    {
        echo "Собака ест";
    }
    
    public function run() 
    {
        echo "Собака бежит";
    }
}

/**
 * Class Cat Кошка
 */
class Cat
{
    public $age;
    public $name;
    public $paws;

    public function breathe() 
    {
        echo "Кошка дышит";
    }

    public function eat() 
    {
        echo "Кошка ест";
    }
    
    public function run() 
    {
        echo "Кошка бежит";
    }
}

/**
 * Class Cow Корова
 */
class Cow
{
    public $age;
    public $name;
    public $legs;

    public function breathe() 
    {
        echo "Корова дышит";
    }

    public function eat() 
    {
        echo "Корова ест";
    }

    public function run() 
    {
        echo "Корова бежит";
    }
}

/**
 * Class Shark Акула
 */
class Shark
{
    public $age;
    public $dorsal;

    public function breathe() 
    {
        echo "Акула дышит";
    }

    public function breatheUnderWater() 
    {
        echo "Акула дышит под водой";
    }

    public function swim() 
    {
        echo "Медуза плывет";
    }

    public function eat() 
    {
        echo "Акула ест";
    }
}

/**
 * Class Dolphin Дельфин
 */
class Dolphin
{
    public $age;
    public $dorsal;

    public function breathe() 
    {
        echo "Дельфин дышит";
    }

    public function swim() 
    {
        echo "Дельфин плывет";
    }

    public function eat() 
    {
        echo "Дельфин ест";
    }
}

/**
 * Class Jellyfis Медуза
 */
class Jellyfis
{
    public $age;
    public $dorsal;

    public function breathe() 
    {
        echo "Медуза дышит";
    }

    public function breatheUnderWater() 
    {
        echo "Медуза дышит под водой";
    }

    public function swim() 
    {
        echo "Медуза плывет";
    }

    public function eat() 
    {
        echo "Медуза ест";
    }
}

/*---------------------------------------------------------------------------*/
function breathe($it) 
{
    $it->breathe();
}

function breatheUnderWater($it) 
{
    $it->breatheUnderWater();
}

function eat($it) 
{
    $it->eat();
}

function swim($it) 
{
    $it->swim();
}

function run($it) 
{
    $it->run();
}

function fly($it) 
{
    $it->fly();
}
/*---------------------------------------------------------------------------*/









