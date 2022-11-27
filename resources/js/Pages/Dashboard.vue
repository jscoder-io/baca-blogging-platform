<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue'
import { Chart, Grid, Line } from 'vue3-charts'
import { ref } from 'vue'

const data = ref([
    { month: 'Jan', visitor: 1000 },
    { month: 'Feb', visitor: 2000 },
    { month: 'Mar', visitor: 400 },
    { month: 'Apr', visitor: 1200 },
    { month: 'May', visitor: 200 },
    { month: 'Jun', visitor: 600 },
    { month: 'Jul', visitor: 500 },
    { month: 'Aug', visitor: 220 },
    { month: 'Sep', visitor: 350 },
    { month: 'Oct', visitor: 570 },
    { month: 'Nov', visitor: 460 },
    { month: 'Dec', visitor: 400 }
])
const direction = ref('horizontal')
const margin = ref({
    left: 0,
    top: 20,
    right: 20,
    bottom: 0
})
</script>

<template>
    <AdminLayout title="Dashboard">
        <div class="text-center">
            <h1>Monthly Visitor Stats</h1>
        </div>
        <Chart
            :size="{ width: 900, height: 400 }"
            :data="data"
            :margin="margin"
            :direction="direction">

            <template #layers>
                <Grid strokeDasharray="2,2" />
                <Line :dataKeys="['month', 'visitor']" />
            </template>
        </Chart>
    </AdminLayout>
</template>
