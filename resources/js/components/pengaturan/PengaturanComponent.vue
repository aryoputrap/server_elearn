<template>
    <!-- /.col-md-3 -->
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <strong style="color: white;">Pengaturan Ujian</strong>
                    </div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3">Nama Ujian</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="nama_ujian">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="control-label col-md-3">Waktu Pengerjaan</label>
                                        <div class="col-md-8">
                                            <input type="text"  name="waktu_pengerjaan" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="company"  class="control-label col-md-3">Nilai Minimum</label>
                                        <div class="col-md-8">
                                            <input type="text"  name="nilai_minimum" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="control-label col-md-3">Peraturan Ujian</label>
                                        <div class="col-md-8">
                                        <textarea class="form-control" name="text" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-6">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <router-link to="/pengaturan"  class="btn btn-default">Batal<span class="badge"></span></router-link>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
 export default {


 }
</script>
