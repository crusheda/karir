{{-- PESAN ERROR --}}
@if ($errors->any())
    @if ($errors->count() == 1)
        <div class="alert alert-danger text-left" style="text-align: justify">
            {{ $errors->first() }}
        </div>
    @else
        <div class="alert alert-danger text-left" style="text-align: justify">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endif
{{-- PESAN ERROR BIASA --}}
@if (session('error'))
    <div class="alert alert-danger text-left" style="text-align: justify">
        {!! session('error') !!}
    </div>
@endif
{{-- PESAN SUKSES --}}
@if (session('success'))
    <div class="alert alert-success text-left" style="text-align: justify">
        {!! session('success') !!}
    </div>
@endif
