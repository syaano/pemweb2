//buat fungsi
//ambil value/nilai inputan username dan password
//kita cek kondisi nya apakah username dan password yang di inputkan sama,
//dengan nilai yang kita tentukan (kondisi pertama).

//jika benar arahkan ke dashboard admin
//jika salah berikan alert username dan password salah

//jika tidak inputan untuk username dan password (kondisi kedua)
//tampilan alert username dan password tidak boleh kosong

function login(){
    //mengambil nilai inputan user berdasarkan id
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "admin" && pass == "123456") {
        alert('Selamat Anda Berhasil Login');
        window.location = "../backend_admin/index.html"
        return false;
    }
    else if (username == "" || password == "") {
        alert('username & password tidak boleh kosong')
        return false;
    } else
        alert ('username / password salah')
    
}