<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite('resources/css/app.css')
        @livewireStyles
        <title>{{ $title ?? 'My Files' }}</title>

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

        <x-common.navbar />
        <x-common.toast />

        {{ $slot }}

        @livewireScripts

    </body>
</html>
