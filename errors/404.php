<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<link rel="stylesheet" href="/assets/styles/style.css">
<style>
  body {
    background: #dedede;
  }

  .page-wrap {
    min-height: 100vh;
  }
</style>
<script src="/libs/pluslib/frontend/dynamic.js"></script>

<template id='temp'>
  <div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <span class="display-1 d-block">404</span>
          <div class="mb-4 lead">
            The page you are looking for
            <a :href='return curl'>
              <dynamic val='let a= document.createElement("div"); a.innerHTML = curl; return a;'></dynamic>
            </a>
            was not found.
          </div>
          <a href="/" class="btn btn-link">Back to Home</a>
        </div>
      </div>
    </div>
  </div>
</template>

<div id="app"></div>

<script defer>
  new createDynamicApp("app", { curl: window.location.href }, '#temp', '#app')
</script>