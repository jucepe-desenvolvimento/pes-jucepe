<template>
    <nav class="auth-menu">
            <div class="expand-btn">
                <h4>PES - JUCEPE</h4>
            </div>
            <ul>
                <li class="auth-item">
                    <a href="#" class="auth-link">
                        <span class="auth-link-icon"><i class="bi bi-file-text"></i></span>
                        <span class="auth-link-text">Dashboard - Geral</span>
                    </a>
                </li>
                <li class="auth-item">
                    <a href="#" class="auth-link">
                        <span class="auth-link-icon"><i class="bi bi-file-earmark-medical"></i></span>
                        <span class="auth-link-text">Pesquisa Espontânea</span>
                    </a>
                </li>
                <li class="auth-item">
                    <a href="#" class="auth-link">
                        <span class="auth-link-icon"><i class="bi bi-body-text"></i></span>
                        <span class="auth-link-text">Pesquisa Serviços</span>
                    </a>
                </li>
                <li class="auth-item">
                    <a href="#" class="auth-link">
                        <span class="auth-link-icon"><i class="bi bi-check-lg"></i></span>
                        <span class="auth-link-text">Responder</span>
                    </a>
                </li>
                <li class="auth-item">
                    <a href="#" class="auth-link">
                        <span class="auth-link-icon"><i class="bi bi-person-bounding-box"></i></span>
                        <span class="auth-link-text">Meus Dados</span>
                    </a>
                </li>
                <li class="auth-item">
                    <a href="#" class="auth-link-icon" @click.prevent="logout">
                        <span class="auth-link-icon"><i class="bi bi-box-arrow-left"></i></span>
                        <span class="auth-link-text">Sair</span>
                    </a>
                </li>   
            </ul>
        </nav>
</template>

<script>
    export default {
        name: 'Dashboard',
        methods: {
            logout() {
                this.$axios.post('/logout')
                    .then(response => {
                        window.location.href = '/login';
                    })
                    .catch(error => {
                        console.error('Error: ', error);
                    });
            }
        }
    }
</script>