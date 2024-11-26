<div>
    <!-- Barra de búsqueda de usuario -->
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Buscar usuario..." wire:model="searchTerm" wire:keyup="searchUsers" />
        @if (!empty($users))
            <ul class="list-group mt-2">
                @foreach ($users as $user)
                    <li class="list-group-item d-flex justify-content-between align-items-center" wire:click="selectUser({{ $user['id'] }})" style="cursor: pointer;">
                        {{ $user['name'] }}
                        <span class="badge bg-primary rounded-pill">Seleccionar</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
   
    <!-- Contenido del chat -->
    <div class="chat-content" id="chatContent">
        <div class="card-body p-0" style="height: 300px; overflow-y: auto;">
            <div class="d-flex flex-column p-3" id="messageContainer">
                @foreach ($messages as $message)
                    <div class="mt-3 @if($message['from_id'] === $from_id) text-end @else text-start @endif">
                        <div class="mb-2 @if($message['from_id'] === $from_id) bg-dark @else bg-primary @endif   d-inline-flex align-items-cente rounded-pill  py-2 ps-4 pe-3" >
                            <p class="mb-0 fw-semi-bold fs--1 text-white">
                                {{ $message['body'] }}
                            </p>
                            @if($message['from_id'] === $from_id)
                                <span class="fas fa-paper-plane text-primary fs--1 ms-3"></span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Input de mensaje y botón de envío -->
    <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
        <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4 border-primary">
            <input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Escribir mensaje" wire:model="messageText" wire:keydown.enter="sendMessage" />
            <button class="btn p-0 border-0 send-btn" wire:click="sendMessage">
                <span class="fas fa-paper-plane fs--1"></span>
            </button>
        </div>
    </div>
</div>
