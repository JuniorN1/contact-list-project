@extends('layouts.app')


@section('content')
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold underline"> Update Contact </h1>
        <form id="formContact" action="{{route('contact.update',['id'=>$contact->id])}}"
              class="flex items-center flex-col relative " method="POST">
            @csrf
            @method('PUT')
            <div
                class="p-5 flex flex-col items-start">
                <label for="name" class="py-5"> Name :</label>
                <input id="name" name="name" value="{{ $contact->name }}" type="text" placeholder="Contact Name"
                       class="border p-5  @error('name') border-2 border-red-800 @enderror "/>
                @error('name')
                <span class="text-red-500">This input not send empty</span>
                @enderror
            </div>
            <div
                class="p-5 flex flex-col items-start">
                <label for="age" class="py-5"> Age :</label>
                <input id="age" name="age" value="{{ $contact->age }}"
                       type="number" minlength="2"
                       placeholder="Contact age" class="border p-5  @error('age') border-2 border-red-800 @enderror "/>
                @error('age')
                <span class="text-red-500">This input not send empty</span>
                @enderror
            </div>
            <div class=" flex flex-col fixed top-48 right-0">
                <button class="p-5 border" type="submit">Update contact in list</button>
            </div>
        </form>
    </div>

@endsection

