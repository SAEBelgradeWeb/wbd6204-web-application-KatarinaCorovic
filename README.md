![healthcare (3)](https://user-images.githubusercontent.com/56925599/115971768-9de31500-a54a-11eb-932e-d97a61671474.png)


# PRIXILIUM



## About TSM:

Prixilium is a healthcare application (Online Appointment Management System) that provides a service to make an online doctors appointment. Every patient that logins is able to make an appointment by filling in the form with required fields and sumbiting it. Then a doctor will make a report of the appointment which a patient will be able to see, but not edit. 

Benefits of an online healthcare appliation:
- Time-saving
- Monetary-saving
- Less exposure to the risk of virus infection

## Тhe main idea:

TSM is an Expert system for Traditional Serbian Medicine (abbreviation for the name) designed as a support tool for doctors. This version is very simplified as it represents the first Expert system for Traditional Serbian Medicine, that is why the creator wanted first to test the basic version, and if prooved acceptable, it would be upgraded.
Here a user/patient is presented with three different forms that lead to the therapy. 
1. The first form is a type of anamnesis, with personal information required to fill, this way the admin/doctor would have enough information to conclude the best therapy based on the type of life the patient is leading and his/her occupations.
2. the Second form is Health Predisposition Questionnaire applied for users/patients all previous illnesses, level of physical activity, previous symptoms, health parameters such as body temperature, blood pressure, heart rate... 
3. The third form is the actual Symptomatic Questionnaire, where the patient describes his problem in detail. 

When this final form has been sent, it is being sent to the data. A list of symptoms and therapies has been entered previously on the admin page, and every symptom is an appropriate therapy match. This way when to form is sent, the user will get the appropriate medical therapy on the final page, 


## List of used technologies:

- Laravel 8
- Phpstorm
- MYSQL
- Inerta
- Tailwid

## Functionalities:

The project was installed in Laravel - version 8 and developed in PhpStorm code editor. Back-end solutions were provided and performed by using Laravel documentation (Laravel, 2021). 

For the design, I used tailwind by adding npm install -D tailwindcss postcss autoprefixer, npx tailwindcss init extension in Laravel, which was optimal for this choice to simplify designm but make it attractive and fucntional.
Regarding JavaScript part, Inertia was used. Inertia seemed appropraite for building ES since a lot of 
Inertia isn't a framework, nor is it a replacement to your existing server-side or client-side frameworks. Rather, it's designed to work with them. Think of Inertia as glue that connects the two. Inertia does this via adapters. We currently have three official client-side adapters (React, Vue, and Svelte) and two server-side adapters (Laravel and Rails).
Progressive JavaScript Framework Vue.js (Vue.js, 2021) served as a fitting framework. I used it in order to display listings of doctors and departments from my database. 

 In the picture below are the examples of Doctors.vue and Departments.vue files I where the pattern scheme of the design was formatted, and with mounted method and Axios HTTP client I connected the front-part with my database. 




