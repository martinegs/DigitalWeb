<?php

use Livewire\Component;
use App\Models\Product;

new class extends Component
{
    public function with(): array
    {
        return [
            'products' => Product::where('is_active', true)->get(),
        ];
    }
};
?>

<section id="productos" class="py-5" style="background: transparent;">
    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-3 text-white">
                Nuestros Productos
            </h2>
            <p class="lead text-white-50">Materiales de primera calidad</p>
        </div>

        <!-- Products Grid -->
        <div class="row g-4">
            @forelse($products as $product)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="product-card h-100">
                        <!-- Image -->
                        <div class="product-image">
                            @if($product->image)
                                <img 
                                    src="{{ asset('storage/' . $product->image) }}" 
                                    alt="{{ $product->name }}"
                                    class="w-100 h-100 object-fit-cover"
                                />
                            @else
                                <div class="image-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="product-content">
                            <!-- Category Badge -->
                            @if($product->category)
                                <span class="category-badge">{{ $product->category }}</span>
                            @endif

                            <h3 class="product-title">{{ $product->name }}</h3>
                            
                            @if($product->description)
                                <p class="product-description">{{ Str::limit($product->description, 100) }}</p>
                            @endif

                            <div class="product-footer">
                                <div class="price">
                                    <span class="price-label">Precio</span>
                                    <span class="price-value">${{ number_format($product->price, 2) }}</span>
                                </div>
                                <button class="btn-add-cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-white-50">No hay productos disponibles en este momento.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@push('styles')
<style>
.product-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 16px;
  overflow: hidden;
  transition: all 0.3s ease;
}

.product-card:hover {
  transform: translateY(-8px);
  border-color: rgba(0, 255, 255, 0.3);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.product-image {
  position: relative;
  width: 100%;
  height: 250px;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.05);
}

.product-image img {
  transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
  transform: scale(1.1);
}

.image-placeholder {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(255, 255, 255, 0.2);
}

.product-content {
  padding: 20px;
}

.category-badge {
  display: inline-block;
  padding: 4px 12px;
  background: rgba(0, 128, 255, 0.2);
  color: #00ffff;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 12px;
}

.product-title {
  color: white;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 8px;
}

.product-description {
  color: rgba(255, 255, 255, 0.6);
  font-size: 14px;
  margin-bottom: 16px;
  line-height: 1.5;
}

.product-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: 16px;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.price {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.price-label {
  color: rgba(255, 255, 255, 0.5);
  font-size: 12px;
}

.price-value {
  color: #00ffff;
  font-size: 24px;
  font-weight: 700;
}

.btn-add-cart {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  border: none;
  background: linear-gradient(135deg, #0080ff 0%, #00ffff 100%);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-add-cart:hover {
  transform: scale(1.1);
  box-shadow: 0 8px 20px rgba(0, 128, 255, 0.4);
}
</style>
@endpush