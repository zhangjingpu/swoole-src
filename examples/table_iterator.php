<?php
$table = new swoole_table(1024);
$table->column('name', swoole_table::TYPE_STRING, 64);
$table->column('id', swoole_table::TYPE_INT, 4);       //1,2,4,8
$table->column('num', swoole_table::TYPE_FLOAT);
$table->create();


$table->set('tianfenghan@qq.com', array('id' => 145, 'name' => 'rango', 'num' => 3.1415));
$table->set('350749960@qq.com', array('id' => 358, 'name' => "Rango1234", 'num' => 3.1415));
$table->set('hello@qq.com', array('id' => 189, 'name' => 'rango3', 'num' => 3.1415));

foreach($table as $value)
{
    var_dump($value);
}
echo "======================= Total Elements: {$table->count()} ============================\n";

$table->del('350749960@qq.com'); // delete a exist element
foreach($table as $value)
{
    var_dump($value);
}
echo "======================= Total Elements: {$table->count()} ============================\n";


$table->del('a invalid key'); // delete a invalid element
foreach($table as $value)
{
    var_dump($value);
}
echo "======================= Total Elements: {$table->count()} ============================\n";
