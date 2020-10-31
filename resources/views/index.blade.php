<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-widht, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </head>
  <body>
       <div class="container">
       <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Arti Surah</th>
      <th scope="col">Asma</th>
      <th scope="col">Jumlah Ayat</th>
      <th scope="col">Nama Surah</th>
      <th scope="col">Tipe</th>
      
    </tr>
  </thead>
  <tbody>

  <?php 

foreach ($data as $dataa):
?>

<tr>
      <td><?=$dataa['arti']?></td>
      <td><?=$dataa['asma']?></td>
      <td><?=$dataa['ayat']?></td>
      <td><?=$dataa['nama']?></td>
      <td><?=$dataa['type']?></td>

</tr>

<?php 
endforeach 
?>
  </tbody>
</table>
       </div>
  </body>
  </html>    