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
            thoughts: [
                {
                    id: 1,
                    description: 'Some description',
                    created_at: '12/Junio/2018'
                }
            ]
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
        console.log("Component mounted.");
    }
};
</script>
