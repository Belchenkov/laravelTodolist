@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
@endif