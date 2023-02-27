<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .sidebar {
            height: 100%;
            min-height: 100vh;
            background-color: #232528;
            color: #fff;
            width: 20%;
        }

        .sidebar .nav-link {
            padding: 1rem;
            color: rgba(255, 255, 255, 0.5);
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }

        .main-content {
            padding: 2rem;
        }

        .row {
            flex-wrap: wrap;
        }
    </style>
</head>

<body>

    </button>
    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-44 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-1 py-4 bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-1">
                <li>
                    <a href="#"
                        class="flex items-center p-1 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="mr-5">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="flex-1  whitespace-nowrap">Users</span>

                    </a>
                </li>
                <li>
                    <a href="/groups"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="flex-1  whitespace-nowrap">Groups</span>
                    </a>
                </li>
                <li>
                    <a href="/user_group"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="flex-1  whitespace-nowrap">User-group</span>
                    </a>
                </li>
                <li>
                    <a href="/files"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="flex-1 whitespace-nowrap">Files</span>
                    </a>
                </li>
                <li>
                    <a href="/fileArchive"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="flex-1 whitespace-nowrap">fileArchive</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>


</body>

</html>
