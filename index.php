<?php 

$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    [
      'oscura',
      'era',
      89,
      [
        'mezzo',
        'E'
      ],
      'ritrovai',
      'per'
    ],
    'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
      'Virgilio',
      'Favore',
      'favore',
      ['fortuna']
    ],
    'fine' => '!'
  ];
  
  
  $mezzo = $words1[6][3][0]; // 'mezzo'
  $mi = $words1[4]; //'mi'
  $oscura = $words1[6][0]; // 'oscura'
  $diritta = $words1[8]; // 'diritta'
  $ritrovai = $words1[6][4]; // 'ritrovai'
  $per = $words1[6][5]; // 'per'
  
  $results = "Nel " . $mezzo . " di cammin di nostra vita " . $mi . " " . $ritrovai . " " . $per . " una selva " . $oscura . ", che' la " . $diritta . " via era smarrita.";
  
   echo ($results);












?>
