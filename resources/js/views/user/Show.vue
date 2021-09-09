<template>
  <div class="conatiner-fluid">
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">


                <h3 class="profile-username text-center">Info User</h3>

                <p class="text-muted text-center">{{ users.name }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Correo</b> <span class="float-right">{{ users.email }}</span>
                  </li>
                  <li class="list-group-item">
                    <b>Nombre</b> <span class="float-right">{{ users.name }}</span>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
</template>

<script>
export default {
  name: "Profile",
  data() {
    return {
      users: [],
      error: "",
    };
  },
  methods: {
    getinfoUser() {
      console.log(this.$route.params.id);
      axios
        .get("api/user-detail/" + this.$route.params.id)
        .then((response) => {
          this.users = response.data.user;
          console.log(this.users);
        })
        .catch((error) => {
          this.error = error;
          console.log(error);
        });
    },
  },
  mounted() {
    this.getinfoUser();
  },
};
</script>

<style lang="scss" scoped>
   * {
        color: #000;
    }

</style>
