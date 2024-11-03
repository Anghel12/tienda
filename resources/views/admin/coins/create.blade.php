<x-guest-layout>
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.coins.index') }}">Page 1</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.coins.index') }}">Page 2</a></li>
            <li class="breadcrumb-item active">Config</li>
          </ol>
        </nav>
        <form action="{{ route('admin.coins.store') }}" method="post">
            @csrf
          
            <div class="mb-6">
                <h4 class="mb-4">Configuración</h4>
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <div class="form-icon-container">
                            <div class="form-floating">
                                <input class="form-control form-icon-input" id="name" name="name" type="text" placeholder="First Name" required />
                                <label class="text-700 form-icon-label" for="name">NAME</label>
                            </div>
                            <span class="fa-solid fa-user text-900 fs--1 form-icon"></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-icon-container">
                            <div class="form-floating">
                                <input class="form-control form-icon-input" id="symbol" name="symbol" type="text" placeholder="Symbol" required />
                                <label class="text-700 form-icon-label" for="symbol">Symbol</label>
                            </div>
                            <span class="fa-solid fa-user text-900 fs--1 form-icon"></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-icon-container">
                            <div class="form-floating">
                                <input class="form-control form-icon-input" id="exchange_rate" name="exchange_rate" type="number" step="0.01" placeholder="Exchange Rate" required />
                                <label class="text-700 form-icon-label" for="exchange_rate">Exchange Rate</label>
                            </div>
                            <span class="fa-solid fa-user text-900 fs--1 form-icon"></span>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-guest-layout>
