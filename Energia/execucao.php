<?php
    
    require_once("modelo/Residencial.php");
    require_once("modelo/Comercial.php");
    require_once("modelo/Industrial.php");
    
    while(true)
    {
        
        print("╔══════╣  Escolha  ╠══════╗\n");
        print("║      1 Residencial      ║\n");
        print("║       2 Comercial       ║\n");
        print("║       3 Industrial      ║\n");
        print("║          0 Sair         ║\n");
        print("╚═════════════════════════╝\n");
        $opcao = readline("");
        system("clear");
        
        switch ($opcao)
        {
            
            case 1:
                
                $residencial = new Residencial;
                
                print("Seu consumo foi de: " . $residencial->getValorFatura(readline("Qual foi seu consumo mensal? ")) . " reais!");
                $opcao = readline("");
                system("clear");
                
            break;
            
            case 2:
                
                $comercial = new Comercial;
                
                print("Seu consumo foi de: " . $comercial->getValorFatura(readline("Qual foi seu consumo mensal? ")) . " reais!");
                $opcao = readline("");
                system("clear");
                
            break;
            
            case 3:
                
                $industrial = new Industrial;
                
                print("Seu consumo foi de: " . $industrial->getValorFatura(readline("Qual foi seu consumo mensal? ")) . " reais!");
                $opcao = readline("");
                system("clear");
                
            break;
            
            case 0:
                
                system("clear");
                
            return false;
            
            default:
                
                print("Valor não encontrado!");
                $opcao = readline("");
                system("clear");
                
            break;
        }
    }