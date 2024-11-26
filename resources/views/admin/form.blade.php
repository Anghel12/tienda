<x-guest-layout>
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="products.html#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="products.html#!">Page 2</a></li>
            <li class="breadcrumb-item active">Config</li>
          </ol>
        </nav>
           <form action="" method="post">
                <div class="mb-6">
                  <h4 class="mb-4">Configuración</h4>
                  <div class="row g-3">
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="firstName" type="text" placeholder="First Name" /><label class="text-700 form-icon-label" for="firstName">FIRST NAME</label></div><span class="fa-solid fa-user text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="lastName" type="text" placeholder="Last Name" /><label class="text-700 form-icon-label" for="lastName">LAST NAME</label></div><span class="fa-solid fa-user text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="emailSocial" type="email" placeholder="Email" /><label class="text-700 form-icon-label" for="emailSocial">ENTER YOUR EMAIL</label></div><span class="fa-solid fa-envelope text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="phone" type="tel" placeholder="Phone" /><label class="text-700 form-icon-label" for="phone">ENTER YOUR PHONE</label></div><span class="fa-solid fa-phone text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><textarea class="form-control form-icon-input" id="info" style="height: 115px;" placeholder="Info"></textarea><label class="text-700 form-icon-label" for="info">Info</label></div><span class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
      </div>
  </x-guest-layout>
