
<style>
.background{
   
   border: 1px solid rgba(10, 10, 10, 0.5);
  backdrop-filter: blur(10px,10px,10px);
  -webkit-backdrop-filter: blur(60px);
  background: transparent;

    background-size: cover;
}

</style>

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg background">
        {{ $slot }}
    </div>
</div>
