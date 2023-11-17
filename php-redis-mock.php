<?php
/*
A simple PHP Redis Mock with very basic functionality.
*/
class Redis{
    private $redis_data_dir='./redisdata/';
    public function __construct(){}

    public function set($k,$v){
        file_put_contents($this->redis_data_dir.'redis_'.$k.'.txt',$v);
    }

    public function get($k){
        return file_get_contents($this->redis_data_dir.'redis_'.$k.'.txt');
    }
}
?>
