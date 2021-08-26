<?php

namespace TalentsConnect\GoogleJobSearch;

class TSJobSearch
{
    public function fromArray($dataset): JobSearchConverter
    {
        return (new JobSearchArrayCreator($dataset))->getJobSearch();
    }

    public function fromCsv($dataset){
        return (new JobSearchArrayCreator($dataset))->getJobSearch();
    }
}