@extends('layouts.app')


@section('content')
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold underline  p-10"> Create new Contact </h1>
        <form id="formContact" action="{{route('contact.create')}}" class="flex items-center flex-col relative "
              method="POST">
            @csrf
            @method('POST')
            <div class="p-5 flex flex-col items-start">
                <label for="name" class="py-5"> Name :</label>
                <input id="name" name="name" type="text" placeholder="Contact Name" class="border p-5" required alt="Contact Name"/>
            </div>
            <div class="p-5 flex flex-col items-start">
                <label for="age" class="py-5"> Age :</label>
                <input id="age" name="age" type="number" minlength="2" placeholder="Contact age" class="border p-5" required alt="Age Contact"/>
            </div>
            <div class="phoneNumber p-5 flex flex-col items-start">
                <label for="phone" class="py-5"> Phone number :</label>
                <input name="phones[]" type="number" minlength="2" placeholder="Contact age" class="border p-5" required alt="Phone Number"/>
            </div>
            <div class=" flex flex-col fixed top-48 right-0">
                <button class="p-5 border" type="button" onclick="addNewPhone()">Add more number</button>
                <button class="p-5 border" type="button" onclick="removeLast()">Remove last number</button>
                <button class="p-5 border" type="submit">Save contact in list</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        const divElement = document.querySelector('.phoneNumber');
        let formElement = document.querySelector('form');

        let quantityElement = 0;

        function addNewPhone() {

            let clone = divElement.cloneNode(true);
            clone.classList.add(`clone-${quantityElement}`);
            clone.value ="";
            quantityElement++;
            formElement.appendChild(clone)
            scrollPage();
        }

        function removeLast() {
            if (quantityElement < 1) return;
            const elementRemove = document.querySelector(`.clone-${quantityElement - 1}`);
            formElement.removeChild(elementRemove);
            quantityElement--;
            scrollPage();
        }

        function scrollPage(){
            window.scrollTo(0,document.body.scrollHeight);
        }

    </script>
@endsection

