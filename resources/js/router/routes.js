import Article from "../components/Article.vue";
import ArticleShow from "../components/ArticleShow.vue";
import NotFound from "../components/NotFound.vue";

const routes = [
    {
        path: '/',
        name: 'articles',
        component: Article
    },
    {
        path: '/articles/:url',
        name: 'article',
        component: ArticleShow
    },
    {
        path: '/:pathMatch(.*)*',
        name: "notFound",
        component: NotFound
    }
]

export default routes;
