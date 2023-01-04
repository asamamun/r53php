<?php
class Visitor
{
    private static $visitors = 0;
    function __construct()
    {
        self::$visitors++;
    }
    static function getVisitors()
    {
        return self::$visitors;
    }
}
new Visitor();
new Visitor();
new Visitor();
echo Visitor::getVisitors();
echo Visitor::getVisitors();
echo Visitor::getVisitors();
?>
