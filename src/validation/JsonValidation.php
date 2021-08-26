<?php

namespace TalentsConnect\GoogleJobSearch;

class JsonValidation
{
    private array $dataset;

    private array $keys = [
        '@context',
        '@type',
        'baseSalary',
        'jobBenefits',
        'datePosted',
        'description',
        'educationRequirements',
        'employmentType',
        'experienceRequirements',
        'incentiveCompensation',
        'industry',
        'jobLocation' => [
            '@type',
            'address' => [
                "@type",
                "addressLocality",
                "addressRegion",
            ],
        ],
        "occupationalCategory",
        "qualifications",
        "responsibilities",
        "salaryCurrency",
        "skills",
        "specialCommitments",
        "title",
        "workHours",
    ];


    public function __construct($dataset)
    {
        $this->dataset = $dataset;
    }


    private function validate(){
        foreach ($this->dataset as $key => $data){
            if(!$this->hasKey($key)){
                throw new \Exception('Not valid data');
            }
        }

        return true;
    }

    private function hasKey($key){
        return in_array($key, $this->keys);
    }


//    /**
//     * @throws \Exception
//     */
//    public function jsonSerialize()
//    {
//        if(!$this->validate()){
//            throw new \Exception('Not valid data');
//        }
//
//        return $this->dataset;
//    }
}