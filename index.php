<?php
  $array = ['X','','O','','','X','','',''];

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <table>
      <tr>
        <?php
          for ($i=0;$i<=8;$i++) {
            echo '<td>'.$array[$i].'</td>';

            if ($i == 2 || $i == 5) {
              echo '</tr><tr>';
            }
          }
        ?>
      </tr>
    </table>
  </body>
</html>
