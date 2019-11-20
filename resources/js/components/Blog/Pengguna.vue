<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<template>
        <table border=10 width=98% height=100 ALIGN='center'>
             <tr>
                <th> <center> Nama </center></th>
                  <th style='width: 25%'> <center> Aksi </center></th>
                    </tr>  
                        <tr>
                            <td> Informatika </td>
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
</template>


