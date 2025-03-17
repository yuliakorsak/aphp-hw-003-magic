<?php
trait AppUserAuthentication
{
    private string $appLogin = 'app_Login';
    private string $appPassword = '1234';

    public function authenticate(string $login, string $password): bool
    {
        if ($login === $this->appLogin && $password === $this->appPassword) {
            echo 'Пользователь приложения авторизован' . PHP_EOL;
            return true;
        }
        return false;
    }
}
