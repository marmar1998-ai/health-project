<!DOCTYPE html>
<html>

<head>

     <title>Health - Medical Website Template</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <!-- <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section> -->

     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#schedule" class="smoothScroll">Schedule</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                         <li><a href="{{ route('doctors.index')}}"> Edit the Doctors </a></li>
                         
                         <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME SECTION -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <div class="owl-carousel owl-theme home-slider">
                              <!-- First Slide -->
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="container">
                                             <div class="col-md-10 col-md-offset-1">
                                                  <h3 class="animate-in">Your Trusted Healthcare Partner</h3>
                                                  <h1 class="animate-in">Compassionate Medical Care</h1>
                                                  <a href="#team" class="section-btn btn btn-primary smoothScroll">
                                                       Meet Our Specialists
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <!-- Second Slide -->
                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="container">
                                             <div class="col-md-10 col-md-offset-1">
                                                  <h3 class="animate-in">Advanced Medical Solutions</h3>
                                                  <h1 class="animate-in">Innovative Healthcare Approach</h1>
                                                  <a href="#schedule"
                                                       class="section-btn btn btn-secondary smoothScroll">
                                                       Get in the Schedule
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <!-- Third Slide -->
                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="container">
                                             <div class="col-md-10 col-md-offset-1">
                                                  <h3 class="animate-in">Patient-Centered Care</h3>
                                                  <h1 class="animate-in">Your Health, Our Mission</h1>
                                                  <a href="#appointment" class="section-btn btn btn-info smoothScroll">
                                                       Book Appointment Now
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i
                                        class="fa fa-h-square"></i>ealth Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>At <i class="fa fa-h-square"></i>ealth Center, we are committed to providing
                                        comprehensive, compassionate
                                        healthcare that puts our patients first. Our mission is to deliver high-quality
                                        medical services tailored to meet the unique needs of each individual we serve.
                                   </p>
                                   <p>With a patient-centered approach, we combine advanced medical expertise with
                                        genuine care. Our team of dedicated professionals works tirelessly to ensure
                                        your health and well-being, offering personalized treatment plans and
                                        cutting-edge medical solutions.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Neil Jackson</h3>
                                        <p>General Principal</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->

 <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <div class="about-info text-center">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Expert Medical Team</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/team-image1.jpg" class="img-responsive" alt="Dr. Jarir Carlson">

                              <div class="team-info">
                                   <h3>Jarir Carlson</h3>
                                   <p>Advanced Medical Technology</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +963 20 020 0120</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">jarir.carlson@healthease.com</a>
                                        </p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="/profile/jarir-carlson.html" class="fa fa-user"></a></li>
                                        <li><a href="mailto:jarir.carlson@healthease.com" class="fa fa-envelope-o"></a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/team-image2.jpg" class="img-responsive" alt="Dr. Jason Stewart">

                              <div class="team-info">
                                   <h3>Jason Stewart</h3>
                                   <p>Regenerative Treatments</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +963 70 070 0170</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">jason.stewart@healthease.com</a>
                                        </p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="/profile/jason-stewart.html" class="fa fa-user"></a></li>
                                        <li><a href="mailto:jason.stewart@healthease.com" class="fa fa-envelope-o"></a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/team-image3.jpg" class="img-responsive" alt="Dr. Andrio Abero">

                              <div class="team-info">
                                   <h3>Andrio Abero</h3>
                                   <p>Annual Medical Research</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +963 40 040 0140</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">andrio.abero@healthease.com</a>
                                        </p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="/profile/andrio-abero.html" class="fa fa-user"></a></li>
                                        <li><a href="mailto:andrio.abero@healthease.com" class="fa fa-envelope-o"></a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <img src="images/team-image4.jpg" class="img-responsive" alt="Dr. Mohammed Al-Amin">

                              <div class="team-info">
                                   <h3>Mohammed Al-Amin</h3>
                                   <p>General Medicine</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +963 90 090 0190</p>
                                        <p><i class="fa fa-envelope-o"></i> <a
                                                  href="#">mohammed.alamin@healthease.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="/profile/mohammed-alamin.html" class="fa fa-user"></a></li>
                                        <li><a href="mailto:mohammed.alamin@healthease.com"
                                                  class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="1s">
                              <img src="images/team-image5.jpg" class="img-responsive" alt="Dr. Sarah Al-Alami">

                              <div class="team-info">
                                   <h3>Sarah Al-Alami</h3>
                                   <p>Medical Research</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +963 60 060 0160</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">sarah.alalami@healthease.com</a>
                                        </p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="/profile/sarah-alalami.html" class="fa fa-user"></a></li>
                                        <li><a href="mailto:sarah.alalami@healthease.com" class="fa fa-envelope-o"></a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="1.2s">
                              <img src="images/team-image6.jpg" class="img-responsive" alt="Dr. Omar Al Omari">

                              <div class="team-info">
                                   <h3>Omar Al Omari</h3>
                                   <p>Ophthalmology</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +963 50 050 0150</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">omar.alomari@healthease.com</a>
                                        </p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="/profile/omar-alomari.html" class="fa fa-user"></a></li>
                                        <li><a href="mailto:omar.alomari@healthease.com" class="fa fa-envelope-o"></a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- schedule -->
     <style>
          :root {
               --primary-color: #2c3e50;
               --secondary-color: #3498db;
               --accent-color: #27ae60;
               --text-color: #34495e;
               --background-color: #f4f7f9;
               --booking-color: #e74c3c;
               --soft-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
          }

          body {
               font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
               background-color: var(--background-color);
               color: var(--text-color);
               line-height: 1.7;
               font-weight: 400;
               margin: 0;
               padding: 0;
          }

          .clinic-schedule-container {
               max-width: 1200px;
               /* Reduced from 1400px for better readability */
               margin: 0 auto;
               padding: 60px 20px;
               /* Adjusted padding */
          }

          .schedule-header {
               text-align: center;
               margin-bottom: 40px;
               /* Reduced spacing */
          }

          .schedule-header h1 {
               font-size: 3.2rem;
               /* Reduced from 4rem */
               font-weight: 900;
               color: var(--primary-color);
               position: relative;
               display: inline-block;
               padding-bottom: 15px;
               /* Reduced padding */
               margin-top: 0;
               margin-bottom: 15px;
          }

          .schedule-header h1::after {
               content: '';
               position: absolute;
               bottom: 0;
               left: 50%;
               transform: translateX(-50%);
               width: 120px;
               /* Reduced width */
               height: 4px;
               /* Reduced height */
               background: linear-gradient(to right, var(--secondary-color), var(--accent-color));
          }

          .schedule-table-container {
               background: white;
               border-radius: 16px;
               /* Reduced from 20px */
               box-shadow: var(--soft-shadow);
               overflow: hidden;
               border: 1px solid #e9ecef;
          }

          .schedule-table {
               width: 100%;
               border-collapse: collapse;
               table-layout: fixed;
               /* Added for more consistent column widths */
          }

          .schedule-table thead {
               background: linear-gradient(to right, var(--secondary-color), #2980b9);
               color: white;
          }

          .schedule-table th {
               font-weight: 800;
               text-transform: uppercase;
               letter-spacing: 1.5px;
               /* Reduced from 2px */
               padding: 18px 15px;
               /* Reduced padding */
               text-align: center;
               border-bottom: 2px solid rgba(255, 255, 255, 0.2);
               font-size: 1.1rem;
               /* Reduced from 1.3rem */
          }

          /* Define column widths */
          .schedule-table th:nth-child(1),
          .schedule-table td:nth-child(1) {
               width: 10%;
               /* Day column */
          }

          .schedule-table th:nth-child(2),
          .schedule-table td:nth-child(2) {
               width: 12%;
               /* Date column */
          }

          .schedule-table th:nth-child(3),
          .schedule-table td:nth-child(3) {
               width: 20%;
               /* Doctor column */
          }

          .schedule-table th:nth-child(4),
          .schedule-table td:nth-child(4) {
               width: 25%;
               /* Specialty column */
          }

          .schedule-table th:nth-child(5),
          .schedule-table td:nth-child(5) {
               width: 18%;
               /* Time Slot column */
          }

          .schedule-table th:nth-child(6),
          .schedule-table td:nth-child(6) {
               width: 15%;
               /* Action column */
          }

          .schedule-table td {
               padding: 22px 15px;
               /* Reduced from 30px 20px */
               text-align: center;
               vertical-align: middle;
          }

          .schedule-table tr {
               border-bottom: 1px solid #f1f4f6;
          }

          .schedule-table tr:nth-child(even) {
               background-color: #f9fafb;
          }

          .schedule-table tr:hover {
               background-color: #f0f4f7;
          }

          .doctor-name {
               font-weight: 800;
               color: var(--primary-color);
               font-size: 1.3rem;
               /* Reduced from 1.5rem */
          }

          .specialty {
               color: var(--secondary-color);
               font-size: 1.1rem;
               /* Reduced from 1.2rem */
               font-weight: 600;
          }

          .time-slot {
               font-weight: 700;
               color: var(--accent-color);
               font-size: 1.2rem;
               /* Reduced from 1.4rem */
          }

          .booking-btn {
               background-color: var(--booking-color);
               color: white;
               border: none;
               padding: 10px 16px;
               /* Reduced from 12px 20px */
               border-radius: 6px;
               /* Reduced from 8px */
               font-size: 1rem;
               /* Reduced from 1.1rem */
               font-weight: 700;
               text-transform: uppercase;
               letter-spacing: 1px;
               /* Reduced from 1.5px */
               transition: all 0.2s ease;
               display: inline-block;
               text-decoration: none;
               cursor: pointer;
          }

          .booking-btn:hover {
               background-color: #c0392b;
               transform: scale(1.05);
               box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
               /* Reduced shadow */
          }

          /* Day highlight */
          .day-highlight {
               font-weight: 700;
          }

          /* Tablet view */
          @media (max-width: 992px) {
               .clinic-schedule-container {
                    max-width: 95%;
                    padding: 50px 15px;
               }

               .schedule-header h1 {
                    font-size: 2.8rem;
               }

               .schedule-table th,
               .schedule-table td {
                    padding: 16px 10px;
               }

               .doctor-name {
                    font-size: 1.2rem;
               }

               .specialty {
                    font-size: 1rem;
               }

               .time-slot {
                    font-size: 1.1rem;
               }

               .booking-btn {
                    padding: 8px 14px;
               }
          }

          /* Mobile view */
          @media (max-width: 768px) {
               .clinic-schedule-container {
                    padding: 40px 12px;
               }

               .schedule-header h1 {
                    font-size: 2.2rem;
                    padding-bottom: 12px;
               }

               .schedule-header h1::after {
                    width: 100px;
                    height: 3px;
               }

               .schedule-table thead {
                    display: none;
               }

               .schedule-table,
               .schedule-table tbody,
               .schedule-table tr,
               .schedule-table td {
                    display: block;
                    width: 100% !important;
                    /* Override fixed widths */
               }

               .schedule-table tr {
                    margin-bottom: 20px;
                    border: 1px solid #e9ecef;
                    border-radius: 10px;
                    overflow: hidden;
                    background: white;
                    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
                    /* Lighter shadow */
               }

               .schedule-table td {
                    text-align: right;
                    padding: 12px 15px;
                    padding-left: 50%;
                    position: relative;
                    border-bottom: 1px solid #f1f4f6;
               }

               .schedule-table td:last-child {
                    border-bottom: none;
               }

               .schedule-table td::before {
                    content: attr(data-label);
                    position: absolute;
                    left: 15px;
                    top: 50%;
                    transform: translateY(-50%);
                    font-weight: 700;
                    color: var(--primary-color);
                    font-size: 0.9rem;
                    opacity: 0.7;
                    text-align: left;
               }

               .doctor-name {
                    font-size: 1.1rem;
               }

               .specialty {
                    font-size: 0.95rem;
               }

               .time-slot {
                    font-size: 1rem;
               }

               .booking-btn {
                    width: 100%;
                    padding: 10px;
                    font-size: 0.9rem;
                    text-align: center;
               }
          }

          /* Small mobile devices */
          @media (max-width: 480px) {
               .schedule-table td {
                    padding-left: 45%;
                    padding-right: 10px;
               }

               .schedule-table td::before {
                    font-size: 0.8rem;
                    left: 10px;
               }

               .doctor-name {
                    font-size: 1rem;
               }

               .specialty {
                    font-size: 0.85rem;
               }

               .time-slot {
                    font-size: 0.9rem;
               }

               .booking-btn {
                    font-size: 0.8rem;
                    padding: 8px;
               }

               .schedule-header h1 {
                    font-size: 1.8rem;
               }
          }
     </style>
     <section id="schedule" class="schedule-section" data-stellar-background-ratio="2.5">
          <div class="clinic-schedule-container">
               <div class="schedule-header wow fadeInUp" data-wow-delay="0.1s">
                    <h1>Medical Clinic Schedule</h1>
               </div>

               <div class="schedule-table-container wow fadeInUp" data-wow-delay="0.4s">
                    <table class="table schedule-table">
                         <thead>
                              <tr style="background-color: #2981c5;">
                                   <th>Day</th>
                                   <th>Date</th>
                                   <th>Doctor</th>
                                   <th>Specialty</th>
                                   <th>Time Slot</th>
                                   <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <td data-label="Day" class="day-highlight">Saturday</td>
                                   <td data-label="Date">16 Feb 2025</td>
                                   <td data-label="Doctor" class="doctor-name">Dr. Jarir Carlson</td>
                                   <td data-label="Specialty" class="specialty">Advanced Medical Technology</td>
                                   <td data-label="Time Slot" class="time-slot">9:00 AM - 12:00 PM</td>
                                   <td data-label="Action">
                                        <a href="#appointment" class="booking-btn">Book Now</a>
                                   </td>
                              </tr>
                              <tr>
                                   <td data-label="Day" class="day-highlight">Sunday</td>
                                   <td data-label="Date">17 Feb 2025</td>
                                   <td data-label="Doctor" class="doctor-name">Dr. Jason Stewart</td>
                                   <td data-label="Specialty" class="specialty">Regenerative Treatments</td>
                                   <td data-label="Time Slot" class="time-slot">2:00 PM - 5:00 PM</td>
                                   <td data-label="Action">
                                        <a href="#appointment" class="booking-btn">Book Now</a>
                                   </td>
                              </tr>
                              <tr>
                                   <td data-label="Day" class="day-highlight">Monday</td>
                                   <td data-label="Date">18 Feb 2025</td>
                                   <td data-label="Doctor" class="doctor-name">Dr. Andrio Abero</td>
                                   <td data-label="Specialty" class="specialty">Annual Medical Research</td>
                                   <td data-label="Time Slot" class="time-slot">10:00 AM - 1:00 PM</td>
                                   <td data-label="Action">
                                        <a href="#appointment" class="booking-btn">Book Now</a>
                                   </td>
                              </tr>
                              <tr>
                                   <td data-label="Day" class="day-highlight">Tuesday</td>
                                   <td data-label="Date">19 Feb 2025</td>
                                   <td data-label="Doctor" class="doctor-name">Dr. Mohammed Al-Amin</td>
                                   <td data-label="Specialty" class="specialty">General Medicine</td>
                                   <td data-label="Time Slot" class="time-slot">4:00 PM - 7:00 PM</td>
                                   <td data-label="Action">
                                        <a href="#appointment" class="booking-btn">Book Now</a>
                                   </td>
                              </tr>
                              <tr>
                                   <td data-label="Day" class="day-highlight">Wednesday</td>
                                   <td data-label="Date">20 Feb 2025</td>
                                   <td data-label="Doctor" class="doctor-name">Dr. Sarah Al-Alami</td>
                                   <td data-label="Specialty" class="specialty">Medical Research</td>
                                   <td data-label="Time Slot" class="time-slot">9:30 AM - 12:30 PM</td>
                                   <td data-label="Action">
                                        <a href="#appointment" class="booking-btn">Book Now</a>
                                   </td>
                              </tr>
                              <tr>
                                   <td data-label="Day" class="day-highlight">Thursday</td>
                                   <td data-label="Date">21 Feb 2025</td>
                                   <td data-label="Doctor" class="doctor-name">Dr. Omar Al Omari</td>
                                   <td data-label="Specialty" class="specialty">Ophthalmology</td>
                                   <td data-label="Time Slot" class="time-slot">1:00 PM - 4:00 PM</td>
                                   <td data-label="Action">
                                        <a href="#appointment" class="booking-btn">Book Now</a>
                                   </td>
                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>
     </section>

    


     <!-- MAKE AN APPOINTMENT -->
     <!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="images/appointment-image.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="{{ route('appointments.store') }}">
                    @csrf

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Make an appointment</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="patient_name">Name</label>
                            <input type="text" class="form-control" style="border: 1px solid #27ae60;"
                                id="patient_name" name="patient_name" placeholder="Full Name" required>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="patient_phone">Phone Number</label>
                            <input type="tel" class="form-control" style="border: 1px solid #27ae60;"
                                id="patient_phone" name="patient_phone" placeholder="Phone" required>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="doctor_id">Select Doctor</label>
                            <select class="form-control" style="border: 1px solid #27ae60;" name="doctor_id" required>
                                <option value="">Select Doctor</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialty }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="appointment_date">Select Date & Time</label>
                            <input type="datetime-local" name="appointment_date" class="form-control"
                                style="border: 1px solid #27ae60;" required>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="notes">Additional Message</label>
                            <textarea class="form-control" style="border: 1px solid #27ae60;" rows="5"
                                id="notes" name="notes" placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>




     <!-- Bot Button -->

     <!-- Bot Button -->
<div id="bot-button" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: pointer;">
    <button style="background-color: #3498db; color: white; padding: 15px 20px; border: none; border-radius: 50%; font-size: 20px;">
        💬
    </button>
</div>

<div id="bot-popup" style="position: fixed; bottom: 80px; right: 20px; z-index: 9998; width: 350px; height: 500px; display: none; border: 2px solid #3498db; border-radius: 10px; background-color: white; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <iframe 
        src="https://cdn.botpress.cloud/webchat/v2.2/shareable.html?configUrl=https://files.bpcontent.cloud/2025/02/22/14/20250222141408-WWL8XU3S.json"
        width="100%" 
        height="100%" 
        frameborder="0"
        style="border:none;"
    ></iframe>
    <button id="close-btn" style="position: absolute; top: 10px; right: 10px; background: #e74c3c; color: white; border: none; border-radius: 50%; font-size: 18px; padding: 5px 10px; cursor: pointer;">
        X
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const botButton = document.getElementById('bot-button');
        const botPopup = document.getElementById('bot-popup');
        const closeButton = document.getElementById('close-btn');

        botButton.addEventListener('click', function() {
            botPopup.style.display = 'block';
        });

        closeButton.addEventListener('click', function() {
            botPopup.style.display = 'none';
        });
    });
</script>
     



     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5" id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>At <i class="fa fa-h-square"></i>ealth Center, we are committed to providing
                                   comprehensive, compassionate
                                   healthcare that puts our patients first. Our mission is to deliver high-quality
                                   medical services tailored to meet the unique needs of each individual we serve.
                              </p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i>+963 20 020 0120</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>
</body>

<!-- SCRIPTS -->


<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>
     // Get the bot popup and button elements
     var botPopup = document.getElementById("bot-popup");
     var botButton = document.getElementById("bot-button");
     var closeButton = document.getElementById("close-btn");

     // Open the bot popup when the button is clicked
     botButton.onclick = function () {
          botPopup.style.display = "block"; // Show the popup
     }

     // Close the bot popup when the close button is clicked
     closeButton.onclick = function () {
          botPopup.style.display = "none"; // Hide the popup
     }
</script>

</html>