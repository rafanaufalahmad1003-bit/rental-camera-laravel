@extends('layouts.rental')
@section('content')
<div class="page-heading">
    <div><p class="eyebrow">UBAH DATA</p><h1>{{ ucfirst($type==='equipment'?'Peralatan':($type==='customers'?'Pelanggan':'Kategori')) }}</h1><p>Perbarui data lalu simpan.</p></div>
</div>
<div class="panel">
@if($type==='categories')
<form method="post" action="{{ route('actions','category') }}" class="form-grid">
    @csrf<input type="hidden" name="id" value="{{ $record->id }}">
    <label>Nama kategori<input name="name" value="{{ old('name',$record->name) }}" required></label>
    <label>Deskripsi<input name="description" value="{{ old('description',$record->description) }}"></label>
    <div class="form-actions"><button class="button">Simpan perubahan</button> <a class="text-link" href="/?page=categories">Batal</a></div>
</form>
@elseif($type==='customers')
<form method="post" action="{{ route('actions','customer') }}" class="form-grid">
    @csrf<input type="hidden" name="id" value="{{ $record->id }}">
    <label>Nama lengkap<input name="name" value="{{ old('name',$record->name) }}" required></label>
    <label>Telepon<input name="phone" value="{{ old('phone',$record->phone) }}" required></label>
    <label>Email<input type="email" name="email" value="{{ old('email',$record->email) }}"></label>
    <label>Nomor identitas<input name="identity_number" value="{{ old('identity_number',$record->identity_number) }}"></label>
    <label class="full">Alamat<textarea name="address">{{ old('address',$record->address) }}</textarea></label>
    <div class="form-actions"><button class="button">Simpan perubahan</button> <a class="text-link" href="/?page=customers">Batal</a></div>
</form>
@else
<form method="post" action="{{ route('actions','equipment') }}" class="form-grid">
    @csrf<input type="hidden" name="id" value="{{ $record->id }}">
    <label>Kategori<select name="category_id" required>@foreach($categories as $category)<option value="{{ $category->id }}" @selected(old('category_id',$record->category_id)==$category->id)>{{ $category->name }}</option>@endforeach</select></label>
    <label>SKU<input name="sku" value="{{ old('sku',$record->sku) }}" required></label>
    <label>Merek<input name="brand" value="{{ old('brand',$record->brand) }}" required></label>
    <label>Model<input name="model" value="{{ old('model',$record->model) }}" required></label>
    <label>Tarif per hari<input type="number" min="0" name="daily_rate" value="{{ old('daily_rate',$record->daily_rate) }}" required></label>
    <label>Deposit<input type="number" min="0" name="deposit_amount" value="{{ old('deposit_amount',$record->deposit_amount) }}" required></label>
    <label class="full">Deskripsi<textarea name="description">{{ old('description',$record->description) }}</textarea></label>
    <div class="form-actions"><button class="button">Simpan perubahan</button> <a class="text-link" href="/?page=equipment">Batal</a></div>
</form>
<p class="hint">Nomor seri unit tidak diubah pada formulir ini. Status unit: {{ $record->units->pluck('status')->join(', ') }}</p>
@endif
</div>
@endsection
