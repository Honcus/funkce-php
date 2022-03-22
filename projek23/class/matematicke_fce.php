<?php


class matematicke_fce {
    
/**
 * //zaokrouhlení 
 * @param type $data4
 * @return type
 */ 
public static function roundHonek(float $data4) : float{  
    
    return round($data4,2);
    
}
/**
 * // vrátí nejbližší celé vyšší číslo než je číslo zadané v parametru
 * @param type $data4
 * @return type
 */    
public static function ceilHonek(float $data4) : float{  
    
    return ceil($data4);
    
}
/**
 * //nejbližší menší celé číslo, než je v parametru
 * @param type $data4
 * @return type
 */
public static function floorHonek(float $data4) : float{  
    
    return floor($data4);
}

/**
 * //vrátí druhou odmocninu zadaného čísla
 * @param type $data6
 * @return type
 */
public static function sqrtHonek(int $data6) : float{  
    
    return sqrt($data6);
    
}
 /**
  * //vrátí číslo vzniklé umocněním základu mocniny (první parametr) mocnitelem (druhý parametr).
  * @param type $data3
  * @param type $data5
  * @return type
  */   
public static function powHonek(int $data3,int $data5) : int{  
    
    return pow($data3,$data5);
}

/**
 * //vrátí sinus, cosinus a tangens zadaného úhlu.
 * @param type $data6
 * @return type
 */
public static function sinHonek(int $data6) : float{ 
    
    return sin($data6);
}

/**
 * //vrátí sinus, cosinus a tangens zadaného úhlu.
 * @param type $data6
 * @return type
 */
public static function cosHonek(int $data6) : float{  
    
    return cos($data6);
    
}

/**
 * //vrátí sinus, cosinus a tangens zadaného úhlu.
 * @param type $data6
 * @return type
 */
public static function tanHonek(int $data6) : float{  
    
    return tan($data6);
    
}

/**
 * //vrátí zbytek po dělení dvou čísel, které jsou parametrem funkce
 * @param type $data6
 * @param type $data5
 * @return type
 */
public static function fmodHonek(int $data6, int $data5) : float{  
    
    return fmod($data6,$data5);
    
}
/**
 * //absolutní hodnota zadaného čísla
 * @param type $data6
 * @return type
 */
public static function absHonek(int $data6) : int{  
    
    return abs($data6);
    
    
    
    
    
    
 }  
    
}