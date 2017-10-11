<?php


  //arquivo com função para manipulação dos dados de professores


          function buscaProfessor($codigo){
           
              $professor = array();

              $dados = file("dados/professores.csv");
              
          
                   foreach ($dados as $linha) {
                   	$colunas = explode(",", $linha);
          	
          	              if ($colunas[0] == $codigo) {
          	                   $professor['siape'] = $colunas[0];
          	                   $professor['nome'] = $colunas[1];
          	                   $professor['email'] = $colunas[2];
          	                   $professor['foto'] = $colunas[3];
          	               }
                      }

                  return $professor;
            }


            function listaProfessores(){

            	$professores = array();

            	$dados = file("dados/professores.csv");
              
          
                   foreach ($dados as $linha) {
                   	$colunas = explode(",", $linha);
                       $professor = array();
                       $professor['siape'] = $colunas[0];
          	           $professor['nome'] = $colunas[1];
          	           $professor['email'] = $colunas[2];
          	           $professor['foto'] = $colunas[3];
          	           
                   	$professores[] = $colunas;
          	        }


            	return $professores;
                    }


            //texte
            $lista = listaProfessores();
             print_r($lista);
