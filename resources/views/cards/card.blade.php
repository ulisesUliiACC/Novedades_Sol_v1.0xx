<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Demostracion de los  productos') }}
        </h2>
        <div class="py-12">
            <div class="max-w-7 x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                    <!-- diseño de la card -->
                    <!-- component -->
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

<!-- ====== Cards Section Start -->
<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-[#F3F4F6]">
   <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full md:w-1/2 xl:w-1/3 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10">
               <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToqmL2znb3IPdtfN1_EoBQCwEkt4Tao0FFFQ&usqp=CAU"
                  alt="image"
                  
                  class="w-full"
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                  <h3>
                     <a
                        href="https://www.youtube.com/watch?v=u_M73mwFmEs"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                     collar de mujer con foma de corazon
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-7">
                     collar de color negro para el cuello  estilo gotica
                  </p>
                  <a
                     href="https://www.youtube.com/watch?v=u_M73mwFmEs"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 xl:w-1/3 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10">
               <img
                  src="https://studiosol-a.akamaihd.net/uploadfile/letras/albuns/e/2/e/e/344661397157008.jpg"
                  alt="image"
                  class="w-full"
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                        How the neighbourhood
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-7">
                    album de the neighbourhood
                    How
                  <a
                     href="https://www.youtube.com/watch?v=2jgQJKEZrK0&list=RDMM&index=2"
                     class="    
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 xl:w-1/3 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10">
               <img
                  src="data:image/jpeg;base64,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"
                  alt="image"
                  class="w-full"
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                     Lucy de desencanto
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-7">
                     personaje de desecanto lucy  de des Los productores ejecutivos son Josh Weinstein y el propio Groening.
                  </p>
                  <a
                     href="https://www.facebook.com/"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Cards Section End -->



                    <!-- fin del diseñode de la card -->


                
                <!-- component -->
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

<!-- ====== Cards Section Start -->
<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-[#F3F4F6]">
   <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full md:w-1/2 xl:w-1/3 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10">
               <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReeQBGJRcSdXJL6ondHHEWf9zJwomjVy8Y1so8zVGYwfDuX9ifrxtO1MnqbYb4UG0ZbYE&usqp=CAU"
                  alt="image"
                  class="w-full"
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                     50+ Best creative website themes & templates
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-7">
                     Lorem ipsum dolor sit amet pretium consectetur adipiscing
                     elit. Lorem consectetur adipiscing elit.
                  </p>
                  <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 xl:w-1/3 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10">
               <img
                  src="https://eitmedia.mx/media/k2/items/cache/2fe1cd18ab2be51ed773f4f722600b6b_XL.jpg"
                  alt="image"
                  class="w-full"
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                     The ultimate UX and UI guide to card design
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-7">
                     Lorem ipsum dolor sit amet pretium consectetur adipiscing
                     elit. Lorem consectetur adipiscing elit.
                  </p>
                  <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 xl:w-1/3 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10">
               <img
                  src="https://http2.mlstatic.com/D_NQ_NP_956579-MLM32087677562_092019-W.jpg"
                  alt="image"
                  class="w-full"
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                     Creative Card Component designs graphic elements
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-7">
                     Lorem ipsum dolor sit amet pretium consectetur adipiscing
                     elit. Lorem consectetur adipiscing elit.
                  </p>
                  <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a>
               </div>
            </div>
            
         </div>
      </div>
   </div>
   
</section>
<!-- ====== Cards Section End -->
            </div>
            
        </div>
    </x-slot>
</x-app-layout>

