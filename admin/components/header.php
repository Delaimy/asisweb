<header class="w-full md:w-60 md:h-screen fixed top-0 left-0 text-base md:text-lg">
  <h1 class="bg-[#202020] relative text-white text-xl p-4 h-[60px] z-40 flex justify-between items-center">
    Dashboard
    <button class="z-50 select-none cursor-pointer hamburger hamburger--slider" id="header-button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </h1>
  <nav class="fixed -top-full md:relative md:-top-0 md:border-r-2 md:border-gray-400 h-full w-full z-30" id="header-nav">
    <ul class="bg-[#dfdfdf] flex items-center justify-center gap-4 p-2 text-base">
      <li class="text-gray-600 hover:text-gray-800 transition-colors duration-300"><a href="./../index.php">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z"></path>
          </svg>
        </a></li>
      <li class="text-gray-600 hover:text-gray-800 transition-colors duration-300"><a href="./config.php">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z"></path>
          </svg>
        </a></li>
      <li class="flex text-gray-600 hover:text-gray-800 transition-colors duration-300"><button id="update">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M10 11H7.101l.001-.009a4.956 4.956 0 0 1 .752-1.787 5.054 5.054 0 0 1 2.2-1.811c.302-.128.617-.226.938-.291a5.078 5.078 0 0 1 2.018 0 4.978 4.978 0 0 1 2.525 1.361l1.416-1.412a7.036 7.036 0 0 0-2.224-1.501 6.921 6.921 0 0 0-1.315-.408 7.079 7.079 0 0 0-2.819 0 6.94 6.94 0 0 0-1.316.409 7.04 7.04 0 0 0-3.08 2.534 6.978 6.978 0 0 0-1.054 2.505c-.028.135-.043.273-.063.41H2l4 4 4-4zm4 2h2.899l-.001.008a4.976 4.976 0 0 1-2.103 3.138 4.943 4.943 0 0 1-1.787.752 5.073 5.073 0 0 1-2.017 0 4.956 4.956 0 0 1-1.787-.752 5.072 5.072 0 0 1-.74-.61L7.05 16.95a7.032 7.032 0 0 0 2.225 1.5c.424.18.867.317 1.315.408a7.07 7.07 0 0 0 2.818 0 7.031 7.031 0 0 0 4.395-2.945 6.974 6.974 0 0 0 1.053-2.503c.027-.135.043-.273.063-.41H22l-4-4-4 4z"></path>
          </svg>
        </button></li>
    </ul>

    <ul class="bg-white p-4 text-base font-semibold flex flex-col items-center md:items-start gap-2 h-full">
      <li class="text-gray-600 hover:text-gray-800 transition-colors duration-300"><a href="./users.php" title="Ir a Usuarios">Usuarios</a></li>
      <li class="text-gray-600 hover:text-gray-800 transition-colors duration-300"><a href="./students.php" title="Ir a Estudiantes">Estudiantes</a></li>
      <li class="text-gray-600 hover:text-gray-800 transition-colors duration-300"><a href="./groups.php" title="Ir a Grupos">Grupos</a></li>
      <li class="text-gray-600 hover:text-gray-800 transition-colors duration-300"><a href="./subjects.php" title="Ir a Asignaturas">Asignaturas</a></li>
      <li class="text-gray-600 hover:text-gray-800 transition-colors duration-300"><a href="./attendance.php" title="Ir a Asistencias">Asistencias</a></li>
    </ul>
  </nav>
</header>