<section class="grow min-h-[700px] h-auto flex flex-row justify-center items-center">
  <div class="flex flex-col">
    <div class="font-bold text-4xl text-center lg:text-start p-4 lg:pl-8">The Insurance Savings You Expect</div>
    <div class="flex flex-row justify-center items-center p-4 h-min">

      <div class="flex flex-col h-full items-center overflow-hidden">

        <div class=" h-6/12 text-center">
          Protect more of what you love
        </div>

        <div class="p-3 h-full">
          <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 h-full">

            {{-- <div class="flex flex-col rounded-3xl bg-white shadow-lg dark:bg-slate-50 text-center w-40 h-40 hover:scale-105 hover:border-2 hover:border-foreground duration-300 cursor-pointer">
              <a href="#!" data-twe-ripple-init data-twe-ripple-color="light">
                <img class="rounded-t-3xl h-28" src="https://images.pexels.com/photos/35967/mini-cooper-auto-model-vehicle.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" />

              </a>
              <div class="grow border flex justify-center items-center">
                <h5 class=" text-sm text-neutral-800 dark:text-black font-semibold">
                  Motorcycle
                </h5>
              </div>
            </div> --}}
            @foreach ( $services as $service )
              <div class="flex flex-col rounded-3xl bg-white shadow-lg dark:bg-slate-50 text-center w-40 h-40 hover:scale-105 hover:border-2 hover:border-foreground duration-300 cursor-pointer">
                <div class="w-full h-28 flex justify-center items-center p-2 bg-primary rounded-t-3xl">
                  <i class="{{$service->icon}} text-[50px] text-white"></i>
                </div>
                <div class="grow flex justify-center items-center">
                  <h5 class=" text-sm text-neutral-800 dark:text-black font-semibold">
                    {{$service->name}}
                  </h5>
                </div>
              </div>
            @endforeach

          </div>
        </div>
      </div>
      <div class="hidden lg:flex pl-20 justify-center">
        <div class="flex justify-center items-center h-96 w-96 rounded-full bg-gray-200 overflow-hidden shadow-2xl border hover:scale-105 duration-500">
          <img src="{{asset('/img/Family Portrait.webp')}}" alt="Family Vectors by Vecteezy" class="h-full w-full object-cover scale-125 hover:scale-150 duration-500" />
        </div>
      </div>

    </div>
  </div>
</section>
