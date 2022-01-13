<?php 
class Landings{

    static function resumeProduct()
    {
        require_once "resumeProduct/ResumeProduct.class.php";
        return new ResumeProduct();
    }
}
?>