<?php

class User {
    public ?string $firstName;
    public ?string $lastName;
    public ?string $email;
    public ?string $password;

    public function __construct() {
        $this->firstName = null;
        $this->lastName = null;
        $this->email = null;
        $this->password = null;
    }

    public function register(): bool {
        
        error_log("User registered: {$this->firstName} {$this->lastName}, Email: {$this->email}");
        return true;
    }

    public function login(): bool {
       
        error_log("User logged in: Email: {$this->email}");
        return true;
    }
}
?>
