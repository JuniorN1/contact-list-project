<?php
namespace App\Repositories;

use App\Models\Phone;

class PhoneRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Phone::class);
    }

    public function create(int $phone, int $contactId)
    {
       return $this->model->create(['phone'=>$phone, 'contact_id'=> $contactId]);
    }

    public function findByContactId(int $contactId)
    {
        return $this->model->where('contact_id', $contactId)->get();
    }

}
