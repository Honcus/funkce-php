<?php


class classHonek {
    

public static function strtupperHonek($data){  //mění malá pismena na velká
    
    return strtoupper($data);
    
}
    
public static function strchrHonek($data,$oddelovace){  //vyhledá první znak
    
    return strchr($data,$oddelovace);
    
}

public static function strposHonek($data,$pozice){  //vyhledá pozici znaku
    
    return strpos($data,$pozice);
}


public static function strtolowerHonek($data){  //vypíše větu malými písmeny
    
    return strtolower($data);
    
}
    
public static function substr_replaceHonek($data,$data2,$data3){  //nahradí část řetezce jiným
    
    return substr_replace($data,$data2,$data3);
    
    
    
    
    
    
 }  
    
}