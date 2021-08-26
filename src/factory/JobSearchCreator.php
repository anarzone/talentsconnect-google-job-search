<?php

namespace TalentsConnect\GoogleJobSearch;

abstract class JobSearchCreator
{
    abstract public function getJobSearch(): JobSearchConverter;

//    public function make(){
//        $converter = $this->getJobSearch();
//        $converter->convert();
//    }
}