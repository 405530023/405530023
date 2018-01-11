<?php
$data = array( array("title"=>"Volvo", "price"=>22 , "number"=>18),
               array("title"=>"BMW", "price"=>15 , "number"=>13),
               array("title"=>"Saad", "price"=>5 , "number"=>2), 
               array("title"=>"Land Rover", "price"=>17 , "number"=>15)
             ); 
?>
<table border=1>
      <thead>
        <tr><th>title</th><th>price<th>number</th></tr>
      </thead>
      <tbody>
<?php
  foreach ($data as $row) {
    echo '<tr>';
    foreach ($row as $item) {
      echo "<td>{$item}</td>";
    }
    echo '</tr>';
  }



?>
      </tbody>
    </table>