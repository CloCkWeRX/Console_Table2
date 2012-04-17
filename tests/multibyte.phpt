--TEST--
Multibyte strings
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table2.php')) {
    require_once dirname(__FILE__) . '/../Table2.php';
} else {
    require_once 'Console/Table2.php';
}

$table = new Console_Table2();
$table->setHeaders(array('Schön', 'Häßlich'));
$table->addData(array(array('Ich', 'Du'), array('Ä', 'Ü')));
echo $table->getTable();

?>
--EXPECT--
+-------+---------+
| Schön | Häßlich |
+-------+---------+
| Ich   | Du      |
| Ä     | Ü       |
+-------+---------+
