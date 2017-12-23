<?php
$file = fopen("ab.txt", "r");
$members = array();

while (!feof($file)) {
   $members[] = fgets($file);
}

fclose($file);

var_dump($members);
var_dump($members[0]);

<html>
<td><input type="text" size="50" value="<?php var_dump($members[0]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php echo var_dump($members[1]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php var_dump($members[2]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php echo var_dump($members[3]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php var_dump($members[4]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php echo var_dump($members[5]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php var_dump($members[6]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php echo var_dump($members[7]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php var_dump($members[8]);?>"/></td>
</html>
<html>
<td><input type="text" size="50" value="<?php echo var_dump($members[9]);?>"/></td>
</html>
?>
