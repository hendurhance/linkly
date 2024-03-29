<!DOCTYPE html>
<html lang="en">

@include('admin.layout.header')

<body class="d-flex align-items-center min-h-100">
  <!-- ========== TOASTER ========== -->
  @include('admin.layout.notify')
  <!-- ========== END TOASTER ========== -->

  <script src="/assets/js/hs.theme-appearance.js"></script>
  <!-- ========== HEADER ========== -->
  <header class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
    <div class="d-flex d-lg-none justify-content-between">
      <a href="#">
        <img class="w-100" src="/assets/svg/logos/logo.svg" alt="Image Description" data-hs-theme-appearance="default" style="min-width: 4rem; max-width: 4rem;">
        <img class="w-100" src="/assets/svg/logos-light/logo.svg" alt="Image Description" data-hs-theme-appearance="dark" style="min-width: 4rem; max-width: 4rem;">
      </a>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main pt-0">
    <!-- Content -->
    <div class="container-fluid px-3">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
          <!-- Logo & Language -->
          <div class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
            <div class="d-none d-lg-flex justify-content-between">
              <a href="#">
                <img class="w-100" src="/assets/svg/logos/logo.svg" alt="Image  Description" data-hs-theme-appearance="default" style="min-width: 4rem; max-width: 4rem;">
                <img class="w-100" src="/assets/svg/logos-light/logo.svg" alt="Image Description" data-hs-theme-appearance="dark" style="min-width: 4rem; max-width: 4rem;">
              </a>
            </div>
          </div>
          <!-- End Logo & Language -->

          <div style="max-width: 23rem;">
            <div class="text-center mb-5">
              <img class="img-fluid" src="/assets/svg/illustrations/oc-chatting.svg" alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="default">
              <img class="img-fluid" src="/assets/svg/illustrations-light/oc-chatting.svg" alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="dark">
            </div>

            <div class="mb-5">
              <h2 class="display-5">Build digital products with:</h2>
            </div>

            <!-- List Checked -->
            <ul class="list-checked list-checked-lg list-checked-primary list-py-2">
              <li class="list-checked-item">
                <span class="d-block fw-semibold mb-1">All-in-one tool</span>
                Build, run, and scale your apps - end to end
              </li>

              <li class="list-checked-item">
                <span class="d-block fw-semibold mb-1">Easily add &amp; manage your services</span>
                It brings together your tasks, projects, timelines, files and more
              </li>
            </ul>
            <!-- End List Checked -->

            <div class="row justify-content-between mt-5 gx-3">
              <div class="col">
                <img class="img-fluid" src="/assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="/assets/svg/brands/fitbit-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="/assets/svg/brands/flow-xo-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="/assets/svg/brands/layar-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Col -->

        @yield('form')
        
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
  @include('admin.layout.footer')

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
        //   onSubmit: data => {
        //     // data.event.preventDefault()
        //     // alert('Submited')
        //   }
        })


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')
      }
    })()
  </script>
</body>
</html>