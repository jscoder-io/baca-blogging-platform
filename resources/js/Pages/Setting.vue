<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue'
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css'

defineProps({
    setting: Object,
})
</script>

<template>
    <AdminLayout title="Settings">
        <form>
            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Name</span>
                </label>
                <input v-model="setting.name" type="text" class="input input-bordered w-full" />
            </div>
            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Job Title</span>
                </label>
                <input v-model="setting.title" type="text" class="input input-bordered w-full" />
            </div>
            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Bio</span>
                </label>
                <QuillEditor v-model:content="setting.bio" contentType="html" theme="snow" />
            </div>
            <div class="mt-8">
                <button class="btn btn-active btn-primary" type="submit">Save</button>
            </div>
        </form>
    </AdminLayout>
</template>
