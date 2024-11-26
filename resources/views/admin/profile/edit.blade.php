<x-app-layout>

</x-app-layout>
    <div class="content bg-light">
        <div class="mb-9">
          <div class="row g-6">
            <div class="col-12 col-xl-4">
              <div class="card mb-5">
                <div class="card-header hover-actions-trigger position-relative mb-6" style="min-height: 130px; ">
                  <div class="bg-holder rounded-top" style="background-image: linear-gradient(0deg, #000000 -3%, rgba(0, 0, 0, 0) 83%), url(../../assets/img/generic/59.png)"><input class="d-none" id="upload-settings-cover-image" type="file" /><label class="cover-image-file-input" for="upload-settings-cover-image"></label>
                    <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white"><span class="fa-solid fa-camera me-2"></span></div>
                  </div><input class="d-none" id="upload-settings-porfile-picture" type="file" /><label class="avatar avatar-4xl status-online feed-avatar-profile cursor-pointer" for="upload-settings-porfile-picture"><img class="rounded-circle img-thumbnail bg-white shadow-sm" src="{{ Auth::user()->profile_photo_url }}" width="200" alt="{{ Auth::user()->name }}" /></label>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex flex-wrap mb-2 align-items-center">
                        <h3 class="me-2">{{ Auth::user()->name }}</h3><span class="fw-normal fs-0">u/{{ Auth::user()->name }}</span>
                      </div>
                      <div class="d-flex d-xl-block d-xxl-flex align-items-center">
                        <div class="d-flex mb-xl-2 mb-xxl-0"><span class="fa-solid fa-user-group fs--2 me-2 me-lg-1 me-xl-2"></span>
                          <h6 class="d-inline-block mb-0">1297<span class="fw-semi-bold ms-1 me-4">Followers</span></h6>
                        </div>
                        <div class="d-flex"><span class="fa-solid fa-user-check fs--2 me-2 me-lg-1 me-xl-2"></span>
                          <h6 class="d-block d-xl-inline-block mb-0">3971<span class="fw-semi-bold ms-1">Following</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="border-bottom border-dashed pb-3 mb-4">
                <h5 class="text-900 mb-3">Who will be able to see your profile?</h5>
                <div class="form-check"><input class="form-check-input" id="onlyMe" type="radio" checked="checked" name="profiileVisibility" /><label class="form-check-label fs-0" for="onlyMe">Only me</label></div>
                <div class="form-check"><input class="form-check-input" id="myFollowers" type="radio" name="profiileVisibility" /><label class="form-check-label fs-0" for="myFollowers">My followers</label></div>
                <div class="form-check"><input class="form-check-input" id="everyone" type="radio" name="profiileVisibility" /><label class="form-check-label fs-0" for="everyone">Everyone</label></div>
              </div>
              <div class="border-bottom border-dashed pb-3 mb-4">
                <h5 class="text-900 mb-3">Who can tag you?</h5>
                <div class="form-check"><input class="form-check-input" id="tagGroupMembers" type="radio" checked="checked" name="tagPermission" /><label class="form-check-label fs-0" for="tagGroupMembers">Group Members</label></div>
                <div class="form-check"><input class="form-check-input" id="tagEveryone" type="radio" name="tagPermission" /><label class="form-check-label fs-0" for="tagEveryone">Everyone</label></div>
              </div>
              <div class="border-bottom border-dashed pb-3 mb-4">
                <div class="form-check"><input class="form-check-input" id="showEmail" type="checkbox" name="showEmail" /><label class="form-check-label fs-0" for="showEmail">Allow users to show your email</label></div>
                <div class="form-check"><input class="form-check-input" id="showExperiences" type="checkbox" name="showExperiences" /><label class="form-check-label fs-0" for="showExperiences">Allow users to show your experiences</label></div>
                <div class="form-check"><input class="form-check-input" id="showFollowers" type="checkbox" checked="checked" name="showFollowers" /><label class="form-check-label fs-0" for="showFollowers">Allow users to show your followers</label></div>
              </div>
              <div class="mb-4">
                <div class="form-check form-switch"><input class="form-check-input" id="showPhone" type="checkbox" checked="checked" name="showPhone" /><label class="form-check-label fs-0" for="showPhone">Show your phone number</label></div>
                <div class="form-check form-switch"><input class="form-check-input" id="permitFollow" type="checkbox" checked="checked" name="permitFollow" /><label class="form-check-label fs-0" for="permitFollow">Permit users to follow you.</label></div>
              </div>
            </div>


            <div class="col-12 col-xl-8">
              <div class="border-bottom border-300 mb-4">
                <div class="row gx-3 mb-6 gy-6 gy-sm-3">

                  <div class="col-12 col-sm-6">
                    <form action="">
                    <h4 class="mb-4">Personal info</h4>
               
                    <div class="form-icon-container mb-3">
                      <div class="form-floating">
                        <input class="form-control form-icon-input" id="companyName" type="text" placeholder="Company Name" />
                        <label class="text-700 form-icon-label" for="companyName">Nombre</label></div><i class="fa-solid fa-building text-900 fs--1 form-icon"></i>
                    </div>
                    <div class="form-icon-container">
                      <div class="form-floating"><input class="form-control form-icon-input" id="website" type="text" placeholder="Website" />
                        <label class="text-700 form-icon-label" for="website">email</label></div><i class="fa-solid fa-globe text-900 fs--1 form-icon"></i>
                    </div>
                    <p>enviar verificacion de correo</p>
                    <button>Guardar</button>
                    </form>
                  </div>

             
                 
                  <div class="col-12 col-sm-6">
                    <form action="">
                    <h4 class="mb-4">Cambiar Contraseña</h4>
                    <div class="form-icon-container mb-3">
                      <div class="form-floating"><input class="form-control form-icon-input" id="oldPassword" type="password" placeholder="Old password" /><label class="text-700 form-icon-label" for="oldPassword">Old Password</label></div><span class="fa-solid fa-lock text-900 fs--1 form-icon"></span>
                    </div>
                    <div class="form-icon-container mb-3">
                      <div class="form-floating"><input class="form-control form-icon-input" id="newPassword" type="password" placeholder="New password" /><label class="text-700 form-icon-label" for="newPassword">New Password</label></div><span class="fa-solid fa-key text-900 fs--1 form-icon"></span>
                    </div>
                    <div class="form-icon-container">
                      <div class="form-floating"><input class="form-control form-icon-input" id="newPassword2" type="password" placeholder="Confirm New password" /><label class="text-700 form-icon-label" for="newPassword2">Confirm New Password</label></div><span class="fa-solid fa-key text-900 fs--1 form-icon"></span>
                    </div>
                    <button>Guardar</button>
                  </form>
                  </div>


                  
                </div>
                 <div class="mb-6">
                  <h4 class="mb-4">Datos adicionales</h4>
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



                <div class="row gx-3 mb-6 gy-6 gy-sm-3">
                  <div class="col-12 col-sm-6">
                    <h4 class="mb-4">Company Info</h4>
                    <div class="form-icon-container mb-3">
                      <div class="form-floating"><input class="form-control form-icon-input" id="companyName" type="text" placeholder="Company Name" /><label class="text-700 form-icon-label" for="companyName">COMPANY NAME</label></div><span class="fa-solid fa-building text-900 fs--1 form-icon"></span>
                    </div>
                    <div class="form-icon-container">
                      <div class="form-floating"><input class="form-control form-icon-input" id="website" type="text" placeholder="Website" /><label class="text-700 form-icon-label" for="website">Website</label></div><span class="fa-solid fa-globe text-900 fs--1 form-icon"></span>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <h4 class="mb-4">numero</h4>
                    <div class="form-icon-container mb-3">
                      <div class="form-floating"><input class="form-control form-icon-input" id="oldPassword" type="password" placeholder="Old password" /><label class="text-700 form-icon-label" for="oldPassword">Old Password</label></div><span class="fa-solid fa-lock text-900 fs--1 form-icon"></span>
                    </div>
                    <div class="form-icon-container mb-3">
                      <div class="form-floating"><input class="form-control form-icon-input" id="newPassword" type="password" placeholder="New password" /><label class="text-700 form-icon-label" for="newPassword">New Password</label></div><span class="fa-solid fa-key text-900 fs--1 form-icon"></span>
                    </div>
                    <div class="form-icon-container">
                      <div class="form-floating"><input class="form-control form-icon-input" id="newPassword2" type="password" placeholder="Confirm New password" /><label class="text-700 form-icon-label" for="newPassword2">Confirm New Password</label></div><span class="fa-solid fa-key text-900 fs--1 form-icon"></span>
                    </div>
                  </div>
                </div>
                <div class="mb-6">
                  <h4 class="mb-4">Social</h4>
                  <div class="row g-3">
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="facebook" type="text" placeholder="Facebook" /><label class="text-700 form-icon-label" for="facebook">Facebook</label></div><span class="fa-brands fa-facebook text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="twitter" type="text" placeholder="Twitter" /><label class="text-700 form-icon-label" for="twitter">Twitter</label></div><span class="fa-brands fa-twitter text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="linkedin" type="text" placeholder="Linkedin" /><label class="text-700 form-icon-label" for="linkedin">linkedin</label></div><span class="fa-brands fa-linkedin-in text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="youtube" type="text" placeholder="youtube" /><label class="text-700 form-icon-label" for="youtube">youtube</label></div><span class="fa-brands fa-youtube text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="artstation" type="text" placeholder="artstation" /><label class="text-700 form-icon-label" for="artstation">artstation</label></div><span class="fa-brands fa-artstation text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-icon-container">
                        <div class="form-floating"><input class="form-control form-icon-input" id="behance" type="text" placeholder="behance" /><label class="text-700 form-icon-label" for="behance">behance</label></div><span class="fa-brands fa-behance text-900 fs--1 form-icon"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-end mb-6">
                  <div><button class="btn btn-phoenix-secondary me-2">Cancel Changes</button><button class="btn btn-phoenix-primary">Save Information</button></div>
                </div>
              </div>
              <div class="row gy-5">
                <div class="col-12 col-md-6">
                  <h4 class="text-black">Transfer Ownership</h4>
                  <p class="text-700">Transfer this account to another person or to a company repository.</p><button class="btn btn-phoenix-warning">Transfer</button>
                </div>
                <div class="col-12 col-md-6">
                  <h4 class="text-black">Account Deletion</h4>
                  <p class="text-700">Transfer this account to another person or to a company repository.</p><button class="btn btn-phoenix-danger">Delete account</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">v1.13.0</p>
            </div>
          </div>
        </footer>
      </div>



      
  
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>
     
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
           
                    @livewire('profile.update-profile-information-form')
    
                    <x-jet-section-border />
                @endif
    
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>
    
                    <x-jet-section-border />
                @endif
    
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>
    
                    <x-jet-section-border />
                @endif
    
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
    
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-jet-section-border />
    
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>

    