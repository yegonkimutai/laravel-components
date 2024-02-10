<x-web-layout>
    <x-slot:title>
        Custom Components
    </x-slot>

    @php
        $successMessage = 'Saved Successfully';
        $type = 'warning';
        $value = 'My First Name'
    @endphp

    <div class='py-5'>
        <div class="container">
            <x-alert-message :type="$type" :message="$successMessage" class="py-5" />

            <hr>

            <!-- <x-form.label :value="$value"/> -->
            
            <x-form.label>
                ABC- My first name
            </x-form.label>
            <hr>
        </div>
    </div>

    <x-slot:scripts>
        <script>
            console.log('This is my script area');
        </script>
    </x-slot>
</x-web-layout>
