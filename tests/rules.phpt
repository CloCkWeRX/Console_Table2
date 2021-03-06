--TEST--
Horizontal rules
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table2.php')) {
    require_once dirname(__FILE__) . '/../Table2.php';
} else {
    require_once 'Console/Table2.php';
}

$data = array(
    array('one', 'two'),
    Console_Table2::HORIZONTAL_RULE,
    array('three', 'four'),
    Console_Table2::HORIZONTAL_RULE,
    Console_Table2::HORIZONTAL_RULE,
    array('five', 'six'),
    array('seven', 'eight'),
);

$table = new Console_Table2();
$table->setHeaders(array('foo', 'bar'));
$table->addData($data);
$table->addSeparator();
echo $table->getTable();
echo "=========================\n";

$table = new Console_Table2(Console_Table2::ALIGN_LEFT, '');
$table->setHeaders(array('foo', 'bar'));
$table->addData($data);
$table->addSeparator();
echo $table->getTable();
echo "=========================\n";

$table = new Console_Table2(Console_Table2::ALIGN_LEFT, '#', 0);
$table->setHeaders(array('foo', 'bar'));
$table->addData($data);
$table->addSeparator();
echo $table->getTable();

?>
--EXPECT--
+-------+-------+
| foo   | bar   |
+-------+-------+
| one   | two   |
+-------+-------+
| three | four  |
+-------+-------+
+-------+-------+
| five  | six   |
| seven | eight |
+-------+-------+
+-------+-------+
=========================
 foo    bar   
 one    two   
 three  four  
 five   six   
 seven  eight 
=========================
#############
#foo  #bar  #
#############
#one  #two  #
#############
#three#four #
#############
#############
#five #six  #
#seven#eight#
#############
#############
