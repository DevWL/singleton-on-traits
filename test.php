<?php

include "DBSIngleton.php";
include "ConfSingleton.php";

DBSIngleton::getInstance();
ConfSingleton::getInstance();
// DevConfSingleton::getInstance(); // error

DBSIngleton::getInstance();
ConfSingleton::getInstance();
// DevConfSingleton::getInstance(); // error