
<x-guest-layout>
 
    <div class="content pt-0">
        <div class="email-container">
          <div class="row gx-lg-6 gx-3 py-4 z-index-2 position-sticky bg-soft email-header">
            <div class="col-auto"><a class="btn btn-primary email-sidebar-width d-none d-lg-block" href="compose.html">Compose</a><button class="btn px-3 btn-phoenix-secondary text-700 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#emailSidebarColumn"><span class="fa-solid fa-bars"></span></button></div>
            <div class="col-auto d-lg-none"><a class="btn btn-primary px-3 px-sm-4" href="compose.html"> <span class="d-none d-sm-inline-block">Compose</span><span class="d-sm-none fas fa-plus"></span></a></div>
            <div class="col-auto flex-1">
              <div class="search-box w-100">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search ..." aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
          </div>
          <div class="row g-lg-6 mb-8">
            <div class="col-lg-auto">
              <div class="email-sidebar email-sidebar-width bg-soft phoenix-offcanvas phoenix-offcanvas-fixed" id="emailSidebarColumn">
                <div class="email-content scrollbar-overlay">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="text-uppercase fs--2 text-600 mb-2 fw-bold">mailbox</p><button class="btn d-lg-none p-0 mb-2" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-0"></span></button>
                  </div>
                  <ul class="nav flex-column border-top fs--1 vertical-nav mb-4">
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="inbox.html">
                        <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-inbox"></span><span class="flex-1">Inbox</span><span class="nav-item-count">5</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none active" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-location-arrow"></span><span class="flex-1">Sent</span><span class="nav-item-count">23</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-pen"></span><span class="flex-1">Draft</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-exclamation-circle"></span><span class="flex-1">Spam</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-trash"></span><span class="flex-1">Trash</span></div>
                      </a></li>
                  </ul>
                  <div class="d-flex justify-content-between">
                    <p class="text-uppercase fs--2 text-600 mb-2 fw-bold">Filtered</p><a class="fs--2 fw-bold" href="email-detail.html#!"><span class="fa-solid fa-plus me-2"></span>Add Folder</a>
                  </div>
                  <ul class="nav flex-column border-top fs--1 vertical-nav mb-4">
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-star"></span><span class="flex-1">Starred</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-archive"></span><span class="flex-1">Archive</span></div>
                      </a></li>
                  </ul>
                  <div class="d-flex justify-content-between">
                    <p class="text-uppercase fs--2 text-600 mb-2 fw-bold">Labels</p><a class="fs--2 fw-bold" href="email-detail.html#!"><span class="fa-solid fa-plus me-2"></span>Add Label</a>
                  </div>
                  <ul class="nav flex-column border-top fs--1 vertical-nav">
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-primary" data-fa-transform="shrink-10"></span><span class="flex-1">Personal</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-primary-600" data-fa-transform="shrink-10"></span><span class="flex-1">Work</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-success" data-fa-transform="shrink-10"></span><span class="flex-1">Payments</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-warning" data-fa-transform="shrink-10"></span><span class="flex-1">Invoices</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-danger" data-fa-transform="shrink-10"></span><span class="flex-1">Accounts</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="email-detail.html#!">
                        <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-info" data-fa-transform="shrink-10"></span><span class="flex-1">Forums</span></div>
                      </a></li>
                  </ul>
                </div>
              </div>
              <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop="data-phoenix-backdrop" style="top: 0;"></div>
            </div>
            <div class="col-3 d-none d-xxl-block">
              <div class="email-content scrollbar">
                <div class="px-lg-1">
                  <div class="d-flex align-items-center flex-wrap position-sticky pb-2 bg-soft z-index-2 email-toolbar">
                    <div class="d-flex align-items-center flex-1 me-2"><button class="btn btn-sm p-0 me-2" type="button" onclick="location.reload()"><span class="text-primary fas fa-redo fs--2"></span></button>
                      <p class="fw-semi-bold fs--2 text-600 mb-0 lh-sm text-nowrap">Last refreshed 1m ago</p>
                    </div>
                    <div class="d-flex">
                      <p class="text-600 fs--1 fw-semi-bold mb-0 me-3"> <span class="text-900">1-7 </span>of <span class="text-900">205</span></p><button class="btn p-0 me-3" type="button"><span class="text-500 fa-solid fa-angle-left fs--2"></span></button><button class="btn p-0" type="button"><span class="text-primary fa-solid fa-angle-right fs--2"></span></button>
                    </div>
                  </div>
                  <div class="border-top border-200 py-2 d-flex justify-content-between">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="data-bulk-select-row" /></div>
                    <div><button class="btn p-0 me-2 text-500 hover-text-600" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive"><span class="fas fa-archive fs--2"></span></button><button class="btn p-0 me-2 text-500 hover-text-600" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><span class="fas fa-trash fs--2"></span></button><button class="btn p-0 me-2 text-500 hover-text-600" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Star"><span class="fas fa-star fs--2"></span></button><button class="btn p-0 text-500 hover-text-600" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tags"><span class="fas fa-tag fs--2"></span></button></div>
                  </div>
                  <div class="border-top border-200 hover-actions-trigger py-3">
                    <div class="row align-items-sm-center gx-2">
                      <div class="col-auto">
                        <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-1" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="fas text-warning fa-star"></span></button></div>
                      </div>
                      <div class="col-auto">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/60.webp" alt="" />
                        </div>
                      </div>
                      <div class="col-auto"><a class="text-1100 fw-bold inbox-link fs--1" href="email-detail.html">Jessica Ball</a></div>
                      <div class="col-auto ms-auto">
                        <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="email-detail.html#!">Mark Unread</a><a class="dropdown-item" href="email-detail.html#!">Mark Important</a><a class="dropdown-item" href="email-detail.html#!">Archive</a><a class="dropdown-item" href="email-detail.html#!">Download</a><a class="dropdown-item" href="email-detail.html#!">Print</a><a class="dropdown-item" href="email-detail.html#!">Report Spam</a><a class="dropdown-item" href="email-detail.html#!">Report Phishing</a><a class="dropdown-item" href="email-detail.html#!">Mute Jessica Ball</a><a class="dropdown-item" href="email-detail.html#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="email-detail.html#!">Delete</a></div>
                        </div><span class="fs--2 fw-bold">1 M</span>
                      </div>
                    </div>
                    <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1100">Query about purchased soccer socks</span>
                        <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Greetings. I have purchased some socks under the bundle offer you availed this week. According to the offer I was thrilled to get a 25% off of any product I bought. Regardless, I had to pay the exact full price for them...</p>
                      </a></div>
                  </div>
                  <div class="border-top border-200 hover-actions-trigger py-3">
                    <div class="row align-items-sm-center gx-2">
                      <div class="col-auto">
                        <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-2" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="far text-300 fa-star"></span></button></div>
                      </div>
                      <div class="col-auto">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../../assets/img/team/58.webp" alt="" />
                        </div>
                      </div>
                      <div class="col-auto"><a class="text-1100 fw-bold inbox-link fs--1" href="email-detail.html">Danny Reid</a></div>
                      <div class="col-auto ms-auto">
                        <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="email-detail.html#!">Mark Unread</a><a class="dropdown-item" href="email-detail.html#!">Mark Important</a><a class="dropdown-item" href="email-detail.html#!">Archive</a><a class="dropdown-item" href="email-detail.html#!">Download</a><a class="dropdown-item" href="email-detail.html#!">Print</a><a class="dropdown-item" href="email-detail.html#!">Report Spam</a><a class="dropdown-item" href="email-detail.html#!">Report Phishing</a><a class="dropdown-item" href="email-detail.html#!">Mute Jessica Ball</a><a class="dropdown-item" href="email-detail.html#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="email-detail.html#!">Delete</a></div>
                        </div><span class="fs--2 fw-bold">3 M</span>
                      </div>
                    </div>
                    <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1100">How to take the headache out of Order</span>
                        <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Hello! As I've mentioned before, we have this huge order deals to ship within this month. Also, the financial report is attached to this email. Hopefully, you'll find it useful for the company.</p>
                      </a><a class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-2 inbox-link" href="email-detail.html#!"><span class="fas fa-file-pdf text-warning fs--1"></span><span class="ms-2 fw-bold fs--2 text-900">Financial_Reports.pdf</span></a><a class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-2 inbox-link" href="email-detail.html#!"><span class="fas fa-file-zipper text-warning fs--1"></span><span class="ms-2 fw-bold fs--2 text-900">Frame20.zip</span></a></div>
                  </div>
                  <div class="border-top border-200 hover-actions-trigger py-3">
                    <div class="row align-items-sm-center gx-2">
                      <div class="col-auto">
                        <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-3" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="fas text-warning fa-star"></span></button></div>
                      </div>
                      <div class="col-auto">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                        </div>
                      </div>
                      <div class="col-auto"><a class="text-900 fw-semi-bold inbox-link fs--1" href="email-detail.html">Harley Brown</a></div>
                      <div class="col-auto ms-auto">
                        <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="email-detail.html#!">Mark Unread</a><a class="dropdown-item" href="email-detail.html#!">Mark Important</a><a class="dropdown-item" href="email-detail.html#!">Archive</a><a class="dropdown-item" href="email-detail.html#!">Download</a><a class="dropdown-item" href="email-detail.html#!">Print</a><a class="dropdown-item" href="email-detail.html#!">Report Spam</a><a class="dropdown-item" href="email-detail.html#!">Report Phishing</a><a class="dropdown-item" href="email-detail.html#!">Mute Jessica Ball</a><a class="dropdown-item" href="email-detail.html#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="email-detail.html#!">Delete</a></div>
                        </div><span class="fs--2">5 M</span>
                      </div>
                    </div>
                    <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1000">The Arnold Schwarzenegger of Order</span>
                        <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">I’ve come across your posts and found some favorable deals on your page. I’ve added a load of products to the cart and I don’t know the payment options you avail. Also, can you enlighten me about any discount or...</p>
                      </a></div>
                  </div>
                  <div class="border-top border-200 hover-actions-trigger py-3">
                    <div class="row align-items-sm-center gx-2">
                      <div class="col-auto">
                        <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-4" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="far text-300 fa-star"></span></button></div>
                      </div>
                      <div class="col-auto">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/59.webp" alt="" />
                        </div>
                      </div>
                      <div class="col-auto"><a class="text-1100 fw-bold inbox-link fs--1" href="email-detail.html">Hollie Stephens</a></div>
                      <div class="col-auto ms-auto">
                        <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="email-detail.html#!">Mark Unread</a><a class="dropdown-item" href="email-detail.html#!">Mark Important</a><a class="dropdown-item" href="email-detail.html#!">Archive</a><a class="dropdown-item" href="email-detail.html#!">Download</a><a class="dropdown-item" href="email-detail.html#!">Print</a><a class="dropdown-item" href="email-detail.html#!">Report Spam</a><a class="dropdown-item" href="email-detail.html#!">Report Phishing</a><a class="dropdown-item" href="email-detail.html#!">Mute Jessica Ball</a><a class="dropdown-item" href="email-detail.html#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="email-detail.html#!">Delete</a></div>
                        </div><span class="fs--2 fw-bold">8 M</span>
                      </div>
                    </div>
                    <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1100">My order is not being taken</span>
                        <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Hello. I’m knocking to let you know that I am trying to place some orders on your site. But my orders are not being taken, maybe it’s technical issues. Can you help me with it as I really need the products I am trying to...</p>
                      </a></div>
                  </div>
                  <div class="border-top border-200 hover-actions-trigger py-3">
                    <div class="row align-items-sm-center gx-2">
                      <div class="col-auto">
                        <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-5" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="fas text-warning fa-star"></span></button></div>
                      </div>
                      <div class="col-auto">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle avatar-placeholder" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/avatar.webp" alt="" />
                        </div>
                      </div>
                      <div class="col-auto"><a class="text-900 fw-semi-bold inbox-link fs--1" href="email-detail.html">Natasha West</a></div>
                      <div class="col-auto ms-auto">
                        <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="email-detail.html#!">Mark Unread</a><a class="dropdown-item" href="email-detail.html#!">Mark Important</a><a class="dropdown-item" href="email-detail.html#!">Archive</a><a class="dropdown-item" href="email-detail.html#!">Download</a><a class="dropdown-item" href="email-detail.html#!">Print</a><a class="dropdown-item" href="email-detail.html#!">Report Spam</a><a class="dropdown-item" href="email-detail.html#!">Report Phishing</a><a class="dropdown-item" href="email-detail.html#!">Mute Jessica Ball</a><a class="dropdown-item" href="email-detail.html#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="email-detail.html#!">Delete</a></div>
                        </div><span class="fs--2">20 M</span>
                      </div>
                    </div>
                    <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1000">Shipment is missing</span>
                        <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Greetings! I’ve got an email saying I was to get the products yesterday. But got a call instead saying the shipment was misplaced. Can you put some light on it? Really need the products.</p>
                      </a></div>
                  </div>
                  <div class="border-top border-200 hover-actions-trigger py-3">
                    <div class="row align-items-sm-center gx-2">
                      <div class="col-auto">
                        <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-6" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="fas text-warning fa-star"></span></button></div>
                      </div>
                      <div class="col-auto">
                        <div class="avatar avatar-s ">
                          <div class="avatar-name rounded-circle"><span>R</span></div>
                        </div>
                      </div>
                      <div class="col-auto"><a class="text-900 fw-semi-bold inbox-link fs--1" href="email-detail.html">Max Williamson</a></div>
                      <div class="col-auto ms-auto">
                        <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="email-detail.html#!">Mark Unread</a><a class="dropdown-item" href="email-detail.html#!">Mark Important</a><a class="dropdown-item" href="email-detail.html#!">Archive</a><a class="dropdown-item" href="email-detail.html#!">Download</a><a class="dropdown-item" href="email-detail.html#!">Print</a><a class="dropdown-item" href="email-detail.html#!">Report Spam</a><a class="dropdown-item" href="email-detail.html#!">Report Phishing</a><a class="dropdown-item" href="email-detail.html#!">Mute Jessica Ball</a><a class="dropdown-item" href="email-detail.html#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="email-detail.html#!">Delete</a></div>
                        </div><span class="fs--2">30 M</span>
                      </div>
                    </div>
                    <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1000">How can I order something urgently?</span>
                        <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">I saw your promotion on 25% sales. Do you avail emergency orders and urgent shipments? If you do, I need to place some orders. Please reply, thanks.</p>
                      </a><a class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-2 inbox-link" href="email-detail.html#!"><span class="fa-solid fa-music text-primary fs--1"></span><span class="ms-2 fw-bold fs--2 text-900">syllabus</span></a></div>
                  </div>
                  <div class="border-top border-200 hover-actions-trigger pt-3">
                    <div class="row align-items-sm-center gx-2">
                      <div class="col-auto">
                        <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-7" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="far text-300 fa-star"></span></button></div>
                      </div>
                      <div class="col-auto">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/30.webp" alt="" />
                        </div>
                      </div>
                      <div class="col-auto"><a class="text-900 fw-semi-bold inbox-link fs--1" href="email-detail.html">Ethan Hawkins</a></div>
                      <div class="col-auto ms-auto">
                        <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="email-detail.html#!">Mark Unread</a><a class="dropdown-item" href="email-detail.html#!">Mark Important</a><a class="dropdown-item" href="email-detail.html#!">Archive</a><a class="dropdown-item" href="email-detail.html#!">Download</a><a class="dropdown-item" href="email-detail.html#!">Print</a><a class="dropdown-item" href="email-detail.html#!">Report Spam</a><a class="dropdown-item" href="email-detail.html#!">Report Phishing</a><a class="dropdown-item" href="email-detail.html#!">Mute Jessica Ball</a><a class="dropdown-item" href="email-detail.html#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="email-detail.html#!">Delete</a></div>
                        </div><span class="fs--2">32 M</span>
                      </div>
                    </div>
                    <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1000">How the delicacy of the products will be handled??</span>
                        <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Hello! I need to purchase some delicate products. Can you tell me how you handle the delicacy of the products to be shipped? I don’t want to get my hands on broken things, so. Thank you! </p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card email-content">
                <div class="card-body overflow-hidden">
                  <div class="d-flex flex-between-center pb-3 border-bottom mb-4"><a class="btn btn-link p-0 text-800 me-3" href="inbox.html"><span class="fa-solid fa-angle-left fw-bolder fs-0"></span></a>
                    <h3 class="flex-1 mb-0 lh-sm line-clamp-1">Query about recently purchased soccer socks</h3>
                    <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="email-detail.html#!">Edit</a><a class="dropdown-item text-danger" href="email-detail.html#!">Delete</a><a class="dropdown-item" href="email-detail.html#!">Download</a><a class="dropdown-item" href="email-detail.html#!">Report abuse</a></div>
                    </div>
                  </div>
                  <div class="overflow-x-hidden scrollbar email-detail-content">
                    <div class="row align-items-center gy-3 gx-0 mb-10">
                      <div class="col-12 col-sm-auto d-flex order-sm-1"><button class="btn p-0 me-4 me-lg-3 me-xl-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply"><span class="fa-solid fa-reply text-500"></span></button><button class="btn p-0 me-4 me-lg-3 me-xl-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove"><span class="fa-solid fa-trash-can text-500"></span></button><button class="btn p-0 me-4 me-lg-3 me-xl-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive"><span class="fa-solid fa-archive text-500"></span></button><button class="btn p-0 me-4 me-lg-3 me-xl-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><span class="fa-solid fa-print text-500"></span></button><button class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Star"><span class="fa-regular fa-star text-500"></span></button></div>
                      <div class="col-auto"><img class="me-2 rounded-circle" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/60.webp" alt="..." width="48" height="48" /></div>
                      <div class="col-auto flex-1">
                        <div class="d-flex mb-1">
                          <h5 class="mb-0 text-1000 me-2">Jessica Ball</h5>
                          <p class="mb-0 lh-sm text-600 fs--1 d-none d-md-block text-nowrap">&#60; jessica.ball@email.com &#62;</p>
                        </div>
                        <p class="mb-0 fs--1"><span class="text-600">to</span><span class="fw-bold text-800"> Me </span><span class="text-1000 fw-semi-bold fs--2">28 Aug, 2021 </span><span class="fw-semi-bold text-900 fs--2 me-1"> 6:32 PM</span><span class="fa-regular fa-star text-500"></span></p>
                      </div>
                    </div>
                    <div class="text-1000 fs--1 w-100 w-md-75 mb-8">
                      <p>Dear Simp sons, </p>
                      <p>Something in a thirty-acre thermal thicket of thorns and thistles thumped and thundered threatening the three-D thoughts of Matthew the thug - although, theatrically, it was only the thirteen-thousand thistles and thorns through the underneath of his thigh that the thirty year old thug thought of that morning.</p>
                      <p>How much caramel can a canny canonball cram in a camel if a canny canonball can cram caramel in a camel? If practice makes perfect and perfect needs practice, I’m perfectly practiced and practically perfect.</p>
                      <p class="mb-0">Best regards,</p>
                      <p>Jess</p>
                    </div>
                    <div class="d-flex align-items-center mb-5"><button class="btn btn-link text-1000 fs-0 text-decoration-none p-0" type="button"><span class="fa-solid fa-paperclip me-2"></span>2 Attachments</button></div>
                    <div class="row pb-11 border-bottom mb-4 gx-0 gy-2">
                      <div class="col-auto me-3"><a class="text-decoration-none d-flex align-items-center" href="email-detail.html#!">
                          <div class="btn-icon btn-icon-xl border border-400 rounded-3 text-400 flex-column me-2"><span class="fa-solid fa-file fs-0 mb-1"></span>
                            <p class="mb-0 fs--2 fw-bold">PDF</p>
                          </div>
                          <div>
                            <h6 class="text-1000">workflow-data.pdf</h6>
                            <p class="fs--1 mb-0 text-700 lh-1">53.34 KB</p>
                          </div>
                        </a></div>
                      <div class="col-auto"><a class="text-decoration-none d-flex align-items-center" href="email-detail.html#!"><img class="rounded" src="../../assets/img/generic/41.png" alt="..." />
                          <div class="ms-2">
                            <h6 class="text-1000">forest.jpg</h6>
                            <p class="fs--1 mb-0 text-700">53.34 KB</p>
                          </div>
                        </a></div>
                    </div>
                    <div class="d-flex justify-content-between"><button class="btn btn-phoenix-secondary me-1 text-nowrap px-2 px-sm-4">Reply<span class="fa-solid fa-reply ms-2 fs--2"></span></button><button class="btn btn-phoenix-secondary me-1 text-nowrap px-2 px-sm-4">Reply All<span class="fa-solid fa-reply-all ms-2 fs--2"></span></button><button class="btn btn-phoenix-secondary ms-auto text-nowrap px-2 px-sm-4">Forward<span class="fa-solid fa-share ms-2 fs--2"></span></button></div>
                  </div>
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

</x-guest-layout>
