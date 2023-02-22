
<?php

    $ns1 = ['id' => 1, 'nim' =>'01101', 'UTS' =>80, 'UAS' =>90, 'Tugas' => 100 ];
    $ns2 = ['id' => 2, 'nim' =>'01102', 'UTS' =>81, 'UAS' =>91, 'Tugas' => 89 ];
    $ns3 = ['id' => 3, 'nim' =>'01103', 'UTS' =>82, 'UAS' =>92, 'Tugas' => 97 ];
    $ns4 = ['id' => 4, 'nim' =>'01104', 'UTS' =>83, 'UAS' =>93, 'Tugas' => 96 ];
    $ns5 = ['id' => 5, 'nim' =>'01105', 'UTS' =>84, 'UAS' =>94, 'Tugas' => 104 ];
    $ns6 = ['id' => 6, 'nim' =>'01106', 'UTS' =>85, 'UAS' =>95, 'Tugas' => 105 ];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5, $ns6];


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Tugas</th>
      <th scope="col">Nilai Akhir</th>
    </tr>
  </thead>
  <tbody>
    <?php

    
    $nomor = 1;
    foreach($ar_nilai as $ns){
        
        $nilai_akhir = ($ns['UTS'] + $ns['UAS'] + $ns['Tugas'] )/3;

        

    ?>

    <tr>
        <td>  <?= $nomor ?>  </td>
        <td>  <?= $ns['nim'] ?>  </td>
        <td>  <?= $ns['UTS'] ?>  </td>
        <td>  <?= $ns['UAS'] ?>  </td>
        <td>  <?= $ns['Tugas'] ?>  </td>
        <td>  <?= number_format($nilai_akhir,2 ,',',',') ?>  </td>
    </tr>

    
    

    <?php
    $nomor++;
    }

    ?>
  </tbody>
</table>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>