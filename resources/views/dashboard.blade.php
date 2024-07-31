{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (Session::has('message'))
<script>
    Swal("Message", "{{ Session::get('message') }}", "success");
</script> --}}
<link href="./css/app.css" rel="stylesheet" />
<x-app-layout>
    <x-slot name="header">

        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }} --}}
        </h2>
    </x-slot>
    
        <div class="flex flex-nowrap gap-4 md:mx-4 py-4 mx-auto px-4 md:px-2">
        </div
</x-app-layout>
