@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold underline p-10"> Contact List </h1>
        <form id="formContact" action="{{ route('contact.search') }}" class="flex items-center flex-col relative "
              method="POST">
            @csrf
            @method('GET')
            <div class="p-5 flex flex-row items-start">
                <input id="search" name="search" type="text" placeholder="Search Contact " class="border p-5" required/>
                <button class="p-6 border" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
        </form>
        <div class="flex flex-col justify-center items-center ">
            <div class="flex flex-row items-center justify-center font-bold w-full text-center flex-wrap">
                <div class="py-5 w-1/3 border ">Name</div>
                <div class="py-5 w-1/3 border">Age</div>
                <div class="py-5 w-1/3 border">Phone Number</div>
            </div>
            @foreach ($contactList as $contact)
                <div class="flex flex-row items-center justify-center font-bold w-full text-center flex-wrap">
                    <div class="py-5 w-1/3 border   flex flex-row justify-center items-center">
                        <a
                            href="{{ route('contact.show',$contact->contact_id) }}" alt="Click me"
                            class=" cursor-pointer flex flex-row justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                            <p class="px-5">
                                {{ $contact->name }}
                            </p>
                        </a>
                    </div>
                    <div class="py-5 w-1/3 border">{{ $contact->age }}</div>
                    <div class="py-5 w-1/3 border">{{ $contact->phone }}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
