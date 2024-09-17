<div class="toast">

    @if (session('success'))
        <div class="alert alert-primary border border-cyan-800 bg-cyan-900" x-show="show" x-data="{
            show: true,
            init() {
                setTimeout(() => {
                    this.show = false;
                }, 3000)
            }
        }">
            <span>{{ session('success') }}</span>
        </div>

    @elseif (session('warning'))
        <div class="alert alert-warning" x-show="show" x-data="{
            show: true,
            init() {
                setTimeout(() => {
                    this.show = false;
                }, 3000)
            }
        }">
            <span>{{ session('warning') }}</span>
        </div>
    @endif

</div>
