<div>
    <!-- Sidebar -->
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <ul class="space-y-2">
                <x-admin.menu-item
                    href="/admin/dashboard"
                    label="Dashboard"
                    icon='
                    <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>'
                />
                <x-admin.menu-item
                    href="/admin/about"
                    label="About"
                    icon='
                        <path fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>'
                />
                <x-admin.menu-item
                    href="/admin/student"
                    label="Students"
                    icon='<path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>'
                />
                <x-admin.menu-item
                    href="/admin/classroom"
                    label="Classroom"
                    icon='<path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16h1a1 1 0 1 1 0 2H3a1 1 0 1 1 0-2h1V4Zm4 2a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm5 0a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1ZM9 9a1 1 0 0 0 0 2h1a1 1 0 1 0 0-2H9Zm4 0a1 1 0 1 0 0 2h1a1 1 0 1 0 0-2h-1Zm-1 5a2 2 0 0 0-2 2v4h4v-4a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>' />
            </ul>
        </div>
    </aside>
</div>
