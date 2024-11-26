<div>



    <!-- Botón para abrir/cerrar la ventana flotante en la esquina inferior derecha -->

<button class="btn bg-gradient-info me-1 mb-0  btn-open-chat rounded-pill" id="openChatButton">Chat Admin</button>

<!-- Ventana flotante en la esquina inferior derecha -->
<div class="chat-window" id="chatWindow">
<!-- Encabezado del chat -->
<div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
    <h5 class="mb-0 d-flex align-items-center gap-2">Chat Admin <i class="fa-solid fa-circle text-success fs--3"></i></h5>
    <div class="btn-reveal-trigger">
        <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" 
                id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
            <i class="fas fa-ellipsis-h text-900"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown">
            <a class="dropdown-item" href="#!">Request a callback</a>
            <a class="dropdown-item" href="#!">Search in chat</a>
            <a class="dropdown-item" href="#!">Show history</a>
            <a class="dropdown-item" href="#!">Report to Admin</a>
            <a class="dropdown-item btn-support-chat" href="#!">Close Support</a>
        </div>
    </div>
    <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" id="openChatButton">X</button>
</div>

@auth
@livewire('support-chat' , ['to_id' => 26])
@else
    
<div class="chat-content"> 
    <div class="card-body p-0">
        <div class="d-flex flex-column-reverse scrollbar p-3">
          
            <div class="text-end mt-6">
                <a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#">
                    <p class="mb-0 fw-semi-bold fs--1">I need help with something</p>
                    <span class="fas fa-paper-plane text-primary fs--1 ms-3"></span>
                </a>
            </div>
            
      
            <div class="text-center mt-auto">
                <div class="avatar avatar-3xl status-online">
                    <img class="rounded-circle border border-3 border-white" src="{{ Auth::user()->profile_photo_url ?? 'Admin' }}" alt="User" />
                </div>
                <h5 class="mt-2 mb-3">Admin</h5>
                <p class="text-center text-black mb-0">¿Necesitas ayuda?</p>
            </div>
        </div>
    </div>
</div>

    <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
        <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4 border-primary">
            <input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" />
            <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos">
                <span class="fas fa-image"></span>
            </label>
            <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
            <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment">
                <span class="fas fa-paperclip"></span>
            </label>
            <input class="d-none" type="file" id="supportChatAttachment" />
        </div>
        <button class="btn p-0 border-0 send-btn">
            <span class="fas fa-paper-plane fs--1"></span>
        </button>
    </div>
    @endauth
</div>







<!-- Script para el desplazamiento automático -->
<script>
document.addEventListener('livewire:load', function () {
    Livewire.hook('message.processed', (message, component) => {
        let messageContainer = document.getElementById('messageContainer');
        messageContainer.scrollTop = messageContainer.scrollHeight;
    });
});
</script>





</div>

<!-- Script para el desplazamiento automático -->
<script>
document.addEventListener('livewire:load', function () {
    Livewire.hook('message.processed', (message, component) => {
        let messageContainer = document.getElementById('messageContainer');
        messageContainer.scrollTop = messageContainer.scrollHeight;
    });
});
</script>
<style>
/* chat */
/* Botón en la esquina inferior derecha */
.btn-open-chat {
position: fixed;
bottom: 20px;
right: 20px;
background-color: #007bff;
color: #fff;
padding: 10px 20px;
border: none;
border-radius: 5px;
cursor: pointer;
font-size: 16px;
z-index: 1000;
}

/* Ventana de chat en la esquina inferior derecha */
.chat-window {
position: fixed;
bottom: 70px; /* Ajustado para estar encima del botón */
right: 20px;
width: 500px;
max-height: 500px;
background-color: #fff;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
border-radius: 10px;
display: none; /* Oculto por defecto */
z-index: 1000;
flex-direction: column;
opacity: 0;
transform: translateY(20px);
transition: opacity 0.3s ease, transform 0.3s ease; /* Transición suave */
}

/* Estado de visibilidad para el chat */
.chat-window.show {
display: flex;
opacity: 1;
transform: translateY(0);
}

/* Estilos para el encabezado, contenido y pie de la ventana de chat */
.chat-header {
background-color: #343a40;
color: #fff;
padding: 10px;
display: flex;
justify-content: space-between;
align-items: center;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
}

.chat-header span {
font-weight: bold;
}

.btn-close-chat {
background: none;
border: none;
color: #fff;
font-size: 20px;
cursor: pointer;
}

.chat-content {
padding: 10px;
overflow-y: auto;
flex-grow: 1;
}

.chat-footer {
display: flex;
border-top: 1px solid #ddd;
}

.chat-footer input[type="text"] {
flex-grow: 1;
border: none;
padding: 10px;
border-bottom-left-radius: 10px;
}

.chat-footer .send-btn {
background-color: #007bff;
border: none;
color: #fff;
padding: 10px 15px;
border-bottom-right-radius: 10px;
cursor: pointer;
}

#messageContainer {
    max-height: 300px; /* Ajusta la altura según sea necesario */
    overflow-y: auto; /* Habilita el scroll vertical */
}

</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const openChatButton = document.getElementById('openChatButton');
    const chatWindow = document.getElementById('chatWindow');

    // Mostrar/ocultar la ventana de chat al hacer clic en el botón de chat
    openChatButton.addEventListener('click', function () {
        chatWindow.classList.toggle('show');
    });
});


</script>






{{-- 
<button class="btn bg-gradient-info me-1 mb-0  btn-open-chat rounded-pill" id="openChatButton">Chat Admin</button>
<div class="chat-window" id="chatWindow">
<div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
    <h5 class="mb-0 d-flex align-items-center gap-2">Chat Admin<i class="fa-solid fa-circle text-success fs--3"></i></h5>
    <div class="btn-reveal-trigger">
        <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" 
        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
         data-bs-reference="parent"><i class="fas fa-ellipsis-h text-900"></i>
        </button>
      <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="index.html#!">Request a callback</a><a class="dropdown-item" href="index.html#!">Search in chat</a><a class="dropdown-item" href="index.html#!">Show history</a><a class="dropdown-item" href="index.html#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="index.html#!">Close Support</a></div>
    </div>
          <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex " id="openChatButton">X
        </button>
  </div>

  <div class="chat-content"> 
    <div class="card-body p-0">
        <div class="d-flex flex-column-reverse scrollbar p-3">
          
            <div class="text-end mt-6">
                <a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#">
                    <p class="mb-0 fw-semi-bold fs--1">I need help with something</p>
                    <span class="fas fa-paper-plane text-primary fs--1 ms-3"></span>
                </a>
            </div>
            
      
            <div class="text-center mt-auto">
                <div class="avatar avatar-3xl status-online">
                    <img class="rounded-circle border border-3 border-white" src="{{ Auth::user()->profile_photo_url ?? 'Admin' }}" alt="User" />
                </div>
                <h5 class="mt-2 mb-3">Admin</h5>
                <p class="text-center text-black mb-0">¿Necesitas ayuda?</p>
            </div>
        </div>
    </div>
</div>

    <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
        <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4 border-primary">
            <input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" />
            <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos">
                <span class="fas fa-image"></span>
            </label>
            <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
            <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment">
                <span class="fas fa-paperclip"></span>
            </label>
            <input class="d-none" type="file" id="supportChatAttachment" />
        </div>
        <button class="btn p-0 border-0 send-btn">
            <span class="fas fa-paper-plane fs--1"></span>
        </button>
    </div>

</div> --}}