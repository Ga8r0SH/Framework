@extends('Layout.app')
@section('content')

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-10 mb-20">
    @foreach($tasks as $task)
        <div class="py-8">
            <div class="bg-white shadow-2xl w-[350px] h-[100px]" >
                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">{{ $task->title}}</h2>
                    <p class="overflow-hidden whitespace-nowrap sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {{ $task->description }}
                    </p>
                    <a class="text-blue-400 underline" href="{{ route("index.show", $task->id) }}">
                        Перейти
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div>
    <a href="{{ route("index.create")}}" class="mb-2 py-2 px-4 bg-green-500 rounded text-white ">Создать</a>
</div>

<div class="mx-auto">
    {{ $tasks->links() }}
</div>
