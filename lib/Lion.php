<?php

class Lion extends Animals {
    
    public function __construct($view, $breed, $age) {
        parent::__construct($view, $breed, $age);
    }
    
    public function voice() {
        echo '<p>RRRRRRRRRRRRRRRRRRRRRR</p>';
    }
}
