<?php

trait TraitsSingleton{
    /**
     *  @desc Holds single instance of Singleton class
     */
    private static $instance;

    /**
     *  @desc Constructor is disabled. You can only create new object through ::getInstance() method.
     */
    final private function __construct(){
        echo "New ". __CLASS__ ." ". PHP_EOL; // TEST
        // disabled
    }

    /**
     * @return Singleton object
     * @desc check if instnace was already created:
     * if no instnace is set create one "new ClassName();" and assign it to "$instance"
     * if instance is set do not create another instance
     * returns $instance value
     */
    public static function getInstance(){
        $class = __CLASS__;
        if(!static::$instance instanceof $class){
            static::$instance = new self();
        }
        var_dump(static::$instance); // TEST
        return static::$instance;
    }
}