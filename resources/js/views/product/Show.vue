<template>
  <div class="conatiner-fluid">
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-header d-flex justify-content-center">
                  <img :src="'/images/'+ products.image  " alt="">
                </div>
              <div class="card-body box-profile">


                <h3 class="profile-username text-center">Info Product</h3>

                <p class="text-muted text-center">{{ products.name }}</p>

                <ul class="list-group list-group-unbordered mb-3">

                  <li class="list-group-item">
                    <b> Description</b> <span class="float-right">{{ products.description }}</span>
                  </li>
                  <li class="list-group-item">
                    <b>Price</b> <span class="float-right"> $ {{ products.price }}</span>
                  </li>
                  <li class="list-group-item">
                     <b>Company</b> <span class="float-right"> $ {{ products.company.name }}</span>
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
  name: "Product",
  data() {
    return {
      products: [],
      error: "",
    };
  },
  methods: {
    getinfoUser() {
      console.log(this.$route.params.id);
      axios
        .get("api/product-detail/" + this.$route.params.id)
        .then((response) => {
          this.products = response.data.product;
         // console.log(this.products);
        })
        .catch((error) => {
          this.error = error;
          console.log(error);
        });
    },
  },
 created() {
    this.getinfoUser();
  },
};
</script>

<style lang="scss" scoped>
   * {
        color: #000;
    }

</style>
