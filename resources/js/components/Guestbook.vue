<template>
    <div>
        <div class="rounded shadow p-4 mb-4 bg-white my-sm-3" v-for="signature in signatures">
            <div class="position-relative clearfix">
                <span class="user float-left">
                    <i class="far fa-user fa-2x"></i>
                    <label>By {{ signature.name }} <{{signature.email}}></label>
                </span>
                <span class="float-right">
                    <time>{{signature.created_at}}</time>
                </span>
            </div>
            <div class="position-relative my-sm-1">
                <p>{{ signature.body }}</p>
            </div>
        </div>
        <pagination  nav-class="padding-10" ul-class="bg-color-red" li-class="txt-color-blue"
                  :total="total" :page-size="to" :callback="fetch">
        </pagination >
    </div>
</template>

<script>
    import pagination from 'vue-pagination-bootstrap';

    export default {
        components: { pagination },
        name: "Guestbook",
        data() {
            return {
                signatures: [],
                total: 0,
                to: 0,
                endpoint: 'api/signatures?page='
            };
        },
        created() {
            this.fetch();
        },
        methods: {
            fetch(page = 1) {
                axios.get(this.endpoint + page)
                    .then(({data}) => {
                        this.signatures = data.data;
                        this.total = data.total;
                        this.to = data.to;
                    });
            }
        }
    }
</script>

<style scoped>

</style>
