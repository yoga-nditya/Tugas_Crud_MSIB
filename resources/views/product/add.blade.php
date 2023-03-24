@extends('app')

@section('content')
  <form action="{{ url('/product') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
      <div id="emailHelp" class="form-text">Nama Produk tidak boleh lebih dari 255</div>
      @error('product_name')
        <div class="invalid-feedback">
          Nama Tidak Boleh Kosong 
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
      <input type="text" class="form-control @error('product_description') is-invalid @enderror" id="exampleInputPassword1" name="product_description">
      @error('product_name')
      <div class="invalid-feedback">
        Deskripsi Tidak Boleh Kosong 
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Harga</label>
      <input type="text" class="form-control @error('product_price') is-invalid @enderror" id="exampleInputPassword1" name="product_price">
      @error('product_name')
        <div class="invalid-feedback">
         Harga Tidak Boleh Kosong 
        </div>
      @enderror
    </div>
    <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id">
        <option selected>Pilih Kategori</option>
        @foreach ($categories as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>  
        @endforeach
      </select>
      @error('product_name')
        <div class="invalid-feedback">
          Silahkan Pilih Category
        </div>
      @enderror
    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
  </form>
@endsection