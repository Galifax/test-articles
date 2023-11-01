<template>
    <div>
        <p>ID: {{ article.id }}</p>
        <h2>{{ article.title }}</h2>
        <p>{{ article.date }}</p>
        <p>{{ article.description }}</p>
        <p>{{ article.content }}</p>
    </div>
</template>

<script>
import axios from 'axios';

export default({
    data() {
        return {
            article: {},
        }
    },
    created() {
        axios.get(`/api/v1/articles/${this.$route.params.url}`)
            .then(res =>{
                this.article = res.data.data;
            })
            .catch(err => {
                this.$router.push({name: 'notFound'});
            })
    }
})
</script>

<style scoped>

</style>
