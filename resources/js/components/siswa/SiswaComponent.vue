<template>
        <div class="col-md-9">
            <div class="panel-heading" style="color: white;">
                    Data Siswa
            <router-link to="/siswa/add" class="btn btn-primary btn-sm pull-right">+ Tambah Siswa</router-link>
            </div>
          <div class="panel panel-info">
            <table class="table">
              <tr>
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="https://3.bp.blogspot.com/-EHwtjQuNicM/UDD2qTsdf4I/AAAAAAAAAQQ/KC1y2pa5Wxc/s1600/LOGO+UPI.png" height="100px" width="100px" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <address>
                     <b>Username</b>            : username<br>
                     <b>Nama Siswa</b>          : Nama Siswa<br>
                     <b>Jenis Kelasmin</b>      : Jenis Kelamin<br>
                     <b> Status </b>            : Status<br>
                     <b> Kelas </b>             : Kelas<br>
                     <b> Nik </b>               : Nik
                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <router-link class="btn btn-circle btn-default btn-xs" to="/siswa/edit"><i class="fas fa-pencil-alt " aria-hidden="true"></i></router-link>
                    <a href="#"  class="btn btn-circle btn-danger btn-xs" title="Hapus">
                    <i class="fas fa-trash"></i>
                    </a>
                    <a href="#"  class="btn btn-circle btn-danger btn-xs" title="Aktifkan">
                     <i class="fas fa-check"></i>
                    </a>
                     <a href="#"  class="btn btn-circle btn-danger btn-xs" title="Non Aktifkan">
                    <i class="fas fa-power-off"></i>
                    </a>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
</template>
<script>
export default {

}
</script>
