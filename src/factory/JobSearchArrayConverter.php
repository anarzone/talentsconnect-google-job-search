<?php

namespace TalentsConnect\GoogleJobSearch;


class JobSearchArrayConverter implements JobSearchConverter, \JsonSerializable
{
    private $dataset;
    private $jobSearchResult;

    public function __construct($dataset)
    {
        $this->dataset = $dataset;
    }

    public function convert()
    {
        try {
            $resultData = new JsonValidation($this->dataset);

            foreach ($resultData as $result){
                $this->jobSearchResult[]= [
                    '@context' => $result["@context"],
                    '@type' => $result['@type'],
                    'baseSalary' => $result['baseSalary'],
                    'jobBenefits' => $result['jobBenefits'],
                    'datePosted' => $result['datePosted'],
                    'description' => $result['description'],
                    'educationRequirements' => $result['educationRequirements'],
                    'employmentType' => $result['employmentType'],
                    'experienceRequirements' => $result['experienceRequirements'],
                    'incentiveCompensation' => $result['incentiveCompensation'],
                    'industry' => $result['experienceRequirements'],
                    'jobLocation' => [
                        '@type' => $result['experienceRequirements']['jobLocation']['@type'],
                        'address' => [
                            '@type' => $result['experienceRequirements']['jobLocation']['address']['@type'],
                            'addressLocality' => $result['experienceRequirements']['jobLocation']['address']['addressLocality'],
                            'addressRegion' => $result['experienceRequirements']['jobLocation']['address']['addressRegion'],
                        ],
                    ],
                    'occupationalCategory' => $result['occupationalCategory'],
                    'qualifications' => $result['qualifications'],
                    'responsibilities' => $result['responsibilities'],
                    'salaryCurrency' => $result['salaryCurrency'],
                    'skills' => $result['skills'],
                    'specialCommitments' => $result['specialCommitments'],
                    'title' => $result['title'],
                    'workHours' => $result['workHours'],
                ];
            }
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function jsonSerialize()
    {
       $this->convert();
       return $this->jobSearchResult;
    }
}