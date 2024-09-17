<div>
    <button class="btn btn-warning btn-sm" onclick="deleteModal_{{$id}}.showModal()">del</button>
    <dialog id="deleteModal_{{$id}}" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are you sure?</h3>
            <p class="py-1">This action will delete your file permanent.</p>
            <div class="modal-action ">
                <button class="btn btn-error btn-sm" wire:click='deleteFile'> Yes! Delete it. </button>
                <form method="dialog">
                    <button class="btn btn-sm">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>
