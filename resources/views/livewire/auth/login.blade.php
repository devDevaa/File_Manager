<div>
    <div class="h-screen flex justify-center items-center">
        <form wire:submit='login' class="w-[500px]">

            <x-common.alert/>

            <div class="flex justify-between items-center">
                <div class="my-5">
                    <h1 class="text-2xl font-bold mb-1 text-primary">Login</h1>
                    <p>Wellcome back to My Files.</p>
                </div>

                <x-common.themeSwitch />
            </div>

            <div class="mb-3">
                <label for="email" >Email</label>
                <input type="email" wire:model='email' placeholder="Enter your email" class="input input-bordered w-full" id="email" />
                @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" >Password</label>
                <input type="password" wire:model='password' placeholder="Enter your password" class="input input-bordered w-full" id="password" />
                @error('password')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <button class="btn btn-primary w-full">Submit</button>
            </div>

            <div class="text-center">
                <p>OR</p>
                <p>Don't have an account? <a class="text-primary font-bold" href="{{ route('register') }}" wire:navigate> Register </a></p>
            </div>
        </form>
    </div>
</div>
