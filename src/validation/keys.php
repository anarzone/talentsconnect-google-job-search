<?php

return [
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
            '@type',
            'addressLocality',
            'addressRegion',
        ],
    ],
    'occupationalCategory',
    'qualifications',
    'responsibilities',
    'salaryCurrency',
    'skills',
    'specialCommitments',
    'title',
    'workHours',
];