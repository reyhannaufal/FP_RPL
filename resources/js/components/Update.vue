<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <br />
                <br />
                <h4>Update data</h4>
                <br />
                <!-- prevent form submit untuk reload halaman, kemudian memanggil function updateData() -->
                <form @submit.prevent="updateData()">
                    <div class="form-group">
                        <label>First name</label>
                        <input
                            type="textfield"
                            class="form-control"
                            placeholder="Masukan Resep Makanan"
                            v-model="form.title"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input
                            type="textfield"
                            class="form-control"
                            placeholder="Masukan Deskripsi Makanan"
                            v-model="form.description"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input
                            type="textfield"
                            class="form-control"
                            placeholder="Masukan Bahan Makanan"
                            v-model="form.ingridient"
                            required
                        />
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                title: "",
                description: "",
                ingridient: ""
            }
        };
    },
    created() {
        // load data saat pertama kali halaman dibuka
        this.loadData();
    },
    methods: {
        loadData() {
            // load data berdasarkan id
            axios
                .get(
                    "http://127.0.0.1:8000/api/recipe/" + this.$route.params.id
                )
                .then(response => {
                    // post value yang dari response ke form
                    this.form.title = response.data.form.title;
                    this.form.description = response.data.description;
                    this.form.ingridient = response.data.ingridient;
                });
        },
        updateData() {
            // put data ke api menggunakan axios
            axios
                .put(
                    "http://127.0.0.1:8000/api/recipe/" + this.$route.params.id,
                    {
                        title: this.form.title,
                        description: this.form.description,
                        ingridient: this.form.ingridient
                    }
                )
                .then(response => {
                    // push router ke read data
                    this.$router.push("/");
                });
        }
    }
};
</script>
