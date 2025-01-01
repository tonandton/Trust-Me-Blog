@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor) {
        'slate' => 'text-slate-50',
        'gray' => 'text-gray-800',
        'black' => 'text-black-800',
        'red' => 'text-red-800',
        'orange' => 'text-orange-800',
        'amber' => 'text-amber-800',
        'yellow' => 'text-yellow-800',
        'green' => 'text-green-800',
        'emerald' => 'text-emerald-800',
        'teal' => 'text-teal-800',
        'cyan' => 'text-cyan-800',
        'sky' => 'text-sky-800',
        'blue' => 'text-blue-800',
        'indigo' => 'text-indigo-800',
        'violet' => 'text-violet-800',
        'purple' => 'text-purple-800',
        'fuchsia' => 'text-fuchsia-800',
        'pink' => 'text-pink-800',
        'rose' => 'text-rose-800',
        default => 'text-slate-50',
    };

    $bgColor = match ($bgColor) {
        'slate' => 'bg-slate-50',
        'gray' => 'bg-gray-500',
        'black' => 'bg-black-500',
        'red' => 'bg-red-500',
        'orange' => 'bg-orange-500',
        'amber' => 'bg-amber-500',
        'yellow' => 'bg-yellow-500',
        'green' => 'bg-green-500',
        'emerald' => 'bg-emerald-500',
        'teal' => 'bg-teal-500',
        'cyan' => 'bg-cyan-500',
        'sky' => 'bg-sky-500',
        'blue' => 'bg-blue-500',
        'indigo' => 'bg-indigo-500',
        'violet' => 'bg-violet-500',
        'purple' => 'bg-purple-500',
        'fuchsia' => 'bg-fuchsia-500',
        'pink' => 'bg-pink-500',
        'rose' => 'bg-rose-500',
        default => 'bg-gray-300',
    };

@endphp

<button {{ $attributes }}
    class="{{ $textColor }} {{ $bgColor }}
rounded-xl px-3 py-1 text-base cursor-pointer">
    {{ $slot }}
</button>
