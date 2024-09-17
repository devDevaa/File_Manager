<div>
    <dialog id="logoutModal" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are you sure?</h3>
            <p class="py-1">This action destroy your session.</p>
            <div class="modal-action ">
                <button class="btn btn-error btn-sm" wire:click='logout'> Yes! Logout. </button>
                <form method="dialog">
                    <button class="btn btn-sm">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>
