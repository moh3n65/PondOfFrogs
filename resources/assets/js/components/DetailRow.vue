<template>
    <div @click="onClick">
        <div class="inline field">
            <label>Name: </label>
            <span>{{rowData.name}}</span>
        </div>
        <div class="inline field">
            <label>Gender: </label>
            <span>{{rowData.gender == 0 ? 'Female' : 'Male'}}</span>
        </div>
        <div class="inline field">
            <label>Hunger rate: </label>
            <span>{{rowData.hunger_rate}}</span>
        </div>
        <div class="inline field">
            <label>Marital: </label>
            <span>{{rowData.partner_id != null ? 'In Love' : 'Single'}}</span>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            rowData: {
                type: Object,
                required: true
            },
            rowIndex: {
                type: Number
            }
        },
        methods: {
            onClick (event) {
                //console.log('detail-row: on-click', event.target)
            }
        },
    }
</script>