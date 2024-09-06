<template>

    <div class="dashboard-nav-bar">
        <p><i class="bi bi-file-person"></i>Olá, {{ usersName }} </p>
    </div>

</template>

<script>
    export default {
        name: 'NavBar',
        data() {
            return {
                usersName: window.usersName
            }
        }
    }
</script>