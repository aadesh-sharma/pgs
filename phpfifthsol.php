<?php
  

///////////////////////////////// Dependency injection

/*
Dependency injection is a procedure where one object supplies the dependencies of another object. Dependency Injection is a software design approach that allows avoiding hard-coding dependencies and makes it possible to change the dependencies both at runtime and compile time.


    The class User has implicit dependency on the specific database. All dependencies should always be explicit not implicit. This defeats Dependency inversion principle

    If we wanted to change database credentials, we need to edit the User class which is not good; every class should be completely modular or black box. If we need to operate further on it, we should actually use its public properties and methods instead of editing it again and again. This defeats Open/closed principle

    Let's assume right now class is using MySQL as database. What if we wanted to use some other type of database ? You will have to modify it.

    The User class does not necessarily need to know about database connection, it should be confined to its own functionality only. So writing database connection code in User class doesn't make it modular. This defeats the Single responsibility principle. Think of this analogy: A cat knows how to meow and a dog knows how to woof; you cannot mix them or expect dog to say meow. Just like real world, each object of a class should be responsible for its own specific task.
    It would become harder to write unit tests for the User class because we are instantiating the database class inside its constructor so it would be impossible to write unit tests for the User class without also testing the database class.


*/


class User 
{
    private $database = null;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getUsers() {
        return $this->database->getAll('users');
    }
}

$database = new Database('host', 'user', 'pass', 'dbname');
$user = new User($database);
$user->getUsers();

?>
