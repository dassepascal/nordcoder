<template>
hello world !
</template>


<script>
import axios from "axios";

export default {
    setup() {
        const getPosts = async () => {
        let posts =   await axios.get('/api/posts');
        console.log(posts);
        }
        getPosts();
    }
}
</script>
