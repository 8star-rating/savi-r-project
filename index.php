<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Savi-R | Login</title>
    <link rel="stylesheet" type="text/css" href="assets/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lexend:wght@600&display=swap" rel="stylesheet">
</head>
<script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-red {
            background-color: #cc4d4d;
        }

        .logo-stack span {
            display: block;
            line-height: 0.75;
            letter-spacing: -0.05em;
        }

        .inner-shadow {
            box-shadow: inset 0 3px 5px 0 rgba(0, 0, 0, 0.2);
        }
</style>
<body class="font-[Inter]">
    <div class="min-h-screen bg-white flex items-center justify-center p-6 font-sans">
    <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-2 gap-20 md:gap-60 items-center">
    
    <div class="flex flex-col items-center justify-center space-y-4">
      <div class="relative text-7xl md:text-8xl font-[Inter] font-black tracking-wide">
        <div class="flex flex-col">
          <span class="text-black">Savi-R</span>
          <span class="text-red-600 -mt-5 md:-mt-7">Savi-R</span>
          <span class="text-black -mt-5 md:-mt-7">Savi-R</span>
        </div>
      </div>
      <p class="text-gray-800 text-sm md:text-base font-medium tracking-wide">
        <span class="text-red-600 font-bold">UDRMM</span> Office File Management System
      </p>
    </div>

    <div class="flex justify-center font-[Inter]">
      <div class="bg-[#ffb5b5] w-full max-w-md rounded-[3rem] p-10 shadow-xl flex flex-col items-center">
        <h1 class="text-3xl font-bold text-gray-800 tracking-widest mb-7 p-5">WELCOME!</h1>
        
        <form id="loginForm" class="w-full space-y-6 font-[Inter] tracking-wide">
          <div>
            <label class="block text-red-900 font-bold text-sm mb-1 ml-1">Username</label>
            <input type="text" placeholder="Enter username" 
              class="w-full p-4 rounded-xl border-none focus:ring-2 focus:ring-red-400 outline-none text-gray-800 placeholder-gray-400 shadow-inner bg-white">
          </div>

          <div>
            <label class="block text-red-900 font-bold text-sm mb-1 ml-1">Password</label>
            <input type="password" placeholder="Enter password" 
              class="w-full p-4 rounded-xl border-none focus:ring-2 focus:ring-red-400 outline-none text-gray-800 placeholder-gray-400 shadow-inner bg-white">
          </div>

          <div>
            <label class="block text-red-900 font-bold text-sm mb-1 ml-1">Simulate Role (Demo)</label>
            <select id="roleSelect" class="w-full p-4 rounded-xl border-none focus:ring-2 focus:ring-red-400 outline-none text-gray-800 shadow-inner bg-white appearance-none cursor-pointer">
                <option value="admin">Admin</option>
                <option value="user">Standard User</option>
            </select>
          </div>

          <div class="flex flex-col items-center justify-center pt-2">
            <button type="submit" id="login1"
              class="w-7/12 bg-red-500 hover:bg-red-600 text-white font-semibold py-4 rounded-xl shadow-lg transition duration-200 uppercase tracking-widest">
              Log In
            </button>

            <div class="relative flex p-4 items-center w-full">
              <div class="grow border-t border-red-300"></div>
            </div>

            <button type="button" id="login2"
              class="w-7/12 md:w-10/12 bg-white flex items-center justify-center gap-3 py-3 rounded-xl shadow-sm border border-gray-100 hover:bg-gray-50 transition">
              <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" class="w-6 h-6" alt="Google">
              <span class="text-black-100 font-medium text-sm">Continue with Google</span>
            </button>
          </div>
        </form>

        <button class="mt-8 text-red-900 font-bold text-sm hover:underline tracking-widest">
          Forgot Password?
        </button>
      </div>
    </div>

  </div>
</div>

<script>
  document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault(); // Stop page refresh
      
      // Get the selected role
      const selectedRole = document.getElementById('roleSelect').value;
      
      // Save it to the browser memory
      localStorage.setItem('savi_role', selectedRole);
      
      // Route based on role (UPDATED TO .PHP)
      if (selectedRole === 'admin') {
          window.location.href = 'admin.php';
      } else {
          window.location.href = 'user.php';
      }
  });

  document.getElementById('login2').addEventListener('click', function() {
      // (Optional) If you have an empty.php, update this too
      window.location.href = '#'; 
  });
</script> 

</body>
</html>