<?php

namespace TalentsConnect\GoogleJobSearch;

class JobSearchArrayCreator extends JobSearchCreator
{
    private $dataset;

    /**
     * @param $content
     */
    public function __construct($dataset)
    {
        $this->dataset = $dataset;
    }

    public function getJobSearch(): JobSearchConverter
    {
        return new JobSearchArrayConverter($this->dataset);
    }
}