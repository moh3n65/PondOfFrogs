<template>
        <div class="panel panel-default">
            <div class="panel-heading">Pond of Frogs</div>
            <div class="panel-body">
                <div class="ui container">
                    <frog-vue-table></frog-vue-table>
                </div>
            </div>
        </div>
</template>

<script>
    import FrogVueTable from '../components/FrogVueTable'

    export default
    {
        components: {
            FrogVueTable
        },
        mounted() {

        }
    }
</script>



<style>

</style>