<script setup>
import { Head } from '@inertiajs/inertia-vue3'
import Navbar from '@/Components/Navbar.vue'

defineProps({
    title: String,
})
</script>

<template>
    <div class="w-full min-h-screen py-3 text-sm text-slate-500 font-medium antialiased">
        <Head :title="title" />

        <div class="w-5/6 mx-auto">
            <Navbar />

            <div class="my-5 p-5 bg-white border rounded-box">
                <div class="flex justify-between border-b border-slate-200 pb-3 mb-5">
                    <div>
                        <span class="text-xl text-slate-700 font-bold">{{ title }}</span>
                    </div>
                    <div>
                        <slot name="topButton"></slot>
                    </div>
                </div>
                <div>
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>
