<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                ¿En qué estás pensando?
            </div>
            <div class="card-body">
                <form action="" class="form" @submit.prevent="addThought">
                    <div class="form-group">
                        <label for="thought">Ahora estoy pensando en:</label>
                        <input type="text" name="thought" class="form-control" id="" v-model="description">
                    </div>
                    <button class="btn btn-primary">
                            Enviar pensamiento <span class="badge badge-primary"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            description: ''
        }
    },
    mounted() {
        console.log("ThoguhtForm mounted.");
    },
    methods:{
        addThought(){
            const local = this
            const params = {
                description: this.description
            }
            this.description = '';
            axios.post('thoughts', params).then( function (response) {
                const thought = response.data
                local.$emit('new',thought)
            })
        }
    }
};
</script>
