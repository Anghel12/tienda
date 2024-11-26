<div class="mb-3 position-relative">

    <label class="" for="email"> 
        <h7>Favoritos:</h7>
    </label>
            <div class="p-2 list-group-item list-group-item-action d-flex justify-content-between align-items-center"
            wire:click="selectUser({{ Auth::user()->id }})" style="cursor: pointer;">
        <h6>Anghel</h6>
        <span class="badge bg-primary rounded-pill">Select</span>
        </div> 


    {{-- foto y nombre --}}
    @if($selectedUser)
    <div class="mt-2 p-2 bg-light border rounded">
        <strong>Busqueda Reciente:{{ $selectedUser->name }} ({{ $selectedUser->email }})</strong> 
        <span class="badge bg-primary rounded-pill">Agregar fav</span>
    </div>
    @endif


    <label class="" for="email"> 
        <h7>Email o Usuario:</h7>
    </label>

    <input type="text" class="form-control" placeholder="Buscar usuario..."
           wire:model.debounce.500ms="searchTerm" id="email" name="email" autocomplete="off">
    
    <!-- Ventana flotante de búsqueda -->
    @if(!empty($searchResults))
        <div class="position-absolute bg-white border rounded shadow p-2" style="width: 100%; max-height: 200px; overflow-y: auto; z-index: 10;">
        <!-- Información del usuario seleccionado -->
        @if($selectedUser)
        <div class="mt-2 p-2 bg-light border rounded">
            <strong>Busqueda Reciente:{{ $selectedUser->name }} ({{ $selectedUser->email }})</strong> 
            <span class="badge bg-primary rounded-pill">FAV</span>
        </div>
        @endif
            @foreach($searchResults as $user)
                <div class="p-2 list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                     wire:click="selectUser({{ $user->id }})" style="cursor: pointer;">
                    <h6>{{ $user->name }}</h6>
                    <span class="badge bg-primary rounded-pill">Select</span>
                </div> 
            @endforeach
        </div>
    @endif
    
</div>
