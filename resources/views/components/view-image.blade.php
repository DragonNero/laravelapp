
<div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
    <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
        Current Image
    </div>
    <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
        @if ($image_path)
            <img src="{{ asset('storage/images/'.$image_path) }}" style="max-width:550px;" class="rounded">
        @else
            <span>No image found!</span>
        @endif
    </div>
</div>
