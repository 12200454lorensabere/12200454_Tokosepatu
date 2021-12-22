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
    <?php foreach ($item as $i) { ?>
      <div class="col-4">
        <a href="">
          <img src="img/<?= $i['img'] ?>" />
          <h2><?= $i['price'] ?></h2>
          <span><?= $i['name'] ?></span>
        </a>
      </div>
    <?php } ?>
</section>
</div>
<?= $this->endSection(); ?>