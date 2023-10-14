<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>project</title>

</head>

<body>
  <h1>Последние новости</h1>
  <?php
//phpinfo();
//$dbhost = env('DB_HOST');
//$dbuser = env('DB_USERNAME');
//$dbpassword = env('DB_PASSWORD');
//$dbname = env('DB_DATABASE');
//$dbport = env('DB_PORT');
$conn = pg_connect("host=localhost port=8888 dbname=Info_Portal user=postgres password=123");
if ($conn === false) {
  echo 'Connection failed';
  exit;
 }
$result = pg_query($conn, 'SELECT * FROM "Article" LIMIT 5');
 //echo 'Последние новости';
 while ($row = pg_fetch_row($result)) {
  echo '<br>'.$row[1]. ', '.$row[2]. ', '. $row[3].'<br>';
 }

 pg_close($conn);
?>
</body>

</html>
