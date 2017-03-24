<template>
    <span class="help-block ui red message">
        <slot></slot>
    </span>
</template>

<script>
    export default {
        props: ['errors'],
    }
</script>