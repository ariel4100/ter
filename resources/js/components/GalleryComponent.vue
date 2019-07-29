<template>
    <div class="container-fluid mt-5">
        <fieldset>
            <legend>{{title}}:</legend>
            <a @click.prevent="addImage" class="btn btn-info m-0 mb-3">Añadir</a>
            <div class="row">
                <div class="col-md-4 mb-2" v-for="(item,index) in gallery" :key="index" >
                    <div class="image-preview" v-if="getPreviewImage(index)">
                        <span @click="deleteImage(index)" class="badge badge-danger del">X</span>
                        <img class="img-fluid" :src="getPreviewImage(index)" style="height: 200px" v-if="img == 1">
                    </div>
                    <input type="text" :name="name+'['+index+'][image]'" :value="item.image"  class="d-none">
                    <div class="custom-file">
                        <input type="file" @change="previewImage(index,$event)" class="custom-file-input" :name="name+'['+index+'][image]'"  lang="es">
                        <label class="custom-file-label"  data-browse="Subir">{{ label }}</label>
                    </div>
                    <div class="md-form m-0" >
                        <input type="text" :name="name+'['+index+'][title_es]'" :value="item.title_es"  placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form m-0" >
                        <input type="text" :name="name+'['+index+'][title_en]'" :value="item.title_en" placeholder="Titulo - ingles" class="form-control">
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</template>

<script>
    import draggable from 'vuedraggable'
    export default {
        //props:['galeria','familia'],
        props:{
            galeria: Array,
            familia: Array,
            name: String,
            label: String,
            title: String
        },
        data(){
            return {
                img: 1,
                url: document.__API_URL,
                //imageData: [],
                gallery: this.galeria ? this.galeria : [],
            }
        },
        components: {
            draggable,
        },
        mounted() {
            // console.log(this.name)
            // this.getFamily();
        },
        methods:{
            getFamily() {
                //console.log(this.galeria);
                if (this.galeria != undefined)
                {
                    this.galeria.forEach((item)=>{
                        this.gallery.push(
                            {
                                image: item.image,
                                title_es: item.title_es,
                                title_en: item.title_en,
                            }
                        );
                    });
                    // for (const item in this.familia) {
                    //     this.gallery.push(this.familia);
                    //     //this.gallery[item] = this.familia[item];
                    //     //console.log(this.familia);
                    // }


                    //console.log(this.gallery);

                }
                //console.log(this.familia)
            },
            log() {
                //console.log(this.gallery)
            },
            previewImage: function(Key,event) {
                this.img = 0;
                let file = event.target.files[0];
                this.gallery[Key].image = file;
                //this.imageData[fileKey] = file;
                this.img = 1;
            },
            getPreviewImage(Key) {
                let image = this.gallery[Key].image;
                if (image && image instanceof File) {
                return URL.createObjectURL(image)
                }
                if (typeof image === 'string' || image instanceof String) {
                    image = this.url+'/'+image;
                    console.log(image)
                    return image
                }
                //return image
            },
            addImage: function () {
                this.gallery.push(
                    {
                        image:'',
                        title_es:'',
                        title_en:''
                    }
                )
            },
            deleteImage(index) {
                this.gallery.splice(index, 1);
                //this.imageData[index]= '';
            }
        }
    }
</script>
<style scoped>
    .del{
        position: absolute;
        top: -1px;
        z-index: 1;
        cursor: pointer;
    }
    fieldset
    {
        border: 1px solid #ddd !important;
        margin: 0;
        xmin-width: 0;
        padding: 10px;
        position: relative;
        border-radius:4px;
        background-color:#f5f5f5;
        padding-left:10px!important;
    }

    legend
    {
        font-size:14px;
        font-weight:bold;
        margin-bottom: 0px;
        width: 35%;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px 5px 5px 10px;
        background-color: #ffffff;
    }
</style>