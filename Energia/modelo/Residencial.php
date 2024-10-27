<?php
    
    require_once("IConsumidorEnergia.php");
    
    class Residencial implements IConsumidorEnergia
    {
        
        // Atributos
        
        private float $consumo = 0;
        private float $valorTaxa = 1.05;
        private float $gasto = 0;
        
        // Métodos
        
        function getValorFatura($consumo)
        {
            
            $this->consumo += $consumo;
            $this->gasto = $this->valorTaxa * $consumo;
            
            return $this->gasto;
            
        }
    }
?>