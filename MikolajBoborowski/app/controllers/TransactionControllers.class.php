<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * Kontroler obsługujący transakcje
 */
class TransactionControllers {
    public function action_transactions() {
        // Obsługa dodawania i wyświetlania transakcji
        $userId = $_SESSION['user']['id'] ?? null;

        if (!$userId) {
            App::getMessages()->addMessage(new Message("Nie jesteś zalogowany.", Message::ERROR));
            App::getRouter()->redirectTo('login');
            return;
        }

        // Obsługa formularza
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $amount = floatval($_POST['amount'] ?? 0);
            $type = $_POST['type'] ?? '';
            $category = $_POST['category'] ?? '';
            $description = $_POST['description'] ?? '';
            $date = $_POST['date'] ?? date('Y-m-d');

            if ($amount <= 0) {
                App::getMessages()->addMessage(new Message("Kwota musi być większa od 0.", Message::ERROR));
            } elseif (empty($type) || ($type !== 'przychód' && $type !== 'wydatek')) {
                App::getMessages()->addMessage(new Message("Nieprawidłowy typ transakcji.", Message::ERROR));
            } else {
                App::getDB()->insert('transakcje', [
                    'uzytkownik_id' => $userId,
                    'kwota' => $amount,
                    'typ' => $type,
                    'kategoria' => $category,
                    'opis' => $description,
                    'data_transakcji' => $date,
                    'data_utworzenia' => date('Y-m-d H:i:s'),
                ]);
                App::getMessages()->addMessage(new Message("Transakcja została dodana.", Message::INFO));
            }
        }

        // Pobranie transakcji użytkownika
        $transactions = App::getDB()->select('transakcje', '*', [
            'uzytkownik_id' => $userId,
            'ORDER' => ['data_transakcji' => 'DESC']
        ]);

        // Przekazanie danych do widoku
        App::getSmarty()->assign('transactions', $transactions);
        App::getSmarty()->display('transactions.tpl');
    }
}
