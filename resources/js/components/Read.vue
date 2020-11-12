<template>
    <div>
        <!-- disini saya menggunakan bootstrap untuk design tabel nya. secara default bootstrap sudah di include di file welcome.blade.php jadi saya tidak perlu lagi untuk import file nya -->
        <div class="row">
            <div class="col-md-12">
                <br />
                <br />
                <div class="row">
                    <div class="col-md-10">
                        <h4>Resep</h4>
                    </div>
                    <div class="col-md-2">
                        <!-- push router ke form membuat data -->
                        <router-link class="btn btn-primary w-100" to="/create"
                            >+ Tambah</router-link
                        >
                    </div>
                </div>
                <br />
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Judul Resep</th>
                            <th scope="col">Deskripsi Resep</th>
                            <th scope="col">Bahan-Bahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- menampilkan data ke table -->
                        <tr v-for="recipe in recipes" :key="recipe.id">
                            <td style="width:40%">{{ recipe.title }}</td>
                            <td style="width:40%">{{ recipe.description }}</td>
                            <td style="width:40%">{{ recipe.ingridient }}</td>
                            <td style="width:20%">
                                <router-link
                                    class="btn btn-warning"
                                    :to="'/detail/' + recipe.id"
                                    >Update</router-link
                                >
                                <button
                                    class="btn btn-danger"
                                    v-on:click="deleteData(recipe.id)"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<!-- script js -->
<script>
export default {
    data() {
        return {
            recipes: []
        };
    },
    created() {
        this.loadData();
    },
    methods: {
        loadData() {
            // fetch data dari api menggunakan axios
            axios.get("http://127.0.0.1:8000/api/recipe").then(response => {
                this.recipes = response.data;
            });
        },
        deleteData(id) {
            // delete data
            axios
                .delete("http://127.0.0.1:8000/api/recipe/" + id)
                .then(response => {
                    this.loadData();
                });
        }
    }
};
</script>
