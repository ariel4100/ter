<template>
    <div class="container-fluid">
        <fieldset>
            <legend>Galeria de Videos:</legend>
            <p class=""><b class="font-weight-bold text-info">Video</b> Para ingresar un video de Youtube, deberá ingresar el código que se encuentra al final de la URL del video.
                <br>
                Ejemplo:
                <br>https://www.youtube.com/watch?v= <b class="font-weight-bold">a5uQMwRMHcs</b>
                <br>https://youtu.be/ <b class="font-weight-bold">a5uQMwRMHcs</b></p>
            <a @click.prevent="addImage" class="btn btn-info btn-sm m-0 mb-3">+</a>
            <draggable v-model="gallery" class="row" draggable=".item" @change="log">
                <div class="col-md-4 mb-2 item" v-for="(item,index) in gallery" :key="index" >
                    <span @click="deleteImage(index)" class="badge badge-danger del">X</span>
                    <iframe width="100%" height="200" :src="'https://www.youtube.com/embed/'+item.video" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="md-form  ">
                        <input type="text" class="form-control" v-model="item.video" :name="'gallery['+index+'][video]'" placeholder="Codigo del video" aria-describedby="material-addon3" value="">
                    </div>
                    <div class="md-form m-0">
                        <input type="text" :name="'gallery['+index+'][title_es]'" v-model="item.title_es"  placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form m-0">
                        <input type="text" :name="'gallery['+index+'][title_en]'" v-model="item.title_en"  placeholder="Titulo - ingles" class="form-control">
                    </div>
                </div>
            </draggable>
        </fieldset>
    </div>
</template>

<script>
    import draggable from 'vuedraggable'
    export default {
        props:['galeria'],

        data(){
            return {
                img: 1,
                url: document.__API_URL+'/',
                //imageData: [],
                gallery:[],
            }
        },
        components: {
            draggable,
        },
        mounted() {
            //console.log(this.gallery)
            this.getFamily();
        },
        methods:{
            getFamily() {
                console.log(this.galeria);
                if (this.galeria != undefined)
                {

                    this.galeria.forEach((item)=>{
                            this.gallery.push(
                                {
                                    video: item.video,
                                    title_es: item.title_es,
                                    title_en: item.title_en,
                                }
                            );
                    });
                }
            },
            log() {
                //console.log(this.gallery)
            },

            addImage: function () {
                this.gallery.push(
                    {
                        video:'',
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