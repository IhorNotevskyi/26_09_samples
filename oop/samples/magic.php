<?php

class User
{
    private $name;

    private $email;

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            if (!property_exists($this, $key)) {
                continue;
            }

            $this->{$key} = $value;
        }
    }

    public function doSome()
    {
        echo "Hello {$this->name}<br>";
    }

    public function __destruct()
    {
        echo "User {$this->name} has been destroyed<br>";
    }
}

$user = [
    'name' => 'Vasiliy',
    'email' => 'vasya@test.com'
];
$userModel = new User($user);
$userModel->doSome();

echo '-----';
