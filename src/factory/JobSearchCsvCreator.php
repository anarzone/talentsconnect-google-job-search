<?php

namespace TalentsConnect\GoogleJobSearch;

class JobSearchCsvCreator extends JobSearchCreator
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
        return new JobSearchCsvConverter($this->content);
    }
}