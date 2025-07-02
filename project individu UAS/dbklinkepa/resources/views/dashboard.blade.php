@include('template.top')
@include('template.navbar')
@include('template.sidebar')
<style>
    .hover-shadow:hover {
        transform: scale(1.03);
        transition: all 0.3s ease-in-out;
    }
</style>

<div class="content-wrapper">
    <section class="content pt-5 mt-5">
        <div class="container-fluid">

            {{-- Sapa User --}}
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="font-family: 'Segoe UI', sans-serif;">
                    👋 Hai, {{ Auth::user()->name }}!
                </h2>
                <p class="text-muted">Selamat datang di Dashboard <strong>Lara-Klinik</strong>. Semoga harimu menyenangkan yaa! 💖</p>
            </div>

            {{-- Kartu Statistik --}}
            <div class="row justify-content-center">

                <div class="col-md-3 mb-4">
                    <a href="{{ url('/pasien') }}" class="text-decoration-none text-white">
                        <div class="card bg-primary text-center shadow-lg rounded-4 h-100 hover-shadow">
                            <div class="card bg-primary text-white text-center shadow rounded hover-shadow">
                                <h5 class="card-title">Total Pasien</h5>
                                <h2 class="fw-bold">{{ $totalPasien }}</h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-4">
                    <a href="{{ url('/paramedik') }}" class="text-decoration-none text-white">
                        <div class="card bg-success text-center shadow-lg rounded-4 h-100 hover-shadow">
                            <div class="card-body">
                                <h5 class="card-title">Total Paramedik</h5>
                                <h2 class="fw-bold">{{ $totalParamedik }}</h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-4">
                    <a href="{{ url('/periksa') }}" class="text-decoration-none text-dark">
                        <div class="card bg-warning text-center shadow-lg rounded-4 h-100 hover-shadow">
                            <div class="card-body">
                                <h5 class="card-title">Total Periksa</h5>
                                <h2 class="fw-bold">{{ $totalPeriksa }}</h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-4">
                    <a href="{{ url('/unitkerja') }}" class="text-decoration-none text-white">
                        <div class="card bg-danger text-center shadow-lg rounded-4 h-100 hover-shadow">
                            <div class="card-body">
                                <h5 class="card-title">Total Unit Kerja</h5>
                                <h2 class="fw-bold">{{ $totalUnitKerja }}</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
</div>

@include('template.bottom')
