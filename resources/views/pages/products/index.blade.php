<x-app-layout title="Product Page">
  <div class="product-section">
    <h1 class="h1 text-center">Product Page</h1>

    <div class="row">
      <div class="col-12">
        <button type="button" id="buyBtn" class="btn btn-success btn-buy">Buy</button>
        <button type="button" id="cancelBtn" class="btn btn-secondary btn-cancel">Cancel</button>
      </div>
    </div>


  </div>
  @push('meta')
    <meta name="description" content="Product Page: Nama Barang 1">
    <meta name="keywords" content="product page, nama barang 1">

    <meta name="googlebot-news" content="index, follow" />
    <meta name="googlebot" content="index, follow" />

    <meta name="robots" content="index, follow" />
    <meta name="robots" content="max-image-preview:large">

    <meta name="author" content="SiCoding">
    <meta name="language" content="id" />
    <meta name="geo.country" content="id" />
    <meta http-equiv="content-language" content="In-Id" />
    <meta name="geo.placename" content="Indonesia" />
  @endpush

  @push('scripts')
    <script>
      var buyBtn = document.getElementById('buyBtn');
      buyBtn.addEventListener('click', function(e) {
        console.log(this.getAttribute('id') + ' Event')
      });

      var buyBtn = document.getElementById('cancelBtn');
      cancelBtn.addEventListener('click', function(e) {
        console.log(this.getAttribute('id') + ' Event')
      });
    </script>
  @endpush
</x-app-layout>
