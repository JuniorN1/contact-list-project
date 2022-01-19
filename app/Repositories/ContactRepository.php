<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Contact::class);
    }

    public function index()
    {
        return $this->model
        ->join('phones', 'contacts.id', '=', 'phones.contact_id')->get();
    }

    public function find($id)
    {
        return $this->model->with('phone')->findOrFail($id);
    }

    public function create(string $name, int $age)
    {
        return $this->model->create(['name' => $name, 'age' => $age]);
    }

    public function update(array $contactData, int $id)
    {
        return $this->model->find($id)->update($contactData);
    }

    public function search($searchData)
    {
        return $this->model
            ->join('phones', 'contacts.id', '=', 'phones.contact_id')
            ->where('name', 'ILIKE', '%'.$searchData.'%')
            ->orWhere('age', 'ILIKE', '%'.$searchData.'%')
            ->orWhere('phone', 'ILIKE', '%'.$searchData.'%')
            ->get();
    }

}
