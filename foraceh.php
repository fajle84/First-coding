<?php
$array = [
    'Name'=>'Zakaria',
    'Age' =>'22',
    'Home'=>'Pabna',
    'ad'=>[
        'dis'=>'pabna',
        'tha'=> 'van',
        'edu'=>[
            'in'=>'pat',
            'tec'=>'com',
            'nati'=>'BD',
            'local' => [
    'Name'=>'Zakaria',
    'Age' =>'22',
    'Home'=>'Pabna'
],
        ],
    ],


];
 function it_array($array)
 {
     foreach ($array as $key => $value)
     {
         if(is_array($value))
         {
           it_array($value);
         }
         else
         {
             echo $key.':'.$value.'<br/>';
         }
     }

 }

  foreach ($array as $key => $value)
  {
      if (is_array($value))
      {
        it_array($value);
      }
      else{
          echo $key.':'.$value.'<br/>';
      }
  }


