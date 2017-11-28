<?php 

namespace Entity {
    // Je suis dans le namespace entity
    
    class User {
        private $name;
        
        public function __construct($name){
            $this->name = $name;
        }
    }
}

// je suis dans le namespace global

$user = new \Entity\User('joe');

namespace Entity {
    class Comment {
        
    }
}

$comment = new \Entity\Comment();

namespace DAO {
    class User {
        
    }
}

$userDao = new \DAO\User();

namespace DAO\Utils {
    class Tool {
        
    }
}

$tool = new \DAO\Utils\Tool();
