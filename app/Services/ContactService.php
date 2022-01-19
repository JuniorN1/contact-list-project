<?php

namespace App\Services;

use App\Repositories\ContactRepository;
use Illuminate\Support\Facades\Log;

class ContactService
{
    private $contactRepository;
    private $phoneService;

    public function __construct()
    {
        $this->contactRepository = new ContactRepository();
        $this->phoneService = new PhoneService();
    }

    public function index()
    {
        return $this->contactRepository->index();
    }

    public function find(int $id)
    {
        return $this->contactRepository->find($id);
    }

    public function create(array $contactData): int
    {
        $phones = $contactData['phones'];
        $name = $contactData['name'];
        $age = $contactData['age'];

        $contactCreated = $this->contactRepository->create($name, $age);

        if (count($phones) > 0)
            $this->phoneService->create($phones, $contactCreated->id);

        return $contactCreated->id;
    }

    public function delete(int $id)
    {
        $contact = $this->contactRepository->find($id);
        $this->createLogs($contact);
        $contact->delete();
    }

    private function createLogs($contact)
    {
        $contactId = $contact->id;
        $phoneList = $this->phoneService->findByContactId($contactId);
        Log::info('This Contact has deleted, from the database:' . 'Name : ' . $contact->name . 'Age :' . $contact->age);
        Log::info('Phone Numbers belonging to the contact :');
        foreach ($phoneList as $phone) {
            Log::info('Phone Number : ' . $phone->phone);
        }

    }

    public function update(array $contactData, int $id)
    {
        return $this->contactRepository->update($contactData, $id);
    }

    public function search(array $searchData)
    {
        $searchData = $searchData['search'];
        return $this->contactRepository->search($searchData);
    }

}
