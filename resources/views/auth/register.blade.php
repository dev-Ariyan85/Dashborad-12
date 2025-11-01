<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    
    <div class="flex min-h-screen">
        
        <!-- Left Side - Branding -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-blue-600 via-blue-700 to-purple-800 p-12 flex-col justify-between relative overflow-hidden">
            
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute transform rotate-45 bg-white w-96 h-96 -top-48 -left-48 rounded-full"></div>
                <div class="absolute transform rotate-45 bg-white w-64 h-64 top-1/2 left-1/4 rounded-full"></div>
                <div class="absolute transform rotate-45 bg-white w-80 h-80 bottom-0 right-0 rounded-full"></div>
            </div>
            
            <!-- Content -->
            <div class="relative z-10">
                <div class="flex items-center space-x-3 mb-8">
                    <div class="bg-white rounded-xl p-3">
                        <i class="fas fa-cash-register text-3xl text-blue-600"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">POS System</h1>
                        <p class="text-blue-200 text-sm">Point of Sale Solution</p>
                    </div>
                </div>
                
                <div class="mt-16">
                    <h2 class="text-4xl font-bold text-white mb-6">
                        Join Us Today!
                    </h2>
                    <p class="text-xl text-blue-100 leading-relaxed mb-8">
                        Create your account and start managing your business efficiently.
                    </p>
                    
                    <!-- Features -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3 text-white">
                            <div class="bg-white bg-opacity-20 rounded-lg p-2">
                                <i class="fas fa-chart-line text-xl"></i>
                            </div>
                            <span class="text-lg">Real-time Sales Analytics</span>
                        </div>
                        <div class="flex items-center space-x-3 text-white">
                            <div class="bg-white bg-opacity-20 rounded-lg p-2">
                                <i class="fas fa-warehouse text-xl"></i>
                            </div>
                            <span class="text-lg">Inventory Management</span>
                        </div>
                        <div class="flex items-center space-x-3 text-white">
                            <div class="bg-white bg-opacity-20 rounded-lg p-2">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <span class="text-lg">Customer Relationship</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="relative z-10">
                <p class="text-blue-200 text-sm">
                    © 2025 POS System. All rights reserved.
                </p>
            </div>
        </div>
        
        <!-- Right Side - Register Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                
                <!-- Mobile Logo -->
                <div class="lg:hidden text-center mb-8">
                    <div class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl p-4 mb-4">
                        <i class="fas fa-cash-register text-4xl text-white"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-800">POS System</h1>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Create Account</h2>
                        <p class="text-gray-600">Fill in your details to get started</p>
                    </div>

                    <form id="registerForm" action="{{ route('register.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- Full Name -->
                        <div>
                            <label for="fullname" class="block text-sm font-semibold text-gray-700 mb-2">
                                Full Name
                            </label>
                            <div class="relative">
                                <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input 
                                    type="text" 
                                    id="fullname"
                                    name="name"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="John Doe"
                                    required
                                >
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address
                            </label>
                            <div class="relative">
                                <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input 
                                    type="email" 
                                    id="email"
                                    name="email"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="john@example.com"
                                    required
                                >
                            </div>
                        </div>
                        
                        <!-- Username -->
                        <div>
                            <label for="username" class="block text-sm font-semibold text-gray-700 mb-2">
                                Username
                            </label>
                            <div class="relative">
                                <i class="fas fa-at absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input 
                                    type="text" 
                                    id="username"
                                    name="username"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="johndoe"
                                    required
                                >
                            </div>
                        </div>
                        
                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                                Password
                            </label>
                            <div class="relative">
                                <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input 
                                    type="password" 
                                    id="password"
                                    name="password"
                                    class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="••••••••"
                                    required
                                >
                                <button 
                                    type="button" 
                                    onclick="togglePassword('password', 'toggleIcon1')"
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600"
                                >
                                    <i class="fas fa-eye" id="toggleIcon1"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
                                Confirm Password
                            </label>
                            <div class="relative">
                                <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input 
                                    type="password" 
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="••••••••"
                                    required
                                >
                                <button 
                                    type="button" 
                                    onclick="togglePassword('password_confirmation', 'toggleIcon2')"
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600"
                                >
                                    <i class="fas fa-eye" id="toggleIcon2"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Terms & Conditions -->
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" name="agree" class="w-4 h-4 mt-1 text-blue-600 border-gray-300 rounded focus:ring-blue-500" required>
                            <label for="terms" class="ml-2 text-sm text-gray-700">
                                I agree to the <a href="#" class="font-semibold text-blue-600 hover:text-blue-800">Terms and Conditions</a> and <a href="#" class="font-semibold text-blue-600 hover:text-blue-800">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <!-- Submit Button -->
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold py-3 rounded-lg hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition duration-200"
                        >
                            <i class="fas fa-user-plus mr-2"></i>
                            Create Account
                        </button>
                        
                        <!-- Divider -->
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-4 bg-white text-gray-500">Or</span>
                            </div>
                        </div>
                        
                        <!-- Sign In Link -->
                        <div class="text-center">
                            <p class="text-sm text-gray-600">
                                Already have an account? 
                                <a href="{{ route('login') }}" class="font-semibold text-blue-600 hover:text-blue-800">Sign in</a>
                            </p>
                        </div>
                    </form>
                </div>
                
                <!-- Help Link -->
                <div class="text-center mt-6">
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-800">
                        <i class="fas fa-question-circle mr-1"></i>
                        Need help?
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(iconId);
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        
    </script>
</body>
</html>