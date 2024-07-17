@props(['href' => null, 'color' => 'primary'])

@php
    $baseClasses = 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150';
    $typeClasses = [
        'primary' => 'bg-gray-800 text-white hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:ring-indigo-500',
        'success' => 'bg-green-500 text-white hover:bg-green-400 focus:bg-green-400 active:bg-green-600 focus:ring-green-300',
        'warning' => 'bg-yellow-500 text-black hover:bg-yellow-400 focus:bg-yellow-400 active:bg-yellow-600 focus:ring-yellow-300',
        'danger' => 'bg-red-500 text-white hover:bg-red-400 focus:bg-red-400 active:bg-red-600 focus:ring-red-300',
        'info' => 'bg-blue-500 text-white hover:bg-blue-400 focus:bg-blue-400 active:bg-blue-600 focus:ring-blue-300',
    ][$color];
@endphp

@if($href)
    <a href="{{ $href }}" wire:navigate {{ $attributes->merge(['class' => $baseClasses . ' ' . $typeClasses]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'submit', 'class' => $baseClasses . ' ' . $typeClasses]) }}>
        {{ $slot }}
    </button>
@endif
