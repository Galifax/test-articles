<template>
    <div>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'articles'}">Articles</router-link>
                        </li>
                    </ul>
                </div>
            </nav>
            <section>
                <router-view />
            </section>
        </div>
    </div>
</template>

<script>

</script>

<style scoped>

</style>
