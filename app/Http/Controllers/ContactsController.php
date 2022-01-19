<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\SearchRequest;
use App\Services\ContactService;
use Illuminate\Http\RedirectResponse;

class ContactsController extends Controller
{
    private $contactService;

    public function __construct()
    {
        $this->contactService = new ContactService();
    }

    public function index()
    {
        $contactList = $this->contactService->index();
        return view('contact.index', compact('contactList'));
    }

    public function search(SearchRequest $searchRequest)
    {
        $searchValidated = $searchRequest->validated();
        $contactList = $this->contactService->search($searchValidated);

        return view('contact.index', compact('contactList'));
    }

    public function show($id)
    {
        $contact = $this->contactService->find($id);
        return view('contact.show', compact('contact'));
    }

    public function createPage()
    {
        return view('contact.create');
    }

    public function create(ContactRequest $contactRequest): RedirectResponse
    {
        $contactValidated = $contactRequest->validated();

        $contactId = $this->contactService->create($contactValidated);
        return redirect()->route('contact.show', ['id' => $contactId]);
    }

    public function updatePage($id)
    {
        $contact = $this->contactService->find($id);
        return view('contact.update', compact('contact'));
    }

    public function update(ContactRequest $contactRequest, int $id): RedirectResponse
    {
        $contactValidated = $contactRequest->validated();

        $this->contactService->update($contactValidated, $id);
        return redirect()->route('contact.show', ['id' => $id]);
    }

    public function delete(int $id): RedirectResponse
    {
        $this->contactService->delete($id);
        return redirect()->route('home');
    }
}
