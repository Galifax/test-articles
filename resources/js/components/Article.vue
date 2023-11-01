<template>
    <div>
        <div class="row">
            <div class="col-md-4" v-for="article in articles" :key="article.id">
                <h2>{{ article.title }}</h2>
                <p>ID: {{ article.id }} Date: {{ article.date }}</p>
                <p>{{ article.description }}</p>
                <p><router-link class="btn btn-secondary" :to="{name: 'article', params: {url: article.url}}" role="button">View details »</router-link></p>
            </div>
        </div>
        <hr>
        <nav aria-label="Page navigation example" v-if="pages.length > 1">
            <ul class="pagination justify-content-center">
                <li class="page-item" :class="{disabled: currentPage === 1}">
                    <router-link @click="initArticles(currentPage - 1)" class="page-link" :to="{name: 'articles', query: {page: currentPage - 1}}">Previous</router-link>
                </li>
                <li class="page-item" :class="{disabled: page === currentPage, active: page === currentPage}" v-for="page in pages" :key="page">
                    <router-link @click="initArticles(page)" class="page-link" :to="{name: 'articles', query: {page: page}}">{{ page }}</router-link>
                </li>
                <li class="page-item" :class="{disabled: currentPage === lastPage}">
                    <router-link @click="initArticles(currentPage + 1)" class="page-link" :to="{name: 'articles', query: {page: currentPage + 1}}">Previous</router-link>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
import axios from 'axios';

export default({
    data() {
        return {
            articles: {},
            pages: [],
            lastPage: 1,
            currentPage: this.$route.query.page ?? 1,
        }
    },
    methods: {
        initArticles(page) {
            axios.get('/api/v1/articles', {
                params: {
                    page
                }
            })
                .then(res => {
                    let data = res.data;

                    this.articles = data.data;
                    this.pages = [...Array(data.pagination.totalPages+1).keys()].slice(1);
                    this.currentPage = data.pagination.currentPage;
                    this.lastPage = data.pagination.totalPages;
                });
        }
    },
    created() {
        this.initArticles(this.currentPage);
    }
})
</script>

<style scoped>

</style>
