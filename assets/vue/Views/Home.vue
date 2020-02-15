<template>
    <div>
        <h1>Vue is working!</h1>
    </div>
</template>

<script>
    import $ from "jquery";
    export default {
        name: "Home",
        data () {
            return {
                loading: false,
                post: null,
                error: null
            }
        },
        created () {
            // fetch the data when the view is created and the data is
            // already being observed
            this.fetchData()
        },
        watch: {
            // call again the method if the route changes
            //'$route': 'fetchData'
        },
        methods: {
            fetchData () {
                $.post('/api/about')
                    .done(function (data) {
                        console.log("server data => ", data.data);
                    });

                //console.log('Data Fetched!')
            }
        }
    };
</script>
