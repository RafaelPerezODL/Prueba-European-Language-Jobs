<template>

    <form @submit.prevent="crear" class="border border-light" style="width: 50%; margin-left: 25%; margin-top: 10%;">

        <p class="h4 mb-4 text-center">Añadir Perro</p>
    
            <input type="text" v-model="perro.raza" class="form-control" placeholder="Raza">
            </br>
            <input type="text" v-model="perro.color" class="form-control" placeholder="Color">
            </br>
    
        <select class="form-control" v-model="perro.tamano">
            <option value="" disabled="" selected="">Tamaño</option>
            <option >Pequeño</option>
            <option >Pequeño/Mediano</option>
            <option >Mediano</option>
            <option >Mediano/Grande</option>
            <option >Grande</option>
        </select>
    
    </br>

        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="form-control-file" id="foto" name="foto" @change="onFileChange">
            </div>
        </div>
    </br>
        <div class="text-center">
            <button class="btn btn-info" type="submit">Guardar</button>
        </div>
    </form>
</template>

<script>
export default{
    name:"crear-perro",
    data(){
        return {
            perro:{
                foto:null,
                raza:null,
                color:null,
                tamano:null
            }
        }
    },
    methods:{

        onFileChange(event){
            console.log(" entra onfilechange");
            this.formFields.foto = event.target.files[0];
            console.log("onfilechange");
        },

        crear(){

            console.log("entra crear");

            let formData = new FormData();            

            formData.append("foto", this.formFields.foto);
            formData.append("raza", this.formFields.raza);
            formData.append("color", this.formFields.color);
            formData.append("tamano", this.formFields.color);

            console.log("append");

            axios.post('/api/perro', formData)
                    .then((res) => {
                        console.log(res);
                    })
                    .catch((error) => {
                        console.log(error);
            });
        },
    }
}
</script>