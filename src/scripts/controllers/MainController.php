<?php
/*
 * @link      https://github.com/bit55/litero
 * @copyright Copyright (c) 2017 Eugene Dementyev.
 * @license   https://opensource.org/licenses/BSD-3-Clause
 */
namespace Bit55\Litero;

class MainController {
    public static function page_404() {
        $page = '404';
        require_once './baseTemplate.php';
    }

    public static function base() {
        $page = 'base';
        require_once './baseTemplate.php';
    }

    public static function anticafe() {
        $jsonData = 'pages/anticafe/anticafe';
        $uri = '/anticafe';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function coworking() {
        $jsonData = 'pages/coworking/coworking';
        $uri = '/coworking';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function company() {
        $jsonData = 'pages/company/company';
        $uri = '/company';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function events() {
        $jsonData = 'pages/events/events';
        $uri = '/events';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function happy_birthday() {
        $jsonData = 'pages/events/happy_birthday/happy_birthday';
        $uri = '/events/happy-birthday';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function happy_birthday_programs() {
        $jsonData = 'pages/events/happy_birthday/programs/programs';
        $uri = '/events/happy-birthday/programs';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function happy_birthday_program($any) {
        $arr = explode('/', $any);
        $uri = '/events/happy-birthday/programs/' . $any;

        if (isset($arr[1])) {
            $jsonData = 'pages/events/happy_birthday/programs/' . $any;
        } else {
            $jsonData = 'pages/events/happy_birthday/programs/' . $any. '/' . $any;
        }

        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function afisha() {
        $jsonData = 'pages/afisha/afisha';
        $uri = '/afisha';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function afishaPages($any) {
        $arr = explode('/', $any);
        $uri = '/afisha/' . $any;

        if (isset($arr[1])) {
            $jsonData = 'pages/afisha/' . $any;
        } else {
            $jsonData = 'pages/afisha/' . $any. '/' . $any;
        }

        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function rent() {
        $jsonData = 'pages/rent/rent';
        $uri = '/rent';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function rent_rooms($any) {
        $arr = explode('/', $any);
        $uri = '/rent/' . $any;


        if (isset($arr[1])) {
            $jsonData = 'pages/rent/' . $any;
        } else {
            $jsonData = 'pages/rent/' . $any. '/' . $any;
        }

        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }


    public static function info() {
        $jsonData = 'pages/info/info';
        $uri = '/info';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }
    
    public static function infoContacts() {
        $jsonData = 'pages/info/contacts/contacts';
        $uri = '/info/contacts';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }

    public static function infoVisitRools() {
        $jsonData = 'pages/info/visit_rools/visit_rools';
        $uri = '/info/visit-rools';
        
        if (file_exists('admin/'.$jsonData.'.json')) {
            require_once './baseTemplate.php';
        } else {
            MainController::page_404();
        }
    }
}

?>