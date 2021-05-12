<?php
    class LivroValidate {
        public static function testarAnoLancamento($paramAnoLancamento) {
            $anoAtual = date('Y');
            return $paramAnoLancamento <= $anoAtual;
        }

        public static function testarPreco($paramPreco) {
            return $paramPreco > 0;
        }
    }
?>