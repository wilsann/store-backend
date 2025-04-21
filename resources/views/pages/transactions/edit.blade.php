@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Transaksi</strong>
            <small>{{ $item->uuid }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3 form-group">
                    <label for="name" class="form-control-label">Nama Pemesan   </label>
                    <input
                        type="text"
                        name="name"
                        id=""
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder=""
                        aria-describedby="helpId"
                        value="{{ old('name') ? old('name') : $item->name }}"
                    />
                    @error('name')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input
                        type="text"
                        name="email"
                        id=""
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder=""
                        aria-describedby="helpId"
                        value="{{ old('email') ? old('email') : $item->email }}"
                    />
                    @error('email')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="number" class="form-control-label">No Hp Pemesan</label>
                    <input
                        type="number"
                        name="number"
                        id=""
                        class="form-control @error('number') is-invalid @enderror"
                        placeholder=""
                        aria-describedby="helpId"
                        value="{{ old('number') ? old('number') : $item->number }}"
                    />
                    @error('number')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="address" class="form-control-label">Alamat</label>
                    <input
                        type="text"
                        name="address"
                        id=""
                        class="form-control @error('address') is-invalid @enderror"
                        placeholder=""
                        aria-describedby="helpId"
                        value="{{ old('address') ? old('address') : $item->address }}"
                    />
                    @error('address')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Update Transaksi
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    
@endsection
