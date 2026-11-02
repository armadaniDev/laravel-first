<div>
    <!-- Sidebar -->
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <ul class="space-y-2">
                <x-admin.menu-item href="/admin/dashboard" label="Dashboard"
                    icon='
                    <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>' />
                <x-admin.menu-item href="/admin/about" label="About"
                    icon='<path fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>' />
                <x-admin.menu-item href="/admin/student" label="Students"
                    icon='<path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>' />
                <x-admin.menu-item href="/admin/classroom" label="Classroom"
                    icon='<path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16h1a1 1 0 1 1 0 2H3a1 1 0 1 1 0-2h1V4Zm4 2a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm5 0a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1ZM9 9a1 1 0 0 0 0 2h1a1 1 0 1 0 0-2H9Zm4 0a1 1 0 1 0 0 2h1a1 1 0 1 0 0-2h-1Zm-1 5a2 2 0 0 0-2 2v4h4v-4a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>' />
                <x-admin.menu-item href="/admin/subjects" label="Subjects"
                    icon='<path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z"/>' />
                <x-admin.menu-item href="/admin/teachers" label="Teachers"
                    icon='<path fill-rule="evenodd" d="M12 2a5 5 0 1 0 0 10 5 5 0 0 0 0-10ZM5 19a7 7 0 0 1 14 0v1a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-1Z" clip-rule="evenodd"/>' />
            </ul>
        </div>
    </aside>
</div>
