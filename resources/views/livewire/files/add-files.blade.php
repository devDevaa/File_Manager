<div>
    <dialog id="addFileModal" class="modal" wire:ignore.self>
        <div class="modal-box">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-bold">Upload File</h3>
                <form method="dialog">
                    <button class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
                    </button>
                </form>
            </div>

            <div
                x-data="{ uploading: false, progress: 0 }"
                x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false"
                x-on:livewire-upload-cancel="uploading = false"
                x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress"
            >

                <!-- Progress Bar -->
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>

            <form wire:submit='store' class="mt-4">
                <div class="mb-3">
                    <label for="title" >Title</label>
                    <input type="text" wire:model='title' placeholder="Enter your title" class="input input-bordered w-full" id="title" />
                    @error('title')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="file" >File</label>
                    <input type="file" wire:model='file' class="file-input file-input-bordered w-full " id="file" accept="image/png,image/jpg,image/jpeg,image/gif"/>
                    @error('file')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                    @if ($file)
                        <img src="{{ $file->temporaryUrl() }}" class="w-full rounded-md object-contain my-3">
                    @endif
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-full"> Submit </button>
                </div>
            </form>

        </div>
    </dialog>
</div>
