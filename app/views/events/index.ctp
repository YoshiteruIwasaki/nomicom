<h1>DBのデータの表示</h1>
<table>
<?php
for($i = 0; $i < count($data); $i++) {
$arr = $data[$i]['Event'];
$member = $data[$i]['EventUserMap'];
echo "<tr>";
echo "<td>{$arr['id']}</td>";
echo "<td>{$arr['date']}</td>";
echo "<td>{$arr['price']}</td>";
echo "<td>{$arr['memo']}</td>";
echo "<td>";
for($j = 0; $j < count($member); $j++) {
$user = $member[$j]['User'];
echo "{$user['name']},";
}
echo "</td>";
echo "</tr>";
}
?>
</table>