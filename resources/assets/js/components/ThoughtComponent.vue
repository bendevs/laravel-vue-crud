<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Publicado en {{ thought.created_at }}
            </div>
            <div class="card-body">
                <input type="text" v-if="editMode" name="" id="" v-model="thought.description" class="form-control">
                <p v-else class="card-text">
                    {{ thought.description }}
                </p>
            </div>
            <div class="card-footer text-muted">
                <button v-if="editMode" type="button" class="btn btn-success" @click="onClickUpdate">Guardar</button>
                <button v-else type="button" class="btn btn-primary" @click="onClickEdit">Editar</button>
                <button type="button" class="btn btn-danger" @click="onClickDelete">Eliminar</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['thought'],
    data() {
        return {
            editMode: false
        }
    },
    mounted() {
        console.log("Component mounted.");
    },
    methods:{
        onClickDelete(){
            this.$emit('delete')
        },
        onClickEdit() {
            this.editMode = true
        },
        onClickUpdate(thought) {
            this.editMode = false
            this.$emit('update', thought)
        }
    }
};
</script>
