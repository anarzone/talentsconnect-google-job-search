<?php

namespace TalentsConnect\GoogleJobSearch;

class JobSearchArrayCreator extends JobSearchCreator
{
    private $content;

    /**
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    public function getJobSearch(): JobSearchConverter
    {
        return new JobSearchArrayConverter($this->content);
    }
}