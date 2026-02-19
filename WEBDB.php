<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Minimalist Login</title>
    <!-- [MODULE] 1a2_External Resources -->
    <script src="https://res.gemcoder.com/js/reload.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- [/MODULE] 1a2_External Resources -- TailwindCSS and FontAwesome integration -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: {
                primary: '#6366f1',
                secondary: '#4f46e5'
              }
            },
            animation: {
              'blob': 'blob 7s infinite'
            },
            keyframes: {
              blob: {
                '0%': {
                  transform: 'translate(0px, 0px) scale(1)'
                },
                '33%': {
                  transform: 'translate(30px, -50px) scale(1.1)'
                },
                '66%': {
                  transform: 'translate(-20px, 20px) scale(0.9)'
                },
                '100%': {
                  transform: 'translate(0px, 0px) scale(1)'
                }
              }
            }
          }
        }
      };
    </script>
    <style>
      body {
          font-family: 'Inter', sans-serif;
          overflow: hidden;
      }
      .glass-effect {
          background: rgba(255, 255, 255, 0.8);
          backdrop-filter: blur(12px);
          -webkit-backdrop-filter: blur(12px);
          border: 1px solid rgba(255, 255, 255, 0.3);
      }
    </style>
  </head>
  <body
    class="bg-slate-50 min-h-screen flex items-center justify-center relative"
  >
    <!-- [MODULE] a12_Background Decoration -->
    <div
      class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"
    ></div>
    <div
      class="absolute top-0 -right-4 w-72 h-72 bg-yellow-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"
    ></div>
    <div
      class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"
    ></div>
    <!-- [/MODULE] a12_Background Decoration -- Animated colorful blobs for background design -->
    <!-- [MODULE] c56_Login Main Container -->
    <main class="w-full max-w-md px-6">
      <div class="glass-effect p-8 rounded-3xl shadow-2xl">
        <!-- [MODULE] b89_Login Header -->
        <div class="text-center mb-10">
          <h1 class="text-3xl font-bold text-slate-800 mb-2">Welcome Back</h1>
          <p class="text-slate-500">Please enter your details to sign in</p>
        </div>
        <!-- [/MODULE] b89_Login Header -- Title and subtitle -->
        <!-- [MODULE] e45_Login Form -->
		<form id="loginForm" class="space-y-5" method="POST" action="login_process.php">
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5 ml-1">
              Email Address
            </label>
            <div class="relative">
              <span
                class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400"
              >
                <i class="far fa-envelope"> </i>
              </span>
              <input type="email" id="email" name="email" required
                class="w-full pl-10 pr-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-primary focus:border-transparent outline-none transition-all"
                placeholder="name@company.com"
              />
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5 ml-1">
              Password
            </label>
            <div class="relative">
              <span
                class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400"
              >
                <i class="far fa-lock"> </i>
              </span>
			<input type="password" id="password" name="password" required
                class="w-full pl-10 pr-12 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-primary focus:border-transparent outline-none transition-all"
                placeholder="••••••••"
              />
              <button
                type="button"
                id="togglePassword"
                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600"
              >
                <i class="far fa-eye"> </i>
              </button>
            </div>
          </div>
          <div class="flex items-center justify-between text-sm">
            <label class="flex items-center cursor-pointer group">
              <input
                type="checkbox"
                class="w-4 h-4 rounded border-slate-300 text-brand-primary focus:ring-brand-primary cursor-pointer"
              />
              <span
                class="ml-2 text-slate-600 group-hover:text-slate-800 transition-colors"
              >
                Remember me
              </span>
            </label>
            <a
              href="javascript:void(0);"
              class="font-medium text-brand-primary hover:text-brand-secondary transition-colors"
            >
              Forgot password?
            </a>
          </div>
          <button
            type="submit"
            class="w-full bg-brand-primary hover:bg-brand-secondary text-white font-semibold py-3 rounded-xl shadow-lg shadow-indigo-200 transition-all transform hover:-translate-y-0.5 active:scale-[0.98]"
          >
            Sign In
          </button>
        </form>
        <!-- [/MODULE] e45_Login Form -- Email, password inputs and submit button -->
        <!-- [MODULE] f12_Social Login -->
        <div class="mt-8">
          <div class="relative flex items-center justify-center mb-6">
            <div class="flex-grow border-t border-slate-200"></div>
            <span
              class="flex-shrink mx-4 text-xs text-slate-400 uppercase tracking-wider"
            >
              Or continue with
            </span>
            <div class="flex-grow border-t border-slate-200"></div>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <button
              class="flex items-center justify-center py-2.5 px-4 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors duration-200"
            >
              <img
                alt="Google"
                class="w-5 h-5 mr-2"
                src="https://www.synthoframe.com/staticResource/echoAiSystemImages/c772fdbde7f3de83265bcaef769355de.png"
              />
              <span class="text-sm font-medium text-slate-700"> Google </span>
            </button>
            <button
              class="flex items-center justify-center py-2.5 px-4 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors duration-200"
            >
              <i class="fab fa-apple text-xl mr-2 text-slate-800"> </i>
              <span class="text-sm font-medium text-slate-700"> Apple </span>
            </button>
          </div>
        </div>
        <!-- [/MODULE] f12_Social Login -- Google and Apple login options -->
        <p class="text-center mt-8 text-sm text-slate-600">
          Don't have an account?
          <a
            class="font-semibold text-brand-primary hover:text-brand-secondary transition-colors"
            href="javascript:void(0);"
          >
            Sign up for free
          </a>
        </p>
      </div>
    </main>
    <!-- [/MODULE] c56_Login Main Container -- Entire login card structure -->
    <!-- [JSMOD] d45_Login Interactions -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var loginForm = document.getElementById('loginForm');
        var togglePassword = document.getElementById('togglePassword');
        var passwordInput = document.getElementById('password');
        if (togglePassword && passwordInput) {
          togglePassword.addEventListener('click', function () {
            var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.querySelector('i').classList.toggle('fa-eye');
            togglePassword.querySelector('i').classList.toggle('fa-eye-slash');
          });
        }
      });
    </script>
    <!-- [/JSMOD] d45_Login Interactions -- Handles password visibility and form submission -->
  </body>
</html>
