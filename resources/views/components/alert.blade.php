@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible show fade">
    <i class="bi bi-check-circle"></i>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('failed'))
<div class="alert alert-danger alert-dismissible show fade">
    <i class="fa-solid fa-triangle-exclamation"></i>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible show fade">
    <ul>
        @foreach ($errors->all() as $error)
        <li><i class="fa-solid fa-triangle-exclamation"></i> {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
