<div class="page-header min-vh-100">
  <div class="position-absolute fixed-top ms-auto w-50 h-100 rounded-3 z-index-0 d-none d-sm-none d-md-block me-n4"
    style="background-image: url('../assets/img/ivancik.jpg'); background-size: cover;">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 d-flex justify-content-center flex-column">
        <div class="card card-body d-flex justify-content-center shadow-lg p-sm-5 blur align-items-center">
          <h3 class="text-center">Contact us</h3>
          @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      
      @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      


          <form id="contact-form" method="post" action="{{ route('admin.home_contact.store') }}" autocomplete="on">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <label>Nombre Completo</label>
                        <div class="input-group mb-4">
                            <input class="form-control" name="name" placeholder="eg. Michael" aria-label="First Name..." type="text" required>
                        </div>
                    </div>
   
                </div>
                <div class="mb-4">
                    <label>Correo</label>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="eg. soft@design.com" required>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Asunto</label>
                    <div class="input-group">
                        <input type="text" name="subject" class="form-control" placeholder="eg. Inquiry" required>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Mensaje</label>
                    <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-check form-switch mb-4">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked required>
                            <label class="form-check-label" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
                    </div>
                </div>
            </div>
        </form>
        



        </div>
      </div>
    </div>
  </div>
</div>