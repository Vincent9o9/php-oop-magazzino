<?php
class Notebook {
    public $display;
    protected $processore;
    public $ram;
    protected $schedaGrafica;
    public $hardDisk;
    public $prezzo;
    public function __construct($_display, $_ram, $_hardDisk) {
        $this->display = $_display;
        $this->ram = $_ram;
        $this->hardDisk = $_hardDisk;
    }
    public function setProcessore($_processore) {
        if (empty($_processore)) {
            die("Non hai indicato il Processore");
        }
        $this->processore = $_processore;
    }
    public function getProcessore($_processore) {
        return $this->processore;
    }
    public function setGpu($_schedaGrafica) {
        if (empty($_schedaGrafica)) {
            die("Non hai indicato il Processore");
        }
        $this->schedaGrafica = $_schedaGrafica;
    }
    public function getGpu($_schedaGrafica) {
        return $this->schedaGrafica;
    }

    public function CalcoloPrezzo() {
        if (epmty($this->prezzo)) {
            die("Non hai inserito il prezzo");
        }
        return $this->prezzo;
    }
}
?>
