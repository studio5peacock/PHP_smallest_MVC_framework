<?php

class Controller{
   public function Run()
   {

     $this->Analysis();
     
     
    
     
     
     $control=$_GET['con'];
     $action =$_GET['act'];
     
     
     $action =ucfirst($action);
     
    
     
     $controlFile=ROOT_PATH.'/controllers/'.$control.'.class.php';
     if(!file_exists($controlFile))
     {
        exit;
      }
      include($controlFile);
      $class = ucfirst($control);
      if(!class_exists($class))
      {
         exit;
      }
      $instance= new $class();
      if(!method_exists($instance,$action))
      {
          exit;
      }
      $instance->$action();
   }
   public function Analysis(){
   
        
      global $C;
      if($C['URL_MODE']==1){
         $control =$_GET['con'];
         $action  =$_GET['act'];
    
      }
      else if($C['URL_MODE']==2){
         if(isset($_SERVER['PATH_INFO']))
         {
           $path= trim($_SERVER['PATH_INFO'],'/');
           $paths= explode('/',$path);
           $control= array_shift($paths);
           $action=  array_shift($paths);
         }
      }
      
      
       
      if(empty($control))
      {
       $control=$C['DEFAULT'];
       $_GET['con']=$control;
      }
      if(empty($action))
      {
       $action=$C['DEFAULT_ACTION'];
       $_GET['act']=$action;
      }
      
   }
}
?>
