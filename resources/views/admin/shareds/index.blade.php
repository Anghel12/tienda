<x-guest-layout>
  <div class="content">
      <h2 class="mb-2 lh-sm">Codigo de Referido</h2>
      <p class="text-700 lead mb-2">Get vector icons and social logos on your website with Font Awesome, the web's most popular icon set and toolkit.</p><a class="btn btn-link p-0" href="/" target="_blank">Font Awesome Documentation<span class="ms-1" data-feather="chevron-right"></span></a>
      <div class="mb-9">
{{--           <div class="card shadow-none border border-300 my-5" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom border-300 bg-soft">
            <div class="row g-3 justify-content-between align-items-end">
              <div class="col-12 col-md">
                <h4 class="text-900 mb-0" data-anchor="data-anchor">Example</h4>
                <p class="mb-0 mt-2 text-800">You can use these icons with color and font-size helper classes like the example below:</p>
              </div>
              <div class="col col-md-auto">
                <nav class="nav nav-underline justify-content-end doc-tab-nav align-items-center" role="tablist"><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="font-awesome.html#example-code" role="button" aria-controls="example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;fas fa-bell text-danger fs-5&quot;&gt;&lt;/span&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy"><span class="fas fa-bell text-danger fs-5"></span></div>
          </div>
        </div> --}}
        <div class="card border border-300 mb-3">
          <div class="card-body">
            <div class="row list" id="icon-list">
              <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">far fa-address-book</span>
                <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-3 far fa-address-book"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-dark bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="far fa-address-book" /></div>
              </div>

   
            </div>
          </div>
        </div>
      </div>
      <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body p-3"></div><button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
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
</x-guest-layout>


<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Reports') }}</div>

          <div class="card-body">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Plataforma</th>
                        <th>Usuario</th>
                        <th>URL</th>
                        <th>Conteo</th>
                        <th>Activo</th>
                        <th>Etiquetas</th>
                        <th>Tipo</th>
                        <th>Vistas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shareds as $shared)
                        <tr>
                            <td>{{ $shared->titulo }}</td>
                            <td>{{ $shared->descripcion }}</td>
                            <td>{{ $shared->plataforma }}</td>
                            <td>{{ $shared->user->name }}</td>
                            <td>{{ $shared->url }}</td>
                            <td>{{ $shared->conteo }}</td>
                            <td>{{ $shared->activo ? 'Sí' : 'No' }}</td>
                            <td>{{ $shared->etiquetas }}</td>
                            <td>{{ $shared->tipo }}</td>
                            <td>{{ $shared->vistas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


