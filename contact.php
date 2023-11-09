<?php include 'connection.php';?>
<?php
if ($_POST['first_name'] != '' && $_POST['last_name'] != '' && $_POST['email'] != '' && $_POST['phone'] != '' && $_POST['organization'] != '' && $_POST['message'] != '') {
    $sql = "INSERT INTO clients (first_name, last_name, email, phone, organization, message)
    VALUES ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . $_POST['organization'] . "', '" . $_POST['message'] . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: contact.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="out.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-indigo-950">
    <header
        class="container h-96 bg-[url('image/4.png')] bg-center bg-indigo-950/80 bg-blend-overlay min-w-full flex flex-col">
        <nav class="flex items-center">
            <img class="m-3 h-28 " src="image/until.png">
            <ul class="flex-1 text-right ">
              <li class="list-none inline-block px-5">
                <a href="h1.html"
                  class="m-2 text-white  font-medium hover:border-b-2 border-gray-400  hover:text-gray-400 transition-all">
                  Home
                </a>
              </li>
              <li class="list-none inline-block px-5"><a href="aboutUs.html"
                  class="m-2 text-white  font-medium hover:border-b-2 border-gray-400  hover:text-gray-400 transition-all">About
                  Us</a></li>
              <li class="list-none inline-block px-5"><a href="services.html"
                  class="m-2 text-white  font-medium hover:border-b-2 border-gray-400  hover:text-gray-400 transition-all">Services</a>
              </li>
              <li class="list-none inline-block px-5"><a href="contact.html"
                  class="m-2 text-white  font-medium hover:border-b-2 border-gray-400  hover:text-gray-400 transition-all">Contact
                  Us</a></li>
            </ul>
          </nav>
        <div><br>
            <h3 class="text-white text-5xl font-semibold text-center">Contact Us</h3> <br>
            <p class="text-white text-center">Our IT Experts Can Help You Find The Right Solution.</p>
        </div>

    </header>


    <main>
        <body class="bg-gray-900 text-white">
            <div class="container mx-auto px-4 py-12">
                <div class="flex flex-wrap -mx-4">
                    <!-- Where to find us section -->
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <h2 class="text-3xl font-bold mb-4 text-gray-200">Where to find us</h2>
                        <div class="mb-4">
                            <p class="flex items-center mb-2 text-gray-200"><span class="material-icons mr-2"></span>
                                460 Azure Place, Kamloops, BC V2C 1Y6</p>
                            <p class="flex items-center mb-2 text-gray-200"><span class="material-icons mr-2"></span>
                                778 683 2959</p>
                            <p class="flex items-center mb-2 text-gray-200"><span class="material-icons mr-2"></span>
                                pemtarivertechnologies@gmail.com</p>
                        </div>
                        <div class="aspect-w-16 aspect-h-9">
                            <!-- Embed map iframe here -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2777.470100836695!2d-120.35322316185109!3d50.65760665761904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537e2c421f2ac56d%3A0xd25341f57473c14d!2s460%20Azure%20Pl%2C%20Kamloops%2C%20BC%20V2E%200A9!5e0!3m2!1sen!2sca!4v1699477929019!5m2!1sen!2sca"
                                width="360" height="360" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <!-- Send a message section -->
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <h2 class="text-3xl font-bold mb-4 text-gray-200">Send us a message</h2>
                        <form action="career.php" class="space-y-4">
                            <input class="w-full p-3 rounded-md bg-gray-700 text-white"id="first_name" type="text"
                                placeholder="First Name *" required>
                            <input class="w-full p-3 rounded-md bg-gray-700 text-white" id="last_name" type="text"
                                placeholder="Last Name *" required>
                            <input class="w-full p-3 rounded-md bg-gray-700 text-white" id="email" type="email"
                                placeholder="Email *" required>
                            <input class="w-full p-3 rounded-md bg-gray-700 text-white" id="Phone" type="text"
                                placeholder="Phone *" required>
                            <input class="w-full p-3 rounded-md bg-gray-700 text-white" id="organization" type="text"
                                placeholder="Organization *" required>
                            <textarea class="w-full p-3 rounded-md bg-gray-700 text-white" id ="message" placeholder="Message"
                                required></textarea>
                            <button
                                class="w-full p-3 rounded-md bg-orange-700 hover:bg-orange-800 transition-colors">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://unpkg.com/@material-icons/font@2.0.0/dist/material-icons.min.js"></script>
        </body>
    </main>

    <footer class="bg-gray-800 text-gray-200 py-8">
        <div class="container mx-auto px-4">
            <!-- Upper section for subscription -->
            <div class="mb-6">
                <div class="mb-4">
                    <img src="image/logo.png" alt="Company Logo" class="h-36">
                </div>

                <!-- Email Subscription -->
                <div class="flex flex-wrap justify-between items-center">
                    <h3 class="text-xl  mb-4 lg:mb-0"> 234 Azure Place <br> Kamloops, BC
                    </h3>
                    <form class="flex w-full md:w-auto">
                        <!-- <h3 class="text-xl font-semibold mb-4 lg:mb-0">Stay updated with our newsletter</h3> -->
                        <input type="email" placeholder="Enter your email"
                            class="p-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 flex-grow text-black">
                        <button type="submit"
                            class="bg-indigo-700 hover:bg-indigo-800 text-white p-2 rounded-r-lg transition-colors duration-300">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Lower section for social links -->
            <div class="border-t border-gray-700 pt-6 md:flex md:justify-between">
                <!-- Social Media Links -->
                <div class="mb-4 md:mb-0">
                    <h4 class="font-semibold mb-2">Follow us</h4>
                    <ul class="flex space-x-4">
                        <li><a href="https://www.facebook.com/profile.php?id=61553246344577" class="hover:text-indigo-500 transition-colors duration-300">Facebook</a></li>
                        <li><a href="https://www.linkedin.com/in/penta-river-technologies-inc-8a143529a/" class="hover:text-indigo-500 transition-colors duration-300">LinkedIn</a></li>
                        <li><a href="https://www.instagram.com/pentarivertech/" class="hover:text-indigo-500 transition-colors duration-300">Instagram</a></li>
                      </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-semibold mb-2">Contact us</h4>
                    <ul>
                        <li><a href="mailto:pentarivertechnologies.com"
                                class="hover:text-indigo-500 transition-colors duration-300">pentarivertechnologies@gmail.com</a>
                        </li>
                        <li><a href="tel:+123456789" class="hover:text-indigo-500 transition-colors duration-300">+1 234
                                567 89</a></li>
                    </ul>
                </div>
            </div>
        </div><br>
        <p class=" text-center">Penta River Technologies © 2021 - All Rights Reserved></p>
    </footer>

</body>

</html>