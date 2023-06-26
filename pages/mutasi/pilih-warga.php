<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Mutasi</h1>
<?php include('_partials/menu.php') ?>

<?php include('../warga/data-index.php') ?>
<div class="panel panel-default">
  <div class="panel-body">
    <form action="create.php" method="GET">
      <div class="form-group">
        <label for="warga">Pilih Warga:</label>
        <select id="warga" name="id_warga" class="form-control selectpicker" data-live-search="true">
          <?php foreach ($data_warga as $warga) : ?>
            <option value="<?php echo $warga['id_warga'] ?>"><?php echo $warga['nama_warga'] ?></option>
          <?php endforeach ?>
        </select>
      </div>

      <br><br><br>
      <button type="submit" class="btn btn-primary btn-lg">
        <i class="glyphicon glyphicon-export"></i> Pilih
      </button>
    </form>

    <?php include('../_partials/bottom.php') ?>
  </div>
</div>