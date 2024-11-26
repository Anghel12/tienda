
<x-guest-layout>

  <div class="content">
    <nav class="mb-2" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="faq-accordion.html#!">Pages</a></li>
        <li class="breadcrumb-item active">Faq</li>
      </ol>
    </nav>
    <h2 class="mb-5">FAQ</h2>
    <h5 class="mb-3">How can we help?</h5>
    <p class="text-700">Search for the topic you need help with or <a href="faq-accordion.html#!">contact our support</a></p>
    <div class="search-box mb-8 w-100" style="max-width:25rem;">
      <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search" aria-label="Search" />
        <span class="fas fa-search search-box-icon"></span>
      </form>
    </div>
    <div class="accordion">
      <div class="accordion-item border-top border-300">
        <h2 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">What’s your return policy?</button></h2>
        <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body pt-0">At the time of shipment, we assure that your product will be free of defects in materials and workmanship and will conform to the specifications outlined on the lot-specific datasheet included with the product. Please contact our technical support services if you have a technical issue with a product :<a href="mailto:phoenix@email.com">Email: phoenix@support.com.</a>If the team concludes that the product does not adhere to the requirements mentioned on the datasheet, we will provide a free replacement or a full refund of the product's invoice price.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">I ordered the wrong product. <br class="d-sm-none" />What should I do?</button></h2>
        <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body pt-0">We would consider accepting the return of the merchandise, subject to an 20% restocking fee plus any shipping and handling fees. The customer is liable for shipping costs for both the returned product and the new replacement product, both to and from our facility. All returns require prior authorisation from us and must be mailed back to us within seven business days of receiving the goods. Products must be returned in the same or equivalent packing (i.e., cold and insulated) in which they were shipped (i.e., cold and insulated). Once we get the item, we will ship out the replacement item.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">How do I cancel my order?</button></h2>
        <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body pt-0">If you must cancel your order, please call <a href="tel:+871406-7509">(871) 406-7509</a> Please note that we attempt to process and dispatch orders the same day (if received before 1pm PST), and once your product has shipped, our return policy will apply.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">What are your shipping &amp; <br class="d-sm-none" />handling charges?</button></h2>
        <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body pt-0">Our handling fee is a flat rate of $20. The shipping costs vary depending on your location and the items you've purchased. For an exact shipping cost estimate, please proceed through the checkout process and enter your items and address.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne">Do you accept purchase orders?</button></h2>
        <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body pt-0">Yes. Please include your purchase order number at online checkout, or clearly label it on a faxed or emailed purchase order. Please give the relevant email or mailing address for your accounts payable department so that the invoice can be sent to the appropriate location.</div>
        </div>
      </div>
    </div>
    <div class="text-center py-11">
      <h3 class="text-black">Still can’t find your answer?</h3>
      <p class="text-900">We are happy to help</p><button class="btn btn-sm btn-outline-primary btn-support-chat"><span class="fas fa-comment me-2"></span>Chat with us</button>
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

  <div class="card">
    <table id="usersTable" class="table table-striped">
        <thead>
          <tr>
            <th>Usuaio</th>
            <th>ID</th>
            <th>titulo</th>
            <th>cuerpo</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($home_helps as $home_help)
            <tr>
              <td> creado{{-- {{ $imagen->createdBy->name }} --}}</td>
              <td>{{ $home_help->id }}</td>
              <td>{{ $home_help->tittle }}</td>
              <td>{!!  $home_help->body !!}</td>
              <td width="10px" >
               
              <a class="btn btn-primary btn-sm" href=" {{route('admin.home_helps.edit', $home_help)}} ">EDITAR</a>
            <form action="{{route('admin.home_helps.destroy', $home_help)}}" method="POST">
                @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm"> ELIMINAR</button>
            </form>

            
        </td> 
            </tr>
          @endforeach
        </tbody>
      </table>
      
   </div>
</x-guest-layout>


