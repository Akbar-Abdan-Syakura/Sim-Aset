<div class="mb-4">
    <form action="{{ request()->url() }}" method="GET">
        <div class="row">
            <div class="col-md-3">
                <select class="custom-select" name="cabang">
                    <option disabled selected>Open this select menu</option>
                    @foreach($cabangNav as $key => $item)
                    <option value="{{ $item->id }}">{{ $item->nama_cbng }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select class="custom-select" name="kriteria">
                    <option disabled selected>Open this select menu</option>
                    @foreach($kriterias as $key => $item)
                    <option value="{{ $item->id }}">{{ $item->nama }} | {{ $item->golongan->kode }}.{{ $item->kode }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a  href="{{ request()->url()  }}" class="btn btn-primary">Reset</a>
            </div>
        </div>
    </form>
</div>
