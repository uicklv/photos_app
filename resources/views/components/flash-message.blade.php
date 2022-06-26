@if($message = session('message'))
    <x-alert type="success" dissmissible>
        {{ $component->icon() }}
        {{ $message }}
    </x-alert>
@endif
