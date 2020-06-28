<!DOCTYPE html>
<html lang="en">
<head>
  <title>Q&A - Buku Tamu</title>
  <?php 
    $this->load->view("user/template/header");
  ?>
</head>
<body>
  <?php 
    $this->load->view("user/template/navbar_user");
  ?>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h3>Form Q&A - Buku Tamu</h3>

        <form method="post" action="<?php echo base_url().'index.php/user/Bukutamu/tambah_data'; ?>" class="needs-validation" novalidate>
          <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" placeholder="Masukkan judul" name="judul" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pertanyaan">Pertanyaan:</label>
            <input type="text" class="form-control" id="pertanyaan" placeholder="Masukkan pertanyaan" name="pertanyaan" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="untuk">Untuk:</label>
            <input type="text" class="form-control" id="untuk" placeholder="Pertanyaan untuk ?" name="untuk" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-sm-8">
      <h2>Q&A - Buku Tamu, Pertanyaan yang masuk</h2>
      <table style="border-collapse: collapse; border: 1px solid black; width: 100%;">
        <?php foreach ($data_bukutamu as $data):?>
        <tr>
          <td colspan="2" style="font-family: Tahoma, Geneva, sans-serif; font-size: 20px; letter-spacing: 2px; word-spacing: 2px; color: #000000; font-weight: 700; text-decoration: none; font-style: normal; font-variant: normal; text-transform: none;"><?php echo $data->judul; ?></td>
        </tr>
        <tr>
          <td colspan="2" style="font-family: Tahoma, Geneva, sans-serif; font-size: 15px; letter-spacing: 2px; word-spacing: 2px; color: #808080; font-weight: 700; text-decoration: none; font-style: normal; font-variant: normal; text-transform: none;"><?php echo $data->nama; ?>
        </tr>
        <tr>
          <td style="width:70px ;">Untuk :</td><td style="font-family: Tahoma, Geneva, sans-serif; font-size: 15px; letter-spacing: 2px; word-spacing: 2px; color: #1291FA; font-weight: 700; text-decoration: none; font-style: italic; font-variant: normal; text-transform: uppercase;"><?php echo $data->untuk; ?></td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $data->pertanyaan."(".$data->tanggal.")"; ?></td>
        </tr>
        <?php endforeach ?>
      </table>
      <p>
      </p>
    </div>
  </div>

</div>
</body>
<?php 
    $this->load->view("user/template/footer");
  ?>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
