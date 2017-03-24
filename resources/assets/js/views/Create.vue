<template>
    <div class="panel panel-default">
        <div class="panel-heading">Pond of Frogs</div>
        <div class="panel-body">
            <div class="ui container">

                <form-error v-for="error in errors">
                    {{ error[0] }}
                </form-error>
                <message v-if="message != '' ">{{message}}</message>

                <form method="post" action="frog/add" @submit.prevent="addFrog" class="ui form">
                    <h4 class="ui dividing header">Create a Frog</h4>
                    <div class="two fields">
                        <div class="field">
                            <input type="text" placeholder="Name" v-model="newFrog.name">
                        </div>
                        <div class="field">
                            <input type="text" disabled v-model="newFrog.date_of_birth">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <select v-model="newFrog.gender">
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>
                        <div class="field">
                            <select v-model="newFrog.dad_id">
                                <option value="">Select a Dad</option>
                                <option v-for="dad in dads" :value="dad.id" >{{ dad.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <select v-model="newFrog.mom_id">
                                <option value="">Select a Mom</option>
                                <option v-for="mom in moms" :value="mom.id" >{{ mom.name }}</option>
                            </select>
                        </div>
                        <div class="field">
                            <select v-model="newFrog.partner_id">
                                <option value="">Single or choose a partner</option>
                                <option v-for="partner in partners" :value="partner.id" >{{ partner.name }}</option>
                            </select>
                        </div>
                    </div>


                    <button class="ui add button">Add Frog</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import FormError from '../components/FormError.vue'
    import Message from '../components/Message.vue'

    export default {
        components: {
            FormError,
            Message,
        },
        data () {
            return {
                newFrog:
                    {
                    name: '',
                    gender: "1",
                    date_of_birth: moment().format('YYYY-MM-D h:mm:ss'),
                    dad_id: '',
                    mom_id: '',
                    partner_id: '',
                    hunger_rate: 10,
                },
                allFrogs: [],
                dads: [],
                moms: [],
                partners: [],
                errors: [],
                message: ''
            }
        },
        beforeMount ()
        {
            this.getFrogs()
        },
        mounted ()
        {
        },
        methods: {
            moment () {
                return moment() ;
            },
            addFrog()
            {
                axios.post(domain + '/frog/create', this.newFrog)
                    .then(response =>
                    {
                        this.newFrog = {
                            name: '',
                            gender: "1",
                            date_of_birth: moment().format('YYYY-MM-D h:mm:ss'),
                            dad_id: '',
                            mom_id: '',
                            partner_id: '',
                            hunger_rate: 10,
                        };
                        this.message = response.data.message;
                        this.errors = '';
                    })
                    .catch(error =>
                    {
                        this.errors = error.response.data;
                        this.message = '';
                    });
            },
            getFrogs()
            {
                axios.get(domain + '/frogs/all').then(
                response =>
                {
                    this.allFrogs = response.data;
                    this.allFrogs.filter(frog => {
                       if (frog.date_of_dead == null)
                       {
                           if (frog.gender == 1)
                           {
                               this.dads.push(frog);// != null ? this.dads[Object.keys(this.dads).length] = frog : this.dads = [frog];
                           }
                           else if( (frog.gender == 0)  )
                           {
                               this.moms.push(frog);
                           }
                           if (frog.partner_id == null)
                           {
                               this.partners.push(frog);
                           }
                       }
                    });
                });
            }
        }
    }
</script>






