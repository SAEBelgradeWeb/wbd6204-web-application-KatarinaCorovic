<template>
    <div>
        <div class="col-lg-3 col-sm-6" v-for="department in departments">
            <div class="single-department">
                <div class="departments-img">
                    <img :src="department.image"  alt="Department">
                </div>
                <div class="department-content">
                    <h3>{{department.title}}</h3>
                    <span>{{department.description}}</span>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                departments: ''
            }
        },

        async mounted() {
            const result = await axios.get('/api/departments');
            this.departments = result.data;
            console.log(this.departments);

        },

    }
</script>
