<x-guest-layout>

    <!-- ------------------------ Show Category Hero Section ------------------------ -->
    <section>
        <div class="container">
            <div class="mt-4 mt-md-0 mb-3 bg-warning text-white rounded-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 p-5 my-auto align-center">
                            <h1 class="display-5 fw-bold">Kategori — {{ $category->name }}</h1>
                            <p class="col-md-10">
                                {{ $category->description }}
                            </p>
                            <button class="btn btn-outline-light text-white px-4 fw-bold" type="button">
                                Lihat semua &nbsp; <i class="fas fa-arrow-down"></i>
                            </button>
                        </div>
                        <div class="col-md-4 my-auto p-0">
                            <img src="{{ Storage::url($category->image) }}"
                                class="img-fluid img-jumbotron d-none d-md-block" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Show Category Card Section ------------------------ -->
    <section>
        <div class="container mt-4 mb-5">
            <div class="row g-3">
                @foreach ($category->menus as $menu)
                    <div class="col-md-3">
                        <div class="card card-borderless-shadow card-min-height">
                            <img src="{{ Storage::url($menu->image) }}" class="card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold"> {{ $menu->name }}</h5>
                                <div class="category-card-description-wrapper">
                                    <p class="card-text category-card-description" style="font-size: 13px;">
                                        {{ $menu->description }}
                                    </p>
                                </div>
                                <hr>
                                <h5 class="fw-semibold">{{ $menu->price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-guest-layout>
