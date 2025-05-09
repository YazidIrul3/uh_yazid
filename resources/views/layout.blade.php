<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/feather-icons"></script> <!-- For icons -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
         body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      padding: 30px;
    }

    table {
      width: 80%;
      margin: auto;
      border-collapse: collapse;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      background-color: #fff;
    }

    th, td {
      padding: 15px 20px;
      border-bottom: 1px solid #e0e0e0;
      text-align: left;
    }

    th {
      background-color: #6c63ff;
      color: white;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    tr:hover {
      background-color: #f1f1ff;
    }

    caption {
      font-size: 1.5em;
      margin-bottom: 15px;
      color: #444;
    }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex">    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 bg-white w-64 transform -translate-x-full md:translate-x-0 md:relative z-30 transition-transform duration-300 ease-in-out shadow-lg">
    <div class="h-full flex flex-col p-4 space-y-4">
      <h1 class="text-2xl font-bold text-indigo-600">🌟 Brand</h1>
      <nav class="flex-1 space-y-2">
        <a href="{{route('penerbit.index')}}" class="block px-4 py-2 rounded hover:bg-indigo-50 text-gray-700 font-medium">🏠 Penerbit</a>
        <a href="{{route('buku.index')}}" class="block px-4 py-2 rounded hover:bg-indigo-50 text-gray-700 font-medium">📁 Buku</a>
    
      </nav>
      <form  action="{{route('logout')}}" method="POST" enctype="multipart/form-data" >
@csrf
          <button class="mt-auto bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition"  >
              Logout
            </button>
        </form>
</div>
</div>

<!-- Main Content -->
@yield('konten')
  <div class="flex-1 md:ml-64 p-6">
    <!-- Mobile toggle -->
    <button id="menu-btn" class="md:hidden mb-4 p-2 bg-indigo-600 text-white rounded shadow hover:bg-indigo-700">
      =
    </button>
  </div>

  <script>
    const sidebar = document.getElementById('sidebar');
    const btn = document.getElementById('menu-btn');
    
    btn.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });
  </script>
</body>
</html>