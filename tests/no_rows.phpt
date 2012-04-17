--TEST--
Table without data
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table2.php')) {
    require_once dirname(__FILE__) . '/../Table2.php';
} else {
    require_once 'Console/Table2.php';
}

$table = new Console_Table2();
$table->setHeaders(array('foo', 'bar'));
echo $table->getTable();

$table = new Console_Table2();
echo $table->getTable();

?>
--EXPECT--
+-----+-----+
| foo | bar |
+-----+-----+
|     |     |
+-----+-----+
