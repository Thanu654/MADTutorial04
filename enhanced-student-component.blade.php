<div>
    <!-- Custom CSS Styles -->
    <style>
        :root {
            --electric-blue: #007bff;
            --electric-blue-light: #4da3ff;
            --electric-blue-dark: #0056b3;
            --electric-blue-bg: rgba(0, 123, 255, 0.1);
            --electric-blue-border: rgba(0, 123, 255, 0.2);
            --electric-blue-shadow: rgba(0, 123, 255, 0.2);
            --success-green: #10b981;
            --success-green-light: #34d399;
            --warning-yellow: #f59e0b;
            --danger-red: #ef4444;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
        }

        .electric-blue-gradient {
            background: linear-gradient(135deg, var(--electric-blue) 0%, var(--electric-blue-light) 100%);
        }

        .electric-blue-gradient-hover:hover {
            background: linear-gradient(135deg, var(--electric-blue-dark) 0%, var(--electric-blue) 100%);
            transform: translateY(-1px);
            box-shadow: 0 10px 25px var(--electric-blue-shadow);
        }

        .success-gradient {
            background: linear-gradient(135deg, var(--success-green) 0%, var(--success-green-light) 100%);
        }

        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .input-focus {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .input-focus:focus {
            transform: scale(1.02);
            box-shadow: 0 0 0 3px var(--electric-blue-shadow);
            border-color: var(--electric-blue);
        }

        .button-electric {
            background: var(--electric-blue);
            color: white;
            border: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .button-electric:hover {
            background: var(--electric-blue-dark);
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 8px 20px var(--electric-blue-shadow);
        }

        .button-success {
            background: var(--success-green);
            color: white;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .button-success:hover {
            background: #059669;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(16, 185, 129, 0.3);
        }

        .table-row-hover {
            transition: all 0.2s ease-in-out;
        }

        .table-row-hover:hover {
            background: var(--electric-blue-bg);
            transform: scale(1.01);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .dropdown-animation {
            animation: dropdownFadeIn 0.2s ease-out;
        }

        @keyframes dropdownFadeIn {
            0% { opacity: 0; transform: translateY(-10px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInScale {
            0% { opacity: 0; transform: scale(0.9); }
            100% { opacity: 1; transform: scale(1); }
        }

        .animate-fade-in {
            animation: fadeInScale 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .status-talking {
            background: rgba(59, 130, 246, 0.1);
            color: #1d4ed8;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .status-joined {
            background: rgba(16, 185, 129, 0.1);
            color: #047857;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .status-end-call {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .overdue-row {
            background: linear-gradient(90deg, rgba(239, 68, 68, 0.05) 0%, rgba(239, 68, 68, 0.1) 100%);
            border-left: 4px solid var(--danger-red);
        }
    </style>

    <div class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen p-6">
        <!-- Toast Container -->
        <div id="toast-container" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm hidden">
            <div class="glass-effect rounded-3xl shadow-2xl p-8 w-[400px] max-w-full text-center animate-fade-in">
                <div class="mx-auto mb-6 h-16 w-16 flex items-center justify-center rounded-full success-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Success!</h3>
                <p class="text-gray-600 mb-8 text-lg" id="toast-message"></p>
                <button id="toast-ok" class="px-8 py-3 rounded-xl button-success font-semibold shadow-lg focus:outline-none focus:ring-4 focus:ring-green-300">
                    Perfect!
                </button>
            </div>
        </div>

        <div class="flex gap-8 max-w-7xl mx-auto">
            <!-- Left: Enhanced Form -->
            <div class="glass-effect p-8 rounded-2xl shadow-xl w-full max-w-md card-hover">
                <div class="text-center mb-8">
                    <div class="mx-auto mb-4 h-16 w-16 electric-blue-gradient rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Student Information</h2>
                    <p class="text-gray-600">Add new student details</p>
                </div>

                <form wire:submit.prevent="submitForm" class="space-y-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Student Name</label>
                        <input type="text" wire:model="student_name" required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus font-medium" 
                            placeholder="Enter full student name">
                        @error('student_name') 
                        <span class="text-red-500 text-sm font-medium flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </span> 
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="course_name" class="block text-sm font-semibold text-gray-700">Course Type</label>
                        <select wire:model="course_name" id="course_name" required
                            class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 text-gray-700 input-focus font-medium bg-white">
                            <option value="" selected>Select Course Type</option>
                            <option value="Basic Level">📚 Basic Level</option>
                            <option value="Advanced">🎓 Advanced</option>
                            <option value="Pro">💎 Pro</option>
                        </select>
                        @error('course_name') 
                        <span class="text-red-500 text-sm font-medium flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </span> 
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Phone Number</label>
                        <input type="tel" wire:model="phone_number" required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus font-medium" 
                            placeholder="Enter 10-digit phone number">
                        @error('phone_number') 
                        <span class="text-red-500 text-sm font-medium flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </span> 
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Next Contact Date</label>
                        <input type="date" wire:model="next_date_form" min="{{ now()->format('Y-m-d') }}"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus font-medium" required>
                        @error('next_date_form') 
                        <span class="text-red-500 text-sm font-medium flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            {{ $message }}
                        </span> 
                        @enderror
                    </div>

                    <button type="submit" class="w-full py-4 px-6 button-electric rounded-xl font-bold text-lg shadow-lg electric-blue-gradient-hover">
                        <span class="flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Add Student
                        </span>
                    </button>
                </form>
            </div>

            <!-- Right: Enhanced Table -->
            <div class="glass-effect p-8 rounded-2xl shadow-xl flex-1 card-hover">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Student Management</h2>
                    <p class="text-gray-600">Track and manage student requests</p>
                </div>

                <!-- Enhanced Filters Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Search Input -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Search Students</label>
                        <div class="relative">
                            <input type="text" wire:model.live="search"
                                class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 pl-12 input-focus font-medium"
                                placeholder="Search by phone number">
                            <svg class="absolute left-4 top-4 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            @if($search)
                            <button wire:click="$set('search', '')"
                                class="absolute right-3 top-3.5 h-6 w-6 text-gray-400 hover:text-red-500 transition-colors rounded-full hover:bg-red-50">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            @endif
                        </div>
                    </div>

                    <!-- Course Filter -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Filter by Course</label>
                        <div class="relative">
                            <button class="w-full glass-effect border-2 border-gray-200 rounded-xl px-4 py-3 text-left text-gray-700 input-focus font-medium flex items-center justify-between shadow-md"
                                onclick="document.getElementById('courseDropdown').classList.toggle('hidden')">
                                <span class="truncate">
                                    @if($courseFilter === 'all') 📋 All Courses
                                    @elseif($courseFilter === 'Basic Level') 📚 Basic Level
                                    @elseif($courseFilter === 'Advanced') 🎓 Advanced
                                    @elseif($courseFilter === 'Pro') 💎 Pro
                                    @endif
                                </span>
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div id="courseDropdown" class="hidden absolute z-20 w-full glass-effect border border-gray-200 rounded-xl mt-2 shadow-xl overflow-hidden dropdown-animation">
                                <button wire:click="$set('courseFilter', 'all'); document.getElementById('courseDropdown').classList.add('hidden')"
                                    class="w-full px-4 py-3 text-left hover:bg-blue-50 transition-colors font-medium {{ $courseFilter === 'all' ? 'bg-blue-100 text-blue-800 font-bold' : 'text-gray-700' }}">
                                    📋 All Courses
                                </button>
                                <button wire:click="$set('courseFilter', 'Basic Level'); document.getElementById('courseDropdown').classList.add('hidden')"
                                    class="w-full px-4 py-3 text-left hover:bg-blue-50 transition-colors font-medium {{ $courseFilter === 'Basic Level' ? 'bg-blue-100 text-blue-800 font-bold' : 'text-gray-700' }}">
                                    📚 Basic Level
                                </button>
                                <button wire:click="$set('courseFilter', 'Advanced'); document.getElementById('courseDropdown').classList.add('hidden')"
                                    class="w-full px-4 py-3 text-left hover:bg-blue-50 transition-colors font-medium {{ $courseFilter === 'Advanced' ? 'bg-blue-100 text-blue-800 font-bold' : 'text-gray-700' }}">
                                    🎓 Advanced
                                </button>
                                <button wire:click="$set('courseFilter', 'Pro'); document.getElementById('courseDropdown').classList.add('hidden')"
                                    class="w-full px-4 py-3 text-left hover:bg-blue-50 transition-colors font-medium {{ $courseFilter === 'Pro' ? 'bg-blue-100 text-blue-800 font-bold' : 'text-gray-700' }}">
                                    💎 Pro
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sort Options -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700">Sort Options</label>
                        <div class="relative">
                            <button class="w-full glass-effect border-2 border-gray-200 rounded-xl px-4 py-3 text-left text-gray-700 input-focus font-medium flex items-center justify-between shadow-md"
                                onclick="document.getElementById('sortDropdown').classList.toggle('hidden')">
                                <span class="truncate">
                                    @if($sortOption === 'default') 📅 Default
                                    @elseif($sortOption === 'next_date_asc') ⬆️ Date Ascending
                                    @elseif($sortOption === 'next_date_desc') ⬇️ Date Descending
                                    @endif
                                </span>
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div id="sortDropdown" class="hidden absolute z-20 w-full glass-effect border border-gray-200 rounded-xl mt-2 shadow-xl overflow-hidden dropdown-animation">
                                <button wire:click="$set('sortOption', 'default'); document.getElementById('sortDropdown').classList.add('hidden')"
                                    class="w-full px-4 py-3 text-left hover:bg-blue-50 transition-colors font-medium {{ $sortOption === 'default' ? 'bg-blue-100 text-blue-800 font-bold' : 'text-gray-700' }}">
                                    📅 Default
                                </button>
                                <button wire:click="$set('sortOption', 'next_date_asc'); document.getElementById('sortDropdown').classList.add('hidden')"
                                    class="w-full px-4 py-3 text-left hover:bg-blue-50 transition-colors font-medium {{ $sortOption === 'next_date_asc' ? 'bg-blue-100 text-blue-800 font-bold' : 'text-gray-700' }}">
                                    ⬆️ Date Ascending
                                </button>
                                <button wire:click="$set('sortOption', 'next_date_desc'); document.getElementById('sortDropdown').classList.add('hidden')"
                                    class="w-full px-4 py-3 text-left hover:bg-blue-50 transition-colors font-medium {{ $sortOption === 'next_date_desc' ? 'bg-blue-100 text-blue-800 font-bold' : 'text-gray-700' }}">
                                    ⬇️ Date Descending
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Toggle and Count Section -->
                <div class="flex flex-col sm:flex-row gap-4 mb-6">
                    <div class="flex-1">
                        <button wire:click="toggleTodayCalls"
                            class="w-full sm:w-auto px-6 py-3 rounded-xl font-semibold transition-all duration-300 {{ $todayCalls ? 'bg-red-600 hover:bg-red-700 text-white shadow-lg' : 'bg-gray-200 hover:bg-gray-300 text-gray-700' }}">
                            <span class="flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $todayCalls ? 'Show All Students' : 'Show Today Only' }}
                            </span>
                        </button>
                    </div>
                    
                    <!-- Enhanced Student Count -->
                    <div class="electric-blue-gradient text-white px-8 py-4 rounded-xl shadow-xl border-2 border-blue-200 text-center min-w-[200px]">
                        <div class="text-sm font-bold uppercase tracking-wider mb-1 opacity-90">Total Students</div>
                        <div class="text-4xl font-black drop-shadow-lg">{{ $this->getStudentCount() }}</div>
                    </div>
                </div>

                <!-- Weekly Unchanged Section -->
                @if(!empty($weeklyUnchanged))
                <div class="mb-6 p-6 bg-gradient-to-r from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-xl shadow-md">
                    <h3 class="text-xl font-bold text-yellow-800 mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z" />
                        </svg>
                        Weekly Unchanged Dates
                    </h3>
                    <div class="grid gap-3">
                        @foreach($weeklyUnchanged as $unchanged)
                        <div class="bg-white p-4 rounded-lg border border-yellow-200 shadow-sm">
                            <div class="font-semibold text-gray-800">{{ $unchanged->student_name }}</div>
                            <div class="text-sm text-gray-600">📞 {{ $unchanged->phone_number }} • 📅 {{ $unchanged->next_date->format('Y-m-d') }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Enhanced Table -->
                <div class="overflow-x-auto rounded-xl border-2 border-gray-200 shadow-lg">
                    <table class="min-w-full divide-y divide-gray-200 bg-white">
                        <thead class="electric-blue-gradient">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-bold text-white uppercase tracking-wider">Student</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-white uppercase tracking-wider">Contact</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-white uppercase tracking-wider">Course</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-white uppercase tracking-wider">Requested</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-white uppercase tracking-wider">Calls</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-white uppercase tracking-wider">Next Date</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-white uppercase tracking-wider">Status</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-white uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($requests as $req)
                            <tr class="table-row-hover {{ $req->next_date && $req->next_date < now() && $req->status === 'talking' ? 'overdue-row' : '' }}">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="font-semibold text-gray-900">{{ $req->student_name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-700">📞 {{ $req->phone_number }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold
                                        @if($req->course_name === 'Basic Level') bg-blue-100 text-blue-800
                                        @elseif($req->course_name === 'Advanced') bg-purple-100 text-purple-800
                                        @elseif($req->course_name === 'Pro') bg-yellow-100 text-yellow-800
                                        @endif">
                                        @if($req->course_name === 'Basic Level') 📚
                                        @elseif($req->course_name === 'Advanced') 🎓
                                        @elseif($req->course_name === 'Pro') 💎
                                        @endif
                                        {{ $req->course_name }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    📅 {{ $req->created_at->format('M j, Y') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-sm font-semibold">
                                        {{ $req->talking_count }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($req->next_date && !isset($edit_mode[$req->id]))
                                        <div class="flex items-center gap-2">
                                            <span class="text-sm font-medium">{{ $req->next_date->format('M j, Y') }}</span>
                                            <button wire:click="enableEditMode({{ $req->id }})"
                                                class="button-success px-3 py-1 rounded-lg text-xs font-semibold">
                                                Edit
                                            </button>
                                        </div>
                                    @else
                                        <div class="flex items-center gap-2">
                                            <input type="date" wire:model="next_date.{{ $req->id }}" min="{{ now()->format('Y-m-d') }}"
                                                class="border-2 border-gray-200 rounded-lg px-2 py-1 text-sm input-focus">
                                            <button wire:click="updateNextDate({{ $req->id }})"
                                                class="button-electric px-3 py-1 rounded-lg text-xs font-semibold">
                                                Save
                                            </button>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if(!isset($status_mode[$req->id]))
                                        <div class="flex items-center gap-2">
                                            <span class="status-badge status-{{ strtolower(str_replace(' ', '-', $req->status)) }}">
                                                {{ ucfirst($req->status) }}
                                            </span>
                                            <button wire:click="enableStatusMode({{ $req->id }})"
                                                class="button-success px-3 py-1 rounded-lg text-xs font-semibold">
                                                Change
                                            </button>
                                        </div>
                                    @else
                                        <div class="flex flex-col gap-2">
                                            <select wire:model="pending_status.{{ $req->id }}" class="border-2 border-gray-200 rounded-lg px-2 py-1 text-sm input-focus">
                                                <option value="talking">💬 Talking</option>
                                                <option value="Joined">✅ Joined</option>
                                                <option value="End Call">❌ End Call</option>
                                            </select>
                                            <div class="flex gap-1">
                                                <button wire:click="confirmStatusUpdate({{ $req->id }})"
                                                    class="button-electric px-2 py-1 rounded text-xs font-semibold">
                                                    ✓
                                                </button>
                                                <button wire:click="cancelStatusUpdate({{ $req->id }})"
                                                    class="bg-gray-500 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs font-semibold transition-colors">
                                                    ✗
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- Additional actions can be added here -->
                                    <div class="flex space-x-2">
                                        <!-- Placeholder for future actions -->
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-12">
                                    <div class="flex flex-col items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                        </svg>
                                        <div class="text-xl font-semibold text-gray-400">No students found</div>
                                        <div class="text-gray-500">Try adjusting your search or filters</div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced JavaScript -->
    <script>
        document.addEventListener('livewire:init', () => {
            if (window.Livewire) {
                Livewire.on('action-success', data => {
                    showToast(data.message);
                });
            }
        });

        function showToast(message) {
            const toastContainer = document.getElementById('toast-container');
            const toastMessage = document.getElementById('toast-message');
            toastMessage.textContent = message;
            toastContainer.classList.remove('hidden');

            const toastOk = document.getElementById('toast-ok');
            const removeToast = () => {
                toastContainer.classList.add('hidden');
                toastOk.removeEventListener('click', removeToast);
            };
            toastOk.addEventListener('click', removeToast);

            // Auto-hide after 5 seconds
            setTimeout(removeToast, 5000);
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            const dropdowns = ['courseDropdown', 'sortDropdown'];
            dropdowns.forEach(dropdownId => {
                const dropdown = document.getElementById(dropdownId);
                const button = dropdown?.previousElementSibling;
                
                if (dropdown && !dropdown.contains(event.target) && !button?.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        });

        // Add keyboard navigation for dropdowns
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.getElementById('courseDropdown')?.classList.add('hidden');
                document.getElementById('sortDropdown')?.classList.add('hidden');
            }
        });
    </script>
</div>