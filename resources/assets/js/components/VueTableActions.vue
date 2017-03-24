<template>
    <div class="custom-actions">
        <button class="" @click="alert()">
            <i class="edit icon"></i>
        </button>

        <button class="delete icon" id="show-modal" @click="itemAction('delete-item')">
            <i class="delete icon"></i>
        </button>

        <!-- use the modal component, pass in the prop -->
        <modal v-if="showModal" @close="showModal = false">
            <p slot="body">{{ body }}</p>
            <h3 slot="header">{{ header }}</h3>
        </modal>
    </div>
</template>

<script>
    import Modal from './Modal.vue'

    export default {
        components: {
            Modal,
        },
        data () {
            return {
                showModal: false,
                actionTitle : '',
                header: '',
                body: 'Are you sure you want to kill the innocent frog?',
            }
        },
        props: {
            rowData: {
                type: Object,
                required: true
            },
            rowIndex: {
                type: Number
            },
        },
        methods: {
            itemAction (action) {
                action == 'edit-item' ? this.header = 'Edit Frog' : this.header = 'Kill Frog';
                this.actionTitle = action;
                this.showModal = true;
            },
            alert () {
                alert('Coming soon.')
            }
        }
    }
    //////////////


</script>