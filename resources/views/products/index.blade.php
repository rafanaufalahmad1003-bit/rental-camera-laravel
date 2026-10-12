@extends('layouts.app')
@section('content')
<form class="inline" method="get"><input name="q" value="{{ request('q') }}" placeholder="Cari kamera atau merek"><select name="category_id"><option value="">Semua kategori</option>@foreach($categories as $category)<option value="{{ $category->id }}" @selected(request('category_id')==$category->id)>{{ $category->name }}</option>@endforeach</select><button>Cari</button><a href="{{ route('products.index') }}">Reset</a></form>
@if($products->isEmpty())<article>Belum ada data kamera. Tambahkan kamera pertama.</article>@endif
@foreach($products as $product)<article><h2>{{ $product->brand }} {{ $product->name }}</h2><p>{{ $product->category->name }} · Stok {{ $product->stock }}</p><p>Tarif: Rp {{ number_format($product->daily_rate,0,',','.') }}/hari · Deposit: Rp {{ number_format($product->deposit,0,',','.') }}</p><p>{{ $product->description }}</p><a href="{{ route('products.edit',$product) }}">Ubah</a> <form style="display:inline" method="post" action="{{ route('products.destroy',$product) }}">@csrf @method('DELETE')<button onclick="return confirm('Hapus data ini?')">Hapus</button></form></article>@endforeach
{{ $products->links() }}
@endsection
