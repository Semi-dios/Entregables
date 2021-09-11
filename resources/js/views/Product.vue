<template>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Table Products</h3>
        <div class="pagination">
          <ol id="numbers"></ol>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="filter input-group mb-3 p-5">
          <input
            class="form-control"
            type="text"
            placeholder="Name Filter"
            v-model="filter_name"
          />
        </div>
        <export-excel
          class="btn btn-primary float-right m-1"
          :data="json_data"
          :fields="json_fields"
          worksheet="My Worksheet"
          name="report.xls"
        >
          Download Report
        </export-excel>
        <table class="table">
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>Name</th>
              <th>Description</th>
              <th>Company</th>
              <th>Image</th>
              <th>Price</th>
              <th>Options</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="(r, index) in filteredRows.slice(
                pageStart,
                pageStart + countOfPage
              )"
              :key="index"
            >
              <th>{{ (currPage - 1) * countOfPage + index + 1 }}</th>
              <td>{{ r.name }}</td>
              <td>{{ r.description }}</td>
              <td>{{ r.company_id }}</td>
              <td>{{ r.image }}</td>
              <td>{{ r.price }}</td>
              <td>
                  <!-- <a
                  class="btn btn-app my-1 mr-3 bg-success btn-sm"
                  :href="'public/#/products/' + r.id + '/show'"
                >
                  <i class="fas fa-eye mr-1"></i>Show
                </a> -->
                <a
                  class="btn btn-app my-1 mr-3 bg-success btn-sm"
                  :href="'/#/products/' + r.id + '/show'"
                >
                  <i class="fas fa-eye mr-1"></i>Show
                </a>
               <!--   <a
                  class="btn btn-app my-1 mr-3 bg-primary btn-sm"
                  :href="'public/#/products/' + r.id + '/edit'"
                >
                  <i class="fas fa-edit mr-1"></i> Edit
                </a> -->
                <a
                  class="btn btn-app my-1 mr-3 bg-primary btn-sm"
                  :href="'/#/products/' + r.id + '/edit'"
                >
                  <i class="fas fa-edit mr-1"></i> Edit
                </a>
                <a
                  class="btn btn-app my-1 bg-danger btn-sm"
                  data-id="r.id"
                  @click="deleteProduct(r.id)"
                  data-toggle="modal"
                  data-target="#modal-delete"
                >
                  <i class="fas fa-trash mr-1"></i> Delete
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li
              class="page-item"
              v-bind:class="{ disabled: currPage === 1 }"
              @click.prevent="setPage(currPage - 1)"
            >
              <a class="page-link" href="">Prev</a>
            </li>
            <li
              class="page-item"
              v-for="n in totalPage"
              v-bind:class="{ active: currPage === n }"
              @click.prevent="setPage(n)"
            >
              <a class="page-link" href="">{{ n }}</a>
            </li>
            <li
              class="page-item"
              v-bind:class="{ disabled: currPage === totalPage }"
              @click.prevent="setPage(currPage + 1)"
            >
              <a class="page-link" href="">Next</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      error: "",
      rows: [],
      countOfPage: 50,
      currPage: 1,
      filter_name: "",
      json_fields: {
        Id: "id",
        Name: "name",
        Description: "description",
      },
      json_data: [],
      json_meta: [
        [
          {
            key: "charset",
            value: "utf-8",
          },
        ],
      ],
    };
  },
  methods: {
    setPage: function (idx) {
      if (idx <= 0 || idx > this.totalPage) {
        return;
      }
      this.currPage = idx;
    },
    deleteProduct(id) {

            console.log(id);
            axios.delete("api/product-detail/" + id).then((response) => (this.info = response));
            this.$forceUpdate();
            location.reload();

    }
  },

  mounted() {
    this.axios
      .get("/api/products")
      .then((response) => {
        this.json_data = JSON.parse(JSON.stringify(response.data.products));
        this.rows = response.data.products;
       // console.log(this.json_data);
      })
      .catch((error) => {
        this.error = error.response.data.message || error.message;
        console.log(this.error);
      });
  },
  computed: {
    filteredRows: function () {
      var filter_name = this.filter_name.toLowerCase();
      return this.filter_name.trim() !== ""
        ? this.rows.filter(function (d) {
            return d.name.toLowerCase().indexOf(filter_name) > -1;
          })
        : this.rows;
    },
    pageStart: function () {
      return (this.currPage - 1) * this.countOfPage;
    },
    totalPage: function () {
      return Math.ceil(this.filteredRows.length / this.countOfPage);
    },
  },
};
</script>

<style lang="scss" scoped>
* {
  color: #000;
}
table {
  color: #000;
  tbody {
    color: inherit;
  }
}
button.page-link {
  display: inline-block;
}
button.page-link {
  font-size: 20px;
  color: #000;
  font-weight: 500;
}
.offset {
  width: 500px !important;
  margin: 20px auto;
}
</style>
