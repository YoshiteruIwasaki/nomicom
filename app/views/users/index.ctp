<h1>DBのデータの表示</h1>
<table>
<?php
for($i = 0; $i < count($data); $i++) {
$arr = $data[$i]['User'];
echo "<tr><td>{$arr['id']}</td>";
echo "<td>{$arr['name']}</td>";
}
?>
</table>