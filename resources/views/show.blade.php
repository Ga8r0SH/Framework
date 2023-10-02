@extends('Layout.app')
@section('content')

<div class="bg-white h-screen flex items-center justify-center ">
    <div class="w-[600px] h-auto py-[50px] px-4 bg-white shadow-2xl">
        <h2 class="font-bold text-2xl text-gray-800">{{ $task->title }}</h2>
        <p class="sm:text-sm text-xs text-gray-700 my-3">
            {!! $task->description !!}
        </p>
        <p>
            Due Date: <span class="text-gray-500"><i>{{ $task->dueDate }}</i></span>
        </p>
        <p>
            Category: <span class="text-gray-500"><i>{{ $categoryTitle }}</i></span>
        </p>


        <div class="mt-4">
            <a href="{{ route("index.edit", $task->id)}}" class="py-2 px-4 bg-blue-500 rounded text-white">Edit</a>
        </div>
        <div class="mt-4">
            <form method="POST" action="{{ route("index.destroy", $task->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="py-2 px-4 bg-red-500 rounded text-white">Delete</button>
            </form>
        </div>
        
        <div class="mt-20 text-2xl">
            <a href="{{ route("home")}}">Назад</a>
        </div>
    </div>
</div>