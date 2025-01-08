
@props(['type'])

@php
    switch ($type) {
        case 'info':
            $class = 'bg-blue-50 text-blue-800';
            break;
        case 'danger':
            $class = 'bg-red-50 text-red-800';
            break;
        case 'success':
            $class = 'bg-green-50 text-green-800';
            break;
        case 'warning':
            $class = 'bg-yellow-50 text-yellow-800';
            break;
        case 'dark':
            $class = 'bg-gray-800 text-gray-50';
            break;
        
        default:
            # code...
            break;
    }
@endphp

<div class="p-4 mb-4 text-sm  rounded-lg {{$class}}" role="alert">
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span> {{$slot}}
</div>
{{-- <div class="p-4 mb-4 text-sm  rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium">{{$title ?? 'Info danger!' }}</span> {{$slot}}
</div>
<div class="p-4 mb-4 text-sm  rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium">{{$title ?? 'Info success!' }}</span> {{$slot}}
</div>
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium">{{$title ?? 'Info warning!' }}</span> {{$slot}}
</div>
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium">{{$title ?? 'Info dark!' }}</span> {{$slot}}
</div> --}}