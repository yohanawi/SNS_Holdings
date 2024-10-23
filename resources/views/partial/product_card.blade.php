 <!-- product card-->
 <div class="mb-4 card product-card" style="width: 18rem;">
     <a href="{{ route('admin.product.quick_view', $product->id) }}" class="text-decoration-none text-dark">
         <div class="discount-badge">{{ $product->discount }}% OFF</div>
         <img src="{{ asset('storage/' . $product->image01) }}" class="card-img-top"
             style="height: 250px; object-fit: cover;" alt="product images">
         <div class="card-body">
             <div class="mb-0 d-flex justify-content-between align-items-center">
                 <span class="badge text-bg-primary">{{ $product->category_id }}</span>
                 <p class="card-text text-muted text-truncate" style="max-width: 200px;">
                     {{ $product->product_details }}</p>
             </div>
             <div class="mb-0 d-flex justify-content-between align-items-center">
                 <p class="mb-0 fw-bold">${{ $product->new_price }}</p>
                 <p class="mb-0 old-price">${{ $product->price }}</p>
                 <p class="mb-0">{{ $product->sold }}+ sold</p>

                 {{-- <a href="#" class="btn btn-outline-dark btn-sm"><i class="fa fa-cart-plus"></i></a> --}}
             </div>
             <div class="d-flex justify-content-center align-items-center">
                 <span class="badge text-bg-primary">Primary</span>
                 <p class="mt-3">{{ $product->category }}</p>
             </div>
         </div>
     </a>
 </div>
