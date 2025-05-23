@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 form-group">
                    <label for="products_id" class="form-control-label">Nama Produk</label>
                    <select name="products_id" class="form-control @error('products_id') is-invalid @enderror"
                        id="">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('products_id')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="photo" class="form-control-label">Foto Barang</label>
                    <input type="file" name="photo" id=""
                        class="form-control @error('photo') is-invalid @enderror" accept="image/*" aria-describedby="helpId"
                        value="{{ old('photo') }}" />
                    @error('photo')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="is_default" class="form-control-label">Jadikan Default</label>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="is_default"
                                class="form-check-input @error('is_default') is-invalid @enderror" value="1" /> Ya
                        </label>
                    </div>
                    &nbsp;
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="is_default"
                                class="form-check-input @error('is_default') is-invalid @enderror" value="0" /> Tidak
                        </label>
                    </div>
                    @error('is_default')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Foto Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
