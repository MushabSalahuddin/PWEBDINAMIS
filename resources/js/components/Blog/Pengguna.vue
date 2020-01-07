<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pengguna</div>

                    <div class="card-body">
                        <button type="button" class="btn btn-success float-right" @click="modalBaru">
                            <i class="fas fa-bars nav-icon"></i>Tambah Pengguna
                        </button>   
                        <br><br>     
                        <table class="table table-bordered">  
                            <thead>
                    <tr>
                            <th style="width :25%"><center>Nama </center></th>
                            <th style="width :35%"><center>Email </center></th> 
                            <th style="width :25%"><center>Aksi </center></th> 
                    </tr>
                    </thead>
                    <tbody>
                    <tr  v-for="items in users" :key="items.id">
                            <td> {{items.name}} </td>
                            <td> {{items.email}} </td>
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
            <h5 class="modal-title" id="tambahLabel" v-show="editmode">Ubah Data Pengguna</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="editmode ? updateData() : createData()">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  placeholder="Nama"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('name') }"
                />
                <has-error :form="form" field="name"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.email"
                  type="text"
                  name="email"
                  placeholder="Email"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('email') }"
                />
                <has-error :form="form" field="email"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.password"
                  type="text"
                  name="password"
                  placeholder="Password"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('password') }"
                />
                <has-error :form="form" field="password"></has-error>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
              <button v-show="!editmode" type="submit" class="btn btn-primary">Tambah</button>
              <button v-show="editmode" type="submit" class="btn btn-primary">Ubah</button>
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
                users: {}, //aray yang menampung data dari table
                form: new Form({ //untuk menyimpan data
                    id: "",
                    name: "",
                    email: "",
                    password: ""
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
            axios.get("api/user").then(({ data }) =>(this.users = data)); 
            //untuk menampilkan data
        },
        createData() {
        this.form
            .post("api/user")
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