<?php
    class Caderno {
            //Atributos
        var $tipo;
        var $cor;
        var $nfolhas;
        var $aberto;
        //metodos
        function folhear() {
            if($this->aberto == true){
                echo "<p>É possivel folhear o caderno!</p>";
            } else{
                echo "<p>Não é possivel folhear, estou fechando!!</p>";
            }
        }

        function abrir() {
            $this->aberto = true;
        }

        function fechar(){
           $this->aberto = false;
        }
    }

?>