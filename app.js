const { createApp } = Vue

createApp({
    data() {
        return {
            API_URL: './db.php',
            movieList: []
        }
    },
    methods: {
        readMovieList(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response)
                    this.movieList = response.data
                })
                .catch(err => {
                    console.error(err.message);
                })
        }
    },
    mounted() {
        this.readMovieList(this.API_URL)
    }
}).mount('#app')