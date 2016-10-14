<?php
require_once "TraitsSingleton.php";

class ConfSingleton
{
    use TraitsSingleton;
}

// class DevConfSingleton extends ConfSingleton // you can not do this: DevConfSingleton::getInstance();
// {

// }
