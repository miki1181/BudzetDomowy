<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class AdminController {
    public function action_adminPanel() {
        // Sprawdzenie uprawnień
        $userId = $_SESSION['user']['id'] ?? null;

        if (!$userId) {
            App::getMessages()->addMessage(new Message("Nie jesteś zalogowany.", Message::ERROR));
            App::getRouter()->redirectTo('login');
            return;
        }

        // Sprawdzenie, czy użytkownik ma rolę admina
        $roleId = App::getDB()->get('role_uzytkownikow', 'rola_id', ['uzytkownik_id' => $userId]);
        if ($roleId !== 1) {
            App::getMessages()->addMessage(new Message("Brak dostępu. Tylko administratorzy mają dostęp do tego panelu.", Message::ERROR));
            App::getRouter()->redirectTo('transactions');
            return;
        }

        // Obsługa formularza usuwania użytkownika
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user_id'])) {
            App::getDB()->delete('uzytkownicy', ['id' => $_POST['delete_user_id']]);
            App::getMessages()->addMessage(new Message("Użytkownik został usunięty.", Message::INFO));
        }

        // Pobranie listy użytkowników
        $users = App::getDB()->select('uzytkownicy', [
            "[>]role_uzytkownikow" => ["id" => "uzytkownik_id"],
            "[>]role" => ["role_uzytkownikow.rola_id" => "id"]
        ], [
            "uzytkownicy.id",
            "uzytkownicy.email",
            "role.nazwa_roli"
        ]);

        // Przekazanie danych do widoku
        App::getSmarty()->assign('users', $users);
        App::getSmarty()->display('adminPanel.tpl');
    }

public function action_promoteToAdmin() {
    // Start sesji
    session_start();

    // Sprawdzenie, czy użytkownik jest zalogowany
    if (!isset($_SESSION['user']['id'])) {
        App::getMessages()->addMessage(new Message("Nie jesteś zalogowany.", Message::ERROR));
        App::getRouter()->redirectTo('login');
        return;
    }

    // Sprawdzenie, czy użytkownik ma uprawnienia administratora
    $userId = $_SESSION['user']['id'];
    $roleId = App::getDB()->get('role_uzytkownikow', 'rola_id', ['uzytkownik_id' => $userId]);

    if ($roleId !== 1) {
        App::getMessages()->addMessage(new Message("Brak dostępu do tej akcji.", Message::ERROR));
        App::getRouter()->redirectTo('adminPanel');
        return;
    }

    // Sprawdzenie danych z formularza
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['promote_user_id'])) {
        $promoteUserId = intval($_POST['promote_user_id']);
        
        // Aktualizacja roli użytkownika w bazie danych
        $updateResult = App::getDB()->update('role_uzytkownikow', ['rola_id' => 1], ['uzytkownik_id' => $promoteUserId]);

        if ($updateResult->rowCount() > 0) {
            App::getMessages()->addMessage(new Message("Użytkownikowi nadano uprawnienia administratora.", Message::INFO));
        } else {
            App::getMessages()->addMessage(new Message("Nie udało się nadać uprawnień administratora.", Message::ERROR));
        }
    }

    // Przekierowanie z powrotem do panelu admina
    App::getRouter()->redirectTo('adminPanel');
}


}