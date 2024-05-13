<?php

class Layout { 

    public function inc($arquivo){
        include $arquivo.".php";
    }

    public function pagina($pagina){
        $this->inc("cabecalho");
        $this->inc("navbar");
        $this->inc($pagina);
        $this->inc("rodape");
    }

}