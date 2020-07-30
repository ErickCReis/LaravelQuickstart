<script>

    export default {
        props: {
            users: {
                required: false,
                default: null,
                type: [
                    Array,
                    Boolean
                ]
            }
        },

        data() {
            return {
                sortProperty: 'name',
                sortDirection: 1,
                filterTerm: ''
            }
        },

        methods: {
            sort(property) {
                console.log(property)

                if (this.sortDirection === 1) this.sortDirection = -1
                else if (this.sortDirection === -1) this.sortDirection = 1

                if (property === 'id') {
                    this.users.sort((a, b) => a.id < b.id ? this.sortDirection : this.sortDirection * -1)
                } else if (property === 'name') {
                    this.users.sort((a, b) => a.name < b.name ? this.sortDirection : this.sortDirection * -1)
                }

                this.$forceUpdate()

                console.log(this.users)
            }
        }
    }
</script>
<template>
    <div>
        <pre></pre>
        <div class="well">
            <input class="form-control" placeholder="Filtrar a lista abaixo" type="text" v-model="filterTerm">
        </div>

        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th><a @click="sort('id')" href="#">ID</a></th>
                <th><a @click="sort('name')" href="#">Nome</a></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="u in users.filter(value => value.name.includes(filterTerm))">
                <td>{{ u.id }}</td>
                <td>{{ u.name }}</td>
            </tr>
            </tbody>
        </table>

    </div>
</template>
<style scoped=""></style>
