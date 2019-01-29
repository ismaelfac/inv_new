<template>
  <div id="page-content" class="page-wrapper">
    <search-form @created="searchProperty"></search-form>
    <!-- BLOG AREA START -->
    <div class="blog-area pt-110">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <template v-if="!editing_property">
              <h2>Propiedades Recientes</h2>
              <div class="row">
                <property-list :properties="properties" :btncol="btncol"></property-list>
                <!-- pagination-area -->
                <div class="col-xs-12">
                  <!--pagination -->
                </div>
              </div>
            </template>
            <template v-else>
              <details-property :property="property" :btncol="btncol"></details-property>
            </template>
          </div>
          <div class="col-md-4" v-if="!editing_property">
            <!-- widget-categories -->
            <aside class="widget widget-categories mb-10" v-if="user">
              <div>
                <button
                  type="button"
                  class="btn btn-success btn-block"
                  @click="create_property"
                >Crear Inmueble</button>
              </div>
            </aside>
            <aside class="widget widget-categories mb-50">
              <h5>Categorias</h5>
              <property-category :categories="categories"></property-category>
            </aside>
            <!-- widget-recent-post -->
            <aside class="widget widget-recent-post mb-50">
              <h5>Comentarios Recientes</h5>
              <property-comments :comments="comments"></property-comments>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <!-- BLOG AREA END -->
  </div>
</template>

<script>
import store from './store'
import PropertyList from "./list_property";
import SearchForm from "./search_property";
import PropertyCategory from "./category_property";
import Comments from "../comments/comments";
import detailsProperty from "./details_property"
export default {
  components: {
    "property-list": PropertyList,
    "search-form": SearchForm,
    "property-category": PropertyCategory,
    "property-comments": Comments,
    "details-property": detailsProperty
  },
  created: function() {
    
  },
  methods: {
    
  }
};
</script>