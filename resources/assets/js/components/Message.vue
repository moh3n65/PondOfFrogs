<template>
    <span class="help-block ui green message">
        <slot></slot>
    </span>
</template>

<script>
    export default {
        props: ['message'],
    }
</script>