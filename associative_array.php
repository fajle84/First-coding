<?php
//define('NAME','valu');
//echo NAME;
//$vabiable;
//echo $variable;
//$vari=null;
//echo $vari
$student_ad = ['instutite'=>'<h4>PATUAKHALI POLYTECHNIC INSTUTITE</h4>',

   'nam'=>'Name: Fajle Rabbi',
   'class'=> 'class_roll: 1566219',
    'Se' => 'Session: 2015-2016',
    'SI' => 'Shift: 2<sup>nd</sup>',
    'BR' => 'Board Roll: 236184',
    'RN' => 'Regi.No: 149169',
    'Ad'=> '<b>ADDRESS:</b>',
    'Address' => [
         'FN' => 'Father Name: Chan Miah ',
          'VA' => 'Village: Mather Vita',
          'PS' => 'Post: Kalerpara',
           'TH' => 'Thana: Dhunat',
        'DS' => 'District: Bagura',
        'CON' => 'Contact No: 01776152014'
        ]

];

 echo $student_ad['instutite'];
echo $student_ad['nam'].'<br/>';
echo $student_ad['class'].'<br/>';
echo $student_ad['Se'].'<br/>';
echo $student_ad['SI'].'<br/>';
echo $student_ad['BR'].'<br/>';
echo $student_ad['RN'].'<br/>';
echo $student_ad['Ad'].'<br/>';
echo $student_ad['Address']['FN'].'<br/>';
echo $student_ad['Address']['VA'].'<br/>';
echo $student_ad['Address']['PS'].'<br/>';
echo $student_ad['Address']['TH'].'<br/>';
echo $student_ad['Address']['DS'].'<br/>';
echo $student_ad['Address']['CON'].'<br/>';




