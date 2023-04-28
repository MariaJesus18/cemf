<!DOCTYPE html>
@yield('layout-header')
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title></title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/fonts/boxicons.css')}}" />
    <script src="https://kit.fontawesome.com/065cbb313e.js" crossorigin="anonymous"></script> 
    

    <!-- Boostrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('../assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('../assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('../assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('../assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
              <!-- configurar link -->
            <a href="{{url('dashboard')}}" class="app-brand-link">

              <!-- logo -->
              <img src="https://t9007041908.p.clickup-attachments.com/t9007041908/dc01b404-c35b-40a7-b1f6-5349e2788815/LOGO%20CEMF.png" style="width:180px;">
              <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2">CEMF</span> -->
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Navbar -->
            <li class="menu-item active">
              <!-- configurar link -->
              <a href="{{url('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-home"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item">
              <!-- configurar link -->
              <a
                href=""
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons fa-solid fa-money-bill-trend-up"></i>
                <div data-i18n="Support">Financeiro</div>
              </a>
            </li>

            <li class="menu-item">
              <!-- configurar link -->
              <a
                href="{{route('units.index')}}"
                class="menu-link"
              >
                <i class="menu-icon tf-icons fa-solid fa-building"></i>
                <div data-i18n="Support">Unidades</div>
              </a>
            </li>

            <li class="menu-item">
              <!-- configurar link -->
              <a
                href=""
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons fa-solid fa-user"></i>
                <div data-i18n="Support">Alunos</div>
              </a>
            </li>

            <li class="menu-item">
              <!-- configurar link -->
              <a
                href=""
                target="_blank"
                class="menu-link"
              >

                <i class="menu-icon tf-icons fa-regular fa-note-sticky"></i>
                <div data-i18n="Support">Relatórios</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <!-- configurar link -->
              <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa-solid fa-gear"></i>
                <div data-i18n="Layouts">Globais</div>
              </a>

              <ul class="menu-sub">                
                  <li class="menu-item">
              <!-- configurar link -->
                    <a href="" class="menu-link menu-toggle">
                      <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                      <div data-i18n="Layouts">Usuários</div>
                    </a>

                    <ul class="menu-sub">
              <!-- configurar link -->
                      <a href="{{route('users.index')}}" class="menu-link">
                        <div data-i18n="Without navbar">Usuários</div>
                      </a>
                      <a href="layouts-without-navbar.html" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
                    </ul>
                  </li>
              </ul>

              <ul class="menu-sub">                
                  <li class="menu-item">
              <!-- configurar link -->
                    <a href="" class="menu-link menu-toggle">
                      <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                      <div data-i18n="Layouts">Fornecedores</div>
                    </a>

                    <ul class="menu-sub">
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
                    </ul>
                  </li>
              </ul>


              <ul class="menu-sub">                
                  <li class="menu-item">
              <!-- configurar link -->
                    <a href="" class="menu-link menu-toggle">
                      <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                      <div data-i18n="Layouts">Cat.Financeiras</div>
                    </a>

                    <ul class="menu-sub">
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
                    </ul>
                  </li>
              </ul>

              <ul class="menu-sub">                
                  <li class="menu-item">
              <!-- configurar link -->
                    <a href="" class="menu-link menu-toggle">
                      <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                      <div data-i18n="Layouts">Disciplinas</div>
                    </a>

                    <ul class="menu-sub">
              <!-- configurar link -->
                      <a href="{{url('subjects')}}" class="menu-link">
                        <div data-i18n="Without navbar">Disciplinas</div>
                      </a>
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
                    </ul>
                  </li>
              </ul>


              <ul class="menu-sub">                
                  <li class="menu-item">
              <!-- configurar link -->
                    <a href="" class="menu-link menu-toggle">
                      <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                      <div data-i18n="Layouts">Modalidades</div>
                    </a>

                    <ul class="menu-sub">
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
                    </ul>
                  </li>
              </ul>

              <ul class="menu-sub">                
                  <li class="menu-item">
              <!-- configurar link -->
                    <a href="" class="menu-link menu-toggle">
                      <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                      <div data-i18n="Layouts">Contas Caixa</div>
                    </a>

                    <ul class="menu-sub">
              <!-- configurar link -->
                      <a href="{{url('cashAccounts')}}" class="menu-link">
                        <div data-i18n="Without navbar">Contas Caixa</div>
                      </a>
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
                    </ul>
                  </li>
              </ul>


              <ul class="menu-sub">                
                  <li class="menu-item">
              <!-- configurar link -->
                    <a href="" class="menu-link menu-toggle">
                      <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                      <div data-i18n="Layouts">Escolas</div>
                    </a>

                    <ul class="menu-sub">
              <!-- configurar link -->
                      <a href="{{route('schools.index')}}" class="menu-link">
                        <div data-i18n="Without navbar">Escolas</div>
                      </a>
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
                    </ul>
                  </li>
              </ul>

              <ul class="menu-sub">                
                  <li class="menu-item">
              <!-- configurar link -->
                    <a href="" class="menu-link menu-toggle">
                      <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                      <div data-i18n="Layouts">Modelos de Contrato</div>
                    </a>

                    <ul class="menu-sub">
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
              <!-- configurar link -->
                      <a href="" class="menu-link">
                        <div data-i18n="Without navbar">Ação</div>
                      </a>
                    </ul>
                  </li>
              </ul>

              <ul class="menu-sub">                
                <li class="menu-item">
            <!-- configurar link -->
                  <a href="" class="menu-link menu-toggle">
                    <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                    <div data-i18n="Layouts">Tipos de Lançamentos</div>
                  </a>

                  <ul class="menu-sub">
            <!-- configurar link -->
                    <a href="typeReleases" class="menu-link">
                      <div data-i18n="Without navbar">Tipo de Lançamentos</div>
                    </a>
            <!-- configurar link -->
                    <a href="" class="menu-link">
                      <div data-i18n="Without navbar">Ação</div>
                    </a>
                  </ul>
                </li>
            </ul>

              <ul class="menu-sub">                
                <li class="menu-item">
            <!-- configurar link -->
                  <a href="" class="menu-link menu-toggle">
                    <!-- <i class="menu-icon tf-icons fa-solid fa-gear"></i> -->
                    <div data-i18n="Layouts">Convênios</div>
                  </a>

                  <ul class="menu-sub">
            <!-- configurar link -->
                    <a href="{{route('covenants.index')}}" class="menu-link">
                      <div data-i18n="Without navbar">Convênios</div>
                    </a>
            <!-- configurar link -->
                    <a href="" class="menu-link">
                      <div data-i18n="Without navbar">Ação</div>
                    </a>
                  </ul>
                </li>
            </ul>

            </li>
          </ul>


          
          <!-- configurar link -->
          <div class="container mb-3">
            <a class="dropdown-item" href="">
              <!-- <i class="bx bx-power-off me-2"></i> -->
              <a href="{{url('logout')}}">
                <i class="menu-icon tf-icons fa-solid fa-right-from-bracket align-middle"></i>
                <span class="align-middle">Sair</span>
              </a>
          </div>

          </a>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- botão de menu quando a tela ficar pequena -->
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none col-1 mt-2 mx-2">
            <!-- configurar link -->
            <a  class="nav-item nav-link px-0 me-xl-4 btn btn-primary" href="">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">

              @yield('layout-content')


            </div>
          </div>

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('../assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('../assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('../assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('../assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('../assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('../assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('../assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
