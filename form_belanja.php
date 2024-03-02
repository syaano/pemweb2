<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        table {
          width: 28%;
          margin: 10px;
        }
    
        th, td {
          border: 2px solid rgb(119, 136, 98);
          padding: 10px;
        }
    
        th {
          background-color: rgb(100, 133, 190);
        }
        .container {
          padding: 0;
          margin-left: 0;
           
        }
      </style>
<form method="POST" action="hasil_belanja.php"> 
    <h1>Belanja Online</h1>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Masukan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <div class="container">
  <table>
    <thead>
      <tr>
        <th>Produk</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>TV</td>
        <td>Rp 4.200.000</td>
      </tr>
      <tr>
        <td>KULKAS</td>
        <td>Rp 3.100.000</td>
      </tr>
      <tr>
        <td>MESIN CUCI</td>
        <td>Rp 3.800.000</td>
      </tr>
</form>