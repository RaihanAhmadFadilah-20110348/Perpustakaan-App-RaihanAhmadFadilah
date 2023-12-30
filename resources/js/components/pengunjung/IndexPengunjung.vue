<template>
    <h3>Test</h3>
</template>

<script>
    export default {
        data() {
            return {
                dataPengunjung: []
            }
        },
        created() {
            let uri = `http://127.0.0.1:8000/api/pegawai`;
            this.axios.get(uri).then(response => {
                this.dataPengunjung = response;
                console.log(this.dataPengunjung);
            });
        }
    } 
</script>