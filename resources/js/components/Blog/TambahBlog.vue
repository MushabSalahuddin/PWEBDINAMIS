<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Tambah Blog</h3></div>

                    <div class="card-body">
                        <button type="button" class="btn btn-success float-right"><i class ="fas fa-credit-card"> Tambah Blog </i></button>
                <br><br>
                    <table border=5 width=100% height=100 ALIGN='center'>
             <tr>
                <th> <center> Kategori </center></th>
                <th> <center> User </center></th>
                <th> <center> Judul </center></th>
                <th> <center> Isi </center></th>
                <th> <center> Jbaca </center></th>
                  <th style='width: 25%'> <center> Aksi </center></th>
                    </tr>  
                        <tr v-for="items in tambah_blogs" :key="items.id">
                            <td> {{items.kategori_id}} </td>
                            <td> {{items.user_id}} </td>
                            <td> {{items.judul}} </td>
                            <td> {{items.isi}} </td>
                            <td> {{items.jbaca}} </td>
                            <td>  
                            <center>
                                <a href="#">
                                    <i class="fas fa-eye red"> Lihat </i>
                                </a>
                                    |
                                <a href="#">
                                    <i class="fas fa-pencil-alt green"> Edit </i>
                                </a>
                                    |
                                <a href="#">
                                    <i class="fas fa-trash-alt"> Hapus </i>
                                </a>
                        </center>
                    </td>
                </tr>
        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
