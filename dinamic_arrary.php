<?php
$student_ad = ['instutite'=>'<h4>PATUAKHALI POLYTECHNIC INSTUTITE</h4>',

    'nam'=>'Name: Fajle Rabbi',
    'class'=> 'class_roll: 1566219',
    'Se' => 'Session: 2015-2016',
    'SI' => 'Shift: 2<sup>nd</sup>',
    'BR' => 'Board Roll: 236184',
    'RN' => 'Regi.No: 149169',
    'Address' => [
        'FN' => 'Father Name: Chan Miah ',
        'VA' => 'Village: Mather Vita',
        'PS' => 'Post: Kalerpara',
        'TH' => 'Thana: Dhunat',
        'DS' => 'District: Bagura',
        'CON' => 'Contact No: 01776152014',

      'local' => [
        'Name'=>'Zakaria',
    'Age' =>'22',
    'Home'=>'Pabna'
    ],
        ],

];
  function it_array($array)
  {
      foreach ($array as $key => $valu) {
          if (is_array($valu)) {
              it_array($valu);
          } else {
              echo $key . ':' . $valu . '<br/>';
          }
      }
  }

foreach($student_ad as $key => $valu)
{
    if(is_array($valu))
    {
      it_array($valu);
    }
    else{
        echo $key.':'.$valu.'<br/>';
    }

}
