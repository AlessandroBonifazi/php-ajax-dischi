// Debug
console.log('JS OK');

const app = new Vue({
    el: '#app',
    data() {
        return {
            albums: [],
        }
    },
    mounted() {
        axios
            .get('http://localhost/php-ajax-dischi/Milestone-2/database/albumsData.php')
            .then((response) => {
                this.albums = response.data;
                console.log(this.albums);
            }).catch(error => console.log(error));
    },
})