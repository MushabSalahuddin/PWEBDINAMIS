<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Kategori</div>

                    <div class="card-body">
                        <button type="button" class="btn btn-success float-right" @click="modalBaru">
                            <i class="fas fa-bars nav-icon"></i>Tambah Kategori
                        </button>   
                        <br><br>     
                        <table class="table table-bordered">  
                            <thead>
                    <tr>
                            <th style="width :25%"><center>Id </center></th>
                            <th style="width :35%"><center>Kategori </center></th> 
                            <th style="width :25%"><center>Jumlah Berita</center></th>
                            <th style="width :25%"><center>Aksi </center></th> 
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="items in kategoris" :key="items.id">
                        <td>{{items.id}}</td>
                        <td>{{items.namakategori}}</td>
                        <td>{{items.jumlah}}</td>       
                        
                         <td>
                            <center>
                                <a href="#">
                                    <i class="fas fa-pencil-alt green"> Edit </i>
                                </a>
                                    |
                                <a href="#">
                                    <i class="fas fa-trash-alt red"> Hapus </i>
                                </a>
                            </center>
                        </td>
                    </tr>
                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    <div
      class="modal fade"
      id="tambah"
      tabindex="-1"
      role="dialog"
      aria-labelledby="tambahLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tambahLabel" v-show="!editmode">Tambah Data Baru</h5>
            <h5 class="modal-title" id="tambahLabel" v-show="editmode">Rubah Data Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="editmode ? updateData() : createData()">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.namakategori"
                  type="text"
                  name="namakategori"
                  placeholder="Nama Kategori"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('namakategori') }"
                />
                <has-error :form="form" field="namakategori"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.jumlah"
                  type="text"
                  name="jumlah"
                  placeholder="Jumlah"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('jumlah') }"
                />
                <has-error :form="form" field="jumlah"></has-error>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
              <button v-show="!editmode" type="submit" class="btn btn-primary">Tambah</button>
              <button v-show="editmode" type="submit" class="btn btn-primary">Rubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/Modal-->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                editmode: false,
                kategoris: {}, //aray yang menmpung data dari table
                form: new Form({ //untuk menyimpan data
                    id: "",
                    namakategori: "",
                    jumlah: ""
                })
            };
        },
        methods: {
            modalBaru() {
                this.editmode = false; //satu modal dua aksi bisa simpan dan edit
                this.form.reset();
                $("#tambah").modal("show");
            },
            loadData() { //methods dari semua form CRUD Masuk ke dalam methods 
            axios.get("api/kategori").then(({ data }) =>(this.kategoris = data)); 
            //untuk menampilkan data
        },
        createData() {
        this.form
            .post("api/kategori")
            .then(() => {
            this.$Progress.start();
            Fire.$emit("refreshData");
            $("#tambah").modal("hide"); //modal hilang
            Toast.fire({ //notifikasi di atas
                type: "success",
                title: "Data Berhasi Tersimpan"
            });
            this.$Progress.finish();
            })
            .catch();
        },
        },
            
        created(){ //untuk menampilkan data
            this.loadData(); //this.form.loadData
            Fire.$on("refreshData", () => {
                this.loadData();
            });
        }
    };
</script>