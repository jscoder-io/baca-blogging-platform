<script setup>
import { Inertia } from '@inertiajs/inertia'
import { Link } from '@inertiajs/inertia-vue3'

const logout = () => {
    Inertia.post(route('logout'))
}
</script>

<template>
    <div class="navbar bg-base-100 shadow-xl rounded-box">
        <div class="flex-1">
            <Link class="btn btn-ghost normal-case text-xl" :href="route('dashboard')">Admin Panel</Link>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal p-0">
                <li><Link :href="route('post')">Posts</Link></li>
                <li><Link :href="route('setting')">Settings</Link></li>
            </ul>
            <form method="POST" @submit.prevent="logout">
                <button class="btn btn-sm btn-primary ml-2" type="submit">Log Out</button>
            </form>
        </div>
    </div>
</template>
