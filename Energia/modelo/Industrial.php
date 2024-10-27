<?php
    
    require_once("IConsumidorEnergia.php");
    
    class Industrial implements IConsumidorEnergia
    {
        
        // Atributos
        
        private float $consumo = 0;
        private int $medidaAumentoTaxa = 500;
        private float $valorTaxaAbaixo = 1.80;
        private float $valorTaxaAcima = 2.30;
        private float $gasto = 0;
        
        // Métodos
        
        function getValorFatura($consumo)
        {
            
            $this->consumo += $consumo;
            
            if($this->consumo <= $this->medidaAumentoTaxa)
            {
                
                $this->gasto += $this->valorTaxaAbaixo * $consumo;
                
                return $this->gasto;
                
            }
            else
            {
                
                $this->gasto += $this->valorTaxaAbaixo * $this->medidaAumentoTaxa;
                
                $this->gasto +=$this->valorTaxaAcima * $this->consumo - $this->medidaAumentoTaxa;
                
                return $this->gasto;
                
            }
        }
    }
?>