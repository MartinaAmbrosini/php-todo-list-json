<script>
import axios from 'axios';

export default {
    name: 'To-do-list',
    data() {
        return {
            todos: []
        }
    },
    mounted() {
        const t = this;
        axios.get('http://localhost/TodoApi.php')
            .then(res => {
                t.todos = res.data;
            }).catch(err => console.error(err));
    }
}

</script>

<template>
    <h1>ToDo List: </h1>
    <ul>
        <li v-for="todo in todos">
            {{ todo.task }}
        </li>
    </ul>
</template>