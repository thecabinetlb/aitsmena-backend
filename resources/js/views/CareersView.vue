<script setup>
import JobsList from '../components/JobsList.vue';
import InnerHero from '../components/InnerHero.vue';
import InsideBody from '../components/InsideBody.vue';
import BenefitsFlexWithBlur from '../components/BenefitsFlexWithBlur.vue';

// const jobs =[
//   { id: 1, title: 'Software Engineer', type: 'Full-time', to: 'https://example.com/job1', target: '_blank', location: 'San Francisco, CA' },
//   { id: 2, title: 'Data Analyst', type: 'Contract', to: 'https://example.com/job2', target: '_blank', location: 'New York, NY' },
//   { id: 3, title: 'Marketing Specialist', type: 'Part-time', to: 'https://example.com/job3', target: '_blank', location: 'Los Angeles, CA' },
//   { id: 4, title: 'Graphic Designer', type: 'Freelance', to: 'https://example.com/job4', target: '_blank', location: 'Chicago, IL' },
//   { id: 5, title: 'Project Manager', type: 'Full-time', to: 'https://example.com/job5', target: '_blank', location: 'Seattle, WA' },
//   { id: 6, title: 'HR Coordinator', type: 'Full-time', to: 'https://example.com/job6', target: '_blank', location: 'Boston, MA' },
//   { id: 7, title: 'Financial Analyst', type: 'Full-time', to: 'https://example.com/job7', target: '_blank', location: 'Austin, TX' },
//   { id: 8, title: 'Customer Service Representative', type: 'Part-time', to: 'https://example.com/job8', target: '_blank', location: 'Denver, CO' },
// ];
// const internships = [
//   { id: 1, title: 'Marketing Intern', type: 'Internship', to: 'https://example.com/internship1', target: '_blank', location: 'San Francisco, CA' },
//   { id: 2, title: 'Software Development Intern', type: 'Internship', to: 'https://example.com/internship2', target: '_blank', location: 'New York, NY' },
//   { id: 3, title: 'Data Analysis Intern', type: 'Internship', to: 'https://example.com/internship3', target: '_blank', location: 'Los Angeles, CA' },
//   { id: 4, title: 'Graphic Design Intern', type: 'Internship', to: 'https://example.com/internship4', target: '_blank', location: 'Chicago, IL' },
//   { id: 5, title: 'Project Management Intern', type: 'Internship', to: 'https://example.com/internship5', target: '_blank', location: 'Seattle, WA' },
// ];
// const benefits = [
//   { 
//     id: 1, 
//     title: 'Competitive compensation and rewards packages tailored to recognize and appreciate individual contributions.', 
//     // description: 'Comprehensive health insurance coverage for employees and their dependents, including medical, dental, and vision benefits.'
//   },
//   { 
//     id: 2, 
//     title: 'Robust opportunities for professional development and career advancement, including access to cutting-edge training programs and mentorship initiatives.', 
//     // description: 'Competitive salaries and performance-based bonuses or incentives to reward employees for their contributions and achievements.'
//   },
//   { 
//     id: 3, 
//     title: 'A collaborative and supportive workplace culture that champions innovation, diversity, and work-life balance, ensuring every team member feels empowered and valued.', 
//     // description: 'Support for ongoing learning and skill development through training programs, workshops, conferences, and tuition reimbursement.'
//   },
//   // { 
//   //   id: 5, 
//   //   title: 'Parental Leave', 
//   //   description: 'Paid parental leave policies for new parents, including maternity, paternity, and adoption leave, to support employees during significant life transitions.'
//   // },
//   // { 
//   //   id: 6, 
//   //   title: 'Employee Recognition Programs', 
//   //   description: 'Recognition programs to acknowledge and reward employees for their contributions, milestones, and achievements, fostering a culture of appreciation and recognition.'
//   // },
//   // { 
//   //   id: 7, 
//   //   title: 'Employee Referral Program', 
//   //   description: 'Incentives for employees who refer qualified candidates to open positions within the company, helping to attract top talent through employee networks.'
//   // }
// ];
</script>
<template>
    <head>
      <title>AITS - Join the AITS Team</title>
      <meta name="description" content="Browse through our available job openings to join the team and make an impact at AITS! We welcome diverse experts from all parts of the world."/>
    </head>      
    <InnerHero pagebanner="images/banners/careers.webp" pagetitle="Careers" pagedescription="You might just be the employee we’ve been looking for! Browse through our selection of job vacancies and apply to be part of the family."/>
    <section class="relative -mt-40">
      <JobsList sectionid="jobs-openings" sectiontitle="Job Openings" sectiondescription="Stay informed with the latest insights, trends, and developments in industrial automation.
      Explore our blog for thought-provoking articles, expert opinions, and practical tips to help
      your business stay ahead of the curve."/>
      <JobsList sectionid="internship-opportunities" sectiontitle="Internship Opportunities" sectiondescription="Got a knack for learning? Join our team as an intern and develop your skills while exploring the mystical world of software solutions and digital services."/>
      <BenefitsFlexWithBlur sectiontitle="Employees Benefits" />
      <InsideBody/>
    </section>    
</template>