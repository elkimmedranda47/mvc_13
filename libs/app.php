<?php 

require_once 'Controller/Erro.php';

class App{
    
       

        function __construct()
        {
          /* // echo "<p>Nueva App</p>";
            $url = $_GET['url'];
      
            $url = rtrim($url,'/');
            $url = explode('/',$url);
            //var_dump($url);
            $archivoControlador = 'Controller/'.$url[0] . '.php';
            
            if (file_exists($archivoControlador)) {
                require_once $archivoControlador;
                $controller = new $url[0];
                if (isset($url[1])) {
                    $controller->{$url[1]}();  
                }
    
            }else {
              
             $controller = new Erro();
            }*/
           
            $url = $_GET['url'];
      
            $url = rtrim($url,'/');
            $url = explode('/',$url);
            //var_dump($url);
            $archivoControlador = 'Controller/'.$url[0] . '.php';
            
            if(file_exists($archivoControlador))
            {
                require_once $archivoControlador;
                $controller = new $url[0];
             //   $controller->loadeModel($url[0]); 

                //# Elementos del arreglo
                //echo  $nparm =sizeof($url);
             $nparmetro =sizeof($url);
          
               if ($nparmetro > 1)
               {
                   if ($nparmetro > 2)
                   {
                           $param = [];
                           for ($i=2; $i <$nparmetro ; $i++) { 
                               array_push($param, $url[$i]);
                           }
                           $controller->{$url[1]}($param);  
                   
                   } else { $controller->{$url[1]}();}
                   
               } else {// $controller->render()  ;
             }
               


               
                
            }else{$controller = new Erro();
            }


        }

   

/*
        public function inicio(){
              $url = $_GET['url'];
      
            $url = rtrim($url,'/');
            
            $url = explode('/',$url);
            //$url = (insset($_GET['url'])) ? $_GET['url'] :  null ;
            
                //echo $url[0];
                if(empty($url[0]))
                {
                     $archivoControlador = 'controlador/login.php';
                      require_once $archivoControlador;
                      $controller = new Login();
                      $controller->loadeModel('login');
                      $controller->render();
                      return false;    
                }

               
            $archivoControlador = 'controlador/'.$url[0] . '.php';
             if(file_exists($archivoControlador))
             {
                 require_once $archivoControlador;
                 $controller = new $url[0];
                 $controller->loadeModel($url[0]); 

                 //# Elementos del arreglo
                 //echo  $nparm =sizeof($url);
                  $nparmetro =sizeof($url);
                if ($nparmetro > 1)
                {
                    if ($nparmetro > 2)
                    {
                            $param = [];
                            for ($i=2; $i <$nparmetro ; $i++) { 
                                array_push($param, $url[$i]);
                            }
                            $controller->{$url[1]}($param);  
                    
                    } else { $controller->{$url[1]}();}
                    
                } else { $controller->render()  ; }
                


                
                 
             }else{$controller = new Erro();}
        }

        */
}