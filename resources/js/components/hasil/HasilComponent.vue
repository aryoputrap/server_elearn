<template>
    <div class="col-md-9">
        <div class="panel-heading" style="color: white;">
            HASIL UJIAN CCT TEXT
        </div>
        <div class="panel panel-info">
            <table class="table table-hover">
                <thead class="table-head">
                    <tr>
                        <th>HASIL CCT1</th>
                        <th>HASIL CCT2</th>
                        <th>HASIL CCT3</th>
                        <th>HASIL CCT4</th>
                        <th>SKALA SIKAP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="/api/exportcct1" class="btn btn-info">Export CCT1</a></td>
                        <td><a href="/api/exportcct2" class="btn btn-info">Export CCT2</a></td>
                        <td><a href="/api/exportcct3" class="btn btn-info">Export CCT3</a></td>
                        <td><a href="/api/exportcct4" class="btn btn-info">Export CCT4</a></td>
                        <td><a href="/api/exportskala" class="btn btn-info">Skala Sikap</a></td>
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
      watch: {
        cct1() {
          this.getcct1();
        }
       },
      methods:{
        cct1(){
          axios.get('/api/exportcct1')
           .then (response => {
             alert(response);
             console.log(response.data);
            })
           .catch (e => {
             alert(e);
             console.log(e);
           })
        },
        cct2(){
          alert("okey");
        }
      }
    }

</script>
