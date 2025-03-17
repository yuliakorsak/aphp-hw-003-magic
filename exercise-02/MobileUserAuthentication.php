<?php
trait MobileUserAuthentication
{
    private string $mobLogin = 'mobile_Login';
    private string $mobPassword = '1234';

    public function authenticate(string $login, string $password)
    {
        if ($login === $this->mobLogin && $password === $this->mobPassword) {
            echo "Пользователь мобильного приложения авторизован" . PHP_EOL;
            return true;
        }
        return false;
    }
}
