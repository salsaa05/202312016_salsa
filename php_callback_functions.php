<!DOCTYPE html>
<html>
<body>

<?php
function my_callback($item) {
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

</body>
</html>
