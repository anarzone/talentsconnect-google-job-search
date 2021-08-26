<?php

namespace TalentsConnect\GoogleJobSearch;

class TSJobSearch
{
    public static function fromArray($dataset): JobSearchConverter
    {
        return (new JobSearchArrayCreator($dataset))->getJobSearch();
    }

    public static function fromCsv($dataset): JobSearchConverter{
        return (new JobSearchArrayCreator($dataset))->getJobSearch();
    }
}