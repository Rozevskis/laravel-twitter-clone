<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Tweet from '@/Components/Tweet.vue';
import TwitterLayout from '@/Layouts/TwitterLayout.vue';

defineProps({ tweets: Array });
</script>

<template>
    <Head title="Welcome" />
    <TwitterLayout>
        <div class="text-white">
            <div :data-tweet-id="tweet.id" class="flex" v-for="tweet in tweets" :key="tweet">
                <Tweet :tweet="tweet" />
            </div>
            <div class="border-b border-b-gray-800 mt-2"></div>
        </div>
    </TwitterLayout>
</template>
