<template>
    <div>
        <h1>Doctors list</h1>
        <div v-for="doctor in doctors">
            {{doctor.name}} - {{doctor.department.title}}
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
                doctors:[]
            }
        },
        async mounted(){
            const result = await axios.get('/api/doctors');
            this.doctors = result.data;

        }
    }
</script>

















<!--<template>-->
<!--    -->
<!--</template>-->

<!--<script>-->
<!--    export default {-->
<!--        name: "Doctors.vue"-->
<!--    }-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->
