<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- bagian banner -->
<section class="banner">
  <div class="container">
    <div class="banner-left">
      <h2>
        Hai...<br />
        Butuh Sneackers <span class="efek-ngetik"></span>
      </h2>
      <p>Di SneackersStore Aja</p>
    </div>
  </div>
</section>
<!-- bagian product -->
<section id="product">
  <div class="container">
    <h3>Products</h3>
    <div class="col-4">
      <a href="">
        <img src="img/<?= $img ?>" />
        <h2><?= $price ?></h2>
        <span><?= $name ?></span>
      </a>
    </div>
</section>
</div>
<?= $this->endSection(); ?>