@extends('layout.app')
@section('appContents')
    <header class="bg-cyan-500 text-white text-center py-6">
           <h1 class="text-4xl font-bold">Contact Information</h1>
    </header>

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <div class="flex justify-center space-x-4">

            <!-- Instagram -->
            <a href="https://www.instagram.com/virat.kohli/"
                class="text-3xl text-pink-500 hover:text-pink-700 transition duration-300 ease-in-out">
                <i class="fab fa-instagram"></i>
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/imVkohli"
                class="text-3xl text-blue-400 hover:text-blue-600 transition duration-300 ease-in-out">
                <i class="fab fa-twitter"></i>
            </a>
            <!-- Facebook -->
            <a href="https://www.facebook.com/virat.kohli/"
                class="text-3xl text-blue-700 hover:text-blue-900 transition duration-300 ease-in-out">
                <i class="fab fa-facebook"></i>
            </a>
            <!-- YouTube -->
            <a href="https://www.youtube.com/channel/UCyJtJ3Tm3kqDDIouuU2lcDg"
                class="text-3xl text-red-500 hover:text-red-700 transition duration-300 ease-in-out">
                <i class="fab fa-youtube"></i>
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/virat-kohli/"
                class="text-3xl text-blue-800 hover:text-blue-900 transition duration-300 ease-in-out">
                <i class="fab fa-linkedin"></i>
            </a>
            <!-- Add more social media icons/links as needed -->
        </div>

        <!-- Contact Form -->
        <form action="#" method="post">
            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Your Name</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Your Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Message Input -->
            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-gray-600">Your Message</label>
                <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Submit</button>
        </form>
    
@endsection