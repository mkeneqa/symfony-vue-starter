<template>
<div>
    <Navbar></Navbar>
    <div class="container">
        <router-view />
    </div>
</div>
</template>

<script>
    import Navbar from './Components/Navbar';
    export default {
        name: "App",
        components: {
            Navbar
        }
    }
</script>
