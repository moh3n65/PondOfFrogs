<template>
    <div>
        <vuetable ref="vuetable"
                  api-url="frogs/all/paginate"
                  :fields="fields" pagination-path=""
                  @vuetable:pagination-data="onPaginationData"

                  detail-row-component="detail-row"
                  @vuetable:cell-clicked="onCellClicked"
        ></vuetable>
        <br>
        <vuetable-pagination ref="pagination"
                  @vuetable-pagination:change-page="onChangePage"
        ></vuetable-pagination>
    </div>
</template>

<script>
    //import accounting from 'accounting'
    //import moment from 'moment'
    import Vue from 'vue'
    import Vuetable from 'vuetable-2/src/components/Vuetable';
    import VuetablePagination from 'vuetable-2/src/components/VuetablePagination';
    import DetailRow from './DetailRow'

    Vue.component('detail-row', DetailRow);

    export default {
        components: {
            Vuetable,
            VuetablePagination,
        },
        data () {
            return {
                fields: [
                    {
                        name: 'name',
                        title: 'Name'
                    },
                    {
                        name: 'date_of_birth',
                        title: 'Date of Birth',
                        dataClass: 'center aligned',
                    },
                    {
                        name: 'gender',
                        title: 'Gender',
                        callback: 'gender',
                        dataClass: 'center aligned',
                    },
                    {
                        name: 'hunger_rate',
                        title: 'Hunger Rate',
                        dataClass: 'center aligned',
                    },
                    {
                        name: 'date_of_dead',
                        title: 'Alive',
                        callback: 'aliveOrDead',
                        dataClass: 'center aligned',
                    },
                    {
                        name: 'partner_id',
                        title: 'Marital',
                        callback: 'marital',
                        dataClass: 'center aligned',
                    },
                    {
                        name: '__component:VueTableActions',
                        title: 'Actions',
                        titleClass: 'center aligned',
                        dataClass: 'center aligned'
                    }
                ]
            }
        },

        methods: {
            onPaginationData (paginationData) {
                this.$refs.pagination.setPaginationData(paginationData)
            },
            onChangePage (page) {
                this.$refs.vuetable.changePage(page)
            },
            gender (value){
                return value == 0 ?
                    '<span class="ui pink label"><i class="large woman icon"></i></span>' :
                    '<span class="ui blue label"><i class="large man icon"></i></span>'
            },
            marital (value){
                return value != null ? 'In Love' : 'Single'
            },
            aliveOrDead (value){
                return value != null ? 'Dead' : 'Alive'
            },
            onCellClicked (data, field, event) {
                console.log('cellClicked: ', field.name, data.id)
                this.$refs.vuetable.toggleDetailRow(data.id)
            }
        }
    }
</script>