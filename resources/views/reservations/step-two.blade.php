<x-guest-layout>

    <!-- ------------------------   Reservation Step Two Form Section ------------------------ -->
    <section class="my-5">
        <div class="container">
            <div class="row my-4 mx-1">
                <div
                    class="
                col-md-12
                mx-auto
                bg-warning
                text-white
                p-md-5 p-4
                shadow-lg
                rounded-3
              ">
                    <small>RESERVASI RESTAWRANT</small>
                    <h1 class="fw-bold">Reservasi tempat meja di Restawrant</h1>
                    <p>Pilih meja tempat anda reservasi tempat di Restawrant</p>
                    <hr />
                    <form method="POST" action="{{ route('reservations.store.step.two') }}" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                            <label for="jenis_kelamin_input" class="form-label">Pilih Meja</label>
                            <select name="table_id" id="jenis_kelamin_input" class="form-select">
                                <option selected>Pilih Meja ...</option>
                                @forelse ($tables as $table)
                                    <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                        {{ $table->name }}
                                        ({{ $table->guest_number }} Guests)
                                    </option>
                                @empty
                                    <option value="">
                                        Tidak ada meja yang tersedia :()
                                    </option>
                                @endforelse
                            </select>
                            @error('table_id')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-12 mx-auto mt-4 text-center">
                            <p class="text-center col-md-8 mx-auto">
                                Dengan menekan tombol 'buat reservasi' berarti anda menyatakan setuju dan siap
                                bertanggung jawab atas reservasi yang anda telah buat
                            </p>
                            <a href="{{ route('reservations.step.one') }}"
                                class="btn btn-outline-light text-white px-5 py-2 fw-bold me-3">
                                <i class="fas fa-arrow-left"></i> &nbsp; Sebelumnya
                            </a>
                            <button type="submit" class="btn btn-outline-light text-white px-5 py-2 fw-bold">
                                Buat Reservasi &nbsp; <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
