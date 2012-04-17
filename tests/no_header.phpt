--TEST--
Table without header
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table2.php')) {
    require_once dirname(__FILE__) . '/../Table2.php';
} else {
    require_once 'Console/Table2.php';
}

$table = new Console_Table2();
$table->addData(array(array('foo', 'bar')));

echo $table->getTable();

?>
--EXPECT--
+-----+-----+
| foo | bar |
+-----+-----+
