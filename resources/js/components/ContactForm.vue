<script setup>
import axios from 'axios';
import { ref, reactive, watch } from 'vue'
import {Checkbox, useRecaptchaProvider} from 'vue-recaptcha'
useRecaptchaProvider() 

const ReCaptchaValid = ref(false)
const hasErrorMessages = ref(false)
const loading = ref(null)
console.log('hasErrorMessages', hasErrorMessages)

const errors = {
  NameRequired: 'Name is required.',
  EmailRequired: 'Email is required.',
  EmailInvalid: 'Please specify a real email.',
  CompanyNameRequired: 'Company Name is required.',
  PhoneRequired: 'Phone Number is required.',
  PhoneInvalid: 'Phone Number should be numeric.',
  SubjectRequired: 'Subject is required.',
  SubjectInvalid: 'Invalid subject. Please select either General Inquiries or Sales and Support.',
  MessageRequired: 'Please enter your message.'
};

const ErrorMessages = ref({
    name: '',
    email: '',
    phone: '',
    company_name: '',
    subject: '',
    message: ''
})
console.log('ErrorMessages',ErrorMessages)

const formData = reactive({ 
    data: { 
        Name : {
            name: 'Name',
            value : '',
            isValid: null,
            validationMessage: "",
            required: true,            
        },
        Phone : {
            name: 'Phone',
            value : '',
            isValid: null,
            validationMessage: "",
            required: true,            
        },            
        Email : {
            name: 'Email',
            value : '',
            isValid: null,
            validationMessage: "",
            required: true,            
        },            
        CompanyName : {
            name: 'CompanyName',
            value : '',
            isValid: null,
            validationMessage: "",
            required: true,            
        },
        Subject : {
            name: 'Subject',
            value : 'General Inquiries',
            isValid: true,
            validationMessage: "",
            required: false,            
        },
        Message : {
            name: 'Message',
            value : '',
            isValid: null,
            validationMessage: "",
            required: true,            
        }
    },
    isValid: false
});
console.log('formData',formData)
console.log('formData.isValid',formData.isValid)


const validateField = (field) => {
    if (field.required && !field.value) {
        field.isValid = false;
        field.validationMessage = errors[`${field.name}Required`];
    } else if (field.name === 'Email' && field.value && !isEmailValid(field.value)) {
        field.isValid = false;
        field.validationMessage = errors.EmailInvalid;
    } else if (field.name === 'Phone' && field.value && !isPhoneValid(field.value)) {
        field.isValid = false;
        field.validationMessage = errors.PhoneInvalid;
    } else {
        field.isValid = true;
        field.validationMessage = '';
    }
};

const isEmailValid = (email) => {
    // Add your email validation logic here
    return /\S+@\S+\.\S+/.test(email);
};
const isPhoneValid = (phone) => {
    // Add your phone validation logic here
    return /^[0-9]+$/.test(phone);
};

// Watch for changes in form data
watch(formData, (newFormData) => {
    let allFieldsValid = true;
    for (const key in newFormData.data) {
        validateField(newFormData.data[key])
        if (!newFormData.data[key].isValid) {
            allFieldsValid = false;
        }
    }
    formData.isValid = allFieldsValid;
    formData.value = newFormData.value
    console.log('watcher data',formData)
}, { deep: true });

const handleSubmit = () => {
    if (!ReCaptchaValid.value) {
        console.log('ReCaptcha is invalid');
        return; // Don't proceed with form submission
    }
    loading.value = true;
    if (formData.isValid) {
        // Create a new data object with the data to be sent
        const data = {
            name: formData.data.Name.value,
            email: formData.data.Email.value,
            phone: formData.data.Phone.value,
            company_name: formData.data.CompanyName.value,
            subject: formData.data.Subject.value,
            message: formData.data.Message.value
        };
        // Submit the data
        axios.post('http://localhost:8000/api/v1/contact_submissions', data, {
            headers: {
                'Access-Control-Allow-Origin': '*', // Replace * with the specific origin if needed
            }
        }).then(response => {
            console.log('Data submitted:', response.data);
            // Clear form inputs
            formData.data.value = {
                Name: '',
                Email: '',
                Phone: '',
                CompanyName: '',
                Subject: '',
                Message: ''
            };
        loading.value = false;
        }).catch(error => {
            console.error('Errors:', error.response.data.errors);
            hasErrorMessages.value = true;
            ErrorMessages.value = error.response.data.errors;
            loading.value = false;
        });
    } 
};

</script>

<template>
    <div id="contact-form"class="flex flex-wrap justify-between w-11/12 gap-6 mx-auto lg:gap-3 2xl:w-8/12 lg:w-10/12">
        <div class="w-full lg:w-6/12">
            <h1 class="font-[200] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] uppercase mb-6">Contact Us</h1>
            <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify">Have questions or inquiries? Contact us today to learn more about our software solutions, digital services, and how we can help your business succeed. Our team is here to assist you every step of the way.</p>
        </div>
        <form  class="grid w-full h-full grid-cols-2 gap-3 lg:w-5/12" @submit.prevent="handleSubmit">
            <div class="w-full col-span-2 sm:col-span-1">
                <input type="text" id="Name" name="Name"
                placeholder="Your Name" aria-label="Enter your name"
                v-model="formData.data.Name.value"
                :required="formData.data.Name.required" 
                class="block px-4 py-3 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] w-full rounded-[16px] text-accent1 bg-transparent border border-accent2 appearance-none focus:outline-none focus:ring-0 focus:border-bg2"               
                :class="{'border-red-500 focus:border-red-500' : formData.data.Name.isValid===false}">
                <p v-show="!formData.data.Name.isValid" className="ms-2 mb-2 font-[700] text-[12px] text-red-500">{{formData.data.Name.validationMessage}}</p>
            </div>
            <div class="w-full col-span-2 sm:col-span-1">
                <input type="text" id="Email" name="Email" aria-label="Enter your email"
                placeholder="example@gmail.com" 
                v-model="formData.data.Email.value" 
                :required="formData.data.Email.required" 
                class="block px-4 py-3 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] w-full rounded-[16px] text-accent1 bg-transparent border border-accent2 appearance-none focus:outline-none focus:ring-0 focus:border-bg2 peer"                
                :class="{'border-red-500 focus:border-red-500' : formData.data.Email.isValid===false}">
                <p v-show="!formData.data.Email.isValid" className="ms-2 mb-2 font-[700] text-[12px] text-red-500">{{formData.data.Email.validationMessage}}</p>
            </div>      
            <div class="w-full col-span-2 sm:col-span-1">
                <input type="text" id="Phone" name="Phone" aria-label="Enter your phone"
                placeholder="00961 71 654 231" 
                v-model="formData.data.Phone.value"          
                :required="formData.data.Phone.required" 
                class="block px-4 py-3 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] w-full rounded-[16px] text-accent1 bg-transparent border border-accent2 appearance-none focus:outline-none focus:ring-0 focus:border-bg2 peer"                
                :class="{'border-red-500 focus:border-red-500' : formData.data.Phone.isValid===false}">
                <p v-show="!formData.data.Phone.isValid" className="ms-2 mb-2 font-[700] text-[12px] text-red-500">{{formData.data.Phone.validationMessage}}</p>
            </div> 
            <div class="w-full col-span-2 sm:col-span-1">
                <input type="text" id="CompanyName" name="CompanyName"  aria-label="Enter your company's name"
                placeholder="Your Company's Name"
                v-model="formData.data.CompanyName.value"              
                :required="formData.data.CompanyName.required" 
                class="block px-4 py-3 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] w-full rounded-[16px] text-accent1 bg-transparent border border-accent2 appearance-none focus:outline-none focus:ring-0 focus:border-bg2 peer"                
                :class="{'border-red-500 focus:border-red-500' : formData.data.CompanyName.isValid===false}">
                <p v-show="!formData.data.CompanyName.isValid" className="ms-2 mb-2 font-[700] text-[12px] text-red-500">{{formData.data.CompanyName.validationMessage}}</p>
            </div>    
            <div class="w-full col-span-2 mb-3">
                <select id="Subject" name="Subject" aria-label="select a subject for your message"
                v-model="formData.data.Subject.value"
                :required="formData.data.Subject.required" 
                class="block px-4 py-3 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] w-full rounded-[16px] text-accent1/50 bg-transparent border border-accent2 appearance-none focus:outline-none focus:ring-0 focus:border-bg2 peer"                
                :class="{'border-red-500 focus:border-red-500' : formData.data.Subject.isValid===false}">
                    <option  class="text-black" selected>General Inquiries</option>
                    <option class="text-black">Sales and Support</option>
                </select>
                <p v-show="!formData.data.Subject.isValid" className="ms-2 mb-2 font-[700] text-[12px] text-red-500">{{formData.data.Subject.validationMessage}}</p>
            </div>
            <div class="w-full col-span-2">
                <textarea id="Message" name="Message" rows="5"  aria-label="Type out your message"
                placeholder="Briefly tell us about your project and your current goals. How can we help you?" 
                v-model="formData.data.Message.value" 
                :required="formData.data.Message.required" 
                style="min-height: 60px;"
                class="block px-4 py-3 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] w-full rounded-[16px] text-accent1 bg-transparent border border-accent2 appearance-none focus:outline-none focus:ring-0 focus:border-bg2 peer"
                :class="{'border-red-500 focus:border-red-500' : formData.data.Message.isValid===false}"></textarea>
                <p v-show="!formData.data.Message.isValid" className="ms-2 mb-2 font-[700] text-[12px] text-red-500">{{formData.data.Message.validationMessage}}</p>
            </div>
            <!-- Recaptcha -->
            <div class="w-full col-span-2">
                <Checkbox v-model="ReCaptchaValid" theme="dark" />
            </div>
            <!-- Submit -->
            <div class="flex flex-wrap items-center w-full gap-2">
            <button aria-label="send your message" class="cursor-pointer w-fit relative z-[2] col-span-2 px-4 py-3 text-accent1 font-[400] text-center rounded-[20px] shadow-sm bg-bg2 hover:brightness-125">
            {{loading === true ?  'Sending...' : 'Send Message'}}
            </button>            
            <p v-if="loading === false" class="text-green-500">Thank you for your message, we'll get back to you soon.</p>                
            </div>

            <!-- Errors after submit -->
            <ul v-if="hasErrorMessages === true" class="p-4 list-disc bg-red-200 border-b-red-600 border-b-s-4 marker:text-red-600" role="list">
                <li v-for="(item, key) in ErrorMessages" :key="key" className="list-item mx-2">{{ item[0] }}</li>
            </ul>
        </form>
    </div>
</template>
