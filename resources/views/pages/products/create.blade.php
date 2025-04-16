@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3 form-group">
                    <label for="name" class="form-control-label">Name</label>
                    <input
                        type="text"
                        name="name"
                        id=""
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder=""
                        aria-describedby="helpId"
                        value="{{ old('name') }}"
                    />
                    @error('name')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="type" class="form-control-label">Type</label>
                    <input
                        type="text"
                        name="type"
                        id=""
                        class="form-control @error('type') is-invalid @enderror"
                        placeholder=""
                        aria-describedby="helpId"
                        value="{{ old('type') }}"
                    />
                    @error('type')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="description" class="form-control-label">Deskripsi</label>
                    <textarea
                        name="description"
                        class="ckeditor form-control @error('description') is-invalid @enderror"
                    >{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="price" class="form-control-label">Price</label>
                    <input
                        type="number"
                        name="price"
                        id=""
                        class="form-control @error('price') is-invalid @enderror"
                        placeholder=""
                        aria-describedby="helpId"
                        value="{{ old('price') }}"
                    />
                    @error('price')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="quantity" class="form-control-label">Quantity</label>
                    <input
                        type="number"
                        name="quantity"
                        id=""
                        class="form-control @error('quantity') is-invalid @enderror"
                        placeholder=""
                        aria-describedby="helpId"
                        value="{{ old('quantity') }}"
                    />
                    @error('quantity')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    
@endsection
