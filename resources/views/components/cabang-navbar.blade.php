<div class="mb-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="{{ request()->url() }}">Semua Data</a>
        </li>
        @foreach ($cabangNav as $item)
        <li class="nav-item">
            <a class="nav-link active" href="{{ request()->url() }}?cabang={{ $item->id }}">{{ $item->nama_cbng }}</a>
        </li>
        @endforeach
    </ul>
</div>