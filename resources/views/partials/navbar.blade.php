<div class="duration-500 bg-[#2F2C4D] h-screen fixed" style="width:230px" id="navbar">
    <div class="bg-white border-r-2 h-[72px] flex items-center justify-end px-4">
        <div id="navbar-logo" class="fixed top-3 z-10 duration-500 " style="left:16px">
            <img src="https://hasnurcentre.org/wp-content/uploads/2019/08/YHC-2019.png" alt="" class="w-[150px]">
        </div>
        <button id="btn-slide" class="text-[#DDA842] text-xl fixed duration-500 top-[22px] z-10" style="left:196px">
            <i class="fa fa-chevron-left" id="icon-slide"></i>
        </button>
    </div>
    <div id="navbar-menu" class="h-[90%] overflow-y-scroll">
        <div class="mb-6 grid gap-y-2 mt-3">
            <a href="/" 
            class="menu-navbar flex gap-x-3 items-center pl-4 py-3 text-white text-opacity-60 hover:text-opacity-100 mr-4 {{$title == 'dashboard'? "rounded-r-full bg-black bg-opacity-20":""}}">
                <i class="{{$title === 'dashboard'? 'fa-solid text-[#DDA842]':'fa'}} fa-gauge"></i>
                <span class="text-sm leading-none {{$title=='dashboard'? "text-white":""}} hidden-when-shrink">Dashboard</span>
            </a>
            <a href="/prodi" 
            class="menu-navbar flex gap-x-3 items-center pl-4 py-3 text-white text-opacity-60 hover:text-opacity-100 mr-4 {{$title == 'prodi'? "rounded-r-full bg-black bg-opacity-20":""}}">
                <i class="{{$title === 'prodi'? 'fa-solid text-[#DDA842]':'fa-regular'}} fa-building"></i>
                <span class="text-sm leading-none {{$title=='prodi'? "text-white":""}} hidden-when-shrink">Prodi</span>
            </a>
            <a href="/search" 
            class="menu-navbar flex gap-x-3 items-center pl-4 py-3 text-white text-opacity-60 hover:text-opacity-100 mr-4 {{$title == 'search'? "rounded-r-full bg-black bg-opacity-20":""}}">
                <i class="{{$title === 'search'? 'text-[#DDA842]':''}} fa-solid fa-magnifying-glass"></i>
                <span class="text-sm leading-none {{$title=='search'? "text-white":""}} hidden-when-shrink">Search</span>
            </a>
        </div>
    </div>
</div>
<div class="h-screen duration-500" style="width:230px" id="navbar-back"></div>
<script>
    let isOpen = true
    const btnSlide = document.getElementById("btn-slide")
    const navbar = document.getElementById("navbar")
    const navbarBack = document.getElementById("navbar-back")
    const navbarLogo = document.getElementById("navbar-logo")
    const hiddenWhenShirnk = Array.from(document.getElementsByClassName("hidden-when-shrink"))
    const menuNavbar = Array.from(document.getElementsByClassName("menu-navbar"))
    const iconSlide = document.getElementById('icon-slide')

    btnSlide.addEventListener("click",()=>{
        if(isOpen){
            iconSlide.classList.remove("fa-chevron-left");
            iconSlide.classList.add("fa-bars");
            btnSlide.style.left = "22px"
            navbar.style.width = "64px"
            navbarBack.style.width = "64px"
            navbarLogo.style.left = "80px"
            hiddenWhenShirnk.forEach(element => {
                element.style.display = "none"
            });
            menuNavbar.forEach(element=>{
                element.style.paddingRight = "16px"
                element.style.marginRight = "0px"
            })
            isOpen = false
        }else{
            iconSlide.classList.add("fa-chevron-left");
            iconSlide.classList.remove("fa-bars");
            btnSlide.style.left = "196px"
            navbar.style.width = "230px"
            navbarBack.style.width = "230px"
            navbarLogo.style.left = "16px"
            setTimeout(() => {
               hiddenWhenShirnk.forEach(element => {
                    element.style.display = "block"
                }); 
            }, 500);
            menuNavbar.forEach(element=>{
                element.style.marginRight = "16px"
                element.style.paddingRight = "0px"
            })
            isOpen = true
        }
    })
</script>