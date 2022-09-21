@extends('layout.index')
@section('title','Create Product')

@section('content')
    <div class="my-5">
        <div class="container mx-auto max-w-xl shadow py-4 px-10">
            @if (session()->has('error'))
                <div class="bg-red-500 text-black px-4 py-2">
                    {{session('error')}}
                </div>
            @endif
            <a href="{{ route('home') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
            <div class="my-3">
                <h1 class="text-center text-3xl font-bold">Create Product</h1>
                <form action="" method="POST" >
                    @csrf
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Enter your Title</label>
                        <input type="text" name="title" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                        @error('title')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Enter your Content</label>
                        <input type="text" name="content" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                        @error('content')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Enter your Price</label>
                        <input type="text" name="price" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                        @error('price')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                    </div>
                    <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection