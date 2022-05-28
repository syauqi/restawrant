<x-guest-layout>

    <!-- ------------------------ Category Hero Section ------------------------ -->
    <div class="container">
        <div class="mt-4 mt-md-0 mb-3 bg-warning text-white rounded-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 p-5 my-auto align-center">
                        <h1 class="display-5 fw-bold">Kategori Makanan & Minuman Restawrant</h1>
                        <p class="col-md-10">
                            Cari kategori makanan dan minuman mu disini agar lebih mudah dicari, kalau udah ketemu
                            tinggal tekan tombol selengkapnya
                        </p>
                        <button class="btn btn-outline-light text-white px-4 fw-bold" type="button">
                            Lihat semua &nbsp; <i class="fas fa-arrow-down"></i>
                        </button>
                    </div>
                    <div class="col-md-4 my-auto p-0">
                        <img src="{{ url('images/landing-page/category-hero-images.png') }}"
                            class="img-fluid img-jumbotron d-none d-md-block" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------ Category Card Section ------------------------ -->
    <div class="container mt-4 mb-5">
        <div class="row g-3">
            @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card card-borderless-shadow card-min-height">
                        <img src="{{ Storage::url($category->image) }}" class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold"> {{ $category->name }}</h5>
                            <div class="category-card-description-wrapper">
                                <p class="card-text category-card-description" style="font-size: 13px;">
                                    {{ $category->description }}
                                </p>
                            </div>
                            <a href="{{ route('categories.show', $category->id) }}"
                                class="text-white fs-12 btn btn-warning mt-3">Selengkapnya ⇾</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-guest-layout>
