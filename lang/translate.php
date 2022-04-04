<?php
/**
*Description of Translator
*
* the Class function for translate to en <==> de

*$txtde ist eine arrayName for store tittle of en or de
*/

  class Translator
  {

    public static function translate($l)
    {
      if($l=='en'){
        $textde = array('SMENU1' => 'Home',
                        'SMENU2' => 'Carpet',
                        'SMENU3'=>'Hand Made',
                        'SMENU4' =>'Mashine Made',
                        'SMENU5' =>'About us',
                        'SMENU6' =>'Contact',
                        );
        return $textde ;
         // echo "deutsch- Menu";
      }

      if($l=='de'){
        $textsen = array( 'SMENU1' => 'Home',
                          'SMENU2' => 'Teppich',
                          'SMENU3'=>'Hand arbeiten',
                          'SMENU4' =>'Maschine arbeiten',
                          'SMENU5' =>'Über uns',
                          'SMENU6' =>'Kontakt',
                        );
                        // echo "english- Menu";
        return $textsen ;

      }

    }

}



 ?>
