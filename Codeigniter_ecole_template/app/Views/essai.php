<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php var_dump($eleve); ?>
<table>
                  <thead>

<tr>
  <th>Prenom</th>
  <th>Nom</th>
  <th>Email</th>
  <th>Cni</th>
  

</tr>

</thead>

<tbody>
<?php

if(isset($eleve)){
  $i=1;
  foreach($eleve as $key => $elevent){?>
    <tr>
      <td><?php echo $elevent['prenom'] ?></td>
      <td><?php echo $elevent['nom'] ?></td>
      
      <td><?php echo $elevent['email'] ?></td>
      <td><?php echo $elevent['cni'] ?></td>
    </tr>

  <?php
                          }

                        }

                        

                      ?>
</tbody>
                  </table>
</body>
</html>