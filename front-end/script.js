new Vue({
    el: '#app',
    data: {
        arrDiscs: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api.php').then(response => this.arrDiscs = response.data);
    }
}) 