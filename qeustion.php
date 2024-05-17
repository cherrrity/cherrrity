<?php
exec("ls /etc -al", $output);

while(list($key, $val) = each($output)) {
echo $key . "=". "$val". "
";
}
?>
