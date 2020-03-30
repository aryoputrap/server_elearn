<template>
    <div class="col-md-9">
        <div class="panel-heading" style="color: white;">
            Kelola Soal
        <router-link to="/soal/add" class="btn btn-primary btn-sm pull-right">+ Tambah Soal</router-link>
        </div>
        <div class="panel panel-info">
            <table class="table table-hover">
                <thead class="table-head">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                          pertanyaan
                        </td>
                        <td>status</td>
                        <td>
                            <a href="#" ><i class="fas fa-trash" aria-hidden="true"></i></a>
                           <router-link to="/soal/edit" ><i class="fas fa-pencil-alt " aria-hidden="true"></i></router-link>
                        </td>
                        <td>
                        <select class="form-control">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak">Tidak Aktif</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
 </div>
</template>
<script>
    export default {

    }

</script>
