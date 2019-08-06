<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    // 'name', 'description', 'objectives', 'eligibility', 'schedule', 'training_instructor', 'featured_image', 'category_id', 'available_seats', 'price'
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Course::class, 5)->create();

        App\Course::create([
            'name' => 'UI & web design using adobe XD',
            'description' => 'UI design skills are one of the most employable opportunities of our lifetime. In this course you’ll learn how to design a professional website in adobe XD CC.',
            'objectives' => 'The objective of this course is to focus on the design processes that professional UI designers use when creating beautiful web applications.',
            'eligibility' => 'This course is for beginners. It is aimed at people new to the world of web and UI design. You do not need previous design experience or XD skills',
            'schedule' => '2 months',
            'training_instructor' => 'Adesanya Ayokunle',
            'featured_image' => 'https://i.imgur.com/yIB9GOd.jpg',
            'category_id' => 1,
            'available_seats' => 15,
            'price' => 50000
        ]);
        App\Course::create([
            'name' => 'Introduction to coding: HTML, CSS & JavaScript',
            'description' => 'In this course, you would be introduced to web coding & shown how you can get started. without a doubt, learning how to code can change your life!',
            'objectives' => 'The objective of this course is to introduce you to coding with html, CSS & JavaScript and build functional real life application.',
            'eligibility' => 'This course is for beginners with no prior coding experience or programming knowledge',
            'schedule' => '2 months',
            'training_instructor' => 'Adesanya Ayokunle',
            'featured_image' => 'https://i.imgur.com/weUe7qF.jpg',
            'category_id' => 2,
            'available_seats' => 15,
            'price' => 40500
        ]);
        App\Course::create([
            'name' => 'Responsive web design essentials – HTML5, CSS3 & Bootstrap',
            'description' => 'In this course, we will cover everything you need to build your first website. From creating your first page through to uploading your website to the internet.',
            'objectives' => ' The objectives of this course is to learn how to work with responsice images, gradients, create forms, use bootstrap and setup domain names with hosting.',
            'eligibility' => 'This course is for beginners with no prior coding experience or programming knowledge',
            'schedule' => '2 months',
            'training_instructor' => 'Adesanya Ayokunle',
            'featured_image' => 'https://i.imgur.com/2bpq2Lu.jpg',
            'category_id' => 2,
            'available_seats' => 15,
            'price' => 50000
        ]);
        App\Course::create([
            'name' => 'Cisco CCNA R/S (200-120 & 200-125)',
            'description' => 'This course will cover all the needed subjects to be successful in passing the CCNA 200-120 exam and the new CCNA 200-125.',
            'objectives' => ' The objectives of this course is to enable students to acquire the knowledge and practice skills to use as a cisco and/or it professional.',
            'eligibility' => 'This course is for anyone preparing for a network certificaiton or computer science degree.',
            'schedule' => '5 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/95QtuTC.jpg',
            'category_id' => 3,
            'available_seats' => 15,
            'price' => 100500
        ]);
        App\Course::create([
            'name' => 'Oracle database management 12c (SQL,OCA,OCP)',
            'description' => 'This course offers a comprehensive introduction to oracle database 12c. you learn how to design, build and manage robust cloud-based database applications with oracle database tools.',
            'objectives' => ' This course provides an overview of the power and flexibility of oracle databases and serves as the foundation for other courses in the learning tree oracle databases curriculum.',
            'eligibility' => 'This course is for developers, analysts, managers, programmers and others who designa dn write orace applications using oracle 12c',
            'schedule' => '4 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/fSpNktQ.png',
            'category_id' => 4,
            'available_seats' => 15,
            'price' => 300000
        ]);
        App\Course::create([
            'name' => 'Microsoft Package (MS Word,MS Excel, MS PowerPoint)',
            'description' => 'This course provides a basic introduction to computer basics which comprises the hardware and software. It also encompasses the Microsoft Package softwares',
            'objectives' => ' This course provides an introduction to the use of microsoft packages such as Microsoft Word, Excel and PowerPoint.',
            'eligibility' => 'This course is complete beginners in the use of Microsoft Software packages.',
            'schedule' => '2 weeks',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/95QtuTC.jpg',
            'category_id' => 5,
            'available_seats' => 15,
            'price' => 15000
        ]);
        App\Course::create([
            'name' => 'Android Mobile Application Development',
            'description' => 'This course provides the required knowledge and skills to design and build a complete android™ application. It delivers an extensive training on the main android api components and its interactions.',
            'objectives' => ' This course provides the knowledge required to build android applications and build mobile applications.',
            'eligibility' => 'You must have a sound knowledge of Java background',
            'schedule' => '3 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/95QtuTC.jpg',
            'category_id' => 6,
            'available_seats' => 15,
            'price' => 90000
        ]);
        App\Course::create([
            'name' => 'Java Technology se 6 - Software developement',
            'description' => 'Software engineering provides the software engineering fundamentals, principles and skills needed to develop and maintain high quality software products.',
            'objectives' => 'This course provides the knowledge required to program in java',
            'eligibility' => 'This java fundamentals training enables those with little or no programming experience to learn object-oriented programming using the java language.',
            'schedule' => '2 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/70FqUjr.jpg',
            'category_id' => 6,
            'available_seats' => 15,
            'price' => 50000
        ]);
        App\Course::create([
            'name' => 'Java Technology se 8',
            'description' => 'Software engineering provides the software engineering fundamentals, principles and skills needed to develop and maintain high quality software products.',
            'objectives' => 'This java se 8 programming training covers the core language features and application programming interfaces (API) you will use to design object-oriented applications with java standard edition 8 (java se 8) platform.',
            'eligibility' => 'This course requires the fundaementals of java se 8',
            'schedule' => '2 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/70FqUjr.jpg',
            'category_id' => 6,
            'available_seats' => 15,
            'price' => 80000
        ]);
        App\Course::create([
            'name' => 'Developing Applications for Java se 8 platform',
            'description' => 'Software engineering provides the software engineering fundamentals, principles and skills needed to develop and maintain high quality software products.',
            'objectives' => 'this java se 8 programming training covers the core language features and application programming interfaces (api) you will use to design object-oriented applications with java standard edition 8 (java se 8) platform.',
            'eligibility' => 'This course requires the experience of java programming language, use of an ide, familiarity with database theory, and object serialization',
            'schedule' => '2 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/70FqUjr.jpg',
            'category_id' => 6,
            'available_seats' => 15,
            'price' => 80000
        ]);
        App\Course::create([
            'name' => 'Cisco IT Essentials',
            'description' => 'This course is for you if you are getting ready for a career as an entry-level information technology (IT) professional or computer service technician, this course will build on your existing user-level knowledge and experience with personal computer (PC) software and hardware.',
            'objectives' => 'The objectives of this course is to learn how to install, configure, optimize, troubleshoot, repair, upgrade, and perform preventive maintenance on personal computers, digital devices, and operating systems.',
            'eligibility' => 'This course is for ideal for anyone interested in a new career in IT or to prove existing knowledge in basic IT help-desk support.',
            'schedule' => '2 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/95QtuTC.jpg',
            'category_id' => 3,
            'available_seats' => 15,
            'price' => 50500
        ]);
        App\Course::create([
            'name' => 'C Programming - Complete Tutorial for beginners',
            'description' => 'This course is well designed and covered almost all the topics that one should know while learning C language. This course will not only help you to build a solid foundation on the topic but will boost your confidence to face technical interviews boldly.',
            'objectives' => 'The objectives of this course is to be able to build softwares and write C programs',
            'eligibility' => 'The course is structured basically for the new programmers who may not have any previous experience with any programming language.',
            'schedule' => '2 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/4hwws1f.jpg',
            'category_id' => 6,
            'available_seats' => 15,
            'price' => 50000
        ]);
        App\Course::create([
            'name' => 'C++ from beginner to expert',
            'description' => 'This course is well designed and covered almost all the topics that one should know while learning C++ programming. This course will teach you how to program in C++ in a fast and easy way!.',
            'objectives' => 'The objectives of this course is to be able to write C++ programs',
            'eligibility' => 'The course is structured basically for the new programmers who may not have any previous experience with any programming language.',
            'schedule' => '2 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/4hwws1f.jpg',
            'category_id' => 6,
            'available_seats' => 15,
            'price' => 50000
        ]);
        App\Course::create([
            'name' => 'The complete mordern Javascript course with es6',
            'description' => 'In this course, you will go from a beginner to a job ready js developer. Javascript concepts will be taught and functional applications will be developed.',
            'objectives' => ' The objectives of this course is to learn how to build applications with Javascript and learn the new mordern javascript language',
            'eligibility' => 'This course is for beginners with no prior coding experience or programming knowledge, and the knowledge of HTML and CSS is a bonus but it is not 100% required.',
            'schedule' => '2 months',
            'training_instructor' => 'Adesanya Ayokunle',
            'featured_image' => 'https://i.imgur.com/2bpq2Lu.jpg',
            'category_id' => 2,
            'available_seats' => 15,
            'price' => 80000
        ]);
        App\Course::create([
            'name' => 'Complete beginners guide to learning php',
            'description' => 'This is a fast paced course which is perfect for beginners to learn basics of writing PHP code. Useful PHP syntax will be taught which can be used to write php applications',
            'objectives' => ' The objectives of this course is to learn how to build applications with PHP programming language and it will walk you through learning the very basics of PHP.',
            'eligibility' => 'This course is for beginners with no prior coding experience or programming knowledge, and the knowledge of HTML and CSS is a bonus but it is not 100% required.',
            'schedule' => '2 months',
            'training_instructor' => 'Adesanya Ayokunle',
            'featured_image' => 'https://i.imgur.com/SxQySrR.jpg',
            'category_id' => 2,
            'available_seats' => 15,
            'price' => 80000
        ]);
        App\Course::create([
            'name' => 'Machine Learning intro for python developers',
            'description' => 'This is a getting started course for machine learning and it is for people who are new to machine learning techniques.',
            'objectives' => 'The objectives of this course is learn how to use machine learning with python scikit.',
            'eligibility' => 'This course is for python developers who are curious about machine learning and experience with python programming is required.',
            'schedule' => '2 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/oqLOOMm.jpg',
            'category_id' => 6,
            'available_seats' => 15,
            'price' => 50000
        ]);
        App\Course::create([
            'name' => 'Python programming for beginners',
            'description' => 'This course is targeted to people wtih no previous or little programming experience. This course is very comprehensive and yet straight forward and you"ll  get a full understanding of how to program in python',
            'objectives' => 'The objectives of this course is learn how to program in python programming language.',
            'eligibility' => 'This course is for those who don"t know where to start with learning python and anyone who wants to start a career in programming in 2019.',
            'schedule' => '2 months',
            'training_instructor' => 'Tosin Fakile',
            'featured_image' => 'https://i.imgur.com/oqLOOMm.jpg',
            'category_id' => 6,
            'available_seats' => 15,
            'price' => 100000
        ]);
    }
}
