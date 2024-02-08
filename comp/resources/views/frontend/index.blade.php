<x-web-layout>
    <x-slot:title>
        Custom Components
    </x-slot>


    <div class='py-5'>
        <div class="container">
            
            <x-alert-message />
            
            <h3> Welcome to Index page </h3>
        </div>
    </div>

    <x-slot:scripts>
        <script>
            console.log('This is my script area')
        </script>
    </x-slot>

</x-web-layout>