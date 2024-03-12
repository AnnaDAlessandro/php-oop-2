
<?php
require_once __DIR__ . "/Products.php";

class Food extends Products {
    protected $calories;

    public function __construct($_name, $_price, $_image, $_is_available, $_quantity, Category $_category) {
        parent::__construct($_name, $_price, $_image, $_is_available, $_quantity, $_category);
    }

    public function setCalories($_calories) {
        $this->calories = $_calories;
    }

    public function getCalories() {
        return $this->calories;
    }
}
?>

