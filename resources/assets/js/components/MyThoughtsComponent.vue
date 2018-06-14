<template>
    <div class="row justify-content-center">
        <form-component @new="newThought"></form-component>
        <thought-component v-for="(thought, index) in thoughts" :key="thought.id" :thought="thought" @delete="deleteThought(index)" @update="updateThought,thought"></thought-component>
    </div>
</template>

<script>
export default {
    data() {
        return {
            thoughts: []
        }
    },
    methods: {
        newThought(thought){
            this.thoughts.push(thought)
        },
        deleteThought(index) {
            this.thoughts.splice(index, 1)
        },
        updateThought(index, thought) {
            this.thoughts[index] = thought
        }
    },
    mounted() {
        let local = this
        axios.get('thoughts').then(function (response) {
            local.thoughts = response.data
        })
        console.log("Component mounted.");
    }
};
</script>
