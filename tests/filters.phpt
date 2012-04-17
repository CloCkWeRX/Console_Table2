--TEST--
Callback filters
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table2.php')) {
    require_once dirname(__FILE__) . '/../Table2.php';
} else {
    require_once 'Console/Table2.php';
}

$data = array(
    array('one', 'two'),
    array('three', 'four'),
    Console_Table2::HORIZONTAL_RULE,
    array('five', 'six'),
    array('seven', 'eight'),
);
$filter = 'strtoupper';

$table = new Console_Table2();
$table->setHeaders(array('foo', 'bar'));
$table->addData($data);
$table->addFilter(0, $filter);

echo $table->getTable();

?>
--EXPECT--
+-------+-------+
| foo   | bar   |
+-------+-------+
| ONE   | two   |
| THREE | four  |
+-------+-------+
| FIVE  | six   |
| SEVEN | eight |
+-------+-------+
