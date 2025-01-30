<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
class UserControllers {
    
    public function action_register() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                App::getMessages()->addMessage(new Message('Podano nieprawidłowy adres email.', Message::ERROR));
            } elseif ($password !== $confirmPassword) {
                App::getMessages()->addMessage(new Message('Hasła się nie zgadzają.', Message::ERROR));
            } elseif (strlen($password) < 6) {
                App::getMessages()->addMessage(new Message('Hasło musi mieć co najmniej 6 znaków.', Message::ERROR));
            } else {
                $existingUser = App::getDB()->get('uzytkownicy', '*', ['email' => $email]);
                if ($existingUser) {
                    App::getMessages()->addMessage(new Message('Użytkownik z podanym emailem już istnieje.', Message::ERROR));
                } else {
                    App::getDB()->insert('uzytkownicy', [
                        'email' => $email,
                        'haslo' => password_hash($password, PASSWORD_BCRYPT),
                        'data_utworzenia' => date('Y-m-d H:i:s')
                    ]);
                    App::getMessages()->addMessage(new Message('Rejestracja zakończona sukcesem. Możesz się zalogować.', Message::INFO));
                }
            }
        }

        App::getSmarty()->assign("email", $email);
        App::getSmarty()->display("register.tpl");
    }



     public function action_login() {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Pobieranie użytkownika z bazy danych
        $user = App::getDB()->get('uzytkownicy', '*', ['email' => $email]);

        if (!$user) {
            App::getMessages()->addMessage(new \core\Message('Nieprawidłowy email lub hasło.', \core\Message::ERROR));
        } elseif (!password_verify($password, $user['haslo'])) {
            App::getMessages()->addMessage(new \core\Message('Nieprawidłowy email lub hasło.', \core\Message::ERROR));
        } else {
            // Logowanie zakończone sukcesem
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email']
            ];
            App::getMessages()->addMessage(new \core\Message('Zalogowano pomyślnie.', \core\Message::INFO));
            App::getRouter()->redirectTo('home'); // Przekierowanie na stronę główną
        }
    }

    App::getSmarty()->assign("email", $email);
    App::getSmarty()->display("login.tpl");
}
public function action_logout() {
    session_start(); // Upewnij się, że sesja jest zainicjalizowana
    session_destroy(); // Usunięcie sesji
    App::getMessages()->addMessage(new \core\Message('Wylogowano pomyślnie.', \core\Message::INFO));
    App::getRouter()->redirectTo('home'); // Przekierowanie na stronę główną
}
}

