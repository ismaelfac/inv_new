<template>
  <div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card-body">
                  <h4 class="card-title"><controls :controls="buttons"></controls></h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Acciones</th>
                          <th>User</th>
                          <th>Nombres o Razón social</th>
                          <th>dni</th>
                          <th>Pais</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(item, index) in items" :key="index">
                          <td>
                            <div class="btn-group" role="group" aria-label="Basic example" v-for="(control, index) in controls" :key="index">
                          <button v-if="control === 'print'" type="button" class="btn btn-outline-primary" @click.stop="getProperties">
                            <i class="mdi mdi-home-outline"></i>
                          </button>
                        </div>
                          </td>
                          <td class="py-1">
                            <img src="/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td v-text="item.last_name"></td>
                          <td v-text="item.dni"></td>
                          <td v-text="item.country.code"></td>
                        </tr>
                      </tbody>
                    </table>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Propiedades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Roles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto modi error assumenda dolorum ullam eaque reiciendis corrupti vitae commodi dolores veritatis nemo, totam alias repellat nobis officia, in voluptatem perferendis.</div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus earum maiores placeat corporis reiciendis eaque eos quae eligendi expedita veniam ipsum, nostrum consectetur voluptate deleniti voluptatem cum sequi sed animi.</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
  </div>
</template>
<script>
const axios = require("axios");
import controls from '../controls'
export default {
  components: {
    controls
  },
  created: function() {
    this.getCustomers();
  },
  data() {
    return {
        items: [],
        totalRows: '',
        buttons: []
    };
  },
  methods: {
    newClient(){
      alert("entro")
    },
    getCustomers(){
      return axios
        .get("customers")
        .then(
          response => (
            (this.items = response.data.customers),
            (this.totalRows = response.data.total),
            (this.buttons = response.data.controls)
          )
        )
        .catch(error => console.log(error));
    }
  }
};
</script>