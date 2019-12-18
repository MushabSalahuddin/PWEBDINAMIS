<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Data Blog</h3></div>

                    <div class="card-body">
                        
                    <table border=5 width=100% height=100 ALIGN='center'>
             <tr>
                <th> <center> Nama </center></th>
                  <th style='width: 25%'> <center> Aksi </center></th>
                    </tr>  
                        <tr>
                            <td>  </td>
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
