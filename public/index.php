<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Day Planner</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.min.css">
  <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
  <link rel="manifest" href="/manifest.json">
  <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
  <script>
    if('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/sw.js')
        .then(registration => {
          console.log("Service Worker Registered");
  
          // We don't want to check for updates on first load or we will get a false
          // positive. registration.active will be falsy on first load.
          if(registration.active) {
            // Check if an updated sw.js was found
            registration.addEventListener('updatefound', () => {
              console.log('Update found. Waiting for install to complete.');
              const installingWorker = registration.installing;
  
              // Watch for changes to the worker's state. Once it is "installed", our cache
              // has been updated with our new files, so we can prompt the user to instantly
              // reload.
              installingWorker.addEventListener('statechange', () => {
                if(installingWorker.state === 'installed') {
                  console.log('Install complete. Triggering update prompt.');
                  onUpdateFound();
                }
              });
            });
          }
        })
        .catch(e => console.log(e));
    }
  
    function onUpdateFound() {
      ons.notification.confirm('A new update is ready. Do you want to update now?')
        .then(buttonIndex => {
          if(buttonIndex === 1) {
            location.reload();
          }
        });
    }
  </script>
</head>
<body>
  

  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Offcanvas dark navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header" style="background-color: #F7E61C;">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="color: black;">Day Planner</h5>
          <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>

            <!-- LOGIN PERHAPSE???????-->     
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>

              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->

          </ul>
        </div>
      </div>
    </div>
  </nav>





  <!-- <ons-button onclick="alert('You clicked me!!!')">Tap Me</ons-button> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>