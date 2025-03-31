@props(['route'])
<div>
    <a href="{{$route}}">
        <div class="flex flex-col justify-center items-center border border-gray-400 rounded-lg font-bold py-6 dark:border-gray-200 hover:bg-indigo-500/25 hover:text-indigo-500 hover:border-indigo-500 hover:border-2 dark:hover:border-indigo-500 transition-colors duration-500 ease-in-out">
            {{$slot}}
        </div>
    </a>
</div>
