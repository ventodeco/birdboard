@if ($errors->any())
    <div class="field mt-6">
        @foreach ($errors->all() as $error)
@if ($errors->{ $bag ?? 'default' }->any())
    <ul class="field mt-6 list-reset">
        @foreach ($errors->{ $bag ?? 'default' }->all() as $error)
            <li class="text-sm text-red">{{ $error }}</li>
        @endforeach
    </div>
    </ul>
@endif