@extends('layouts.app')

@section('content')
    {{-- <div class="container-fluid mx-auto grid max-w-full lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">

        <section class="lg:col-span-3 bg-primary">
        </section>
        <section class="lg:col-span-9 bg-gray-200">
        </section>
    </div> --}}
    <div class="relative mx-96">
        <div
            class="absolute top-0 left-0 float-right w-full bg-white border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-row justify-evenly pb-10 mt-10">
                <img class="ms-10 rounded-full w-40 shadow-lg" src="{{ asset('images/ted.png') }}" alt="Bonnie image" />
                <h2 class="mb-1 text-2xl w-72 text-wrap font-rubik font-bold text-gray-900 dark:text-white">Hello, I'm <span
                        class="font-bold text-primary">Teddy Nanta</span>, Lorem ipsum dolor sit amet.</h2>

            </div>
        </div>
    </div>
@endsection
