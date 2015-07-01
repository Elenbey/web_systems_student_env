<?php
class Router{

    private static $routes = array();

    private function __construct(){}

    public static function get($template,$callback){
    self::set('GET',$template,$callback);
    }

    public static function post($pattern,$callback){
    self::set('POST',$template,$callback);
    }

    public static function set($method,$template,$callback){
        if(function_exists($callback) == 0){
        echo "Method $callback not exists";
    }
    self::$routes[$method][$template] = $callback;
    
    }
    
    public static function process($method,$uri){
    $exists_method = array('GET','POST');
    if(!in_array($method,$exists_method))
        echo "Request method should be GET or POST";
    
    $used_method = self::$routes[$method];
        
        foreach($used_method as $template => $callback){
        
            if(preg_match_all("/$template/i",$uri,$matches)){
                    $callback();
                        break;
            
            }
            $matches=array();
        }
    }
}
?>