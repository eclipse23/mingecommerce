<template>
    <span class="relative inline-block">
<<<<<<< HEAD
        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-indigo-600 rounded-full">
            {{ order }}
        </span>
=======
        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-indigo-600 rounded-full">2</span>
>>>>>>> 8575311f873dcc06be500242997626364b16b31f
    </span>
</template>

<script>
export default {
    data() {
        return {
            order: 0
        }
    },
    methods: {
        connect(id) {
            window.Echo.join(`customerorders${this.app.current_user.id}`)
            .listen('CustomerOrders', e => {
                this.getOrderCount()
            })
        },
        async getOrderCount() {
            await axios.get('/get-pending-orders')
            .then(response => {
<<<<<<< HEAD
                this.order = response.data
=======
                this.order = response.data.data
>>>>>>> 8575311f873dcc06be500242997626364b16b31f
            })
        }
    },
    created() {
        this.connect();
        this.getOrderCount();
    }
}
</script>