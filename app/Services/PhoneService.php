<?php

namespace App\Services;

use App\Repositories\PhoneRepository;

class PhoneService
{
    private $phoneRepository;
    public function __construct()
    {
        $this->phoneRepository = new PhoneRepository();
    }

    public function create(array $phones, $contactId)
    {
        foreach ($phones as $phone){
             $this->phoneRepository->create($phone, $contactId);
        }

    }

    public function findByContactId(int $contactId)
    {
       return $this->phoneRepository->findByContactId($contactId);
    }
}
