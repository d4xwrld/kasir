<div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full grid grid-rows-card card-container gap-4 px-2 py-2">
    <div class="flex flex-col space-y-1.5 p-4">
      <h3 class="text-2xl font-semibold leading-none tracking-tight">
        $BookTitle
      </h3>
    </div>
    <div class="p-4 pt-0 flex flex-col justify-center items-center space-y-2">
      <div class="relative mb-auto w-full">
        <img
          src="https://via.placeholder.com/200"
          alt="403 Forbidden Illustration"
          class="mx-auto mb-4"
        />
      </div>
    </div>
    <x-author-layout />
    <div class="items-center pt-0 flex justify-between gap-2">
      <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
        Rating
      </button>
      <Button class=" rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground px-6 py-2">Baca</Button>
    </div>
  </div>