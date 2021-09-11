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


                <h3 class="profile-username text-center">Edit Info Product</h3>

                <p class="text-muted text-center">{{ products.name }}</p>

                  <form @submit.prevent="submit">
                      <div class="form-row">
                           <div class="form-group col-sm-12">
                              <label for="name">Name: </label>
                              <input type="text" name="name" class="form-control" v-model="products.name" v-validate="'required|min:4'">

                          </div>
                              <div class="form-group col-sm-12">
                                <div
                                class="alert d-block w-100 shadow alert-danger"
                                role="alert"
                                v-if="submitted && errors.has('name')"
                                >
                                {{ errors.first("name") }}
                                </div>
                            </div>
                      </div>
                      <div class="form-row">
                            <div class="form-group col-sm-12">
                              <label for="description">Description:</label>
                              <input type="text" class="form-control" name="description" v-model="products.description" v-validate="'required|min:4'">
                            </div>
                           <div class="form-group col-sm-12">
                                <div
                                class="alert d-block w-100 shadow alert-danger"
                                role="alert"
                                v-if="submitted && errors.has('description')"
                                >
                                {{ errors.first("description") }}
                                </div>
                            </div>
                      </div>
                      <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label for="price">Price: </label>
                                <input type="text" class="form-control" name="price" v-model="products.price" v-validate="'required'">
                            </div>
                            <div class="form-group col-sm-12">
                                <div
                                class="alert d-block w-100 shadow alert-danger"
                                role="alert"
                                v-if="submitted && errors.has('price')"
                                >
                                {{ errors.first("price") }}
                                </div>
                            </div>
                      </div>
                      <div class="form-row">
                           <div class="form-group col-sm-12">
                              <label for="company">Company: </label>
                              <select v-model="products.company.name" v-validate="'required|excluded:1'" name="company" @change="handleChange">
                                <option v-for="option in companies"   v-bind:value="option.id">
                                    {{ option.name }}
                                </option>
                            </select>
                           </div>
                            <div class="form-group col-sm-12">
                                <div
                                class="alert d-block w-100 shadow alert-danger"
                                role="alert"
                                v-if="submitted && errors.has('company')"
                                >
                                {{ errors.first("company") }}
                                </div>
                            </div>

                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-12">
                              <label for="image">Image: </label>
                              <input type="file" name="image" id=""   @change="onFileChange">
                           </div>
                              <div class="form-group col-sm-12">
                                <div
                                class="alert d-block w-100 shadow alert-danger"
                                role="alert"
                                v-if="submitted && errors.has('image')"
                                >
                                {{ errors.first("image") }}
                                </div>
                            </div>
                      </div>
                        <div class="row mb-3">
                            <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                        </div>
                        <!-- /.col -->
                        </div>
                        <div class="row">
                        <div class="col-sm-12">
                            <div
                            class="alert"
                            v-if="submitted"
                            :class="successful ? 'alert-success' : 'alert-danger'"
                            >
                            {{ message }}
                            </div>
                        </div>
                        </div>
                  </form>
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
  name: "ProductEdit",
  data() {
    return {
      products: [],
      error: "",
      formData: {
        name: "",
        description: "",
        price: "",
        company: "",
        image: ""
      },
      message: "",
      submitted: false,
      successful: false,
      error: "",
      companies: []
    };
  },
  methods: {
    getinfoUser() {
      console.log(this.$route.params.id);
      axios
        .get("api/product-detail/edit/" + this.$route.params.id)
        .then((response) => {
          this.products = response.data.product;
          this.companies = response.data.companies;
          console.log( this.companies);
        })
        .catch((error) => {
          this.error = error;
          console.log(error);
        });
    },
      onFileChange(evt){
        let files = evt.target.files || evt.dataTransfer.files;
        if(!files.length) {
            return;
        }
        this.createImage(files[0]);
    },
    createImage(file){
        let reader = new FileReader();

        reader.onload = (e) => {
           this.formData.image = e.target.result;
        };
        reader.readAsDataURL(file);
    },
    handleChange(e){
        if(e.target.options.selectedIndex > -1) {
            this.formData.company = e.target.options[e.target.options.selectedIndex].value;
        }
    },
    submit() {
        this.message = "";
        this.submitted = true;
        this.$validator.validate().then((isValid)=> {
            this.formData.name = this.products.name;
            this.formData.description = this.products.description;
            this.formData.price = this.products.price;


            if(isValid){
                axios.put('api/product-detail/edit/'+ this.$route.params.id, this.formData)
                .then((response)=> {
                    this.successful = true;
                    this.message= "Product update";


                    if( response ){
                         setTimeout(() => {
                        this.$router.push('/products');
                    }, 3000);
                    }

                })
                .catch((error)=> {
                    this.error = error;
                    this.submitted = false;

                })
            }
        })

    }
  },
 created() {
    this.getinfoUser();
  },
  watch() {
     this.getinfoUser();
  }
};
</script>

<style lang="scss" scoped>
   * {
        color: #000;
    }

</style>
