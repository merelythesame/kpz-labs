<?php

namespace Singleton;

class Authenticator {
    private static $instance = null;
    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function authenticate($username, $password) {
        return $username === "admin" && $password === "password";
    }
}