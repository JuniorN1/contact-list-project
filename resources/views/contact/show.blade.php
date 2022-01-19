@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold underline p-10"> Contact : {{$contact->name}} </h1>
        <div class="justify-end flex py-5 w-full">
            <div class="px-4">
                <form id="formContact" action="{{ route('contact.delete',['id'=>$contact->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 bg-red-700 hover:bg-red-900  rounded-lg text-white"> Delete
                    </button>
                </form>
            </div>
            <a href="{{route('contact.update.page',['id'=>$contact->id])}}" class="px-4">
                <div class="bg-yellow-500 hover:bg-yellow-900  rounded-lg p-2  text-white"> Edit</div>
            </a>
        </div>
        <div class="flex flex-col justify-center items-center ">
            <div class="flex flex-row items-center justify-center font-bold w-full text-center flex-wrap">
                <div class="py-5 w-1/3 border ">Name</div>
                <div class="py-5 w-1/3 border">Age</div>
                <div class="py-5 w-1/3 border">Phone Number</div>
            </div>
            @foreach($contact->phone as $items)
                <div class="flex flex-row items-center justify-center font-bold w-full text-center flex-wrap">
                    <div class="py-5 w-1/3 border ">{{ $contact->name }}</div>
                    <div class="py-5 w-1/3 border">{{ $contact->age }}</div>
                    <div class="py-5 w-1/3 border">{{ $items->phone }}</div>

                </div>
            @endforeach
        </div>

    </div>

@endsection
