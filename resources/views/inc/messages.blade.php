{{-- <span>Site message - {{ $name }}!</span> --}}
@if(session()->has('success'))
    <div class="success">{{ session()->get('success') }}</div>
@endif

@if(session()->has('error'))
    <div class="alert">{{ session()->get('error') }}</div>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert">{{ $error }}</div>
    @endforeach
@endif
