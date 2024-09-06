<template>

<div class="content">
    <div class="main-content">
        <div class="content-section active" id="dashboard">
            <h2>PES - Jucepe</h2>
                <div class="charts-container">
                    <canvas id="lineChart"></canvas>
                    <canvas id="barChart"></canvas>
                </div>
        </div>
    </div>
</div>

</template>

<script>
    export default {
        name: 'Graphics'
    }
</script>