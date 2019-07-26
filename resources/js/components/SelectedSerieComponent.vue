<template>
    <div class="row">
        <div class="col-md-6 mt-4">
            <p>Seleccionar Familia</p>
            <select class="custom-select form-control" v-model="selectfamilia" @change="getSubcategoria()">
                <option v-for="item in familias" :value="item">{{ item.text['es']['title'] }}</option>
                <input type="text" class="d-none" name="family_id" :value="selectfamilia.id">
            </select>
        </div>
        <div v-if="Object.keys(selectfamilia).length && Object.keys(selectfamilia.subfamily).length" class="col-md-6 mt-4">
            <p>Seleccionar Subfamilia</p>
            <select class="custom-select form-control" v-model="selectsubfamilia" @change="getSubcategoria()">
                <option v-for="item in selectfamilia.subfamily" :value="item">{{ item.text['es']['title'] }}</option>
                <input type="text" class="d-none" name="subfamily_id" :value="selectsubfamilia && selectsubfamilia.id">
            </select>
        </div>
        <div v-if="Object.keys(selectfamilia).length && Object.keys(selectfamilia.brand).length" class="col-md-6 mt-4">
            <p>Seleccionar Marca</p>
            <select class="custom-select form-control" v-model="selectmarca"  >
                <option v-for="item in selectfamilia.brand" :value="item">{{ item.text['es']['title'] }}</option>
                <input type="text" class="d-none" name="marca_id" :value="selectmarca && selectmarca.id">
            </select>
        </div>
        <div v-if="selectmarca && selectmarca.model" class="col-md-6 mt-4">
            <p>Seleccionar Modelo</p>
            <select class="custom-select form-control" v-model="selectmodelo" >
                <option v-for="item in selectmarca.model" :value="item">{{ item.text['es']['title'] }}</option>
                <input type="text" class="d-none" name="modelo_id" :value="selectmodelo && selectmodelo.id">
            </select>
        </div>
        <!--<div v-if="selectsubfamilia && selectsubfamilia.serie && selectsubfamilia.serie" class="col-md-6 mt-4">-->
            <!--<p>Seleccionar Serie</p>-->
            <!--<select class="custom-select form-control" v-model="selectserie" @change="getSubcategoria()">-->
                <!--<option v-for="item in selectsubfamilia.serie" :value="item">{{ item.text['es']['title'] }}</option>-->
                <!--<input type="text" class="d-none" name="serie_id" :value="selectserie.id">-->
            <!--</select>-->
        <!--</div>-->
    </div>
</template>

<script>

    // register globally
    //Vue.component('multiselect', Multiselect)
    export default {
        props:['subfamilias','serie','marcas','familias'],
        // components: {
        //     Multiselect,
        //     Money
        // },
        data(){
          return{
              // selectfamilia: this.producto && this.producto.category_id ? this.producto.category_id : {},
              // selectmarca: this.producto && this.producto.brand_id ? this.producto.brand_id : {},
              // selectmodelo: this.producto && this.producto.model_id ? this.producto.model_id : {},
              // selectserie: this.producto && this.producto.serie_id ? this.producto.serie_id : {},
              selectfamilia: this.serie.family ? this.serie.family : 0,
              selectmarca: this.serie.brand ? this.serie.brand : 0,
              selectmodelo: this.serie.model ? this.serie.model : 0,
              selectserie: 0,
              selectsubfamilia: this.serie.subfamily ? this.serie.subfamily : 0,
              // selectserie: this.producto && this.producto.brand_id ? this.producto.brand_id : 1,
              subcate:[],
              subfami:[],
              model:[],
              // serie:[],
              cate:[],
              terminacion:[],

              url : document.__API_URL,
          }
        },
        mounted() {
            console.log(this.familias)
            console.log(this.serie)
            // console.log(this.selectsubfamilia)
            // console.log(this.producto.subfamily === this.selectsubfamilia);
            // this.getSubcategoria();
            // this.getsubfamilia();
            // this.getCapacidad()
        },
        computed:{

        },
        methods: {
            getSubcategoria(){
                // this.selectfamilia = this.serie.family
                // this.selectmarca = 0;
                // this.selectmodelo = 0;
                console.log(this.selectmarca)
                this.selectmarca = 0;
                // this.catseleccionado = this.producto.category_id != null ? this.producto.category_id : 0;
                // this.subcatseleccionado = this.producto.subcategory_id != null ? this.producto.subcategory_id : 0;
                // console.log(this.selectserie)
                // // this.cate = this.categoria.filter(item => item.id == this.producto.category_id);
                // if (this.marcas.length)
                // {
                //     this.subcate = this.marcas.filter(item => (item.family_id && item.family_id == this.selectfamilia));
                // }
                // if (this.modelos.length)
                // {
                //     this.model = this.modelos.filter(item => (item.brand_id && item.brand_id == this.selectmarca));
                // }
                // if (!this.series == undefined)
                // {
                //     this.serie = this.series.filter(item => (item.model_id && item.model_id == this.selectmodelo));
                // }
                //
                // if (this.subfamilias.length)
                // {
                //     this.subfami = this.subfamilias.filter(item => (item.family_id  == this.selectfamilia));
                //     console.log(this.subfami)
                //
                // }


                // this.subfami = this.subfamilias.filter(item => (item.family_id && item.family_id == this.selectfamilia));
                // this.serie = this.series.filter(item => (item.model_id && item.model_id == this.selectmodelo));
                // console.log(this.subcate)
                // console.log(this.subfami)
            },
            getSubfamilia(){
                // this.catseleccionado = this.producto.category_id != null ? this.producto.category_id : 0;
                // this.subcatseleccionado = this.producto.subcategory_id != null ? this.producto.subcategory_id : 0;
                // console.log(this.selectfamilia)
                // this.cate = this.categoria.filter(item => item.id == this.producto.category_id);

                // console.log(this.subcate)
                // console.log(this.subfami)
            },
            addCapacidad(){
                this.capacidad.push(
                    {
                        cc:'',
                        price:'',
                        price_offer:'',
                        offer:''
                    }
                )
            },
            deleteCapacidad(index) {
                this.capacidad.splice(index, 1);
                //this.imageData[index]= '';
            }
        }
    }
</script>
<!--<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>-->
