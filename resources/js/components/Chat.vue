<template>
    <div class="flex h-full">
        <div class="w-1/5 border-r-2 border-solid border-gray-600">User List</div>
        <div class="w-4/5 flex flex-col">
            <div class="flex-1">Chat Area</div>
            <div class="flex-initial p-2">
                <input type="text" class="border-2 border-solid rounded border-gray-600 w-full p-3">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
