<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="light" style="background-image: url('abu.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light" style="font-family:'Times New Roman', Times, serif"  >AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="./dashboard.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') echo 'active'; ?>">
                  <i class="nav-icon bi bi-house"></i>
                  <p style="font-family: 'Times New Roman', Times, serif; font-weight: bold">
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./list_pasien.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'list_pasien.php') echo 'active'; ?>">
                  <i class="nav-icon bi bi-person"></i>
                  <p style="font-family:'Times New Roman', Times, serif; font-weight: bold">Data Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./form_pasien.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'form_pasien.php') echo 'active'; ?>">
                  <i class="nav-icon bi bi-person-add"></i>
                  <p style="font-family:'Times New Roman', Times, serif;  font-weight: bold">Tambah pasien</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./generate/theme.html" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Theme Generate</p>
                </a>
              </li> -->
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">