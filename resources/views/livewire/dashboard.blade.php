<div>
    <div class="px-2 flex justify-center flex-col items-center">

        <input type="text" wire:model.live='search' placeholder="Search here " class="input input-bordered w-96 mb-5 rounded-full" />

        <div class="grid grid-col-1 md:grid-cols-2 xl:grid-cols-3 gap-3">
            @if (count($files) > 0)
                @foreach ($files as $key => $file)
                    <div class="card card-compact bg-base-100 w-96 shadow-xl border ">
                        <a href="{{ route('show.file', ["id" => $file->id]) }}" wire:navigate>
                            <figure>
                                <img src="{{asset('storage/'.$file->file)}}"
                                    alt="" class="h-52 object-cover w-full overflow-hidden" />
                            </figure>
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">{{ $file->title }}</h2>
                            <p>{{ $file->created_at->format('d-m-Y h:m:s a') }}</p>
                        <div class="card-actions justify-end">
                            <livewire:files.delete-file :id="$file->id" :key="$key" />
                        </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center my-10">No Files Found</div>
            @endif
        </div>
    </div>

    <div class="text-center px-10 lg:px-32">
        {{ $files->links() }}
    </div>
</div>
