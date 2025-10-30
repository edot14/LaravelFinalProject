@props(['tag', 'size' => 'base'])

<a href="{{ route('tags.show', $tag->name) }}"
    {{ $attributes->class(['inline-block rounded-lg text-gray-200 transition bg-gray-800 hover:bg-gray-700','px-5 py-1 text-sm' => $size === 'base','px-3 py-1 text-2xs' => $size === 'small',])}}>
    {{ $tag->name }}
</a>
