<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
        <div class="flex justify-center items-center">
            <img src="{{ asset('images/Register.png') }}" class="w-9/12 object-contain" alt="login">
        </div>

        <div class="h-screen flex justify-center items-center">
            <form wire:submit='register' class="w-[500px]">
                <div class="flex justify-between items-center">
                    <div class="mb-5">
                        <h1 class="text-2xl font-bold mb-1 text-primary">Register Now!</h1>
                        <p>Wellcome to My Files.</p>
                    </div>
                    <div class="">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" >Name</label>
                    <input type="text" wire:model='name' placeholder="Type Here" class="input input-bordered w-full" id="name" />
                    @error('name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
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
                    <input type="password" wire:model='password' placeholder="Enter your password" class="input input-bordered w-full" id="password"/>
                    @error('password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="confirm_password" >Confirm Password</label>
                    <input type="password" wire:model='password_confirmation' placeholder="Re-enter your password" class="input input-bordered w-full" id="confirm_password"/>
                    @error('confirm_password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <button class="btn btn-primary w-full" >Submit</button>
                </div>

                <div class="text-center">
                    <p>OR</p>
                    <p>Already register? <a class="text-primary font-bold" href="{{ route('login') }}" wire:navigate> Login Here </a></p>
                </div>
            </form>
        </div>
    </div>
</div>
