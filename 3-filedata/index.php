<!-- ファイルのデータの読み書き -->
<?php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
  echo 'writable!!';
} else {
  echo 'not writable!';
  exit;
}
echo '<br>';

?>