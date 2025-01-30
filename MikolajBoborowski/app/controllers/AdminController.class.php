<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * Kontroler dla funkcjonalności administratora
 */
class AdminController {
    public function action_adminUsers() {
        // Pobierz listę użytkowników
        $users = App::getDB()->select('uzytkownicy', ['id', 'email', 'data_utworzenia']);

        App::getSmarty()->assign('users', $users);
        App::getSmarty()->display('admin_users.tpl');
    }

    public function action_adminCategories() {
        // Pobierz kategorie
        $categories = App::getDB()->select('kategorie', ['id', 'nazwa', 'uzytkownik_id']);

        App::getSmarty()->assign('categories', $categories);
        App::getSmarty()->display('admin_categories.tpl');
    }

    public function action_deleteUser() {
        $userId = intval($_POST['user_id'] ?? 0);

        if ($userId > 0) {
            App::getDB()->delete('uzytkownicy', ['id' => $userId]);
            App::getMessages()->addMessage(new Message("Użytkownik został usunięty.", Message::INFO));
        } else {
            App::getMessages()->addMessage(new Message("Nieprawidłowe ID użytkownika.", Message::ERROR));
        }

        App::getRouter()->redirectTo('adminUsers');
    }

    public function action_deleteCategory() {
        $categoryId = intval($_POST['category_id'] ?? 0);

        if ($categoryId > 0) {
            App::getDB()->delete('kategorie', ['id' => $categoryId]);
            App::getMessages()->addMessage(new Message("Kategoria została usunięta.", Message::INFO));
        } else {
            App::getMessages()->addMessage(new Message("Nieprawidłowe ID kategorii.", Message::ERROR));
        }

        App::getRouter()->redirectTo('adminCategories');
    }
}
