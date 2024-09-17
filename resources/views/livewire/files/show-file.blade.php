<div>
    <div class="px-10 lg:px-32">
        <p class="text-2xl font-bold">{{ $file->title }}</p>
        <p class="text-sm">{{ $file->created_at->format('d-m-Y h:m:s a') }}</p>

        <img class="w-full rounded-lg object-contain mt-4 mb-20" src="{{ asset('storage/'.$file->file) }}" alt="{{ $file->title }}">
    </div>
</div>
