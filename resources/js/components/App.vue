<template>

        <NavBar />
        <Graphics />
        <SideNav />

</template>

<script>

import SideNav from './DashboardSideNav.vue';
import NavBar from './DashboardNavBar.vue';
import Graphics from './DashboardGraphics.vue';

    export default {
        name: 'App',
        components: {
            SideNav,
            NavBar,
            Graphics
        }
    };

</script>

<style scoped>
    /*  */
</style>