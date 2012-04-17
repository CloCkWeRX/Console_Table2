--TEST--
Header and data as associative arrays.
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table2.php')) {
    require_once dirname(__FILE__) . '/../Table2.php';
} else {
    require_once 'Console/Table2.php';
}

$headers = array(
    'one' => 'foo',
    'two' => 'bar'
);

$data = array(
    array(
        'x' => 'baz',
    )
);

$table = new Console_Table2();
$table->setHeaders($headers);
$table->addData($data);

echo $table->getTable();

?>
--EXPECT--
+-----+-----+
| foo | bar |
+-----+-----+
| baz |     |
+-----+-----+
