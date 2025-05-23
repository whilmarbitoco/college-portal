   <aside style="min-width: 16rem; max-width: 16rem" id="mobileSidebar"
       class="hidden fixed top-0 z-50 flex-col p-6 w-64 h-screen shadow-lg transition-transform transform -translate-x-full bg-secondary-bg md:sticky md:transform-none md:translate-x-0 md:flex">
       <div class="flex items-center mb-10">
           <svg class="mr-2 w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 24 24">
               <path
                   d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
           </svg>
           <span class="text-xl font-bold text-primary-text">Nebula Student</span>
       </div>

       <nav class="flex-grow">
           <ul class="space-y-2">
               <li>
                   <a href="{{ route('student.dashboard') }}"
                       class="flex items-center p-3 rounded-md transition-colors text-primary-text hover:bg-primary-bg hover:text-accent group">
                       <svg class="mr-3 w-5 h-5 transition-colors text-tertiary-text group-hover:text-accent"
                           fill="currentColor" viewBox="0 0 24 24">
                           <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                       </svg>
                       Dashboard
                   </a>
               </li>
               <li>
                   <a href="{{ route('student.course') }}"
                       class="flex items-center p-3 rounded-md transition-colors text-primary-text hover:bg-primary-bg hover:text-accent group">
                       <svg class="mr-3 w-5 h-5 transition-colors text-tertiary-text group-hover:text-accent"
                           fill="currentColor" viewBox="0 0 24 24">
                           <path
                               d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-6-2h-4v2h4V4z" />
                       </svg>
                       Courses
                   </a>
               </li>
               <li>
                   <a href="#"
                       class="flex items-center p-3 rounded-md transition-colors text-primary-text hover:bg-primary-bg hover:text-accent group">
                       <svg class="mr-3 w-5 h-5 transition-colors text-tertiary-text group-hover:text-accent"
                           fill="currentColor" viewBox="0 0 24 24">
                           <path
                               d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z" />
                       </svg>
                       Grades
                   </a>
               </li>
               <li>
                   <a href="#"
                       class="flex items-center p-3 rounded-md transition-colors text-primary-text hover:bg-primary-bg hover:text-accent group">
                       <svg class="mr-3 w-5 h-5 transition-colors text-tertiary-text group-hover:text-accent"
                           fill="currentColor" viewBox="0 0 24 24">
                           <path
                               d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" />
                       </svg>
                       Calendar
                   </a>
               </li>
           </ul>
       </nav>

       <div class="mt-auto">
           <a href="#"
               class="flex items-center p-3 rounded-md transition-colors text-primary-text hover:bg-primary-bg hover:text-danger group">
               <svg class="mr-3 w-5 h-5 transition-colors text-tertiary-text group-hover:text-danger"
                   fill="currentColor" viewBox="0 0 24 24">
                   <path
                       d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z" />
               </svg>
               Logout
           </a>
       </div>
   </aside>
