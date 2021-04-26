<template>
    <div>
        <div class="col-lg-3 col-sm-6" v-for="doctor in doctors">
            <div class="single-doctor">
                <div class="doctors-img">
                    <img :src="doctor.avatar"  alt="Doctor">
                </div>
                <div class="doctor-content">
                    <h3>{{doctor.name}} - {{doctor.department.title}}</h3>
                    <span>{{doctor.bio}}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                doctors: ''
            }
        },

        async mounted() {
            const result = await axios.get('/api/doctors');
            this.doctors = result.data;
            console.log(this.doctors);

        },

    }
</script>



