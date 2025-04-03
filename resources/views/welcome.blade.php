<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.x/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="min-h-screen bg-base-200 p-6 md:p-10">
    <div x-data="{ products: [] }" 
         x-init="fetch('/products')
            .then(res => res.json())
            .then(data => products = data)"
         class="max-w-7xl mx-auto">
        
        <h1 class="text-4xl font-bold text-center mb-10">
            Danh sách sản phẩm
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <template x-for="product in products" :key="product.productCode">
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="card-body">
                        <h2 class="card-title text-xl truncate" 
                            x-text="product.productName">
                        </h2>
                        <div class="space-y-2">
                            <p class="text-sm">
                                <span class="font-medium">Loại:</span> 
                                <span x-text="product.productLine"></span>
                            </p>
                            <p class="text-sm">
                                <span class="font-medium">Nhà cung cấp:</span> 
                                <span x-text="product.productVendor"></span>
                            </p>
                            <p class="text-success font-semibold" 
                               x-text="'Giá: ' + new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(product.buyPrice)">
                            </p>
                            <p class="text-base-content/70 text-sm line-clamp-2"
                               x-text="product.productDescription">
                            </p>
                        </div>
                        <div class="card-actions mt-4">
                            <button class="btn btn-primary w-full">Mua ngay</button>
                        </div>
                    </div>
                </div>
            </template>
        </div>


        <div x-show="products.length === 0" 
             class="text-center mt-10">
            <div class="alert alert-info shadow-lg max-w-md mx-auto">
                <span>Hiện tại chưa có sản phẩm nào để hiển thị</span>
            </div>
        </div>
    </div>
</body>
</html>