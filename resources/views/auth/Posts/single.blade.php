<x-layout1>
    <x-slot:title>
    Article | {{ $post ? $post->title: "Document" }}
    </x-slot>

    <div class="container px-5">
        {!! $post->content !!}
    </div>
</x-layout1>
