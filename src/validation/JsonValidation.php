<?php

namespace TalentsConnect\GoogleJobSearch;

class JsonValidation
{
    private array $dataset;
    private array $keys;


    public function __construct($dataset)
    {
        $this->dataset = $dataset;
        $this->keys = include 'keys.php';
    }


    public function validate(){
        foreach ($this->dataset as $key => $data){
            if(!$this->hasKey($key)){
                throw new \Exception('Not valid data');
            }
        }

        return $this->dataset;
    }

    private function hasKey($key){
        return in_array($key, $this->keys);
    }
}