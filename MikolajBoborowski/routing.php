<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('register', 'UserControllers');
Utils::addRoute('login', 'UserControllers');
Utils::addRoute('logout', 'UserControllers');
Utils::addRoute('transactions', 'TransactionControllers');
Utils::addRoute('sorting', 'SortingControllers');
Utils::addRoute('budgetAnalysis', 'BudgetAnalysisController');
Utils::addRoute('goals', 'GoalsController');
Utils::addRoute('adminPanel', 'AdminController');
Utils::addRoute('promoteToAdmin', 'AdminController');
