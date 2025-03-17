<?php
require_once('AppUserAuthentication.php');
require_once('MobileUserAuthentication.php');

class User
{
    use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as authenticateMobile;
    }

    private string $login;
    private string $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function check()
    {
        $success = self::authenticate($this->login, $this->password);
        if (!$success) {
            $success = self::authenticateMobile($this->login, $this->password);
            if (!$success) {
                echo 'Неверный логин или пароль' . PHP_EOL;
            }
        }
    }
}

$users = [
    new User('mobile_Login', '1234'),
    new User('app_Login', '1234'),
    new User('random', 'args')
];

foreach ($users as $user) {
    $user->check();
}
