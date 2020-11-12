<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <br />
                <br />
                <h4>Tambahkan Data Baru</h4>
                <br />
                <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
                <form @submit.prevent="addData()">
                    <div class="form-group">
                        <label>Judul Resep</label>
                        <input
                            type="textfield"
                            class="form-control"
                            placeholder="Masukan Resep Makanan"
                            v-model="form.title"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Resep</label>
                        <input
                            type="textfield"
                            class="form-control"
                            placeholder="Masukan Deskripsi Makanan"
                            v-model="form.description"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label>Bahan Resep</label>
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
    methods: {
        addData() {
            // post data ke api menggunakan axios
            axios
                .post("http://127.0.0.1:8000/api/recipe", {
                    title: this.form.title,
                    description: this.form.description,
                    ingridient: this.form.ingridient
                })
                .then(response => {
                    // push router ke read data
                    this.$router.push("/");
                });
        }
    }
};
</script>
