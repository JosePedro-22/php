<?php
$array = [
    "name" => "Jose Pedro",
    "age" => 26,
    "company" => "ATI",
    "color" => "blue",
    "profession" => "Desenvolvedor",

];

?>

<table border="1">
  <tr>
    <?php foreach($array as $key => $valor): ?>
        <th><?php echo $key; ?></th>
      
    <?php endforeach; ?>
  </tr>
  <tr>
    <?php foreach($array as $key => $valor): ?>
        <td><?php echo $valor; ?></td>
      
    <?php endforeach; ?>
  </tr>
</table>