<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class ProductController extends Controller {
    public function index(Request $request): View {
        $products = Product::with('category')->when($request->filled('q'), function ($query) use ($request) {
            $term = $request->string('q')->toString();
            $query->where(fn($q) => $q->where('name','like',"%{$term}%")->orWhere('brand','like',"%{$term}%"));
        })->when($request->filled('category_id'), fn($q) => $q->where('category_id',$request->integer('category_id')))->orderBy('name')->paginate(10)->withQueryString();
        return view('products.index', ['products'=>$products,'categories'=>Category::orderBy('name')->get()]);
    }
    public function create(): View { return view('products.create',['product'=>new Product(),'categories'=>Category::orderBy('name')->get()]); }
    public function store(Request $request): RedirectResponse { $data=$this->validated($request); Product::create($data); return redirect()->route('products.index')->with('success','Kamera berhasil ditambahkan.'); }
    public function edit(Product $product): View { return view('products.edit',['product'=>$product,'categories'=>Category::orderBy('name')->get()]); }
    public function update(Request $request, Product $product): RedirectResponse { $product->update($this->validated($request)); return redirect()->route('products.index')->with('success','Data kamera berhasil diperbarui.'); }
    public function destroy(Product $product): RedirectResponse { $product->delete(); return redirect()->route('products.index')->with('success','Kamera berhasil dihapus.'); }
    private function validated(Request $request): array { return $request->validate(['category_id'=>'required|exists:categories,id','name'=>'required|string|max:120','brand'=>'required|string|max:80','daily_rate'=>'required|numeric|min:0','deposit'=>'required|numeric|min:0','stock'=>'required|integer|min:0','description'=>'nullable|string|max:1000']); }
}
