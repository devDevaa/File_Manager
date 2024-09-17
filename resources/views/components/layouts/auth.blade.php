<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-theme="light">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite('resources/css/app.css')
        @livewireStyles
        <title>{{ $title ?? 'Login' }}</title>

    </head>
    <body x-data="{
        theme: localStorage.getItem('theme') ?? 'light',
        changeTheme() {
            this.theme = this.theme === 'dark' ? 'light' : 'dark';
            localStorage.setItem('theme', this.theme);
            document.querySelector('html').setAttribute('data-theme', this.theme);
        },
        init() {
            document.querySelector('html').setAttribute('data-theme', this.theme);
        }
    }">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/Login.png') }}" class="w-9/12 object-contain" alt="login">
            </div>

            {{ $slot }}

        </div>

        @livewireScripts

    </body>
</html>
