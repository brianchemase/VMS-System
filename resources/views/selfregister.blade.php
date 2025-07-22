<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St. John Ambulance Brigade Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --background: 0 0% 100%;
            --foreground: 222.2 84% 4.9%;
            --card: 0 0% 100%;
            --card-foreground: 222.2 84% 4.9%;
            --popover: 0 0% 100%;
            --popover-foreground: 222.2 84% 4.9%;
            --primary: 221.2 83.2% 53.3%;
            --primary-foreground: 210 40% 98%;
            --primary-glow: 217.2 91.2% 59.8%;
            --secondary: 210 40% 96%;
            --secondary-foreground: 222.2 84% 4.9%;
            --muted: 210 40% 96%;
            --muted-foreground: 215.4 16.3% 46.9%;
            --accent: 210 40% 96%;
            --accent-foreground: 222.2 84% 4.9%;
            --destructive: 0 84.2% 60.2%;
            --destructive-foreground: 210 40% 98%;
            --border: 214.3 31.8% 91.4%;
            --input: 214.3 31.8% 91.4%;
            --ring: 221.2 83.2% 53.3%;
            --radius: 0.75rem;
            --shadow-elegant: 0 10px 30px -10px hsl(var(--primary) / 0.3);
        }
        
        .dark {
            --background: 222.2 84% 4.9%;
            --foreground: 210 40% 98%;
            --card: 222.2 84% 4.9%;
            --card-foreground: 210 40% 98%;
            --popover: 222.2 84% 4.9%;
            --popover-foreground: 210 40% 98%;
            --primary: 217.2 91.2% 59.8%;
            --primary-foreground: 222.2 84% 4.9%;
            --primary-glow: 221.2 83.2% 53.3%;
            --secondary: 217.2 32.6% 17.5%;
            --secondary-foreground: 210 40% 98%;
            --muted: 217.2 32.6% 17.5%;
            --muted-foreground: 215 20.2% 65.1%;
            --accent: 217.2 32.6% 17.5%;
            --accent-foreground: 210 40% 98%;
            --destructive: 0 62.8% 30.6%;
            --destructive-foreground: 210 40% 98%;
            --border: 217.2 32.6% 17.5%;
            --input: 217.2 32.6% 17.5%;
            --ring: 224.3 76.3% 94.1%;
        }
    </style>
    <script>
        function scrollToForm() {
            document.getElementById('registration-form').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</head>
<body class="font-sans">
    <div class="min-h-screen bg-gradient-to-br from-white via-slate-50 to-blue-50">
        <!-- Hero Section -->
        <div class="relative py-20 px-4">
            <div class="max-w-6xl mx-auto text-center">
                <div class="flex justify-center mb-6">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-500 p-4 rounded-full">
                        <svg class="h-12 w-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    St. John Ambulance
                    <span class="block text-3xl md:text-4xl text-blue-600 mt-2">
                        Brigade Registration
                    </span>
                </h1>
                
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Join the ranks of dedicated volunteers committed to saving lives and serving communities. 
                    Register today to become part of a tradition of care that spans generations.
                </p>
                
                <button 
                    onclick="scrollToForm()"
                    class="bg-gradient-to-r from-blue-600 to-blue-500 hover:opacity-90 text-white text-lg px-8 py-4 rounded-lg font-medium transition-opacity"
                >
                    Start Your Registration
                </button>
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
                    Why Join St. John Ambulance Brigade?
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white border border-blue-100 rounded-lg p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-center">
                            <div class="bg-gradient-to-r from-blue-50 to-blue-50 p-3 rounded-full w-fit mx-auto mb-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Save Lives</h3>
                            <p class="text-gray-600 text-base">
                                Learn essential first aid skills and emergency response techniques to make a real difference in your community.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white border border-blue-100 rounded-lg p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-center">
                            <div class="bg-gradient-to-r from-blue-50 to-blue-50 p-3 rounded-full w-fit mx-auto mb-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Build Community</h3>
                            <p class="text-gray-600 text-base">
                                Connect with like-minded volunteers and build lasting friendships while serving your local community.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white border border-blue-100 rounded-lg p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-center">
                            <div class="bg-gradient-to-r from-blue-50 to-blue-50 p-3 rounded-full w-fit mx-auto mb-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Gain Skills</h3>
                            <p class="text-gray-600 text-base">
                                Develop valuable life skills, leadership abilities, and professional certifications through comprehensive training.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="py-16 px-4 bg-gradient-to-r from-blue-50 to-blue-50">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    Ready to Make a Difference?
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Complete your membership application in just a few simple steps. 
                    Join thousands of volunteers who are already making an impact.
                </p>
                <button 
                    onclick="scrollToForm()"
                    class="bg-gradient-to-r from-slate-600 to-blue-600 hover:opacity-90 text-white text-lg px-8 py-4 rounded-lg font-medium transition-opacity"
                >
                    Register Now
                </button>
            </div>
        </div>

        <!-- Registration Form Section -->
        <div id="registration-form" class="py-16 px-4 w-full">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        Membership Registration
                    </h2>
                    <p class="text-lg text-gray-600">
                        Complete your application to join St. John Ambulance Brigade
                    </p>
                </div>
                
                <!-- Form would go here - this is where the MembershipForm component renders -->
                <div class="bg-white rounded-xl shadow-xl p-10 border border-gray-100">
                    <form class="space-y-8">
                        <!-- Personal Details -->
                        <div class="border-b border-gray-200 pb-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6 pb-2 border-b border-gray-200">Personal Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                                    <input type="text" id="first-name" name="first-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                    <input type="text" id="last-name" name="last-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                    <input type="date" id="dob" name="dob" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                                    <select id="gender" name="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="contact-number" class="block text-sm font-medium text-gray-700">Contact Number</label>
                                    <input type="tel" id="contact-number" name="contact-number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="date-joining" class="block text-sm font-medium text-gray-700">Date of Joining</label>
                                    <input type="date" id="date-joining" name="date-joining" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="id-number" class="block text-sm font-medium text-gray-700">ID Number</label>
                                    <input type="text" id="id-number" name="id-number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>
                        </div>

                        <!-- Location Details -->
                        <div class="border-b border-gray-200 pb-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6 pb-2 border-b border-gray-200">Location Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                                    <input type="text" id="region" name="region" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="county" class="block text-sm font-medium text-gray-700">County</label>
                                    <input type="text" id="county" name="county" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="corp" class="block text-sm font-medium text-gray-700">Corp</label>
                                    <input type="text" id="corp" name="corp" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="division" class="block text-sm font-medium text-gray-700">Division</label>
                                    <input type="text" id="division" name="division" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>
                        </div>

                        <!-- Membership Details -->
                        <div class="pb-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6 pb-2 border-b border-gray-200">Membership Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="rank" class="block text-sm font-medium text-gray-700">Rank</label>
                                    <input type="text" id="rank" name="rank" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="county-residence" class="block text-sm font-medium text-gray-700">County of Residence</label>
                                    <input type="text" id="county-residence" name="county-residence" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="membership-type" class="block text-sm font-medium text-gray-700">Membership Type</label>
                                    <select id="membership-type" name="membership-type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Select</option>
                                        <option>Volunteer</option>
                                        <option>Youth Member</option>
                                        <option>Adult Member</option>
                                        <option>Associate Member</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="blood-group" class="block text-sm font-medium text-gray-700">Blood Group</label>
                                    <select id="blood-group" name="blood-group" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Select</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="membership-number" class="block text-sm font-medium text-gray-700">Membership Number</label>
                                    <input type="text" id="membership-number" name="membership-number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-10">
                            <button type="submit" class="bg-gradient-to-r from-blue-600 to-blue-500 hover:opacity-90 text-white font-medium py-3 px-8 rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                Complete Registration
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>