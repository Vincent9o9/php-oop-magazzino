<?php
require_once 'classes/Notebook.php';

class Notebook2 extends Notebook {
    public $marca;
    public $ssd;

    public function __contruct($_display, $_ram, $_hardDisk, $_marca, $_ssd) {
        parent:: __contruct($_display, $_ram, $_hardDisk);
            $this->marca = $_marca;
            $this->ssd = $_ssd;


    }
}
?>
