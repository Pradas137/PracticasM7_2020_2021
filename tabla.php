<?php

echo <<<END
<!DOCTYPE html>
<meta charset="UTF-8" />
<title>\$_SERVER</title>
<style>
    table {
        border-collapse: collapse;
    }
    td {
        border: 1px solid #999;
        padding: 3px;
    }
</style>
<table>
END;
foreach ($_SERVER as $k => $v) {
    $key = htmlentities($k);
    $value = htmlentities($v);
    echo "\n\t<tr>\n\t\t<td>$key\n\t\t<td>$value\n";
}
echo "</table>";
?>